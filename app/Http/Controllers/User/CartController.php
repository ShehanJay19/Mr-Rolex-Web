<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cart = auth()->user()->getOrCreateCart();
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

        $cart = auth()->user()->getOrCreateCart();
        $product = auth()->user()->products()->findOrFail($request->product_id);

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
        auth()->user()->cart->items()->findOrFail($itemId)->delete();
        return back()->with('success', 'Removed from cart');
    }

    public function update(Request $request, $itemId)
    {
        $request->validate(['quantity' => 'required|integer|min:1']);
        auth()->user()->cart->items()->findOrFail($itemId)
            ->update(['quantity' => $request->quantity]);
        return back()->with('success', 'Updated!');
    }
}
