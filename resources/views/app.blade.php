
<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>cheikhzaid</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-cheikh-zaid.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
	
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo-cheikh-zaid.png" alt=""><div href="" class="brand-title" style="font-size:16px">CHEIKH ZAID</div>
                <!-- <img class="logo-compact" src="images/logo-text-white.png" alt="">
                <img class="brand-title" src="images/logo-text-white.png" alt=""> -->
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown" style="font-size:20px;">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown"  >
                                <p>Welcome <b>{{ Auth::user()->name }}</b></p> 
                                </span>
                                <div class="dropdown-menu p-0 m-0" >
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                        
            
                            <li class="nav-item dropdown header-profile">
                            
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/education/pic1.jpg" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('register') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Registrer </span>
                                    </a>
                                    <a href="{{ route('password') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Changer le mot de passe</span>
                                    </a>
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Déconnecter </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                
					<ul class="metismenu" id="menu">
						<li class="nav-label first">Main Menu</li>
	
						<li><a class="ai-icon" href="event-management.html" aria-expanded="false">
								<i class="la la-calendar"></i>
								<span class="nav-text">Mouvement</span>
							</a>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-user"></i>
								<span class="nav-text">Personnels</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="all-professors.html">All Personnel</a></li>
								<li><a href="add-professor.html">Add Personnel</a></li>
								<li><a href="edit-professor.html">Edit Personnel</a></li>
								
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-users"></i>
								<span class="nav-text">Demande de congés</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="all-students.html">All Demande de congés</a></li>
								<li><a href="add-student.html">Add Demande de congés</a></li>
								<li><a href="edit-student.html">Edit Demande de congés</a></li>
								<li><a href="about-student.html">About Demande de congés</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-th-list"></i>
								<span class="nav-text">Absences</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="all-courses.html">All Absences</a></li>
								<li><a href="add-courses.html">Add Absences</a></li>
								<li><a href="edit-courses.html">Edit Absences</a></li>
								<li><a href="about-courses.html">About Absences</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-book"></i>
								<span class="nav-text">Congés</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="all-library.html">All Library</a></li>
								<li><a href="add-library.html">Add Library</a></li>
								<li><a href="edit-library.html">Edit Library</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-building"></i>
								<span class="nav-text">Services</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="all-departments.html">All Services</a></li>
								<li><a href="add-departments.html">Add Services</a></li>
								<li><a href="edit-departments.html">Edit Services</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-users"></i>
								<span class="nav-text">Staff</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="all-staff.html">All Staff</a></li>
								<li><a href="add-staff.html">Add Staff</a></li>
								<li><a href="edit-staff.html">Edit Staff</a></li>
								<li><a href="staff-profile.html">Staff Profile</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-gift"></i>
								<span class="nav-text">Primes</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="all-holiday.html">All Primes</a></li>
								<li><a href="add-holiday.html">Add Primes</a></li>
								<li><a href="edit-holiday.html">Edit Primes</a></li>
								<li><a href="holiday-calendar.html">Holiday Calendar</a></li>
							</ul>
						</li>
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				
            @yield('content')
							
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">BENBAR</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>	
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	
    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
</body>
</html>