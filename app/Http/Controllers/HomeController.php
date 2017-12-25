<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Datas;
use App\Rooms;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $types = DB::table('datas')->get();
        return view('welcome',['types'=>$types]);
    }
    public function calculator($block,$decoration,$bedrooms,$email)
    {
        $types = DB::table('datas')->where('datas.id','==',$block)->get('id');
        $result = DB::table('rooms')->join('datas','rooms.id_data',$types)->get();
        dd($result);
        return $result;
    }
}
