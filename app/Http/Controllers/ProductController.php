<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    static function welcome() {
        $aProduct_offering  =Product::Offerings();
        $aProduct_new  =Product::NewProducts();
        return view('app',
        compact('aProduct_offering', 'aProduct_new'));
    }
    
    static function show(Product $product) {
        return view('product.show',
        compact('product'));
    }
    
    public function addToCart(Product $product, Request $request){
        if ($request->session()->has('cart')) 
        $cart = $request->session()->get('cart');
        else 
        $cart = new Cart();

        $cart->Add($product);
        $request->session()->put('cart', $cart);
        //dd($cart);  
        return redirect()->route('product.show',['product'=>$product])->with('succes','El producto ha sido añadido al carro.');
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('product.show',['product'=>$product])->with('success', 'Producto actualizado correctamente');
    }
    static function edit(Product $product){
        return view('product.edit',
        compact('product'));
    }

}
