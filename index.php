<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bike Forever</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css'href='css/timepicki.css'/>
    <link rel='stylesheet' type='text/css'href='css/datepicker.css'/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/jquery-clockpicker.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png" id="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#apropos">A Propos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#reservation">Reservation</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#tarifs">Tarifs</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <?php
                        if(!isset($_SESSION['id'])) {?>
                        <li>
                            <a class="page-scroll" href="admin/admin.php"><i class="fa fa-user fa-2x"></i></a>
                        </li>
                        <?php
                    }
                    else{
                        ?>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-2x"></i> <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="connect_nav">
                                <li><a href=""><i class="fa fa-list-alt fa-lg"></i>Mon compte</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="admin/sign_off.php"><i class="fa fa-power-off fa-lg"></i>Se déconnecter</a></li>
                            </ul>
                        </li><?php } ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome To Our Studio!</div>
                    <div class="intro-heading">It's Nice To Meet You</div>
                    <a href="#" class="page-scroll btn btn-xl">Clique</a>
                </div>
            </div>
        </header>

        <!-- A Propos -->
        <section id="apropos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">A Propos</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End / A Propos -->

            <!-- Reservation -->
            <section id="reservation" class="bg-light-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Reservation</h2>
                            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <form method="post" action="">
                            <div class="col-md-6">
                                <br><br>
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="service-heading">Choisissez l'horaire</h4>
                                <input id="time_select" value="" data-default="20:48">
                            </div>
                            <div class="col-md-6">
                                <br><br>
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="service-heading">Choisissez un jour</h4>
                                <input id="datepicker" name="date" type="text" class="text-center">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <br><br><br><br><br><br>
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-xl">Reservez</button>
                        </div>
                        <!-- Modal -->
                        <?php include('modal.php'); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End / Reservation -->

        <!-- Tarifs -->
        <section id="tarifs">
           <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tarifs</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <h3 class="section-heading text-center tarifs">Temps et tarifs indicatifs forfait</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Trajet</th>
                                <th>Prix</th>
                                <th>Durée</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Paris Centre - Orly Ouest</td>
                                <td>70€</td>
                                <td>25 min</td>
                            </tr>
                            <tr>
                                <td>La Défense - Orly Ouest</td>
                                <td>80€</td>
                                <td>30 min</td>
                            </tr>
                            <tr>
                                <td>Paris Centre - Roissy CDG</td>
                                <td>85€</td>
                                <td>30 min</td>
                            </tr>
                            <tr>
                                <td>Paris Centre - Paris Centre</td>
                                <td>45€</td>
                                <td>~</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row text-center">
                <h3 class="section-heading text-center tarifs">Hors forfait</h3>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-mobile fa-stack-1x"></i>
                    </span>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-envelope-o fa-stack-1x"></i>
                    </span>
                    <h4 class="service-heading">Confirmation de la réservation</h4>
                    <p class="text-muted">Par Mail ou par SMS</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-cc-mastercard fa-stack-1x"></i>
                    </span>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-cc-visa fa-stack-1x"></i>
                    </span>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-cc-amex fa-stack-1x"></i>
                    </span>
                    <h4 class="service-heading">Paiement par CB, chèque</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- End / Tarifs -->

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    <!-- End / Clients -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/timepicki.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery-clockpicker.min.js"></script>

    <script type="text/javascript">
var input = $('#time_select');
input.clockpicker({
    donetext: 'OK'
});
</script>

    </script>
</body>

</html>
