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
                                    <h4 class="text-center mb-4">Register un compte</h4>
                                    @if($errors->any())
                                     @foreach($errors->all() as $err)
                                    <p class="alert alert-danger" style="width: 25rem;">{{ $err }}</p>
                                    @endforeach
                                     @endif
                                     <form action="{{ route('register.action') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Name</strong></label>
                                            <input type="text" class="form-control" placeholder="name"  name="name" value="{{ old('name') }}" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input  class="form-control" placeholder="username"  type="username" name="username" value="{{ old('username') }}" />
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input class="form-control" type="password" name="password" />
                                            <span toggle="#password-field" ></span>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Confirm Password</strong></label>
                                            <input class="form-control" type="password" name="password_confirm" />
                                            <span toggle="#password-field" ></span>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Enregister</button>
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
    <script src="js/dlabnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>