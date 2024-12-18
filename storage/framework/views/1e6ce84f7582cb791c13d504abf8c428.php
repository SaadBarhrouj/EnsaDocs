<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Ensa Docs</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.ico')); ?>" />

  <!-- Google Fonts -->
   
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet" type="text/css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>" />

  <!-- Modernizr JS -->
  <script src="<?php echo e(asset('js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
</head>

<body>

<!-- Header Area Start -->
<header class="header-three">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-8">
          <div class="header-top-info">
            <span><i class="fa fa-clock-o"></i>Disponible 24/7 pour vos demandes de documents</span>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-pinterest-p"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-4">
          <div class="header-login-register">
            <ul class="login">
              <li>
                <a href="#"><i class="fa fa-key"></i>Connexion Administrateur</a>
                <div class="login-form">
                  <h4>Se connecter en tant qu'Administrateur</h4>
                  <form action="#" method="post">
                    <div class="form-box">
                      <i class="fa fa-user"></i>
                      <input type="text" name="user-name" placeholder="Nom d'utilisateur" />
                    </div>
                    <div class="form-box">
                      <i class="fa fa-lock"></i>
                      <input type="password" name="user-password" placeholder="Mot de passe" />
                    </div>
                    <div class="button-box">
                      <button type="submit" class="login-btn">Connexion</button>
                    </div>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Logo Mainmenu Start -->
  <div class="header-logo-menu sticker">
    <div class="container">
      <div class="logo-menu-bg">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="logo">
              <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/6.png')); ?>" alt="logo" /></a>
            </div>
          </div>
          <div class="col-lg-9 d-none d-lg-block ">
            <div class="mainmenu-area">
              <div class="mainmenu">
                <nav>
                  <ul id="nav">
                    <li class="current"><a href="<?php echo e(url('/')); ?>">Accueil</a></li>
                    <li><a href="<?php echo e(url('demande')); ?>">Demander un document</a></li>
                    <li><a href="<?php echo e(url('reclamation')); ?>">Réclamer</a></li>
                    <li><a href="#">À propos</a></li>
                  </ul>
                </nav>
              </div>
              <ul class="header-search">
                <li class="search-menu">
                  <i id="toggle-search" class="fa fa-search"></i>
                </li>
              </ul>
              <!-- Search Form -->
              <div class="search">
                <div class="search-form">
                  <form id="search-form" action="#">
                    <input type="search" placeholder="recherchez ici..." name="search" />
                    <button type="submit">
                      <span><i class="fa fa-search"></i></span>
                    </button>
                  </form>
                </div>
              </div>
              <!-- End of Search Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Logo Mainmenu -->

  <!-- Mobile Menu Area start -->
  <div class="mobile-menu-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul>
                <li class="current"><a href="<?php echo e(url('/')); ?>">Accueil</a></li>
                <li><a href="<?php echo e(url('demande')); ?>">Demander un document</a></li>
                <li><a href="<?php echo e(url('reclamation')); ?>">Réclamer</a></li>
                <li><a href="#">À propos</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Area end -->
</header>
<!-- End Header Area -->

<!-- Slider Area Start -->
<div class="slider-area slider-three-area">
  <div class="preview-2">
    <div id="nivoslider" class="slides">
      <img src="<?php echo e(asset('img/5.png')); ?>" alt="" title="#slider-1-caption2" />
      <img src="<?php echo e(asset('img/5.png')); ?>" alt="" title="#slider-1-caption2" />
    </div>
    <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
      <div class="banner-content slider-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="text-content hidden-xs">
                <h1 class="title1">Demandez vos documents en ligne</h1>
                <p class="sub-title">Services rapides pour <br> les étudiants de l'ENSA</p>
                <div class="banner-readmore">
                  <a title="Read more" href="<?php echo e(url('demande')); ?>">Demander maintenant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Duplicate Caption if needed -->
    <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
      <div class="banner-content slider-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="text-content hidden-xs">
                <h1 class="title1">Demandez vos documents en ligne</h1>
                <p class="sub-title">Services rapides pour <br> les étudiants de l'ENSA</p>
                <div class="banner-readmore">
                  <a title="Read more" href="<?php echo e(url('demande')); ?>">Demander maintenant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Slider Area -->

<!-- Advertise Area Start -->


<div class="advertise-area text-center section-sea-green"  style="background-color: #f5b120;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 >
          Vous avez déjà une demande ? <span>Réclamer ici</span>
        </h2>
        <a href="<?php echo e(url('reclamation')); ?>">Soumettre la réclamation</a>
      </div>
    </div>
  </div>
</div>
<!-- End of Advertise Area -->


 <!-- Footer Area -->

 <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-info-container text-center section-padding">
              <div class="footer-logo">
                <a href="#"><img src="img/6.png" alt="" style="width: 40%; margin-bottom: 10px;" /></a>
              </div>
              <div class="footer-info">
                <span
                  ><i class="fa fa-map-marker"></i>ENSA de Avenue de la Palestine Mhanech I, Tétouan</span >
                <span
                  ><i class="fa fa-envelope"></i>admin@uae.ac.ma</span
                >
                <span><i class="fa fa-phone"></i>+212 2345 - 6789</span>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-widget-container section-padding">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4">
              <div class="single-footer-widget">
                <h4>Services</h4>
            <ul class="footer-widget-list">
              <li><a href="#">À propos</a></li>
              <li><a href="#">Demander un document</a></li>
              <li><a href="#">Réclamer</a></li>
            </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
              <div class="single-footer-widget">
                <h4>Services</h4>
                <ul class="footer-widget-list">
                  <li><a href="#">À propos</a></li>
                  <li><a href="#">Demander un document</a></li>
                  <li><a href="#">Réclamer</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
              <div class="single-footer-widget">
                <h4>Services</h4>
            <ul class="footer-widget-list">
              <li><a href="#">À propos</a></li>
              <li><a href="#">Demander un document</a></li>
              <li><a href="#">Réclamer</a></li>
            </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="subscribe-container">
                <p>Si vous avez besoin d'informations urgentes, veuillez entrer votre email pour recevoir des mises à jour importantes.</p>
                <form action="#">
                  <div class="subscribe-form">
                    <input type="email" name="email" placeholder="Votre email ici" required />
                    <button type="submit"><i class="fa fa-send"></i></button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-container">
              <div class="row">
                <div class="col-lg-6">
                  <span
                    >&copy; 2024
                    <a href="#">Ensa Docs</a>. Tous droits réservés</span
                  >
                </div>
                <div class="col-lg-6">
                  <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Footer and Scripts -->
<script src="<?php echo e(asset('js/vendor/jquery-1.12.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap-toggle.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/nivo-slider/js/jquery.nivo.slider.js')); ?>"></script>
<script src="<?php echo e(asset('lib/nivo-slider/home.js')); ?>"></script>
<script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.meanmenu.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.countdown.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.slicknav.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\PC\Desktop\ensadocs\mail\EnsaDocs\resources\views/home/index.blade.php ENDPATH**/ ?>