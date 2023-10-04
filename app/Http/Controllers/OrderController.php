<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('order.index' , compact('orders'));
       }



   public function buy(){
    $products = Product::all();
    return view('order.buy' , compact('products'));
   }

   public function store(Request $request){
    // dd($request->all());
    $request->validate([
        'p_ids' => ['array'],
        'p_ids.*' => ['numeric' , 'exists:products,id'],
        'quantity' => ['array'],
        'quantity.*' => ['numeric'],
    ]);

    $p_ids = $request->p_ids;
    $quantity = $request->quantity;

    $order = new Order();
    $order->user_id = Auth::user()->id;
    $order->total_price = 0;
    $order->save();


        $total_price = 0;
    for($i=0 ; $i<count($p_ids); $i++){
        $product = Product::find($p_ids[$i]);
        $order_itme = new OrderItem();
        $order_itme->order_id = $order->id;
        $order_itme->product_id = $p_ids[$i];
        $order_itme->quantity = $quantity[$i];
        $order_itme->price_per_itme = $product->price;
        $order_itme->price = $product->price * $quantity[$i];
        $total_price = $total_price + $order_itme->price;
        $order_itme->save();
    }

        $order->total_price = $total_price;
        $order->save();

    return redirect()->route('order.index');
        
   }




}
