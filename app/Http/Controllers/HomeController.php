<?php

namespace App\Http\Controllers;

use DB;
use App;
use App\Datas;
use App\Rooms;
use App\Customers;
use Session;
use Request;


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
        $language = Request::segment(1);
        if($language !== 'en' || $language !== 'vi' && Session::get('website_language') != null ) {
            Session::put('website_language', config('app.locale'));
        }
        return view('welcome',['types'=>$types]);
    }
    public function calculator($lang,$block,$decoration,$bedrooms,$email)
    {
        $db = new Customers;
        $db->block = $block;
        $db->email = $email;
        $db->type = $decoration;
        $db->bedrooms = $bedrooms;
        $db->typeTable = '1';
        $db->save();
        
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
    public function get_info(\Illuminate\Http\Request $request){
        $value = $request->all();

        $db = new Customers;
        $db->fullname = $value['price_calculator_call_full_name'];
        $db->email = $value['price_calculator_call_email'];
        $db->phone = $value['price_calculator_call_phone'];
        $db->call = $value['price_calculator_call_preference'];
        $db->typeTable = '2';
        $db->save();

        return redirect(Session::get('website_language', config('app.locale'))."/thanks");
    }
}
