@extends('page.app')
@section('extra-css')

	<link rel="stylesheet" type="text/css" href="dist/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="dist/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" type="text/css" href="dist/js/plugin/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="dist/js/plugin/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="dist/js/plugin/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
@endsection
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
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
    </div>
    <!------ Purchase Car Start ------>
    <div class="impl_oldsingle_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="impl_carparts_inner">
                        <div class="impl_buy_old_car">
                            <div class="slider slider-for">
                                <div><img src="/dist/images/product/old_car.png" alt=""></div>
                                <div><img src="/dist/images/product/old_car1.png" alt=""></div>
                                <div><img src="/dist/images/product/old_car2.png" alt=""></div>
                                <div><img src="/dist/images/product/old_car3.png" alt=""></div>
                            </div>
                            <div class="slider slider-nav">
                                <div>
                                    <div class="impl_thumb_ovrly"><img src="/dist/images/product/old_car_thumb1.jpg" alt=""></div>
                                </div>
                                <div>
                                    <div class="impl_thumb_ovrly"><img src="/dist/images/product/old_car_thumb2.jpg" alt=""></div>
                                </div>
                                <div>
                                    <div class="impl_thumb_ovrly"><img src="/dist/images/product/old_car_thumb3.jpg" alt=""></div>
                                </div>
                                <div>
                                    <div class="impl_thumb_ovrly"><img src="/dist/images/product/old_car_thumb4.jpg" alt=""></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="impl_buycar_data impl_buy_old_car_data">
                        <h1>Expedition , Centaur</h1>
                        <h1>AED 81000 </h1>
                        <div class="step_car_features">
                            <ul>
                                <li><span class="fea_name">year</span> <span class="fea_colon">: </span><span class="fea_value">2015</span> </li>
                                <li><span class="fea_name">driven</span> <span class="fea_colon">: </span> <span class="fea_value">12000 kms </span> </li>
                                <li><span class="fea_name">city</span> <span class="fea_colon">: </span><span class="fea_value">orlando</span> </li>
                                <li><span class="fea_name">color</span> <span class="fea_colon">: </span><span class="fea_value">white</span> </li>
                            </ul>
                        </div>
                            <!-- <div class="impl_old_buy_btn">
                                <a href="#" class="impl_btn">add to cart</a>
                                <a href="#" class="impl_btn">buy now</a>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                        
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
                                        <span style="float: right">Tuesday 19th June 2020</span>
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
    <!------ Purchase Car Start ------>
    <div class="impl_spesi_wrapper">
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
    </div>
    <!------ Car description wrapper Start ------>
    <div class="impl_descrip_wrapper impl_old_descrips">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-4">
                    <div class="impl_heading">
                        <h1>description</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Car Brand</h2>
                        <p>Expedition ,</p>
                        <p>Centaur</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>FUEL ECONOMY</h2>
                        <p>EPA combined/city/highway : </p>
                        <p>15-16/13/20-21 mpg</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>ENGINE TYPE</h2>
                        <p>DOHC 32-valve V-8, aluminum</p>
                        <p>block and heads, port fuel</p>
                        <p>injection</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>TRANSMISSION</h2>
                        <p>6-speed Automatic With Manual </p>
                        <p>Shifting Mode</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Displacement</h2>
                        <p>286 cu in, 4691 cc</p>
                        <p>Power: 454 hp @ 7000 rpm</p>
                        <p>Torque: 384 lb-ft @ 4750 rpm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>VEHICLE TYPE</h2>
                        <p>Front-Engine, </p>
                        <p>Rear-Wheel-Drive, </p>
                        <p>4-Passenger, 2-Door </p>
                        <p>Coupe or Convertible</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>PERFORMANCE</h2>
                        <p>Zero to 60 mph: 4.5-4.7 sec</p>
                        <p>Standing ¼-mile: 13.0-13.2 sec</p>
                        <p>Top speed: 178-187 mph</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>DIMENSIONS</h2>
                        <p>Wheelbase: 115.8 in</p>
                        <p>Length: 193.3-193.7 in</p>
                        <p>Width: 75.4 in Height: 54.3 in</p>
                        <p>Curb weight : 4400-4600 lb</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra-js')

	<script type="text/javascript" src="dist/js/jquery.js"></script>
    <script type="text/javascript" src="dist/js/popper.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="dist/js/plugin/magnific/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="dist/js/plugin/slick/slick.min.js"></script>
    <script type="text/javascript" src="dist/js/custom.js"></script>

@endsection