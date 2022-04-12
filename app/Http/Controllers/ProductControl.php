<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductControl extends Controller
{
    function index(){
        $data=Products::all();
        return view('product',['products'=>$data]);
    }
}
