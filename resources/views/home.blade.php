@extends("layouts.master")

@section("content")

        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Dashboard </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
<?php 
if ((session('role')=="Admin")){
?>				
					<div class="col-md-6 col-xl-3">
						<div class="card border border-primary">
                        <a href="/hostel">
							<div class="card">
								 <center><h1 class="text-black"><i class="mdi mdi-office-building"></i></h1></center>
									<center><h5 class="mt-0 text-black">Hostel</h5></center>
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="card border border-primary">
                        <a href="/approve">
							<div class="card">
								 <center><h1 class="text-black"><i class="mdi mdi-view-list"></i></h1></center>
									<center><h5 class="mt-0 text-black">Booking List</h5></center>
							</div>
						</a>
						</div>
					</div>					
<?php } ?>    
					<div class="col-md-6 col-xl-3">
						<div class="card border border-primary">
                        <a href="/booking">
							<div class="card">
								 <center><h1 class="text-black"><i class="mdi mdi-file-account-outline"></i></h1></center>
									<center><h5 class="mt-0 text-black">Booking</h5></center>
							</div>
						</a>
						</div>
					</div>
					
		   
		   
		   
				
				</div>



            </div>

            
            <!-- End Page-content -->

 


@endsection		