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
use App\deposit;
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

    public function auction()
    {
        return view('auction');
    }

    public function aboutUs()
    {
        $site_info = site_info::find('1');
        return view('page.about',compact('site_info'));
    }

    public function allVehicles()
    {
        $damage = damage::all();
    $vehicle = vehicle::where('is_visible_website','1')->orderBy('id','DESC')->paginate(9);
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

    public function liveAuctions($id1){
        
        $auction = auction_vehicle::find($id1);

        foreach(explode(',', $auction->vehicle_ids) as $value) 
        {
           $id = $value; 
        }

        $vehicle = vehicle::find($id);
        $vehicle_image = vehicle_image::where('vehicle_id',$id)->get();
        $car = car::find($vehicle->car_id);
        $damage = damage::all();
        $brand = brand::find($vehicle->brand_id);
        $vehicle_type = vehicle_type::find($vehicle->vehicle_type);

        $data = array();
       foreach(explode(',', $auction->vehicle_ids) as $value) 
        {
            $vehicle1= vehicle::find($value);
            $brand1 = brand::find($vehicle1->brand_id);
            $model1 = car::find($vehicle1->car_id);
            $vehicle_type1 = vehicle_type::find($vehicle1->vehicle_type);

            $data = array(
                'auction_id' => $auction->id,
                'vehicle_id' => $vehicle1->id,
                'price' => $vehicle1->price,
                'year' => $vehicle1->year,
                'location' => $vehicle1->location,
                'odometer' => $vehicle1->odometer,
                'document_type' => $vehicle1->document_type,
                'price' => $vehicle1->price,
                'image' => $vehicle1->image,
                'brand' => '',
                'model' => '',
                'vehicle_type' => '',
            );

            if(!empty($brand1)){
                $data['brand'] = $brand1->name;
            }
            if(!empty($model1)){
                $data['model'] = $model1->name;
            }
            if(!empty($vehicle_type1)){
                $data['vehicle_type'] = $vehicle_type1->name;
            }

            $datas[] = $data;
        }
        
        return view('page.live_auctions',compact('brand','car','vehicle','vehicle_image','vehicle_type','damage','auction','datas'));
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
                'auction_id' => $auction->id,
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


    public function memberRegistration(){
        $member = User::all();
        $car = car::all();
        $site_info = site_info::find('1');
        return view('page.member_registration',compact('member','car','site_info'));
    }

    public function saveMemberRegistration(Request $request){
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


public function homeSearch(Request $request){
    $q =DB::table('vehicles as v');
if ( $request->brand && !empty($request->brand) )
{
    $q->where('v.brand_id', $request->brand);
}
elseif ( $request->model && !empty($request->model) )
{
    $q->where('v.car_id', $request->model);
}
elseif ( $request->colour && !empty($request->colour) )
{
    $q->where('v.colour', $request->colour);
}
elseif ( $request->vehicle_type && !empty($request->vehicle_type) )
{
    $q->where('v.vehicle_type', $request->vehicle_type);
}
    // $q->select('*');
    $q->orderBy('v.id','DESC');
    $vehicle = $q->paginate(9);

    $damage = damage::all();
    $car = car::all();
    $brand = brand::all();
    $vehicle_type = vehicle_type::all();
    return view('page.all_vehicles',compact('brand','car','vehicle','vehicle_type','damage'));
}


public function vehicleSearch(Request $request){
    $price = explode(';', $request->price_range);
    $price1 = $price[0];
    $price2 = $price[1];

    $q =DB::table('vehicles as v');
if ( $request->brand_id && !empty($request->brand_id) )
{
    $q->whereIn('v.brand_id', $request->brand_id);
}
elseif ( $request->colour && !empty($request->colour) )
{
    $q->whereIn('v.colour', $request->colour);
}
elseif ( $request->body_style && !empty($request->body_style) )
{
    $q->whereIn('v.body_style', $request->body_style);
}
elseif ( $request->price_range && !empty($request->price_range) )
{
    $q->whereBetween('v.price', [ $price1 , $price2 ]);
}
    // $q->select('*');
    $q->orderBy('id','DESC');
    $vehicle = $q->paginate(9);

    $damage = damage::all();
    $car = car::all();
    $brand = brand::all();
    $vehicle_type = vehicle_type::all();
    return view('page.all_vehicles',compact('brand','car','vehicle','vehicle_type','damage'));
}



public function vehicleQuickView($id)
    {
        $vehicle = vehicle::find($id);
        $car = car::find($vehicle->car_id);
        $output = '
        <div class="modal-header">
                <h3 style="color: #000;" class="modal-title">'.$car->name.'</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="vehicle_image/'.$vehicle->image.'" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4 style="color: #000;">Lot Number: <span>'.$vehicle->id.'</span></h4>
                            <table style="color:#000;" class="table table-bordered table-responsive">
                                <tr>
                                    <td>
                                        <span style="float: left">VIN :</span>
                                        <span style="float: right">'.$vehicle->vin.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Doc Type :</span>
                                        <span style="float: right">'.$vehicle->document_type.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Odometer :</span>
                                        <span style="float: right">'.$vehicle->odometer.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Highlights :</span>
                                        <span style="float: right">'.$vehicle->vin.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Primary Damage :</span>
                                        <span style="float: right">'.$vehicle->primary_damage.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Secondary Damage :</span>
                                        <span style="float: right">'.$vehicle->secondary_damage.'</span>
                                    </td>
                                </tr>
                        </table>
                        <h3 style="color: #000;" class="cost"><span class="glyphicon glyphicon-usd"></span>AED '.$vehicle->price.' </h3>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <a href="single-vehicles/'.$vehicle->id.'"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Bid Now
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>

        ';


        echo $output;
    }


public function liveVehicleQuickView($id)
    {
        $vehicle = vehicle::find($id);
        $car = car::find($vehicle->car_id);
        $output = '
        <div class="modal-header">
                <h3 style="color: #000;" class="modal-title">'.$car->name.'</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="/vehicle_image/'.$vehicle->image.'" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4 style="color: #000;">Lot Number: <span>'.$vehicle->id.'</span></h4>
                            <table style="color:#000;" class="table table-bordered table-responsive">
                                <tr>
                                    <td>
                                        <span style="float: left">VIN :</span>
                                        <span style="float: right">'.$vehicle->vin.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Doc Type :</span>
                                        <span style="float: right">'.$vehicle->document_type.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Odometer :</span>
                                        <span style="float: right">'.$vehicle->odometer.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Highlights :</span>
                                        <span style="float: right">'.$vehicle->vin.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Primary Damage :</span>
                                        <span style="float: right">'.$vehicle->primary_damage.'</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Secondary Damage :</span>
                                        <span style="float: right">'.$vehicle->secondary_damage.'</span>
                                    </td>
                                </tr>
                        </table>
                        <h3 style="color: #000;" class="cost"><span class="glyphicon glyphicon-usd"></span>AED '.$vehicle->price.' </h3>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            
                        </div>
                    </div>
                </div>
            </div>

        ';


        echo $output;
    }

    
}
