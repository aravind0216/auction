@extends('page.app')
@section('extra-css')

	<link rel="stylesheet" type="text/css" href="/dist/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" type="text/css" href="/dist/js/plugin/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/dist/js/plugin/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/dist/js/plugin/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/style.css">
@endsection
@section('content')
    <!------ Breadcrumbs Start ------>
    <!-- <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Vehicles</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Vehicles Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> -->
    <!------ Purchase Car Start ------>
    <div class="impl_oldsingle_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="impl_carparts_inner">
                        <div class="impl_buy_old_car">
                            <div class="slider slider-for">
                                @if(!empty($vehicle->image))
                                <div><img style="object-fit: cover;width: 700px;height: 400px;" src="{{asset('vehicle_image/').'/'.$vehicle->image}}" alt=""></div>
                                @endif
                                @foreach($vehicle_image as $row)
                                <div><img style="object-fit: cover;width: 700px;height: 400px;" src="{{asset('vehicle_image/').'/'.$row->image}}" alt=""></div>
                                @endforeach
                            </div>
                            <div class="slider slider-nav">
                                @if(!empty($vehicle->image))
                                <div>
                                    <div class="impl_thumb_ovrly"><img style="object-fit: cover;width: 100px;height: 100px;" src="{{asset('vehicle_image/').'/'.$vehicle->image}}" alt=""></div>
                                </div>
                                @endif
                                @foreach($vehicle_image as $row)
                                <div>
                                    <div class="impl_thumb_ovrly"><img style="object-fit: cover;width: 100px;height: 100px;" src="{{asset('vehicle_image/').'/'.$row->image}}" alt=""></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4">
                    <div class="impl_buycar_data impl_buy_old_car_data">
                        <h1>@foreach($car as $car1)
                    @if($car1->id == $vehicle->car_id)
                    {{$car1->name}}
                    @endif
                    @endforeach</h1>
                        <h1>AED {{$vehicle->price}} </h1>
                        <h1>Lot #{{$vehicle->id}} </h1>
                        <div class="compare_table">
                            <table class="table table-bordered table-responsive">
                            <tbody>
                                
                                
                            </tbody>
                            
                        </table>
                        </div>
                            <div class="impl_old_buy_btn">
                                <a href="#" class="impl_btn">add to cart</a>
                                <a href="#" class="impl_btn">buy now</a>
                            </div>
                    </div>
                </div> -->
                <div class="col-lg-6 col-md-6">
                    <div class="impl_buycar_data impl_buy_old_car_data">
                        <h1>@foreach($car as $car1)
                    @if($car1->id == $vehicle->car_id)
                    {{$car1->name}}
                    @endif
                    @endforeach</h1>
                        <h1>AED {{$vehicle->price}} </h1>
                        <div class="compare_table">
                            <table class="table table-bordered table-responsive">
                            <tbody>
                                
                                
                            </tbody>
                            
                        </table>
                        </div>
                            
                    </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><div style="color: rgb(249, 161, 50)" class="detail_title_bar"> <i class="fa fa-hand-o-up hend_up" aria-hidden="true"></i> Pre Bid Closed </div></th>
                                </tr>
                            </thead>
                                <tr>
                                    <td></td>
                                </tr>
                            <thead>
                                <tr>
                                    <th><div style="color: rgb(249, 161, 50)" class="detail_title_bar"> Sale Inforamtion </div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span style="float: left">Bid Status :</span>
                                        <span style="float: right">AED 8000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Sale Name :</span>
                                        <span style="float: right">Tuesday Auction</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left">Sale Date :</span>
                                        <span style="float: right">Tuesday 19th Augest 2020</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="float: left"></span>
                                        <span style="float: right">7h 42min</span>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                </div>
            </div>
        </div>
    </div>

<div class="impl_oldsingle_wrapper">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6">
    <div class="compare_table">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Vehicle Information</th>
                </tr>
            </thead>
            <tr class="bg_color">
                                    <td>
                                        <span style="float: left">VIN :</span>
                                        <span style="float: right">{{$vehicle->vin}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Doc Type :</span>
                                        <span style="float: right">{{$vehicle->document_type}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Odometer :</span>
                                        <span style="float: right">{{$vehicle->odometer}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Highlights :</span>
                                        <span style="float: right">{{$vehicle->vin}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Primary Damage :</span>
                                        <span style="float: right">{{$vehicle->primary_damage}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Secondary Damage :</span>
                                        <span style="float: right">{{$vehicle->secondary_damage}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Est. Retail Value :</span>
                                        <span style="float: right">{{$vehicle->price}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Body Style :</span>
                                        <span style="float: right">{{$vehicle->body_style}}</span>
                                    </td>
                                </tr>
        </table>
    </div>
</div>

<div class="col-lg-6 col-md-6">
    <div class="compare_table">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Vehicle Information</th>
                </tr>
            </thead>
            <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Vehicle Type :</span>
                                        <span style="float: right">{{$vehicle->vehicle_type}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Color :</span>
                                        <span style="float: right">{{$vehicle->colour}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Engine Type :</span>
                                        <span style="float: right">{{$vehicle->engine_type}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Cylinders :</span>
                                        <span style="float: right">{{$vehicle->cylinders}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Transmission :</span>
                                        <span style="float: right">{{$vehicle->transmission}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Drive :</span>
                                        <span style="float: right">{{$vehicle->drive}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Fuel :</span>
                                        <span style="float: right">{{$vehicle->fuel}}</span>
                                    </td>
                                </tr>
                                <tr class="bg_color">
                                    <td>
                                        <span style="float: left">Keys :</span>
                                        <span style="float: right">{{$vehicle->keys}}</span>
                                    </td>
                                </tr>
        </table>
    </div>
</div>

</div>
</div>
</div>
    <!------ Purchase Car Start ------>
    <!-- <div class="impl_spesi_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="impl_car_spesi_list">
                        <div class="impl_heading">
                            <h1>Car Specifications</h1>
                        </div>
                        <ul>
                            <li>
                                <h3>Acceleration</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:70%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>weight</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:30%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>control</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:80%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>off-road</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:60%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>top speed</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:40%"></div>
                                </div>
                            </li>
                            <li>
                                <h3>toughness</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 impl_padderleft impl_padderright">
                    <div class="impl_car_spesi_img">
                        <img src="dist/images/car_spesi_img.jpg" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <!------ Car description wrapper Start ------>
    <div class="impl_descrip_wrapper impl_old_descrips">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-4">
                    <div class="impl_heading">
                        <h1>description</h1>
                    </div>
                </div>
                <?php echo html_entity_decode($vehicle->description); ?>
            </div>
        </div>
    </div>
@endsection
@section('extra-js')

	<script type="text/javascript" src="/dist/js/jquery.js"></script>
    <script type="text/javascript" src="/dist/js/popper.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/dist/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="/dist/js/plugin/magnific/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/dist/js/plugin/slick/slick.min.js"></script>
    <script type="text/javascript" src="/dist/js/custom.js"></script>

@endsection