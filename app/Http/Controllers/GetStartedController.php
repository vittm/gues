<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Customers;
use Session;

class GetStartedController extends Controller
{
    public function index()
    {
        return view('get-started');
    }
    public function get_info(Request $request){
    	$value= $request->all();
        $db = new Customers;

        $db->fullname = $value['full_property_management_application_name'];
        $db->email = $value['full_property_management_application_email'];
        $db->phone = $value['full_property_management_application_mobile_phone'];
        $db->city = $value['full_property_management_application_city'];
        $db->bedrooms = $value['full_property_management_application_bedrooms_count'];
        $db->badrooms = $value['full_property_management_application_bathrooms_count'];
        $db->typeTable = '3';
        $db->save();
        
        return redirect(Session::get('website_language', config('app.locale'))."/thanks");
    }
    public function listing()
    {
        $customers= DB::table('customers')->where('typeTable','3')->paginate(15);
        return view('admin.listings-user',['customers'=>$customers]);
    }
    public function listing_call_me()
    {
        $customers= DB::table('customers')->where('typeTable','2')->paginate(15);
        return view('admin.listings-call-me',['customers'=>$customers]);
    }
    public function listing_search()
    {
        $customers= DB::table('customers')->where('typeTable','1')->paginate(15);
        return view('admin.listings-search',['customers'=>$customers]);
    }
}
