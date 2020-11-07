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
}
