<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\slider;
use App\site_info;
use App\blog;
use App\member_password;
use App\User;
use Hash;
use DB;
use Mail;

class PageController extends Controller
{
    public function index()
    {
        $slider = slider::all();
        $blog = blog::take(2)->get();
        return view('page.home',compact('slider','blog'));
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
        return view('page.all_vehicles');
    }

    public function futureVehicles()
    {
        return view('page.future_vehicles');
    }

    public function buyNowCars()
    {
        return view('page.buy_now_cars');
    }

    public function auctions()
    {
        return view('page.auctions');
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

    public function singleVehicles()
    {
        return view('page.single_vehicles');
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
