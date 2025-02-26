<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodbeverage() {
        return view('products.foodbeverage');
    }
    public function beautyhealth() {
        return view('products.beautyhealth');
    }
    public function homecare() {
        return view('products.homecare');
    }
    public function babykid() {
        return view('products.babykid');
    }
}
