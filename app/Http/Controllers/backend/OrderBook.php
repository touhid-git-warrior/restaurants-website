<?php

namespace App\Http\Controllers\backend;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderBook extends Controller
{
    public function OrderTake(Request $request){
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'order_date' => 'required',
        'time' => 'required',
        'people' => 'required',
        'note' => 'required',
      ]);
        Order::insert([

            'name'=>$request->name,
            'email'=>$request->email,
            'date'=>$request->order_date,
            'time'=>$request->time,
            'people'=>$request->people,
            'note'=>$request->note,
        ]);

        $notification = [
            'message' => 'Your Order Sussfylly Send',
            'type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
