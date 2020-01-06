<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Halaman Home </title>
        <!-- Favicon -->
        <!-- <link href="{{ asset('argon/assets/img/brand/favicon.png') }}" rel="icon" type="image/png"> -->
        <!-- Fonts -->
        <link href="" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon/assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('argon/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!--  CSS -->
        <link type="text/css" href="{{ asset('argon/assets/css/argon-dashboard.css') }}" rel="stylesheet">
    </head>

    <body style="overflow-x:hidden;">
        <!-- LOGIN PAGE -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 col-12">
			<form action="{{ route('login') }}" method="POST">
                @csrf
				<div class="card card-stats mt-4 mb-lg-0">
					<div class="card-body pt-5">
						<h1 class="text-uppercase text-center">Login page</h1>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-group input-group-alternative mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-circle-08"></i></span>
										</div>
										<input class="form-control form-control-alternative" placeholder="Username"
											type="text" name="username" required>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-group input-group-alternative mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-key-25"></i></span>
										</div>
										<input class="form-control form-control-alternative" placeholder="password"
											type="password" name="password" required>
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- END LOGIN PAGE -->

        <!-- Core -->
        <script src="{{ asset('argon/assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('argon/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!--  JS -->
        <script src="{{ asset('argon/assets/js/argon-dashboard.min.js') }}"></script>
    </body>

</html>