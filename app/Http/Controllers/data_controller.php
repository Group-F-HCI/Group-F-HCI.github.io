<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\surverid_db;
use App\Models\User;

class data_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $data = surverid_db::all();
        $data = surverid_db::orderBy('created_at', 'asc')->paginate(15);
        return view('tampilan.HomeAfterLogin', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index_collection()
    {   
        // $data = surverid_db::all()->where('username','Gupron');
        $data = surverid_db::orderBy('created_at', 'asc')->where('username',auth()->user()->name)->paginate(15);
        return view('tampilan.Collections', compact('data'));
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
            'pranala' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image||max:1000'
        ]);
        
        $data = new surverid_db();
        $foruser = user::find(auth()->User()->id);
        $data->title = $request->input('judul');
        $data->link = $request->input('pranala');
        $data->description = $request->input('deskripsi');
        
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
            $path = $request->file('gambar')->storeAs('public/post_images', $FilenameToStorage);
        }
        else{
            $FilenameToStorage = 'Picture01.jpg';
        }

        $foruser->sp += 1;
        $data->username = auth()->user()->name;
        $data->fullname = auth()->user()->fullname;
        $data->email = auth()->user()->email;
        $data->image = $FilenameToStorage;
        $data->save();
        $foruser->save();

        return redirect('/index')->with('success', 'YOKATTTA');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = surverid_db::find($id);
        return view('tampilan.survey_check', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = surverid_db::find($id);
        return view('tampilan.Edit_Link', compact('data'));
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
            'judul' => 'required', 
            'pranala' => 'required',
            'deskripsi' => 'required'
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
            $path = $request->file('gambar')->storeAs('public/post_images', $FilenameToStorage);
        }

        $data = surverid_db::find($id);
        $data->title = $request->input('judul');
        $data->link = $request->input('pranala');
        $data->description = $request->input('deskripsi');
        if($request->hasFile('gambar')){
            Storage::delete('public/storage/image/post_images'.$data->image);
            $data->image = $FilenameToStorage;
        }
        $data->save();

        return redirect('/index')->with('success', 'YOKATTTA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = surverid_db::find($id);
        if($data->image != 'Picture01.jpg'){
            //Delete Image
            Storage::delete('public/storage/cover_images/'.$data->cover_images);
        }
        $data->delete();
        return redirect('/index')->with('success', 'YOKATTTA');
    }
}
