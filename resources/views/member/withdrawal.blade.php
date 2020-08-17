 @extends('member.layouts')
 @section('extra-css')
     <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/datatables.min.css">
 @endsection
@section('body-section')
<div class="app-content content">
 <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Withdrawal</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Add New Withdrawal
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="content-body">
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
        <!-- new task button -->
        <button id="add_new" style="width: 200px;" type="button" class="btn btn-primary add-task-btn btn-block my-1">
          <i class="bx bx-plus"></i>
          <span>New Withdrawal</span>
        </button>
        </div>
        <div class="card-content">
            <div class="card-body card-dashboard">
                <!-- <p class="card-text">In this Table Show All type of Salon Information, Booking Details and Payment Details.</p> -->
                                        
        <div class="table-responsive">
               
            <table class="table zero-configuration">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Amount</th> 
                    <th>Bank Name</th>  
                    <th>Account Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   @php $x=1 @endphp
                   @foreach ($withdrawal as $row)
                   <tr>
                    <td>{{$x}}</td>
                    <td>{{$row->amount}} AED</td>
                    <td>{{$row->bank_name}}</td>
                    <td>{{$row->account_name}}</td>
                    <td>
                    	@if($row->status == 0)
                    	Pending
                    	@elseif($row->status == 1)
                    	Approved
                        @elseif($row->status == 2)
                        Denied
                    	@endif
                    </td>
                    <td>
            <div class="dropdown">
                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                </span>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-125px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                  @if($row->status == 0)
                  <a onclick="Delete({{$row->id}})" class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> Delete</a>
                  @endif
                </div>
            </div>
                   </td>
                   </tr>
                  @php $x++ @endphp
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Amount</th> 
                    <th>Bank Name</th>  
                    <th>Account Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
            </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
            
</div>
</div>

 
<!-- Bootstrap Modal -->
<div class="modal fade" id="popup_modal" tabindex="-1" role="dialog" aria-labelledby="popup_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-grey-dark-5">
                <h6 class="modal-title" id="modal-title">Add New</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id">
                <input type="hidden" value="{{Auth::user()->id}}" name="member_id" id="member_id">

                <div class="form-group row">
		            <label class="col-md-3 label-control">Wallet</label>
		            <div class="col-md-9">
		              <input readonly value="{{$member->wallet}}" type="text" id="wallet" class="form-control" name="wallet">
		            </div>
	          	</div>

	          	<div class="form-group row">
		            <label class="col-md-3 label-control">Withdrawal Amount</label>
		            <div class="col-md-9">
		              <input type="text" id="amount" class="form-control" name="amount">
		            </div>
	          	</div>

	          	<div class="form-group row">
		            <label class="col-md-3 label-control">Bank Name</label>
		            <div class="col-md-9">
		              <input type="text" id="bank_name" class="form-control" name="bank_name">
		            </div>
	          	</div>

	          	<div class="form-group row">
		            <label class="col-md-3 label-control">Account Name</label>
		            <div class="col-md-9">
		              <input type="text" id="account_name" class="form-control" name="account_name">
		            </div>
	          	</div>

	          	<div class="form-group row">
		            <label class="col-md-3 label-control">Account Number</label>
		            <div class="col-md-9">
		              <input type="text" id="account_number" class="form-control" name="account_number">
		            </div>
	          	</div>

	          	<div class="form-group row">
		            <label class="col-md-3 label-control">IBan Number</label>
		            <div class="col-md-9">
		              <input type="text" id="iban_number" class="form-control" name="iban_number">
		            </div>
	          	</div>

                <div class="form-group">
                    <button onclick="Save()" id="saveButton" class="btn btn-primary btn-block mr-10" type="button">Add</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Bootstrap Modal -->
@endsection
@section('extra-js')
    <script src="/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="/app-assets/js/scripts/datatables/datatable.js"></script>
<script type="text/javascript">
$('.deposit').addClass('active');

var action_type;
$('#add_new').click(function(){
    $('#popup_modal').modal('show');
    $("#form")[0].reset();
    action_type = 1;
    $('#saveButton').text('Save');
    $('#modal-title').text('Add Withdrawal');
});

function Save(){
  var formData = new FormData($('#form')[0]);
  if(action_type == 1){
    $.ajax({
        url : '/member/save-withdrawal',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {                
            $("#form")[0].reset();
            $('#popup_modal').modal('hide');
            $('.zero-configuration').load(location.href+' .zero-configuration');
            toastr.success(data, 'Successfully Save');
        },error: function (data) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
            toastr.error(obj[0]);
      });
    }
    });
  }
  // else{
  //   $.ajax({
  //     url : '/member/update-deposit',
  //     type: "POST",
  //     data: formData,
  //     contentType: false,
  //     processData: false,
  //     dataType: "JSON",
  //     success: function(data)
  //     {
  //       console.log(data);
  //         $("#form")[0].reset();
  //          $('#popup_modal').modal('hide');
  //          $('.zero-configuration').load(location.href+' .zero-configuration');
  //          toastr.success(data, 'Successfully Update');
  //     },error: function (data) {
  //       var errorData = data.responseJSON.errors;
  //       $.each(errorData, function(i, obj) {
  //         toastr.error(obj[0]);
  //       });
  //     }
  //   });
  // }
}

// function Edit(id){
//   $.ajax({
//     url : '/member/deposit/'+id,
//     type: "GET",
//     dataType: "JSON",
//     success: function(data)
//     {
//       $('#modal-title').text('Update Deposit');
//       $('#save').text('Save Change');
//       $('input[name=name]').val(data.name);
//           $('input[name=image1]').val(data.image);
//       $('input[name=id]').val(id);
//       $('#popup_modal').modal('show');
//       action_type = 2;
//     }
//   });
// }

function Delete(id){
    var r = confirm("Are you sure");
    if (r == true) {
      $.ajax({
        url : '/member/withdrawal-delete/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success(data, 'Successfully Delete');
          $('.zero-configuration').load(location.href+' .zero-configuration');
        }
      });
    } 
}

$( "#amount" ).change(function() {
	var wallet = Number($("#wallet").val());
	var amount=Number($("#amount").val());

	if(wallet >= amount)
	{
	}
	else
	{
		alert('Given Amount is higher than Wallet Amount');
		$("#amount").val('');
		$("#amount").focus();
	}
});
</script>
@endsection