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
    <style>
        .impl_fea_car_data {
    padding: 5px 12px;
    border: 1px solid #545454;
    text-align: center;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
}
.impl_fea_car_data ul li {
    list-style: none;
    width: 100%;
    display: inline-block;
    margin-bottom: 2px;
    position: relative;
    font-size: 12px;
}
.impl_fea_car_data h2 {
    font-size: 14px;
    font-weight: 500;
    padding-bottom: 2px;
    text-align: center;
}
.impl_fea_car_data ul {
    padding: 0px;
    margin: 0px;
    display: inline-block;
    text-align: center;
    padding-bottom: 5px;
}
.impl_fea_car_data ul li span.impl_fea_name {
    width: 50%;
    float: right;
    text-align: left;
    padding-left: 25px;
    text-transform: capitalize;
    font-family: serif;
}
.impl_btn {
    display: inline-block;
    height: 40px;
    line-height: 40px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    border-radius: 0px;
    padding: 0 10px;
    min-width: 120px;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-transform: uppercase;
    background-color: transparent;
    border: none;
    position: relative;
    z-index: 1;
}
.base-timer {
  position: relative;
  width: 300px;
  height: 300px;
}

.base-timer__svg {
  transform: scaleX(-1);
}

.base-timer__circle {
  fill: none;
  stroke: none;
}

.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}

.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}

.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}

.base-timer__path-remaining.orange {
  color: orange;
}

.base-timer__path-remaining.red {
  color: red;
}

.base-timer__label {
  position: absolute;
  width: 300px;
  height: 300px;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 48px;
}
    </style>
@endsection
@section('content')
    <!------ Breadcrumbs Start ------>
    <div class="impl_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$auction->auction_title}}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Total Vechle - <?php 
                                    $x=0;
                                    foreach(explode(',', $auction->vehicle_ids) as $value){
                                        $x++;
                                    } 
                                    ?>
                                    {{$x}}</a></li>
                       
                        <li class="breadcrumb-item active">1,089 Participants</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!------ Purchase Car Start ------>
<div class="impl_buy_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="impl_carparts_inner">
                        <div class="impl_buy_old_car">
                            <div class="slider slider-for">
                                @if(!empty($vehicle->image))
                                <div><img style="width: 700px;height: 400px;" src="{{asset('vehicle_image/').'/'.$vehicle->image}}" alt=""></div>
                                @endif
                                @foreach($vehicle_image as $row)
                                <div><img style="width: 700px;height: 400px;" src="{{asset('vehicle_image/').'/'.$row->image}}" alt=""></div>
                                @endforeach
                            </div>
                            <div class="slider slider-nav">
                                @if(!empty($vehicle->image))
                                <div>
                                    <div class="impl_thumb_ovrly"><img style="width: 100px;height: 100px;" src="{{asset('vehicle_image/').'/'.$vehicle->image}}" alt=""></div>
                                </div>
                                @endif
                                @foreach($vehicle_image as $row)
                                <div>
                                    <div class="impl_thumb_ovrly"><img style="width: 100px;height: 100px;" src="{{asset('vehicle_image/').'/'.$row->image}}" alt=""></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="impl_buycar_data">
                        <h1>{{$brand->name}} , {{$car->name}} </h1>
                        <h1>AED {{$vehicle->price}} </h1>
                        <div class="car_emi_wrapper">
                            <span>Emi Starts at $2400 /- *</span>
                            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Get EMI Assistance</a>
                        </div>
                        <div id="app"></div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="impl_old_buy_btn">
                            <a href="checkout.html" class="impl_btn">add to cart</a>
                            <a href="#" class="impl_btn">buy now</a>
                            <a href="compare.html" class="impl_btn">compare</a>
                        </div>
                    </div>
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
                    <p>{{$brand->name}}</p>
                    <p>{{$car->name}}</p>
                    <p>{{$vehicle->year}}</p>
                    <p>{{$vehicle->vin}}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>Location</h2>
                        <p>{{$vehicle->location}}</p>
                        <p>Doc Type : {{$vehicle->document_type}}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>FUEL ECONOMY</h2>
                        <p>{{$vehicle->fuel}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>ENGINE TYPE</h2>
                        <p>{{$vehicle->engine_type}}</p>
                        <p>{{$vehicle->cylinders}}</p>
                        <p>{{$vehicle->drive}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="impl_descrip_box">
                        <h2>TRANSMISSION</h2>
                        <p>{{$vehicle->transmission}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>Colour</h2>
                        <p>{{$vehicle->exterior_color}}</p>
                        <p>{{$vehicle->interior_color}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>VEHICLE TYPE</h2>
                    <p>{{$vehicle_type->name}}</p>
                    <p>{{$vehicle->body_type}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>HIGHLIGHTS</h2>
                        <p>{{$vehicle->highlights}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="impl_descrip_box">
                        <h2>ODOMETER</h2>
                        <p>{{$vehicle->odometer}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_heading">
                        <h1>Additional Info</h1>
                    </div>
                <?php echo html_entity_decode($vehicle->description); ?>
                </div>
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
                </div>
            @foreach($datas as $data)
             <div class="col-lg-3 col-md-4">
                <div class="impl_fea_car_box">
                    <div class="impl_fea_car_img">
                        <img style="width: 300px;height: 150px;" src="{{asset('vehicle_image/').'/'.$data['image']}}" alt="" class="img-fluid impl_frst_car_img">
                        <!-- <img src="/app-assets/images/featured/fea_car1_hover.jpg" alt="" class="img-fluid impl_hover_car_img"> -->
                    </div>
                    <div class="impl_fea_car_data">
                        <h2> <a href="#" onclick="viewDetails({{$data['vehicle_id']}})">{{$data['model']}}</a></h2>
                        <ul>
                            <li><span class="impl_fea_title">Lot</span>
                                <span class="impl_fea_name">{{$data['vehicle_id']}}</span>
                            </li>
                            <li><span class="impl_fea_title">Odo</span>
                                <span class="impl_fea_name">{{$data['odometer']}}</span>
                            </li>
                            <li><span class="impl_fea_title">Current Bid</span>
                                <span class="impl_fea_name">0</span>
                            </li>
                            <li><span class="impl_fea_title">Item</span>
                                <span class="impl_fea_name">0</span>
                            </li>
                        </ul>
                        <h2>On Reserve</h2>
                        <h2>{{$auction->auction_title}}</h2>
                    </div>
                </div>
            </div>
            @endforeach


           
            </div>
        </div>
    </div>




<style type="text/css">
            .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

</style>
<div class="modal fade product_view" id="popup_modal">
    <div class="modal-dialog">
        <div class="modal-content" id="view-details">
            
        </div>
    </div>
</div>
@endsection
@section('extra-js')
<script type="text/javascript">
function viewDetails(id)
{
    $.ajax({
    url : '/live-vehicle-quick-view/'+id,
    type: "GET",
    success: function(data)
    {
        $('#view-details').html(data);
        $('#popup_modal').modal('show');
    }
  });
}
</script>
<script>
    const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;

const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

const TIME_LIMIT = 20;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

startTimer();

function onTimesUp() {
  clearInterval(timerInterval);
}

function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) {
      onTimesUp();
    }
  }, 1000);
}

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}
</script>

    <script type="text/javascript" src="/dist/js/jquery.js"></script>
    <script type="text/javascript" src="/dist/js/popper.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/dist/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="/dist/js/plugin/magnific/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/dist/js/plugin/slick/slick.min.js"></script>
    <script type="text/javascript" src="/dist/js/custom.js"></script>

@endsection