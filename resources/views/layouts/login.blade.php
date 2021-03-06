
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themekita.com/demo-millenium-bootstrap/millenium/examples/demo1/login3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 03:57:49 GMT -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://themekita.com/demo-millenium-bootstrap/millenium/examples/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="template/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['template/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="template/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="template/assets/css/millenium.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login wrapper-login-full p-0">
		<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
			<h1 class="title fw-bold text-white mb-3">Join Our Comunity</h1>
			<p class="subtitle text-white op-7">Ayo bergabung dengan komunitas kami untuk masa depan yang lebih baik</p>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
			
			@yield('content_login')

		</div>
	</div>
	<script src="template/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="template/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="template/assets/js/core/popper.min.js"></script>
	<script src="template/assets/js/core/bootstrap.min.js"></script>
	<script src="template/assets/js/millenium.min.js"></script>
</body>

<!-- Mirrored from themekita.com/demo-millenium-bootstrap/millenium/examples/demo1/login3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 03:57:49 GMT -->
</html>