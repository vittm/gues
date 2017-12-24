<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Datas;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome',['type'=>$type]);
    }
}
