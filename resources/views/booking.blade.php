@extends("layouts.master")

@section("content")

        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Hostel List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Hostel List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
           
					<div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                
@if(session()->has('alert'))
    <div class="alert alert-success">
        {{ session()->get('alert') }}
    </div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
								<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" >
                                    <thead>
                                        <tr>
                                            <th>Hostel Name</th>
                                            <th>Location</th>
                                            <th>Single rooms</th>
                                            <th>Double rooms</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
<?php				

$result = DB::select(" SELECT `id`, `name`, `location`, `single_room`,`double_room` FROM `hostel`");





		foreach($result as $post)
			{?>
										<tr>
                                            <td>{{$post->name}}</td>
                                            <td>{{$post->location}}</td>
                                            <td>{{$post->single_room}}</td>
                                            <td>{{$post->double_room}}</td>
                                            <th><a href="bookingNow?id={{$post->id}}" class="btn btn-primary waves-effect waves-light">Booking Now</a></th>
                                        </tr>
				
			<?php
			}
			?>
									
                                        
                                        
                                        
                                    </tbody>
                                </table>







                            </div>
                        </div>
                    </div>
					
		   
		   
		   
				
				</div>



            </div>

            
            <!-- End Page-content -->

 


@endsection		









@section("js")
<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
	type="text/css" />    

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
@endsection	