@extends('page.app')
@section('extra-css')
	<link rel="stylesheet" type="text/css" href="dist/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
@endsection
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>contact</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Contact Wrapper Start ------>
    <div class="impl_contact_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <div class="impl_con_form">
                        <div class="contact_map">
                          <?php echo html_entity_decode($site_info->map_iframe); ?>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <h1>get in touch</h1>
                        </div>
                        <form>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control require" placeholder="YOUR NAME">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control require" placeholder="YOUR EMAIL" data-valid="email" data-error="Email should be valid.">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="SUBJECT">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="YOUR MESSAGE"></textarea>
                                </div>
                            </div>
                            <div class="response"></div>
                            <div class="col-lg-12 col-md-12">
                                <input type="hidden" name="form_type" value="contact">
                                <button type="button" class="impl_btn submitForm">post comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="impl_contact_info">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="impl_contact_box">
                                    <div class="impl_con_data">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h2>phone</h2>
                                        <p>{{$site_info->mobile_1}}</p>
                                        <p>{{$site_info->mobile_2}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="impl_contact_box">
                                    <div class="impl_con_data">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <h2>address</h2>
                                        <p>{{$site_info->address}}<br>{{$site_info->city}} , {{$site_info->state}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="impl_contact_box">
                                    <div class="impl_con_data">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <h2>E - mail</h2>
                                        <p><a href="#">{{$site_info->email_1}}</a></p>
                                        <p><a href="#">{{$site_info->email_2}}</a></p>
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

<!--Main js file Style-->
    <script type="text/javascript" src="dist/js/jquery.js"></script>
    <script type="text/javascript" src="dist/js/popper.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/js/contact_form.js"></script>
    <script type="text/javascript" src="dist/js/custom.js"></script>
    <!--Main js file End-->
    
	

@endsection