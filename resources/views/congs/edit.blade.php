<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>cheikhzaid</title>
    <!-- Favicon icon -->
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-cheikh-zaid.png">
    <link  rel="stylesheet" href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link  rel="stylesheet" href="../css/style.css">
	
	<!-- Pick date -->
    <link  rel="stylesheet" href="../vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="../vendor/pickadate/themes/default.date.css">
	
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
                <img class="logo-abbr" src="/images/logo-cheikh-zaid.png" alt=""><div href="" class="brand-title" style="font-size:16px">CHEIKH ZAID</div>
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
                                    <img src="/images/profile/education/pic1.jpg" width="20" alt="">
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
                                        <span class="ml-2">D??connecter </span>
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
	
						<li><a class="ai-icon" href="{{ url('/join') }}" aria-expanded="false">
								<i class="la la-calendar"></i>
								<span class="nav-text">Mouvement</span>
							</a>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-user"></i>
								<span class="nav-text">Personnels</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/personnel') }}">Liste Personnels</a></li>
								<li><a href="{{ url('/personnel/create') }}">Ajouter Personnel</a></li>
								
							</ul>
						</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-building"></i>
								<span class="nav-text">Services</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/service') }}">Liste Services</a></li>
								<li><a href="{{ url('/service/create') }}">Ajouter Service</a></li>
								
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-users"></i>
								<span class="nav-text">Demande de cong??s</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/demander') }}">Liste Demande de cong??s</a></li>
								<li><a href="{{ url('/demander/create') }}">Ajouter Demande de cong??s</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-th-list"></i>
								<span class="nav-text">Absences</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/absence') }}">Liste Absences</a></li>
								<li><a href="{{ url('/absence/create') }}">Ajouter Absence</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-book"></i>
								<span class="nav-text">Cong??s</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/cong') }}">Liste cong??s</a></li>
								<li><a href="{{ url('/cong/create') }}">Ajouter cong??</a></li>
							</ul>
						</li>
						
						<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
								<i class="la la-gift"></i>
								<span class="nav-text">Primes</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/prme') }}">Liste Primes</a></li>
								<li><a href="{{ url('/prme/create') }}">Ajouter Prime</a></li>
							</ul>
						</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-book"></i>
								<span class="nav-text">Types de cong??</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/typeconge') }}">Liste Types de cong??</a></li>
								<li><a href="{{ url('/typeconge/create') }}">Ajouter Type de cong??</a></li>
								
							</ul>
						</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-calendar"></i>
								<span class="nav-text">Jours f??ri??s</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/jour') }}">Liste Jours f??ri??s</a></li>
								<li><a href="{{ url('/jour/create') }}">Ajouter Jour f??ri??</a></li>																
							</ul>
						</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-file-text"></i>
								<span class="nav-text">Suivi cong??s</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/contenir') }}">Liste Suivi cong??s</a></li>
								<li><a href="{{ url('/contenir/create') }}">Ajouter Suivi cong??s</a></li>																
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
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Modifier cong??</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Cong??s</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Modifier cong??</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title"></h5>
							</div>
							<div class="card-body">
                                <form action="{{ url('cong/' .$congs->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    @method("PATCH")
									<div class="row">
                                         <input type="hidden" name="id" id="id" value="{{$congs->id}}" id="id" />
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Id type cong??</label>
												<input type="text" name="typeconge_id" id="typeconge_id" value="{{$congs->typeconge_id}}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date du d??but de cong??</label>
												<input type="text" name="date_debut" id="date_debut" value="{{$congs->date_debut}}" class="form-control"></br>
											</div>
										</div>
									    <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date du fin de cong??</label>
												<input type="text" name="date_fin" id="date_fin" value="{{$congs->date_fin}}" class="form-control"></br>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Modifier</button>
											
										</div>
									</div>
								</form>
                            </div>
                        </div>
                  
                
            </div>
        </div>
      
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        
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
    <script src="/vendor/global/global.min.js"></script>
	<script src="/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
	<script src="/js/dlabnav-init.js"></script>

	
	<!-- pickdate -->
    <script src="/vendor/pickadate/picker.js"></script>
    <script src="/vendor/pickadate/picker.time.js"></script>
    <script src="/vendor/pickadate/picker.date.js"></script>
	
	<!-- Pickdate -->
    <script src="/js/plugins-init/pickadate-init.js"></script>
	
</body>
</html>