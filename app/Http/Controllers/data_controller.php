<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\surverid_db;

class data_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = surverid_db::all();
        return view('tampilan.HomeAfterLogin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('tampilan.Create_Link');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required', 
            'link' => 'required',
            'deskripsi' => 'required'
        ]);
        
        $data = new surverid_db();
        $data->id = 200;
        $data->title = $request->input('judul');
        $data->link = $request->input('pranala');
        $data->description = $request->input('deskripsi');
        
        if($request->hasFile('gambar')){
            $data->image = '/images/Quote.jpg'; 
        }
        else{
            $data->image = '/images/NonPicture.jpg';
        }

        $data->username = 'Gupron';
        $data->fullname = 'Shien Valuneyard';
        $data->email = 'a@yahoo.com';
        $data->save();

        return redirect('/')->with('success', 'YOKATTTA');
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
        //
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
        //
    }
}
