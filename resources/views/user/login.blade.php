<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>RH-CHEIKH ZAID</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-cheikh-zaid.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Connectez à votre compte</h4>
                                    <div class="col-md-6">
                                        @if(session('success'))
                                        <p class="alert alert-success">{{ session('success') }}</p>
                                        @endif
                                        @if($errors->any())
                                        @foreach($errors->all() as $err)
                                        <p class="alert alert-danger">{{ $err }}</p>
                                        @endforeach
                                        @endif
                                        <form action="{{ route('login.action') }}" method="POST">
                                            @csrf
                                        <div class="mb-3">
                                        <div class="form-group" style="width: 25rem;">
                                            <label><strong>Identifiant</strong></label>
                                            <input class="form-control" placeholder="Username" type="username" name="username" value="" />
                                        </div>
                                    </div>
                                        <div class="mb-3">
                                        <div class="form-group" style="width: 25rem;">
                                            <label><strong>Mot de passe</strong></label>
                                            <input class="form-control" placeholder="Password" type="password" name="password" />
                                            <span toggle="#password-field" ></span>
                                        </div>
                                    </div>
                                        <div class="mb-3">
                                        <div class="text-center">
                                           
                                            <button class="btn btn-primary btn-block" style="width: 25rem;">Login</button>
                                        </div>
                                    </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

</body>

</html>