<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product {
    public $id;
    public $name;
    public $price;

    public function __construct($id,$name,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

class ProductsController extends Controller
{
    public function index(){
        $apple = new Product(1,"Apple","£1.5");
        $orange = new Product(2,"Orange","£1.8");
        $grape = new Product(3,"Grape","£3.5");

        $products = [
            $apple,$orange,$grape
        ];
        return view('product',[
            "products" => $products
        ]);
    }
}
