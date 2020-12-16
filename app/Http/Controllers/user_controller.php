<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('tampilan.Show_Profile', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('tampilan.Edit_Profile', compact('data'));
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
        $this->validate($request, [
            'username' => 'required', 
            'fullname' => 'required'
        ]);

        if($request->hasFile('gambar')){
            //Get Filename with extension
            $filenamewithext = $request->file('gambar')->getClientOriginalName();

            //Get Filename Without extension
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);

            //Get Just Extension
            $extension = $request->file('gambar')->getClientOriginalExtension();

            //Filename to store
            $FilenameToStorage = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('gambar')->storeAs('public/profile_images', $FilenameToStorage);
        }

        $data = User::find($id);
        $data->name = $request->input('username');
        $data->fullname = $request->input('fullname');
        $data->telegram = $request->input('telegram');
        $data->occupation = $request->input('occupation');
        $data->instance = $request->input('instance');
        $data->about_me = $request->input('aboutme');
        if($request->hasFile('gambar')){
            Storage::delete('public/storage/image/profile_images'.$data->image);
            $data->image = $FilenameToStorage;
        }
        $data->save();

        return redirect('/home')->with('success', 'YOKATTTA');
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
