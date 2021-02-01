<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | SD Negeri Sumbergandu</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" sizes="76x76" href="{{asset('admin/assets/img/icon.jpg')}}">
	<link rel="icon" type="image/jpg" sizes="96x96" href="{{asset('admin/assets/img/icon.jpg')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"></div>
								<p class="lead">Silahkan Login</p>
							</div>
							<form class="form-auth-small" action="{{ route('post.login') }}" method="POST">
								@csrf
								<div class="form-group">
									<label for="username" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="username" placeholder="Username" name="username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" placeholder="Password" name="password">
								</div>
								<div class="form-group clearfix"></div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<p class="copyright">Copyright © <script>document.write(new Date().getFullYear());</script>. Dikembangkan Oleh <a href="#" target="_blank"> TIF UNIPMA</a>
									</p>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Website Sekolah SD Negeri Sumbergandu</h1>
							<p>by - TIF UNIPMA</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
