<?php

namespace App\Http\Controllers;
use App\Goods;
use Illuminate\Http\Request;

class DisplayGoodsController extends Controller
{
    function home(Request $request){
        $cart = $request->session()->get('items','empty');
        
        return view('home',['goods' => Goods::paginate(9),'items' => $cart]);
    }
}
