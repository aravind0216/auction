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
use App\auction_vehicle_id;
use Hash;
use DB;
use Mail;


class LiveauctionController extends Controller
{
    public function getLiveAuctions($id)
    {
        $auction = auction_vehicle::find($id);
        $auction_id = auction_vehicle_id::where('auction_id',$auction->id)->where('status',0)->orderBy('id', 'ASC')->get();

        $auction_count = auction_vehicle_id::where('auction_id',$auction->id)->count();


        $data = array();
        foreach ($auction_id as $key => $value) {
            if($key == 0){
                $vehicle = vehicle::find($value->vehicle_id);
                $vehicle_image = vehicle_image::where('vehicle_id',$value->vehicle_id)->get();
                $car = car::find($vehicle->car_id);
                $damage = damage::all();
                $brand = brand::find($vehicle->brand_id);
                $vehicle_type = vehicle_type::find($vehicle->vehicle_type);
            }
            else{
                $vehicle1= vehicle::find($value->vehicle_id);
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
                    'sales_type' => $vehicle1->sales_type,
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
        }
            

        $output = '
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>'.$auction->auction_title.'</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Total Vechle - '.$auction_count.'</a></li>
                        <li class="breadcrumb-item active">1,089 Participants</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<div class="impl_buy_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="impl_carparts_inner">
                        <div class="impl_buy_old_car">
                            <div class="slider slider-for">';
                                if(!empty($vehicle->image)){
                                $output.='<div><img style="width: 700px;height: 400px;" src="/vehicle_image/'.$vehicle->image.'" alt=""></div>';
                                }
                                foreach($vehicle_image as $row){
                                $output.='<div><img style="width: 700px;height: 400px;" src="/vehicle_image/'.$row->image.'" alt=""></div>';
                                }
                            $output.='</div>
                            <div class="slider slider-nav">';
                                if(!empty($vehicle->image)){
                                $output.='<div>
                                    <div class="impl_thumb_ovrly"><img style="width: 100px;height: 100px;" src="/vehicle_image/'.$vehicle->image.'" alt=""></div>
                                </div>';
                                }
                                foreach($vehicle_image as $row){
                                $output.='<div>
                                    <div class="impl_thumb_ovrly"><img style="width: 100px;height: 100px;" src="/vehicle_image/'.$row->image.'" alt=""></div>
                                </div>';
                                }
                            $output.='</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_data">
                        <h1>'.$brand->name.' , '.$car->name.' </h1>
                        <div class="car_emi_wrapper">
                            <span>Lot: '.$vehicle->id.' </span>
                
                            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Item No : 20</a>
                        </div>
                        <br>
                        <h3>'.$vehicle->sales_type.'</h3>
                        <br>

                        <div id="app"></div>
                     
                    <div style="margin-left: 79px;
    letter-spacing: 1px;
    padding-top: 10px;
    padding-bottom: 10px;">
                        <h5 style="color:#ed3833">All Bids in AED</h5>
                        <br>';
                        if(!\Auth::check()){
                        $output.='<h5>Sign in to Bid</h5>';
                        }else{
                        $output.='<h5>Minimum Bid Value : '.$vehicle->minimum_bid_value.' AED</h5>';
                        }
                    $output.='</div>';
                    if(\Auth::check()){
                        $output.='<div class="row">
                            <div class="col-md-6">
                               <div class="input-group">
                    
      <input type="text" value="'.$vehicle->minimum_bid_value.'" class="form-control" readonly aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
    </div>
                            </div>
                      
                        </div>
                        <br>
                        <a href="/" class="impl_btn" style="margin-left: 70px;">Bid Now</a>';
                    }else{

                        $output.='<div class="impl_old_buy_btn">
                            <a href="/login" class="impl_btn">Sign In</a>
                            <a href="/member-registration" class="impl_btn">Register</a>
                            
                        </div>';
                        }
                    $output.='</div>
                </div>
            </div>
        </div>
    </div>


    <div class="impl_descrip_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>Vechle Details</h1>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>Car Brand</h2>
                    <p>'.$brand->name.'</p>
                    <p>'.$car->name.'</p>
                    <p>'.$vehicle->year.'</p>
                    <p>'.$vehicle->vin.'</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>Location</h2>
                        <p>'.$vehicle->location.'</p>
                        <p>Doc Type : '.$vehicle->document_type.'</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>FUEL ECONOMY</h2>
                        <p>'.$vehicle->fuel.'</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>ENGINE TYPE</h2>
                        <p>'.$vehicle->engine_type.'</p>
                        <p>'.$vehicle->cylinders.'</p>
                        <p>'.$vehicle->drive.'</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>TRANSMISSION</h2>
                        <p>'.$vehicle->transmission.'</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Colour</h2>
                        <p>'.$vehicle->exterior_color.'</p>
                        <p>'.$vehicle->interior_color.'</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>VEHICLE TYPE</h2>
                    <p>'.$vehicle_type->name.'</p>
                    <p>'.$vehicle->body_type.'</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>HIGHLIGHTS</h2>
                        <p>'.$vehicle->highlights.'</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>ODOMETER</h2>
                        <p>'.$vehicle->odometer.'</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>Additional Info</h1>
                    </div>';
                $output.= html_entity_decode($vehicle->description);
                $output.='</div>
            </div>
        </div>
    </div>


    <div class="impl_compare_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>Upcoming Lots</h1>
                    </div>
                </div>';
            foreach($datas as $data){
             $output.='<div class="col-lg-3 col-md-4">
                <div class="impl_fea_car_box" style="box-shadow: 1px 1px 10px 2px #ffffff;" onclick="viewDetails('.$data['vehicle_id'].')">
                    <div class="impl_fea_car_img">
                        <img style="width: 300px;height: 150px; padding:10px;cursor: pointer;" src="/vehicle_image/'.$data['image'].'" alt="" class="img-fluid impl_frst_car_img">
                        <!-- <img src="/app-assets/images/featured/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img"> -->
                    </div>
                    <div class="impl_fea_car_data" style="background: #F44336;">
                        <h2> <a href="javascript:void(null)" onclick="viewDetails('.$data['vehicle_id'].')">'.$data['model'].'</a></h2>
                        <ul>
                            <li><span class="impl_fea_title">Lot</span>
                                <span class="impl_fea_name">'.$data['vehicle_id'].'</span>
                            </li>
                            <li><span class="impl_fea_title">Odo</span>
                                <span class="impl_fea_name">'.$data['odometer'].'</span>
                            </li>
                            <li><span class="impl_fea_title">Current Bid</span>
                                <span class="impl_fea_name">0</span>
                            </li>
                            <li><span class="impl_fea_title">Item</span>
                                <span class="impl_fea_name">0</span>
                            </li>
                        </ul>
                        <h2>'.$data['sales_type'].'</h2>
                        <h2>'.$auction->auction_title.'</h2>
                    </div>
                </div>
            </div>';
            }


           
            $output.='</div>
        </div>
    </div>
    <script type="text/javascript" src="/dist/js/custom.js"></script>
        ';


    	$vehicle_price = $vehicle->price;
        return response()->json(['html'=>$output,'vehicle_price'=>$vehicle_price],200); 
    }
}
