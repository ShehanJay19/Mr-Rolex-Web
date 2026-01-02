@extends('layouts.app')

@section('content')
<section class="max-w-[900px] mx-auto px-6 py-16">
    <h1 class="text-4xl font-extrabold mb-10">Your Cart</h1>
    @php
        $cart = [
            [
                'image' => '/images/product1.jpg',
                'name' => 'Classic T-Shirt',
                'price' => 99,
                'quantity' => 2
            ],
            [
                'image' => '/images/product4.jpg',
                'name' => 'Summer Shorts',
                'price' => 59,
                'quantity' => 1
            ],
        ];
        $subtotal = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
    @endphp
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="p-4">Product</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Quantity</th>
                    <th class="p-4">Total</th>
                    <th class="p-4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="p-4 flex items-center gap-4">
                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover rounded border">
                        <span class="font-semibold">{{ $item['name'] }}</span>
                    </td>
                    <td class="p-4">${{ $item['price'] }}</td>
                    <td class="p-4">
                        <input type="number" min="1" value="{{ $item['quantity'] }}" class="w-16 border rounded px-2 py-1 text-center" readonly />
                    </td>
                    <td class="p-4 font-bold">${{ $item['price'] * $item['quantity'] }}</td>
                    <td class="p-4">
                        <button class="remove-from-cart text-red-500 hover:underline text-sm" data-product-name="{{ $item['name'] }}">Remove</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col md:flex-row justify-between items-center mt-8 gap-6">
        <div class="text-lg text-gray-600">
            <span>Subtotal:</span>
            <span class="font-bold text-2xl text-black ml-2">${{ $subtotal }}</span>
        </div>
        <a href="/checkout" class="px-8 py-4 bg-black text-white rounded-full text-lg font-bold hover:bg-[#333] transition w-full md:w-auto text-center">Proceed to Checkout</a>
    </div>
</section>
@endsection
