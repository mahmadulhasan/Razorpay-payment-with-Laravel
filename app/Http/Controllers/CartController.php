<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    //
    function index(){
        $datas = Cart::all();
        return view('cart', ['datas'=>$datas]);
    }
}
