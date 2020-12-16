<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surverid_db;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = surverid_db::orderBy('created_at', 'asc')->paginate(15);
        return view('tampilan.HomeAfterLogin', compact('data'));
    }
}
