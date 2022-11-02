<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profil::get();
        return view('index',compact(['data']));
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
        $insert=Profil::insert([
            'nama' => $request->form_nama,
            'umur' => $request->form_umur
        ]);

        if($insert){
            return "Berjaya";
        }else {
            return "Tidak Berjaya";
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Profil::where('id',$id)->first();

        return view('edit', compact(['item']));
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
        $update = Profil::where('id', $id)
        ->update([
            'nama' => $request->form_nama,
            'umur' => $request->form_umur
        ]);

        if($update){
            return "Kemaskini berjaya";
            
        }else{
            return "Kemaskini tidak berjaya";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Profil::where('id',$id)->delete();

        if($delete){
            return"ID ($id) Berjaya dihapuskan";

        }else{
            return"ID ($id) Tidak Berjaya dihapuskan";
        }

    }
}
