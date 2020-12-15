<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\users;

class orlogin_controller extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required', 
            'username' => 'required',
            'email' => 'required',
            'psw' => 'required'
        ]);
        
        $data = new users();
        $data->fullname = $request->input('fullname');
        $data->name = $request->input('username');
        $data->email = $request->input('email');
        $data->password = Hash::make($request->input('psw'));

        $data->save();

        return redirect('/surverid_db')->with('success', 'YOKATTTA');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'psw' => 'required'
        ]);
        

        $data = users::find($request->input('email'));
        if (empty($data)) {
            return redirect('/login');
        }
        
        if ($data->password != Hash::make($request->input('psw'))){
            return redirect('/login');
        }
        
        return redirect('/surverid_db')->with('success', 'YOKATTTA');
    }

}
