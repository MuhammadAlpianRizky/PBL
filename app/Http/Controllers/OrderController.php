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
    public function index()
    {
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
    // Validasi bahwa pengguna adalah 'user' dan order belum diambil
    if (Auth::check() && Auth::user()->hasRole('user') && $order->status !== 'assign') {
        // Simpan data teknisi baru
        $technician = new Technician();
        $technician->user_id = Auth::user()->id; // Mendapatkan ID pengguna yang sedang login
        $technician->order_id = $order->id;
        $technician->save();

        // Update status pesanan
        $order->status = 'assign';
        $order->save();

        return redirect()->back()->with('success', 'Pesanan telah diambil.');
    } else {
        return redirect()->back()->with('error', 'Tidak dapat mengambil pesanan ini.');
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

