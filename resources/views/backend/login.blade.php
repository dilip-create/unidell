<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>CbTicket - Admin Panel</title>
	<!-- Favicon-->
	<link rel="icon" href="{{ url('') }}/public/assets/users/img/add-notes.png" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="{{ url('') }}/public/assets/backend/css/app.min.css" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{ url('') }}/public/assets/backend/css/style.css" rel="stylesheet" />
	<link href="{{ url('') }}/public/assets/backend/css/pages/extra_pages.css" rel="stylesheet" />

	 {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
</head>

<body class="login-page">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ url('adlogin') }}" method="post">
					@csrf 
					<span class="login100-form-logo">
						<img alt="" src="{{ url('') }}/public/assets/backend/images/admin.jpg">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="email" id="exampleInputEmail1" placeholder="Username">
						<i class="material-icons focus-input1001">person</i>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="exampleInputPassword1" placeholder="Password">
						<i class="material-icons focus-input1001">lock</i>
					</div>
					<div class="contact100-form-checkbox">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> Remember me
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Plugins Js -->

	<script src="{{ url('') }}/public/assets/backend/js/app.min.js"></script> 

	<!-- Extra page Js -->
	<script src="{{ url('') }}/public/assets/backend/js/pages/examples/pages.js"></script>
	


{{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('warning'))
                toastr.error('{{ Session::get('warning') }}');
            @elseif(Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script>
</body>

</html>