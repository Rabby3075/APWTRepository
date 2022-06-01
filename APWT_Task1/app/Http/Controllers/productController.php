<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function productList(){
        $product = array();

        for($i=0; $i<10; $i++){
            $product = array(
                "name" => "Product " . ($i+1),
                "id" =>"00" . ($i+1),
                "price"=> rand(1000,2000),
                "service_charge"=>100,
                "delivery_charge"=>60

            );
            $products[] = (object)$product;
        }

        return view('product')->with('products', $products);
    }
}
