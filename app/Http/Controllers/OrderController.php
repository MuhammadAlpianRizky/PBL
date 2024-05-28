<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    public function index()
    {
    $orders = Order::paginate(2);
    return view('pages.orders.index', ['orders' => $orders]);
    }
    public function create()
    {
        return view('pages.orders.create');
    }
    /**
     * Store a newly created resource in storage.
     */
public function store(StoreOrderRequest $request)
    {
        $validasiData= $request->validate([
            'nama'=>'required|max:50',
            'alamat'=>'required',
            'no_hp'=>'required|numeric|digits_between:10,15',
            'tanggal'=>'required|date'
        ]);
        Order::create(
            $validasiData
        );

        return redirect(route('order.index'))->with('success', 'Pesanan Berhasil');
    }

//     /**
//      * Display the specified resource.
//      */
    public function edit(Order $order)
    {
        return view('pages.orders.edit')->with('order', $order);
    }
    public function show(string $id)
    {
        //
    }

//     /**
//      * Update the specified resource in storage.
//      */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $validasiData= $request->validate([
            'nama'=>'required|max:50',
            'alamat'=>'required',
            'no_hp'=>'required|numeric|digits_between:10,15',
            'tanggal'=>'required|date'
        ]);
        $order->update($validasiData);
    
        return redirect()->route('order.index')->with('success', 'Edit Pesanan Successfully');
    }

//     /**
//      * Remove the specified resource from storage.
//      */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index')->with('success','Delete Pesanan succesfully');
    }
}

