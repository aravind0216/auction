@extends('page.app')
@section('extra-css')

	<link rel="stylesheet" type="text/css" href="dist/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="dist/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" type="text/css" href="dist/js/plugin/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="dist/js/plugin/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
@endsection
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>All Vehicles</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Find Vehicles</a></li>
                        <li class="breadcrumb-item active">All Vehicles</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase new section Start ------>
    <div class="impl_purchase_wrapper">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="impl_sorting_text custom_select">
                        <span class="impl_show"> Showing 9 of 68 Results</span>
                        <div class="impl_select_wrapper">
                            <span>sort by</span>
                            <select>
						<option value="1">Newest</option>
						<option value="2">New</option>
						<option value="3">Old</option>
						<option value="4">Oldest</option>
					</select>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="impl_category_type">
                        <a href="purchase_new.html" class="impl_btn active">new car</a>
                        <a href="purchase_used.html" class="impl_btn impl_used_car">used car</a>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-12">
                    <div class="impl_purchase_inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <form enctype="multipart/form-data" method="POST" action="/vehicle-search">
                                {{ csrf_field() }}
                                <div class="impl_sidebar">
                                    <div class="impl_product_search widget woocommerce">
                                        <div class="impl_footer_subs">
                                            <input id="lot_number" name="lot_number" type="text" class="form-control" placeholder="Enter Lot Number">
                                            <button id="search_lot" class="foo_subs_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <!--Brands-->
                                    <div class="impl_product_brand widget woocommerce">
                                        <h2 class="widget-title">brands</h2>
                                        <ul>
                                            @foreach($brand as $brand1)
                                        
                                            <li>
                                                <label class="brnds_check_label">
												{{$brand1->name}}
												<input value="{{$brand1->id}}" type="checkbox" name="brand_id[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!--Colors-->
                                    <div class="impl_product_color widget woocommerce">
                                        <h2 class="widget-title">color</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
												black
												<input value="black" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												blue
												<input value="blue" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												white
												<input value="white" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												yellow
												<input value="yellow" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												red
												<input value="red" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												grey 	
												<input value="grey" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												brown
												<input value="brown" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												orange
												<input value="orange" type="checkbox" name="colour[]"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Price Range-->
                                    <div class="impl_product_price widget woocommerce">
                                        <h2 class="widget-title">price range</h2>
                                        <div class="price_range">
                                            <input type="text" id="range_24" name="price_range" value="" />
                                        </div>
                                    </div>

                                    <div class="impl_product_price widget woocommerce">
                                        <div class="impl_fea_btn">
                                            <button type="submit" class="impl_btn">search vehicle</button>
                                        </div>
                                    </div>
                                    <!--Car Type-->
                                    <!-- <div class="impl_product_type widget woocommerce">
                                        <h2 class="widget-title">car type</h2>
                                        <ul>
                                            <li><a href="#">Hatchback</a></li>
                                            <li><a href="#">Sedan</a></li>
                                            <li><a href="#">MPV</a></li>
                                            <li><a href="#">SUV</a></li>
                                            <li><a href="#">Couple</a></li>
                                            <li><a href="#">Convertible</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                </form>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                @foreach($vehicle as $index => $vehicle1)

                <div class="col-lg-4 col-md-6">
                    <div class="impl_fea_car_box">
                        <div class="impl_fea_car_img">
                            <img src="{{asset('vehicle_image/').'/'.$vehicle1->image}}" alt="" class="img-fluid impl_frst_car_img" />
                            <!-- <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" /> -->
                            <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                        </div>
                        <div class="impl_fea_car_data">
                            <h2><a href="single-vehicles/{{$vehicle1->id}}">
                    @foreach($car as $car1)
                    @if($car1->id == $vehicle1->car_id)
                    {{$car1->name}}
                    @endif
                    @endforeach
                            </a></h2>
                            <ul>
                                <li><span class="impl_fea_title">model</span>
                                    <span class="impl_fea_name">{{$vehicle1->vehicle_model}}</span></li>
                                <li><span class="impl_fea_title">Vehicle Status</span>
                                    <span class="impl_fea_name">{{$vehicle1->vehicle_status}}</span></li>
                                <li><span class="impl_fea_title">Color</span>
                                    <span class="impl_fea_name">{{$vehicle1->colour}}</span></li>
                            </ul>
                            <div class="impl_fea_btn">
                                <button class="impl_btn"><span class="impl_doller">AED {{$vehicle1->price}} </span><a href="single-vehicles/{{$vehicle1->id}}"><span class="impl_bnw">View Details</span></a></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                                    
                                    
                <!--pagination start-->
                <div class="col-lg-12 col-md-12">
                    <div class="impl_pagination_wrapper">
                        <nav aria-label="Page navigation example">
                            <!-- <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul> -->
                            <center>{{$vehicle->setPath(url()->full())}}</center>
                        </nav>
                    </div>
                </div>


                                </div>
                            </div>
                        </div>
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
    <script type="text/javascript" src="dist/js/plugin/nice_select/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="dist/js/custom.js"></script>
<script type="text/javascript">
$( "#search_lot" ).click(function() {
    var lot_number = $('#lot_number').val();
    window.location = "/single-vehicles/"+lot_number;
});

</script>
@endsection
    