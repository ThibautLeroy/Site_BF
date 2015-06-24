<html>
<head>
	<title></title>
	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/agency.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	        <![endif]-->
	    </head>
	    <body id="connect">

	    	<nav class="navbar navbar-default">
	    		<div class="container">
	    			<!-- Brand and toggle get grouped for better mobile display -->
	    			<div class="navbar-header page-scroll">
	    				<a class="navbar-brand page-scroll" href="../index.php"><img src="../img/logo.png" id="logo"></a>
	    			</div>

	    			<!-- /.navbar-collapse -->
	    		</div>
	    		<!-- /.container-fluid -->
	    	</nav>
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 col-md-offset-3">
	    				<div class="panel panel-login">
	    					<div class="panel-heading">
	    						<div class="row">
	    							<div class="col-xs-6">
	    								<a href="#" class="active" id="login-form-link">Se connecter</a>
	    							</div>
	    							<div class="col-xs-6">
	    								<a href="#" id="register-form-link">Créer un compte</a>
	    							</div>
	    						</div>
	    						<hr>
	    					</div>
	    					<div class="panel-body">
	    						<div class="row">
	    							<div class="col-lg-12">
	    								<form id="login-form" action="connexion.php" method="post" role="form" style="display: block;">
	    									<div class="form-group">
	    										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
	    									</div>
	    									<div class="form-group">
	    										<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Mot de passe">
	    									</div>
	    									<div class="form-group text-center">
	    										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
	    										<label for="remember"> Remember Me</label>
	    									</div>
	    									<div class="form-group">
	    										<div class="row">
	    											<div class="col-sm-6 col-sm-offset-3">
	    												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se connecter">
	    											</div>
	    										</div>
	    									</div>
	    									<div class="form-group">
	    										<div class="row">
	    											<div class="col-lg-12">
	    												<div class="text-center">
	    													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
	    												</div>
	    											</div>
	    										</div>
	    									</div>
	    								</form>
	    								<form id="register-form" action="inscription.php" method="post" role="form" style="display: none;">
	    									<div class="form-group">
	    										<div class="row">
	    											<div class="col-sm-6">
	    												<div class="form-group">  
	    													<input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="">
	    												</div>
	    											</div>
	    											<div class="col-sm-6">
	    												<input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prenom" value="">
	    											</div>
	    										</div>
	    									</div>
	    									<div class="form-group">
	    										<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="">
	    									</div>
	    									<div class="form-group">
	    										<input type="password" name="pass" id="pass" class="form-control" placeholder="Mot de passe">
	    									</div>
	    									<div class="form-group">
	    										<input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirmer le mot de passe">
	    									</div>
	    									<div class="form-group">
	    										<input type="text" name="phone" id="phone" class="form-control" placeholder="Téléphone">
	    									</div>
	    									<div class="form-group">
	    										<div class="row">
	    											<div class="col-sm-6 col-sm-offset-3">
	    												<input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-register" value="Créez votre compte">
	    											</div>
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
	    </body>

	    <!-- jQuery -->
	    <script src="../js/jquery.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="../js/bootstrap.min.js"></script>

	    <!-- Custom Theme JavaScript -->
	    <script src="../js/agency.js"></script>
	    <script src="../js/modal.js"></script>
	    </html>