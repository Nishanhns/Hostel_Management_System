
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center">
            <div>
                <img src="assets/images/logo.png" class="img-thumbnail">
            </div>


        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/home" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
				
<?php 
if ((session('role')=="Admin")){
?>				
                <li>
                    <a href="/hostel" class=" waves-effect">
                        <i class="mdi mdi-office-building"></i>
                        <span>Hostel</span>
                    </a>
                </li>
                <li>
                    <a href="/approve" class=" waves-effect">
                        <i class="mdi mdi-view-list"></i>
                        <span>Booking List</span>
                    </a>
                </li>
<?php } ?>    

				<li>
                    <a href="/booking" class=" waves-effect">
                        <i class="mdi mdi-file-account-outline"></i>
                        <span>Booking</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
