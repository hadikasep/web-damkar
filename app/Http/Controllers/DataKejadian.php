<?php

namespace App\Http\Controllers;

use App\Models\DataKejadian as ModelsDataKejadian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataKejadian extends Controller
{
    function index()
    {
        $data = ModelsDataKejadian::all();
        return view('data_kejadian.index', ['data' => $data]);
    }
    function tambah()
    {
        return view('data_kejadian.tambah');
    }
    function edit($id)
    {
        $data = ModelsDataKejadian::find($id);

        return view('data_kejadian.edit', ['data' => $data]);
    }
    function hapus(Request $request)
    {
        ModelsDataKejadian::where('id', $request->id)->delete();

        Session::flash('success', 'Berhasil Hapus Data');

        return redirect('/datakejadian');
    }
    // new
    function create(Request $request)
    {
        $request->validate([
            'nama_kejadian' => 'required',
            'tanggal_kejadian' => 'required|date',
            'alamat_kejadian' => 'required',
            'deskripsi_kejadian' => 'required',
       
        ]);

        ModelsDataKejadian::insert([
            'nama_kejadian' => $request->nama_kejadian,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'alamat_kejadian' => $request->alamat_kejadian,
            'deskripsi_kejadian' => $request->deskripsi_kejadian,
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/datakejadian')->with('success', 'Berhasil Menambahkan Data');
    }
    function change(Request $request)
    {
        $request->validate([
            'nama_kejadian' => 'required',
            'tanggal_kejadian' => 'required|date',
            'alamat_kejadian' => 'required',
            'deskripsi_kejadian' => 'required',
       
        ]);

        $datakejadian = ModelsDataKejadian::find($request->id);

        $datakejadian->nama_kejadian = $request->nama_kejadian;
        $datakejadian->tanggal_kejadian = $request->tanggal_kejadian;
        $datakejadian->alamat_kejadian = $request->alamat_kejadian;
        $datakejadian->deskripsi_kejadian = $request->deskripsi_kejadian;
        $datakejadian->save();
        

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/datakejadian');
    }
}
