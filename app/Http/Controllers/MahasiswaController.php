<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
    $mahasiswa = Mahasiswa::all();
    return view('pages.mahasiswa.index', [
        'mahasiswa'=> $mahasiswa]);
    }
    public function create()
    {

        return view('pages.mahasiswa.create');
    }
    public function store(Request $request)
    {


        try {
            Mahasiswa::create([
                'nama'=>$request['nama'],
                'npm'=>$request['npm'],
                'no_hp'=>$request['no_hp'],
                'mata_kuliah'=>$request['mata_kuliah'],
                'jam'=>$request['jam'],
                'saran_komentar'=>$request['saran_komentar'],
            ]);
    
            return redirect()->route('mahasiswa.index')->with('success', 'Create mahasiswa successfully');
        } catch (\Exception $e) {
            return redirect()->route('mahasiswa.create')->with('error', 'NPM Tidak Boleh Sama atau Kosong');
        }
    }
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('pages.mahasiswa.edit')->with('mahasiswa', $mahasiswa);
    }
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        {
            $validatedData = $request->validate([
                'npm' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('mahasiswas')->ignore($mahasiswa->id),
                ],
                'nama' => [
                    'required',
                    'string',
                    'max:255',
                    
                ],
                'no_hp' => [
                    'required',
                    'string',
                    'max:255',
                    
                ],
                'mata_kuliah' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'jam' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'saran_komentar' => [
                    'required',
                    'string',
                    'max:255',
                    
                ],
            ]);
    
            $mahasiswa->update($validatedData);
    
            return redirect()->route('mahasiswa.index')->with('success', 'Update mahasiswa successfully');
        } 
        
    }

    public function destroy(Mahasiswa $mahasiswa) {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success','Delete mahasiswa succesfully');
    }

}

