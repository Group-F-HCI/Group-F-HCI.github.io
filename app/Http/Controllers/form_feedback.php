<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\form_feed;
use App\Models\User;
use App\Models\logging;

class form_feedback extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tampilan.Form_Feedback');
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
            'soal1' => 'required', 
            'soal2' => 'required',
            'soal3' => 'required',
            'soal4' => 'required',
            'soal5' => 'required'
        ]);
        
        $data = new form_feed();
        $foruser = user::find(auth()->User()->id);

        $foruser->fp += 1;
        $data->username = auth()->user()->name;
        $data->soal01 = $request->input('soal1');
        $data->soal02 = $request->input('soal2');
        $data->soal03 = $request->input('soal3');
        $data->soal04 = $request->input('soal4');
        $data->soal05 = $request->input('soal5');
        
        $log = new logging();
        $log->user_id = auth()->user()->id;
        $log->username = auth()->user()->name;
        $log->task = "Fill a feedback form";
        $log->target_id = 0;
        $log->save();

        $data->save();
        $foruser->save();

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
