<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\Cart;
use App\Models\Product;
use Tests\TestCase;

class CartTest extends TestCase
{
    public static $cart;
    public static function InitializeCart(){
        self::$cart = new Cart();
        self::$cart  = Cart::Add(Product::first());
        self::$cart  = Cart::Add(Product::first());
        self::$cart  = Cart::Add(Product::first());
        self::$cart  = Cart::Add(Product::skip(1)->first());
        self::$cart  = Cart::Add(Product::skip(2)->first());
    }
    /**
     * A basic unit test example.
     */
    public function testConstructor(): void
    {
        self::$cart = new Cart();
       
        $array=[];
        $this->assertEquals($array,self::$cart->htItem);
        $this->assertEquals(0,self::$cart->iTotalItems);
        $this->assertEquals(0,self::$cart->dTotalPrice);
    }
    public function testAdd(): void
    {
        $cart = new Cart();
        $product = Product::first();

        $cart->Add($product);
        $cart->Add($product);
        $cart->Add($product);

        $this->assertEquals(3, $cart->iTotalItems);
        $this->assertEquals(($product->price * 3), $cart->dTotalPrice);
       
    }
    public function testRemove(){
        $cart = new Cart();
        $product = Product::first();

        $cart->Add($product);
        $cart->Add($product);
        $cart->Add($product);

        $cart->Remove($product);
        $this->assertEquals(2, $cart->iTotalItems);
    }
    public function testRemoveAll(){
        $cart = new Cart();
        $product = Product::first();

        $cart->Add($product);
        $cart->Add($product);
        $cart->Add($product);
        
        $cart->RemoveAll($product);
        $this->assertEquals(0, $cart->iTotalItems);
    }
    
}
