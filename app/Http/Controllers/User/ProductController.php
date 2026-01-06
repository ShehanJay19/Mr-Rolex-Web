<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->active()
            ->when($request->query('category_id'), fn ($query, $categoryId) => $query->where('category_id', $categoryId))
            ->when($request->query('q'), fn ($query, $search) => $query->where('name', 'like', "%{$search}%"))
            ->latest()
            ->paginate(12);

        return view('pages.shop', compact('products'));
    }

    public function show(Product $product)
    {
        if (! $product->is_active) {
            abort(404);
        }

        return view('pages.product', compact('product'));
    }
}
