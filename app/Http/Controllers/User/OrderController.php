<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkout()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $cart = $user->cart;

        if (!$cart || $cart->items()->count() === 0) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty');
        }

        $items = $cart->items()->with('product')->get();
        $total = $items->sum(fn($item) => $item->product->price * $item->quantity);

        return view('pages.checkout', compact('items', 'total'));
    }

    public function store(StoreOrderRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $cart = $user->cart;

        if (!$cart || $cart->items()->count() === 0) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty');
        }

        $validated = $request->validated();

        $order = Order::create([
            'user_id' => $user->id,
            'status' => 'pending',
            'total_amount' => $validated['total_amount'],
            'shipping_address' => $validated['shipping_address'],
            'billing_address' => $validated['billing_address'] ?? $validated['shipping_address'],
            'phone' => $validated['phone'],
        ]);

        foreach ($cart->items()->with('product')->get() as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
                'size' => $item->size,
            ]);

            // reduce stock
            $item->product->decrement('stock', $item->quantity);
        }

        // clear cart
        $cart->items()->delete();

        return redirect()->route('orders.show', $order)->with('success', 'Order placed successfully');
    }

    public function myOrders()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $orders = $user->orders()->latest()->paginate(10);
        return view('pages.orders', compact('orders'));
    }

    public function show(Order $order)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if ($order->user_id !== $user->id && !$user->isAdmin()) {
            abort(403, 'Unauthorized');
        }

        return view('pages.order-detail', compact('order'));
    }
}
