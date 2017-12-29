<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App;
use App\Datas;
use App\Rooms;
use App\Customers;
use Session;

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
    public function calculator($lang,$block,$decoration,$bedrooms,$email)
    {
        $types = DB::table('rooms')->where([['id_data','=',$block],['count','=',$bedrooms]])->select($decoration)->get();
        if($types != null) {
            foreach ($types as $key => $value) {
                $result = $value->$decoration;
                return $result;
            }
        }else {
            return false;
        }
    }
    public function get_info(Request $request){
        $value = $request->all();

        $db = new Customers;
        $db->fullname = $value['price_calculator_call_full_name'];
        $db->email = $value['price_calculator_call_email'];
        $db->phone = $value['price_calculator_call_phone'];
        $db->call = $value['price_calculator_call_preference'];
        $db->save();

        return redirect(Session::get('website_language', config('app.locale'))."/thanks");
    }
}
