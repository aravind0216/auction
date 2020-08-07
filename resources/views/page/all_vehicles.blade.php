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
                <div class="col-lg-6 col-md-6">
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
                </div>
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
                                <div class="impl_sidebar">
                                    <div class="impl_product_search widget woocommerce">
                                        <div class="impl_footer_subs">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <button class="foo_subs_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <!--Brands-->
                                    <div class="impl_product_brand widget woocommerce">
                                        <h2 class="widget-title">brands</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
												Paradox
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												Voyage
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Passion
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Curiosity
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Ivory
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Dawn
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Temper
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Thunder
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Blade
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Origin 
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Titan
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Dominion
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Ferocity
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Tempest
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Flow
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Prime
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Grit
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Nimbus
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Essence
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
											Aura
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Colors-->
                                    <div class="impl_product_color widget woocommerce">
                                        <h2 class="widget-title">color</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
												black
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												blue
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												white
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												yellow
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												red
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												grey 	
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												brown
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
												orange
												<input type="checkbox" name="check"> 
												<span class="label-text"></span>
											</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Price Range-->
                                    <div class="impl_product_price widget woocommerce">
                                        <h2 class="widget-title">price range</h2>
                                        <div class="price_range">
                                            <input type="text" id="range_24" name="ionRangeSlider" value="" />
                                        </div>
                                    </div>
                                    <!--Car Type-->
                                    <div class="impl_product_type widget woocommerce">
                                        <h2 class="widget-title">car type</h2>
                                        <ul>
                                            <li><a href="#">Hatchback</a></li>
                                            <li><a href="#">Sedan</a></li>
                                            <li><a href="#">MPV</a></li>
                                            <li><a href="#">SUV</a></li>
                                            <li><a href="#">Couple</a></li>
                                            <li><a href="#">Convertible</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car1.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles">Aurora</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Aurora 811</span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">white</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--2-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car2.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles">Serpent</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Serpent EB </span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">blue</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--3-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car3.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles">Basilisk</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Basilisk 811</span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">white</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--4-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car4.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles">Mirage</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Mirage</span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">white</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--5-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car5.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles"> Realm</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Realm EB </span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">black</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--6-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car6.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpgfff" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles"> Empire</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Empire</span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">yellow</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--7-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car7.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles">Universe</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Universe 	</span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">yellow</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--8-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car8.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles">Dawn</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Dawn Z06</span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li>
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">yellow</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--9-->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="impl_fea_car_box">
                                            <div class="impl_fea_car_img">
                                                <img src="dist/images/product/fea_car9.jpg" alt="" class="img-fluid impl_frst_car_img" />
                                                <img src="dist/images/product/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img" />
                                                <span class="impl_img_tag" title="compare"><a href="/compare"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                            </div>
                                            <div class="impl_fea_car_data">
                                                <h2><a href="/single-vehicles">Nissan</a></h2>
                                                <ul>
                                                    <li><span class="impl_fea_title">model</span>
                                                        <span class="impl_fea_name">Crux Z06</span></li>
                                                    <li><span class="impl_fea_title">Vehicle Status</span>
                                                        <span class="impl_fea_name">new</span></li> 	
                                                    <li><span class="impl_fea_title">Color</span>
                                                        <span class="impl_fea_name">yellow</span></li>
                                                </ul>
                                                <div class="impl_fea_btn">
                                                    <button class="impl_btn"><span class="impl_doller">AED 72000 </span><a href="/single-vehicles"><span class="impl_bnw">View Details</span></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--pagination start-->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="impl_pagination_wrapper">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                </ul>
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

@endsection
    