<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    $orders = Order::paginate(10);
    return view('pages.orders.index', ['orders' => $orders]);
    }
    public function create()
    {
        return view('pages.orders.create');
    }
    /**
     * Store a newly created resource in storage.
     */
// public function store(StoreScheduleRequest $request)
//     {
//         Schedule::create([
//             'subject_id'=>$request['subject_id'],
//             'hari' => $request['hari'],
//             'jam_mulai' => $request['jam_mulai'],
//             'jam_selesai' => $request['jam_selesai'],
//             'ruangan' => $request['ruangan'],
//             'kode_absensi' =>$request['kode_absensi'],
//             'tahun_akademik' =>$request['tahun_akademik'],
//             'semester' => $request['semester'],
//             'created_by' => $request['created_by'],
//             'updated_by'=>$request['updated_by'],
//             'deleted_by'=>$request['deleted_by'],
//         ]);

//         return redirect(route('schedule.index'))->with('success', 'Data berhasil disimpan');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function edit(Schedule $schedule)
//     {
//         return view('pages.schedules.edit')->with('schedule', $schedule);
//     }
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(UpdateScheduleRequest $request, Schedule $schedule)
//     {
//         $validate = $request->validated();
//         $schedule->update($validate);
//         return redirect()->route('schedule.index')->with('success', 'Edit Schedule Successfully');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Schedule $schedule)
//     {
//         $schedule->delete();
//         return redirect()->route('schedule.index')->with('success','Delete schedule succesfully');
//     }
}

