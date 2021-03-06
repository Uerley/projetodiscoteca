<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        

        	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="/img/icons/icon-discoteca.png"/>
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/css/util.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">
        
	<!--===============================================================================================-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    	<link href="/css/styles.css" rel="stylesheet" />
      
    </head>
    <body>
		
   
    		<!-- Navigation-->
       <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="markteplace.html">MarketPlace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts/criar">Adicionar disco</a>
                    </li>
                </ul>
			</div>
			<div class="mx-auto order-0">
				<a class="navbar-brand mx-auto" href="#">Museu do Vinil</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="registro.html">Registrar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.html">Login</a>
					</li>
				</ul>
			</div>
		</nav>
		<header class="masthead">
            <div class="container">
                <div class="input-group-prepend">
                    <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Search">  

                </div>    
            </div>
        </header>
	@yield('content')
   	<footer class="footer py-lg-5">
            <div class="container dark">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Museu do Vinil</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-github"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!"><i class="fa fa-envelope"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-light text-decoration-none me-3" href="posts.html">Not??cias</a>
                        <a class="link-light text-decoration-none" href="markteplace.html">MarktePlace</a>
                    </div>
                </div>
            </div>
        </footer>

        <!--===============================================================================================-->
		<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/bootstrap/js/popper.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/daterangepicker/moment.min.js"></script>
		<script src="/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/countdowntime/countdowntime.js"></script>
		
	<!--===============================================================================================-->
		<script src="/js/main.js"></script>
    </body>
</html>