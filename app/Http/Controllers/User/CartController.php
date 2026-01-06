<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $cart = $user->getOrCreateCart();
        $items = $cart->items()->with('product')->get();

        $total = $items->sum(fn($item) => $item->product->price * $item->quantity);

        return view('pages.cart', compact('items', 'total'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'size' => 'nullable|string',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $cart = $user->getOrCreateCart();
        $product = Product::findOrFail($request->product_id);

        $cartItem = $cart->items()
            ->where('product_id', $product->id)
            ->where('size', $request->size)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity', $request->quantity);
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'size' => $request->size,
            ]);
        }

        return back()->with('success', 'Added to cart!');
    }

    public function remove($itemId)
    {
        Auth::user()?->cart?->items()->findOrFail($itemId)?->delete();
        return back()->with('success', 'Removed from cart');
    }

    public function update(Request $request, $itemId)
    {
        $request->validate(['quantity' => 'required|integer|min:1']);
        Auth::user()?->cart?->items()->findOrFail($itemId)
            ?->update(['quantity' => $request->quantity]);
        return back()->with('success', 'Updated!');
    }
}
