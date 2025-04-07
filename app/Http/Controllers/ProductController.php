<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

use function Termwind\render;

class ProductController extends Controller
{
    public function index()
    {
        $datas = Product::all(); // Changed variable name to conventional $products
        return view('product', ['datas' => $datas]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_description' => 'nullable|string',
            'product_image' => 'nullable|string',
        ]);

      
        $cart = new Cart();
        $cart->product_id = $request->input('product_id');
        $cart->product_name = $request->input('product_name');
        $cart->product_price = $request->input('product_price');
        $cart->product_description = $request->input('product_description');
        $cart->product_image = $request->input('product_image');
        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
}
