<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    use HasFactory;

    public $htItem = [];
    public $iTotalItems = 0;
    public $dTotalPrice = 0;

    public function __construct(Cart $cart = null){
        if ($cart != null) {
            $this->htItem = $cart->htItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        } else {
            $this->htItem = [];
        }
    }

    public function Add(Product $product){
        if (array_key_exists($product->id, $this->htItem)) {
            $this->htItem[$product->id]['quantity'] += 1;
        } else {
            $this->htItem[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'imgUrl' => $product->imgUrl,
                'quantity' => 1,
            ];
        }
        $this->iTotalItems += 1;
        $this->dTotalPrice += $this->htItem[$product->id]["price"];
    }

    public function Remove(Product $product){
        if (array_key_exists($product->id, $this->htItem) && $this->htItem[$product->id]['quantity'] > 0) {
            $this->htItem[$product->id]["quantity"] -= 1;
            $this->iTotalItems -= 1;
            $this->dTotalPrice -= $this->htItem[$product->id]["price"];
        }
        // para eliminar d ecarrito con cantidad 0
        // if ($this->htItem[$product->id]["quantity"] == 0) unset($this->htItem[$product->id]);
    }

    public function RemoveAll(Product $product){
        if(array_key_exists($product->id, $this->htItem) && $this->htItem[$product->id]['quantity']>0){
            $this->iTotalItems  = 0;
            $this->dTotalPrice = 0;
            unset($this->htItem[$product->id]);
        }
    }
    public function reset(){
        // Reiniciar todas las variables a 0
        $this->htItem = [];
        $this->iTotalItems = 0;
        $this->dTotalPrice = 0;
    }
}
