<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function createForm()
    {
        return view('orders');
    }

    // view orders
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.orders', compact('orders'));
    }
    

    // dashboard method
    public function dashboard()
    {
        // $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard');
    }   
    
    public function markAsDone($id)
    {
        $order = Order::findOrFail($id);
        $order->done = true;
        $order->save();
        
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index');
    }

    public function search(Request $request)
    {
        $status = $request->input('status');

        // If the status is provided, filter admin based on it
        if ($status === 'done') {
            $orders = Order::where('done', true)->orderBy('created_at', 'desc')->get();
        } elseif ($status === 'not_done') {
            $orders = Order::where('done', false)->orderBy('created_at', 'desc')->get();
        } else {
            // If status is not provided or invalid, fetch all orders
            $orders = Order::orderBy('created_at', 'desc')->get();
        }

        return view('admin.orders', compact('orders'));
    }

    // store orders

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'budget' => 'required',
            'message' => 'required',
        ]);

        Order::create($validatedData);

        // return redirect()->back()->with('success', 'Order placed successfully!');
        return redirect('/')->with('success', 'Order placed successfully😊');
    }
}
