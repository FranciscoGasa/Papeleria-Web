<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    static function show(Request $request) {
        $cart = new Cart($request->session()->get('cart'));
        return view('cart.show',
        compact('cart'));
    }
    
    static function operate(String $sOperation, Product $product, Request $request) {
        if ($request->session()->has('cart')) 
        $cart = $request->session()->get('cart');
        else 
        $cart = new Cart();
        switch($sOperation){
            case "add":
                $cart->Add($product);
                break;
            case "remove":
                $cart->Remove($product);
                break;
            case "removeAll":
                $cart->RemoveAll($product);
                break;
            case "reset":
                    $cart->reset($product);
                    break;
        }
        return view('cart.show',
        compact('cart'));
    }

    static function add(Request $request, Product $product){
        $cart->Add($product);
        $request->session()->put('cart', $cart);
        return view('cart.show',
        compact('cart'));
    }

    static function remove(Request $request, Product $product) {
        $cart->Remove($product);
        $request->session()->put('cart', $cart);
        return view('cart.show',
        compact('cart'));
    }

    static function removeAll(Request $request, Product $product) {
        $cart->RemoveAll($product);
        $request->session()->put('cart', $cart);
        return view('cart.show',
        compact('cart'));
    }
    public function reset(Product $product){
        $this->htItem = [];
        $this->iTotalItems = 0;
        $this->dTotalPrice = 0;
    }

    
}
