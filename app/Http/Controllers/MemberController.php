<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\car;
use App\member_password;
use App\deposit;
use Mail;
use DB;

class MemberController extends Controller
{
    public function saveMember(Request $request){
        $request->validate([
            'name'=>'required',
        ]);

        $member = new User;
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

        $member_password = new member_password;
        $member_password->date = date('Y-m-d');
        $member_password->end_date = date('Y-m-d', strtotime("+14 days"));
        $member_password->member_id = $member->id;
        $member_password->name = $member->name;
        $member_password->email = $member->email;
        $member_password->save();

        $all = $member_password::find($member_password->id);
        Mail::send('mail.member_send_mail',compact('all'),function($message) use($all){
            $message->to($all['email'])->subject('Create your Own Password');
            $message->from('aravind.0216@gmail.com','New York Car Auction Website');
        });
        return response()->json('successfully save'); 
    }

    public function updateMember(Request $request){
        $request->validate([
            'name'=> 'required',
        ]);
        
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
        return response()->json('successfully update'); 
    }

    public function Member(){
        $member = User::all();
        $car = car::all();
        return view('admin.member',compact('member','car'));
    }

    public function editMember($id){
        $User = User::find($id);
        return response()->json($User); 
    }

    public function deleteMember($id){
        $User = User::find($id);
        $User->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

    public function depositRequest(){
        $deposit = deposit::all();
        $member = User::all();
        return view('admin.deposit_request',compact('deposit','member'));
    }

    public function updateDepositRequest($id,$status){
        $deposit = deposit::find($id);
        $deposit->status = $status;
        

        if($status == '1'){
            $member = User::find($deposit->member_id);
            $wallet = $member->wallet;
            $member->wallet = $wallet + $deposit->deposit;
            $member->save();
        }
        if($deposit->status == '1'){
            $member = User::find($deposit->member_id);
            $wallet = $member->wallet;
            $member->wallet = $wallet - $deposit->deposit;
            $member->save();
        }

        $deposit->save();

        return response()->json(['message'=>'Successfully Update'],200); 
    }

}
