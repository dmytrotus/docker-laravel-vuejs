<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

    	$products = Product::paginate(25);

    	return view('products-list')
    	->with(compact('products'));
    }

    public function indexjson(){

    	$products = Product::paginate(25);

    	foreach ($products as $product) {
    		$product->price = $product->price;
    	}

    	return response()->json([
    		'success' => true,
    		'data' => $products
    	], 200);
    }
}
