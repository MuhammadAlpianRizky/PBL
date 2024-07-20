<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Technician;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query();
    
        if ($request->has('name') && !empty($request->name)) {
            $name = ucwords(strtolower($request->name));
            $query->where('nama', 'like', '%' . $name . '%');
        }
        
    
        if ($request->has('year') && !empty($request->year)) {
            $query->whereYear('tanggal', $request->year);
        }
    
        if ($request->has('month') && !empty($request->month)) {
            $query->whereMonth('tanggal', $request->month);
        }
    
        if ($request->has('day') && !empty($request->day)) {
            $query->whereDay('tanggal', $request->day);
        }
    $orders = Order::orderBy('created_at', 'desc')->paginate(10);
    return view('pages.orders.index', ['orders' => $orders]);
    }

    public function __construct()
    {
        $this->middleware('auth')->only(['edit', 'update', 'destroy']);
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

    public function ambil(Order $order)
{
    // Check if the user is authenticated and has the 'user' role
    if (Auth::check() && Auth::user()->hasRole('user')) {
        // Check if the user already has an active order assigned
        $existingOrder = Technician::where('user_id', Auth::user()->id)
                                    ->whereHas('order', function($query) {
                                        $query->where('status', 'assign');
                                    })->first();

        if ($existingOrder) {
            return redirect()->back()->with('error', 'Orderan Hanya bisa diambil 1.');
        }

        // Ensure the order has not been taken yet
        if ($order->status !== 'assign') {
            // Save new technician data
            $technician = new Technician();
            $technician->user_id = Auth::user()->id; // Get the ID of the logged-in user
            $technician->order_id = $order->id;
            $technician->save();

            // Update order status
            $order->status = 'assign';
            $order->save();

            return redirect()->back()->with('success', 'Orderan Berhasil di ambil.');
        } else {
            return redirect()->back()->with('error', 'Order Sudah di Ambil.');
        }
    } else {
        return redirect()->back()->with('error', 'Unable to take this order.');
    }
}
public function updateStatusToSelesai($id)
    {
        $order = Order::findOrFail($id);
        
        // Ubah status order menjadi 'selesai'
        $order->status = 'selesai';
        $order->save();

        // Redirect atau return response sesuai kebutuhan
        return redirect()->back()->with('success', 'Pelayanan Service AC Selesai');
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

