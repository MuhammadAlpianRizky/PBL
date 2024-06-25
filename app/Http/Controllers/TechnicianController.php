<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan data user yang sedang terautentikasi
        $user = Auth::user();

        // Menampilkan hanya teknisi yang terkait dengan user yang terautentikasi
        $technicians = Technician::where('user_id', $user->id)
            ->with(['user', 'order']) // Menampilkan relasi 'user' dan 'order'
            ->orderBy('id','desc')
            ->paginate(10); // Menampilkan 10 teknisi per halaman

        return view('pages.teknisi.index', compact('technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Technician $technician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technician $technician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technician $technician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technician $technician)
    {
        //
    }
public function takeOrder(Request $request)
{
    $orderId = $request->input('order_id');

    // Insert a new row into the technicians table
    $technician = new Technician();
    $technician->order_id = $orderId;
    $technician->status = 'Progress';
    $technician->save();

    // The trigger will automatically update the order status in the orders table
    return response()->json(['message' => 'Order taken by technician successfully.']);
}
}

