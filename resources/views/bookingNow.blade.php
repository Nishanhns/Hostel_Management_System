@extends("layouts.master")

@section("content")

        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Hostel Booking </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Hostel </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
@if(session()->has('alert'))
<div class="alert alert-success">
	{{ session()->get('alert') }}
</div>
<script src="assets/js/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
 window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
 });
</script>
@endif

                <div class="row">
  

                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
 <?php				

$result = DB::select(" SELECT `id`, `name`, `location`, `single_room`,`double_room` FROM `hostel` where id='$id'");
		foreach($result as $post)
			{
				$name = $post->name;
				$location = $post->location;
				$single_room = $post->single_room;
				$double_room = $post->double_room;
				
			}?>	                               
                                <h4 class="card-title mb-4">Hostel: {{$name}} <br>Location: {{$location}}</h4>
								
								<form class="custom-validation" novalidate action="bookingNow01" method="post"> {{ csrf_field() }}
																	
									
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Check-in</label>
										<div class="col-md-8">
											<input  autofocus type="date" class="form-control" name='checkin'>
										</div>
									</div>
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Check-out</label>
										<div class="col-md-8">
											<input  autofocus type="date" class="form-control" name='checkout'>
										</div>
									</div>
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Single Room</label>
										<div class="col-md-8">
											
											<input type="text" class="form-control" required data-parsley-max="{{$single_room}}"
                                                placeholder="{{$single_room}} Single Room Available"  name="single_room"/>
										</div>
									</div>
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Double Room</label>
										<div class="col-md-8">
											
											<input type="text" class="form-control" required data-parsley-max="{{$double_room}}"
                                                placeholder="{{$double_room}} Double Room Available"  name="double_room"/>
										</div>
									</div>
									
									<input type="hidden" name="id" value="{{$id}}">
									
									
									
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="invalidCheck"
                                                        required>
                                                    <label class="form-check-label ms-1" for="invalidCheck">Add Hostel Booking?</label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
							</div>
						</div>
					</div>



  
				
				</div>
            </div>

            
            <!-- End Page-content -->

 


@endsection		


@section("js")
<!-- validation init -->
<script src="assets/js/pages/form-validation.init.js"></script>
<!-- parsley plugin -->
<script src="assets/libs/parsleyjs/parsley.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


@endsection		
