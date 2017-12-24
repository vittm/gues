<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Customers;

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
        $db->postcode = $value['full_property_management_application_postcode'];;
        $db->city = $value['full_property_management_application_city'];;
        $db->country = $value['full_property_management_application_country_code'];;
        $db->bedrooms = $value['full_property_management_application_bedrooms_count'];;
        $db->badrooms = $value['full_property_management_application_bathrooms_count'];;

        $db->save();
        session()->flash('flash_message', 'Article was stored with success');
        return redirect('/');
    }
    public function listing()
    {
        $customers= DB::table('customers')->get();
        return view('admin.listings-user',['customers'=>$customers]);
    }
}