<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perumda TUNAS | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Farro:wght@300&display=swap" rel="stylesheet"
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginvendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginfonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginfonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginvendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginvendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginvendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginvendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/loginvendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/logincss/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('cssAdmin/logincss/main.css')}}">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
            <div class="col-md-12 text-center" style="margin-bottom:-100px;">
                <h3 style="font-family: 'Farro', sans-serif;">
                    <b>Login Admin Dashboard</b>
                </h5>
            </div>
			<div class="wrap-login100  p-b-100">
                <form action="{{route('postlogin')}}" method="POST">
                @csrf
					<span class="login100-form-avatar">
						<img src="{{asset('cssAdmin/loginimages/avatar-01.jpg')}}" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email" autocomplete="off"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="{{asset('cssAdmin/loginvendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('cssAdmin/loginvendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('cssAdmin/loginvendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('cssAdmin/loginvendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('cssAdmin/loginvendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('cssAdmin/loginvendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('cssAdmin/loginvendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('cssAdmin/loginvendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('cssAdmin/loginjs/main.js')}}"></script>

</body>

</html>