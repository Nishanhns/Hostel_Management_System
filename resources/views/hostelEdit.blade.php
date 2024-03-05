@extends("layouts.master")

@section("content")

        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Hostel Edit</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Hostel Edit</li>
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
                                
                                <h4 class="card-title mb-4">Hostel Edit</h4>

 <?php				

$result = DB::select(" SELECT `id`, `name`, `location`, `single_room`,`double_room` FROM `hostel` where id='$id'");
		foreach($result as $post)
			{
				$name = $post->name;
				$location = $post->location;
				$single_room = $post->single_room;
				$double_room = $post->double_room;
				
			}?>	                               

								
								<form class="needs-validation" novalidate action="hostelEdit01" method="post"> {{ csrf_field() }}
																		
									
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Hostel's Name</label>
										<div class="col-md-8">
											<input class="form-control" type="text" name="name" autofocus required placeholder="Type Hostel's Name" value="{{$name}}" >
										</div>
									</div>
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Address</label>
										<div class="col-md-8">
											<input class="form-control" type="text" name="address" autofocus required placeholder="Type Hostel's Address" value="{{$location}}" >
										</div>
									</div>
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Single Room</label>
										<div class="col-md-8">
											<input class="form-control" type="text" name="single_room" autofocus required placeholder="Type Available Single Room Number" value="{{$single_room}}">
										</div>
									</div>
									<div class="mb-3 row">
										<label for="example-text-input" class="col-md-4 col-form-label">Double Room</label>
										<div class="col-md-8">
											<input class="form-control" type="text" name="double_room" autofocus required placeholder="Type Available Double Room Number" value="{{$double_room}}">
										</div>
									</div>
									
									
									
									
									
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="invalidCheck"
                                                        required>
                                                    <label class="form-check-label ms-1" for="invalidCheck">Are you sure?</label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update</button>
									<input type="hidden" name="id" value="{{$id}}">
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


@endsection		
