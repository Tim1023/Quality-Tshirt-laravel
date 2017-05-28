<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SaveOrderRequest;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
 	public function index()
    {
    	$orders = Order::orderBy('id', 'desc')->paginate(8);  //created_at
    	//dd($orders);
    	return view('admin.order.index', compact('orders'));
    }
    public function getItems(Request $request)
    {
    	 $items = OrderItem::with('product')->where('order_id', $request->get('order_id'))->get();
    	 return json_encode($items);
    }
    public function destroy($id)
    {
    	$order 	  =  Order::findOrFail(id);
    	$deleted  =  $order->delete();
    	$message  =  $deleted ? "Order deleted" : "Order delete failed";
    	return redirect()->route('admin.order.index')->with('message', $message);
    }
    public function update(SaveOrderRequest $request, Order $order)
    {
        
        $order->ship = $request->has('ship') ? 1 : 0;

        $updated = $order->save();

        $message = $updated ? "Order updated" : "Order update failed";

        return redirect()->route('admin.order.index')->with('message', $message);
    }
}
