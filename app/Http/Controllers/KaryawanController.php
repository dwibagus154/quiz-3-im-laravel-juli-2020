<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyeks = DB::table('proyek_tabel')->get();
        return view('proyek', compact('proyeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => "required",
            'tanggal_deadline' => "required",
            'status' => 'required'
        ]);
        $query = DB::table('proyek_tabel')->insert([
            'nama' => $request["nama"],
            'deskripsi' => $request["deskrips"],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_deadline' => $request["tanggal_deadline"],
            'status' => $request["status"]
        ]);
        return redirect('/proyek')->with('status', 'Data updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyeks = DB::table('proyek_tabel')->where('id', $id)->first();
        return view("proyek.create", compact('proyeks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('proyek_tabel')->where('id', $id)->delete();
        return redirect('/proyek')->with('status', 'Data deleted!');
    }
}
