<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\surverid_db;
use App\Models\logging;
use App\Models\User;

class data_controller extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $data = surverid_db::orderBy('created_at', 'asc')->where('user_id',auth()->user()->id)->paginate(15);
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
        $data->user_id = auth()->user()->id;

        if($foruser->fp >= $foruser->sp){
            if($foruser->fp >= 5){
                $foruser->title = 'Filler_V';
            }
            if($foruser->fp >= 10){
                $foruser->title = 'Filler_X';
            }
            if($foruser->fp >= 25){
                $foruser->title = 'Filler_XXV';
            }
            if($foruser->fp >= 50){
                $foruser->title = 'Filler_L';
            }
            if($foruser->fp >= 100){
                $foruser->title = 'Filler_C';
            }
        }
        else{
            if($foruser->sp >= 5){
                $foruser->title = 'Sender_V';
            }
            if($foruser->sp >= 10){
                $foruser->title = 'Sender_X';
            }
            if($foruser->sp >= 25){
                $foruser->title = 'Sender_XXV';
            }
            if($foruser->sp >= 50){
                $foruser->title = 'Sender_L';
            }
            if($foruser->sp >= 100){
                $foruser->title = 'Sender_C';
            }
        }

        $data->save();
        $foruser->save();

        $log = new logging();
        $log->user_id = auth()->user()->id;
        $log->username = auth()->user()->name;
        $log->task = "Share a survey link";
        $log->target_id = 0;
        $log->save();

        return redirect('/home')->with('success', 'YOKATTTA');
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
        $user = user::find($data->user_id);
        return view('tampilan.survey_check', compact('data', 'user'));
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
        

        $log = new logging();
        $log->user_id = auth()->user()->id;
        $log->username = auth()->user()->name;
        $log->task = "Edit a survey link";
        $log->target_id = $data->id;

        $data->save();
        $log->save();

        return redirect('/home')->with('success', 'YOKATTTA');
    }

    public function update_fp(Request $request, $id)
    {   
        $this->validate($request, [
            'plus' => 'required'
        ]);
        
        $info = surverid_db::find($id);

        $data = User::find(auth()->user()->id);
        $temp = $data->fp;
        $data->fp = $temp + $request->input('plus');
        
        if($data->fp >= $data->sp){
            if($data->fp >= 5){
                $data->title = 'Filler_V';
            }
            if($data->fp >= 10){
                $data->title = 'Filler_X';
            }
            if($data->fp >= 25){
                $data->title = 'Filler_XXV';
            }
            if($data->fp >= 50){
                $data->title = 'Filler_L';
            }
            if($data->fp >= 100){
                $data->title = 'Filler_C';
            }
        }
        else{
            if($data->sp >= 5){
                $data->title = 'Sender_V';
            }
            if($data->sp >= 10){
                $data->title = 'Sender_X';
            }
            if($data->sp >= 25){
                $data->title = 'Sender_XXV';
            }
            if($data->sp >= 50){
                $data->title = 'Sender_L';
            }
            if($data->sp >= 100){
                $data->title = 'Sender_C';
            }
        }
        $log = new logging();
        $log->user_id = auth()->user()->id;
        $log->username = auth()->user()->name;
        $log->task = "Do a survey in someone survey link";
        $log->target_id = $info->id;

        $log->save();
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
        $data = surverid_db::find($id);
        if($data->image != 'Picture01.jpg'){
            //Delete Image
            Storage::delete('public/storage/cover_images/'.$data->cover_images);
        }

        $log = new logging();
        $log->user_id = auth()->user()->id;
        $log->username = auth()->user()->name;
        $log->task = "Delete a survey link";
        $log->target_id = $data->id;
        $log->save();

        $data->delete();

        return redirect('/home')->with('success', 'YOKATTTA');
    }
}
