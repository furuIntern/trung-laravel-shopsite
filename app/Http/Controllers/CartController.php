<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function add(Request $request,$id){
        $good = Goods::find($id);
        $added = false;
        if($request->session()->exists('items')){
            $items = $request->session()->pull('items');
            foreach ($items as $key=>$item){
                if($item['id'] == $good->id){
                    $items[$key]['count']++;
                    $added = true;
                }
            }
            if(!$added){
                $items[] = ['id'=>$good->id,'name'=>$good->name,'cost'=>$good->cost,'count'=>1]; 
            }
        } else {
            $items[] = ['id'=>$good->id,'name'=>$good->name,'cost'=>$good->cost,'count'=>1];
        };
        $request->session()->put('items',$items);
        return redirect()->route('home');
    }
    function remove(request $request,$key){
        $items = $request->session()->pull('items');
        unset($items[$key]);
        $request->session()->put('items',$items);
        return redirect()->route('home');
    }
    function payment(request $request){
        if($request->session()->has('items')){
            $items = $request->session()->get('items');
            $total = 0;
            foreach ($items as $item){
                $total = $total + $item['cost']*$item['count'];
            }
        } else {
            return redirect()->route('home');
        }
        if($user = $request->user()){
            return view('payment',['user'=>$user,'items'=>$items,'total'=>$total]);
        }
    }
}
