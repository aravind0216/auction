<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\slider;
use App\site_info;
use App\blog;
use App\member_password;
use App\User;
use App\brand;
use App\car;
use App\damage;
use App\vehicle_image;
use App\vehicle;
use App\vehicle_type;
use App\auction_vehicle;
use Hash;
use DB;
use Mail;

class PageController extends Controller
{
    public function index()
    {
        $damage = damage::all();
        $vehicle = vehicle::where('is_enable_future_vehicles','1')->where('is_visible_website','1')->orderBy('id','DESC')->take(6)->get();
        $car = car::all();
        $brand = brand::all();
        $vehicle_type = vehicle_type::all();
        $slider = slider::all();
        $blog = blog::take(2)->get();
        return view('page.home',compact('brand','car','vehicle','vehicle_type','damage','slider','blog'));
    }

    public function contact()
    {
        $site_info = site_info::find('1');
        return view('page.contact',compact('site_info'));
    }

    public function aboutUs()
    {
        $site_info = site_info::find('1');
        return view('page.about',compact('site_info'));
    }

    public function allVehicles()
    {
        $damage = damage::all();
        $vehicle = vehicle::where('is_visible_website','1')->orderBy('id','DESC')->get();
        $car = car::all();
        $brand = brand::all();
        $vehicle_type = vehicle_type::all();
        return view('page.all_vehicles',compact('brand','car','vehicle','vehicle_type','damage'));
    }

    public function futureVehicles()
    {
        $damage = damage::all();
        $vehicle = vehicle::where('is_enable_future_vehicles','1')->where('is_visible_website','1')->orderBy('id','DESC')->get();
        $car = car::all();
        $brand = brand::all();
        $vehicle_type = vehicle_type::all();
        return view('page.future_vehicles',compact('brand','car','vehicle','vehicle_type','damage'));
    }

    public function buyNowCars()
    {
        return view('page.buy_now_cars');
    }

    public function auctions()
    {
        $today = date('Y-m-d');
        $today_auction = auction_vehicle::where('starting_date',$today)->get();
        $upcoming_auction = auction_vehicle::whereDate('starting_date','>',$today)->get();
        $vehicle = vehicle::all();
        $car = car::all();
        $brand = brand::all();
        return view('page.auctions',compact('today_auction','vehicle','car','brand','upcoming_auction'));
    }

    public function liveAuctions($id){
        $vehicle = vehicle::find($id);
        $vehicle_image = vehicle_image::where('vehicle_id',$id)->get();
        $car = car::all();
        $damage = damage::all();
        $brand = brand::all();
        $vehicle_type = vehicle_type::all();
        return view('page.live_auctions',compact('brand','car','vehicle','vehicle_image','vehicle_type','damage'));
    }

    public function viewAuctions($id)
    {
        $auction = auction_vehicle::find($id);
        
        $data = array();
       foreach(explode(',', $auction->vehicle_ids) as $value) 
        {
            $vehicle = vehicle::find($value);
            
            $brand = brand::find($vehicle->brand_id);
            $model = car::find($vehicle->car_id);
            $vehicle_type = vehicle_type::find($vehicle->vehicle_type);

            $data = array(
                'vehicle_id' => $vehicle->id,
                'price' => $vehicle->price,
                'year' => $vehicle->year,
                'location' => $vehicle->location,
                'odometer' => $vehicle->odometer,
                'document_type' => $vehicle->document_type,
                'price' => $vehicle->price,
                'image' => $vehicle->image,
                'brand' => '',
                'model' => '',
                'vehicle_type' => '',
            );

            if(!empty($brand)){
                $data['brand'] = $brand->name;
            }
            if(!empty($model)){
                $data['model'] = $model->name;
            }
            if(!empty($vehicle_type)){
                $data['vehicle_type'] = $vehicle_type->name;
            }

            $datas[] = $data;
        }

        return view('page.view_auctions',compact('datas'));

    }

    public function howItWorks()
    {
        $site_info = site_info::find('1');
        return view('page.how_it_works',compact('site_info'));
    }

    public function services()
    {
        $site_info = site_info::find('1');
        return view('page.services',compact('site_info'));
    }

    public function memberFees()
    {
        $site_info = site_info::find('1');
        return view('page.member_fees',compact('site_info'));
    }

    public function termsAndConditions()
    {
        $site_info = site_info::find('1');
        return view('page.terms_and_conditions',compact('site_info'));
    }

    public function compare()
    {
        return view('page.compare');
    }

    public function singleVehicles($id)
    {
        $vehicle = vehicle::find($id);
        $vehicle_image = vehicle_image::where('vehicle_id',$id)->get();
        $car = car::all();
        $damage = damage::all();
        $brand = brand::all();
        $vehicle_type = vehicle_type::all();
        return view('page.single_vehicles',compact('brand','car','vehicle','vehicle_image','vehicle_type','damage'));
    }


    public function memberCreatePassword($id){
        $member = member_password::find($id);
        return view('page.member_new_password',compact('member','id'));
    }

    public function memberUpdatePassword(Request $request){
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $member = User::find($request->member_id);
        $member->password = Hash::make($request->password);
        $member->save();

        $member_password = member_password::find($request->id);
        $member_password->status = 1;
        $member_password->save();
        
        return response()->json('successfully save'); 
    }

    
}
