<?php
session_start();
if(file_exists("config/config.php")) require_once("config/config.php");
if(file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");


if(isset($_POST[page])) $page = $_POST[page];
if(isset($_GET[page])) $page = $_GET[page];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pro Mech Warsztat Samochodowy</title>
	<meta name="description" content="Pro Mech Warsztat Samochodowy" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo_intro.jpg" data-active-url="img/logo_warsztat.jpg" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Strona główna</a></li>
					<li><a href="#services">Usługi</a></li>
					<li><a href="#team">O nas</a></li>
					<li><a href="#pricing">Ceny</a></li>
					<?php
					if(!isset($_SESSION[login])) {
					?>
					<li><button type="button" onClick="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Zarejestruj się</button></li> 
					<li><button type="button" onClick="#" data-toggle="modal" data-target="#modal2" class="btn btn-blue">Zaloguj się</button></li>
					<?php
					}
					else{
					?>
					<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Witaj <?php echo $_SESSION[login]; ?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				<li><button type="dropdown button" onclick="window.location.href = 'index.php';" data-toggle="modal" class="btn btn-blue">Panel użytkownika</button></li>
				<?php
				}
				?>
					
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Zadbaj o swój samochód</h3>
							<h1 class="white typed">Zapewniamy profesjonalne naprawy</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Godziny otwarcia:</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Poniedziałek</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:00 - 20:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Wtorek</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:00 - 20:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Środa</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:00 - 20:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Czwartek</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:00 - 20:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Piątek</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:00 - 20:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Sobota</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:00 - 15:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Niedziela</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">Nieczynne</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Zniżka dla nowych klientów!</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Zarejestruj się już dzisiaj</h4>
							<h4 class="white heading small-pt">10% zniżki na części i usługi</h4>
							<a href="#" class="btn btn-white-fill expand">Zarejestruj się</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Setki zadowolonych klientów</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">Fachowa obsługa, niskie ceny</h4>
								<h5 class="white heading light author">Jan Kowalski</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Bardzo dobra jakość świadczonych usług przez warsztat, polecam</h4>
								<h5 class="white heading light author">Adam Nowak</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Jestem bardzo zadowolona z usługi wykonanej przez warsztat, jestem pewna, że tu wrócę</h4>
								<h5 class="white heading light author">Justyna Kowalska</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Usługi</h2>
				<h4 class="light muted">Zatrudniamy najlepszych fachowców w mieście, oferujemy szeroki zakres usług.</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/przeglad.jpg" alt="" class="icon">
						</div>
						<h4 class="heading">Przeglądy okresowe</h4>
						<p class="description">Stacja jest wyposażona w wysokiej klasy urządzenia kontrolne, przyrządy i urządzenia do przeprowadzania badań technicznych pojazdów posiadają aktualne certyfikaty.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/olej.jpg" alt="" class="icon">
						</div>
						<h4 class="heading">Wymiany oleju</h4>
						<p class="description">Przyjmuje się, że olej silnikowy powinien być wymieniany conajmniej raz na rok, lub po przejechaniu ok. 10-15 tys. km.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/elektromechanika.jpg" alt="" class="icon">
						</div>
						<h4 class="heading">Elektromechanika</h4>
						<p class="description">Zajmujemy się naprawą elektromechaniki w samochodach osobowych i dostawczych. Wykonujemy diagnostykę komputerową, awaryjne uruchamianie pojazdu i usuwamy inne usterki.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">O nas</h2>
				<h4 class="light muted">Jesteśmy specjalistami!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/wymolej.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">20zł</h3>
								<h5 class="light light-white">+ olej, filtr oleju</h5>
							</div>
						</div>
						<div class="title">
							<h4>Wymiana oleju</h4>
							<h5 class="muted regular">Wraz z filtrem</h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Zapisz się</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/zawieszenie.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">30zł</h3>
								<h5 class="light light-white">Kompletne sprawdzenie</h5>
							</div>
						</div>
						<div class="title">
							<h4>Sprawdzenie zawieszenia</h4>
							<h5 class="muted regular">Odbywa się na stacji diagnostycznej</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Zapisz się</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/wulkanizacja.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">50zł</h3>
								<h5 class="light light-white">Wymiana opon z wyważeniem</h5>
							</div>
						</div>
						<div class="title">
							<h4>Wulkanizacja</h4>
							<h5 class="muted regular">Szeroki zakres usług</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Zapisz się</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Ceny</h2>
				<h4 class="light white">Jesteś zawsze informowany o ewentualnych dodatkowych kosztach naprawy!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/mercedes.jpg">
							<h4 class="white">Przegląd wiosenny</h4>
							<h4 class="white regular light">300zł <span class="small-font"> + wykryte usterki</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Zapisz się</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>Sprawdzenie oświetlenia</li>
								<li>Sprawdzenie opon</li>
								<li>Kontrola zawieszenia</li>
								<li>Sprawdzenie hamulców</li>
								<li>Wymiana oleju i filtrów</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/audijasne.jpg">
							<h4 class="white">Przegląd podstawowy</h4>
							<h4 class="white regular light">100zł <span class="small-font"> + wykryte usterki</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Zapisz się</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>Wymiana oleju</li>
								<li>Wymiana filtra oleju</li>
								<li>Wymiana filtra powietrza</li>
								<li>Sprawdzenie oświetlenia</li>
								<li>Sprawdzenie hamulców</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-facebook"></i>
							<h4 class="white light">Znajdź nas na facebooku</h4>
							<h4 class="light-white light">Dziękujemy za pozytywne opinie</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">Zobacz wpisy na Twitterze</h4>
							<h4 class="light-white light">Zobacz nasze ciekawe naprawy</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-google-plus"></i>
							<h4 class="white light">Śledź naszą działalność w Internecie</h4>
							<h4 class="light-white light">Ciągle się rozwijamy</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="glowna.php" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Zarejestruj się</h3>
				<form action="rejestracja.php" class="popup-form" method="POST">
					<input type="text" name="login" class="form-control form-white" placeholder="Login">
					<input type="password" name="password" class="form-control form-white" placeholder="Hasło">
                    <input type="text" name="email" class="form-control form-white" placeholder="Email">
                    <input type="text" name="imie" class="form-control form-white" placeholder="Imię">
                    <input type="text" name="nazwisko" class="form-control form-white" placeholder="Nazwisko">
                    
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pojazd
						</button>
						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">Samochód osobowy</a></li>
							<li class="animated lightSpeedIn"><a href="#">Samochód dostawczy pow. 3.5t</a></li>
							<li class="animated lightSpeedIn"><a href="#">Motocykl</a></li>
						</ul>
					</div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>Zgadzam się z <strong>warunkami użytkowania serwisu</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Zapisz się!</button>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="glowna.php" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Zaloguj się</h3>
				<form action="logowanie.php" class="popup-form" method="POST">
					<input type="text" name="login" class="form-control form-white" placeholder="Login">
					<input type="password" name="password" class="form-control form-white" placeholder="Hasło" value="">
						
					<button type="submit" class="btn btn-submit">Zaloguj</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Gwarancja jakości i zadowolenia.</h3>
					<h5 class="light regular light-white">Zapraszamy do skorzystania z naszych usług.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Przewiń do góry</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Dzisiaj otwarte<span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Poniedziałek - Piątek</h5>
							<h3 class="regular white">8:00 - 20:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sobota</h5>
							<h3 class="regular white">8:00 - 15:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
