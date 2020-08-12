<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\auction_vehicle;
use App\brand;
use App\car;
use App\vehicle;
use App\vehicle_type;


class AuctionController extends Controller
{
    public function saveAuction(Request $request){
        $request->validate([
            'auction_title'=>'required',
        ]);

        $vehicle_ids='';
        $vehicle;
        for ($x=0; $x<count($_POST['vehicle_id']); $x++) 
        {
            $vehicle[]= $_POST['vehicle_id'][$x];
        }
        $vehicle_ids = collect($vehicle)->implode(',');

        $auction = new auction_vehicle;
        $auction->auction_title = $request->auction_title;
        $auction->starting_date = $request->starting_date;
        $auction->starting_time = $request->starting_time;
        $auction->vehicle_ids = $vehicle_ids;
        $auction->save();
        return response()->json('successfully save'); 
    }

    public function updateAuction(Request $request){
        $request->validate([
            'auction_title'=> 'required',
        ]);
        
        $vehicle_ids='';
        $vehicle;
        for ($x=0; $x<count($_POST['vehicle_id']); $x++) 
        {
            $vehicle[]= $_POST['vehicle_id'][$x];
        }
        $vehicle_ids = collect($vehicle)->implode(',');

        $auction = auction_vehicle::find($request->id);
        $auction->auction_title = $request->auction_title;
        $auction->starting_date = $request->starting_date;
        $auction->starting_time = $request->starting_time;
        $auction->vehicle_ids = $vehicle_ids;
        $auction->save();
        return response()->json('successfully update'); 
    }

    public function viewAuction(){
        $auction = auction_vehicle::all();
        $vehicle = vehicle::all();
        $car = car::all();
        $brand = brand::all();
        return view('admin.view_auction',compact('auction','vehicle','car','brand'));
    }

    public function addAuction(){
        $auction = auction_vehicle::all();
        $vehicle = vehicle::all();
        $car = car::all();
        $brand = brand::all();
        return view('admin.add_auction',compact('auction','vehicle','car','brand'));
    }

    public function editAuction($id){
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


         
        //return response()->json($datas); 
        return view('admin.edit_auction',compact('auction','datas'));
    }
    
    public function deleteAuction($id){
        $auction = auction_vehicle::find($id);
        $auction->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

    public function getAuctionVehicle($id){
        $vehicle = vehicle::find($id);

        $brand = brand::find($vehicle->brand_id);
        $model = car::find($vehicle->car_id);
        $vehicle_type = vehicle_type::find($vehicle->vehicle_type);

        $data = array(
            'vehicle_id' => $vehicle->id,
            'price' => $vehicle->price,
            'year' => $vehicle->year,
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

        return response()->json($data); 
    }

}
