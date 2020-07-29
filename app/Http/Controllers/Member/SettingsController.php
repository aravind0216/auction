<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\car;
use App\User;
use App\deposit;
use Auth;

class SettingsController extends Controller
{
    public function settings()
    {
        $member = User::find(Auth::user()->id);
        $car = car::all();
        return view('member.settings',compact('member','car'));
    }

    public function updateSettings(Request $request){
        $member = User::find($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->busisness_type = $request->busisness_type;
        $member->company_name = $request->company_name;
        $member->address = $request->address;
        $member->country = $request->country;
        $member->state = $request->state;
        $member->city = $request->city;
        $member->postal_code = $request->postal_code;
        $member->phone_number = $request->phone_number;
        $member->phone_extension = $request->phone_extension;
        $member->most_intrested = $request->most_intrested;
        $member->buy_vehicles_for = $request->buy_vehicles_for;
        $member->save();
        return back(); 
    }

    public function Deposit()
    {
        $deposit = deposit::where('member_id',Auth::user()->id)->get();
        return view('member.deposit',compact('deposit'));
    }

    public function saveDeposit(Request $request){
        $request->validate([
            'deposit'=>'required',
        ]);
        //image upload
        $fileName = null;
        if($request->file('image')!=""){
            $image = $request->file('image');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_image/'), $fileName);
        }  
        $deposit = new deposit;
        $deposit->member_id = Auth::user()->id;
        $deposit->deposit = $request->deposit;
        $deposit->image = $fileName;
        $deposit->save();
        return response()->json('successfully save');
    }

}
