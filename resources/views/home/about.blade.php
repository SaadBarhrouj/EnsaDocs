<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Ensa Docs</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />

  <!-- Google Fonts -->
   
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet" type="text/css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('style.css') }}" />

  <!-- Modernizr JS -->
  <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>


<header class="header-three">
  <div class="header-top">
    <div class="container">
      <div class="row">
      <div class="col-lg-7 col-md-8">
  <div class="header-top-info" style="display: flex; align-items: center; justify-content: space-between;">

    <div class="text-container">
      <div class="scrolling-text text-white">
        <i class="fa fa-clock-o"></i> Disponible 24/7 pour vos demandes de documents
      </div>
    </div>

   
    <div class="social-links">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-pinterest-p"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
</div>

<style>

.header-top-info {
  display: flex;
  align-items: center;
  justify-content: space-between;
}


.text-container {
  overflow: hidden; 
  white-space: nowrap; 
  width: 300px; 
  height: 30px;
  position: relative; 
}

.scrolling-text {
  display: inline-block;
  position: absolute;
  animation: scroll-text 5s linear infinite; 
  white-space: nowrap;
}


@keyframes scroll-text {
  0% {
    transform: translateX(100%); 
  }
  100% {
    transform: translateX(-100%); 
  }
}


.social-links {
  display: flex;
  gap: 10px; 
}

.social-links a {
  text-decoration: none; 
}

.social-links a i {
  color: inherit; 
  font-size: 16px; 
}
input.error {
    border: 2px solid red;
    background-color: #f8d7da;
}

input.disabled {
    background-color: #e9ecef;
    cursor: not-allowed;
}

small.error-message {
    color: red;
    font-size: 12px;
}

</style>

        <div class="col-lg-5 col-md-4">
          <div class="header-login-register">
            <ul class="login">
              <li>
                <a href="#"><i class="fa fa-key"></i>Connexion Administrateur</a>
                <div class="login-form">
                  <h4>Se connecter en tant qu'Administrateur</h4>
                  <form action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf 
                    <div class="form-box">
                        <i class="fa fa-user"></i>
                        <input type="text" name="nom" placeholder="Nom d'utilisateur" required />
                    </div>
                    <div class="form-box">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" placeholder="Mot de passe" required />
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
              <a href="{{ url('/') }}"><img src="{{ asset('img/6.png') }}" alt="logo" /></a>
            </div>
          </div>
          <div class="col-lg-9 d-none d-lg-block">
            <div class="mainmenu-area">
              <div class="mainmenu">
                <nav>
                  <ul id="nav">
                    <li class="current"><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('demande') }}">Demander un document</a></li>
                    <li><a href="{{ url('reclamation') }}">Réclamer</a></li>
                    <li><a href="{{ url('about') }}">À propos</a></li>
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
                <li class="current"><a href="{{ url('/') }}">Accueil</a></li>
                <li><a href="{{ url('demande') }}">Demander un document</a></li>
                <li><a href="{{ url('reclamation') }}">Réclamer</a></li>
                <li><a href="{{ url('about') }}">À propos</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Area end -->
</header>
   

<!--End of Breadcrumb Banner Area-->
<div class="about-area section-padding-bottom" style="margin-bottom:-80px " >
  <div class="container">
  
    <div class="row align-items-center" >
    <div class="col-md-12">
       
      </div>
      <div class="col-lg-6">
        <div class="about-text-container" style="text-align: justify; line-height: 2;">
        <p>
  Bienvenue sur <span style="color:#1BB4B9;">EnsaDocs</span>, une plateforme dédiée aux étudiants de l'ENSA Tétouan pour
  effectuer facilement leurs demandes de documents scolaires, tels que des relevés de notes, des
  attestations de scolarité, des conventions de stage, et des lettres de recommandation.
  <br />
  Développée par cinq étudiants en quatrième année de Génie Informatique à l'ENSA Tétouan, notre
  plateforme offre une solution simple, rapide et accessible pour vos démarches administratives.
</p>
<div class="about-us">
  <ul style="list-style: none; padding: 0;">
    <li><span>✔️ Accès direct aux demandes de documents</span></li>
    <li><span>✔️ Suivi en temps réel de vos demandes</span></li>
    <li><span>✔️ Envoi des documents demandés directement par email</span></li>
    <li><span>✔️ Notification par email en cas de refus avec la raison du refus</span></li>
    <li><span>✔️ Possibilité de réclamer en cas de retard ou de refus</span></li>
    <li><span>✔️ Support dédié pour toute question</span></li>
    <li><span>✔️ Processus simplifié pour une expérience optimale</span></li>
  </ul>
</div>

        </div>
      </div>
      <!-- Image -->
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="skill-image">
          <img src="img/about2.png" alt="Image de la plateforme ENSA Tétouan" style="max-width: 100%; height: auto;" />
        </div>
      </div>
    </div>
  </div>
</div>

<!--Activity Area Start-->
<div class="activity-area">
<div class="col-md-12">
        <div class="section-title-wrapper">
          <div class="section-title">
            <h3>Nos Services</h3>
            <p>Découvrez les services que nous proposons pour simplifier vos démarches administratives à l'ENSA Tétouan.
            </p>
          </div>
        </div>
      </div>
  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 activity">
        <div class="single-activity">
          <div class="single-activity-icon">
            <i class="fa fa-file"></i>
          </div>
          <h4>Demande de Relevé de Notes</h4>
          <p>
            Demandez votre relevé de notes officiel de l'ENSA Tétouan pour vos besoins académiques.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 activity">
        <div class="single-activity">
          <div class="single-activity-icon">
            <i class="fa fa-graduation-cap"></i>
          </div>
          <h4>Attestation de Scolarité</h4>
          <p>
            Obtenez une attestation de scolarité valide pour vos démarches administratives.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 activity">
        <div class="single-activity mrg-res-top-md">
          <div class="single-activity-icon">
            <i class="fa fa-suitcase"></i>
          </div>
          <h4>Convention de Stage</h4>
          <p>
            Demandez votre convention de stage pour valider vos expériences professionnelles.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 activity">
        <div class="single-activity mrg-res-top-md">
          <div class="single-activity-icon">
            <i class="fa fa-envelope"></i>
          </div>
          <h4>Lettre de Recommandation</h4>
          <p>
            Effectuez une demande pour obtenir une lettre de recommandation de l'ENSA Tétouan.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End of Activity Area-->

<!-- Carousel Start-->
<div class="teachers-column-carousel-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title-wrapper">
          <div class="section-title">
            <h3>Notre Équipe</h3>
            <p>Nous sommes heureux de vous présenter notre équipe de développeurs</p>
          </div>
        </div>
      </div>
    </div>
    <div class="teachers-column-carousel carousel-style-one owl-carousel">
      <!-- Membres de l'équipe -->
      <div class="single-teachers-column text-center" >
        <div class="teachers-image-column">
          <a href="teacher-info.html"><img src="img/kaoutar_profil_1.png" alt="Team Member" /></a>
        </div>
        <div class="teachers-content-column">
          <span>Étudiante en 4ᵉ année en Génie Informatique <br>Développeuse</span>
        </div>
        
      </div>
      <div class="single-teachers-column text-center">
        <div class="teachers-image-column">
          <a href="teacher-info.html"><img src="img/saad_profil_1.png" alt="Team Member" /></a>
        </div>
        <div class="teachers-content-column">
          <span>Étudiant en 4ᵉ année en Génie Informatique <br> Développeur</span>
        </div>
      </div>
      <div class="single-teachers-column text-center">
        <div class="teachers-image-column">
          <a href="teacher-info.html"><img src="img/nada_profil_1.png" alt="Team Member" /></a>
        </div>
        <div class="teachers-content-column">
          <span>Étudiante en 4ᵉ année en Génie Informatique <br> Développeuse</span>
        </div>
      </div>
      <div class="single-teachers-column text-center">
        <div class="teachers-image-column">
          <a href="teacher-info.html"><img src="img/mohamed_profil_1.png" alt="Team Member" /></a>
        </div>
        <div class="teachers-content-column">
          <span>Étudiant en 4ᵉ année en Génie Informatique <br> Développeur</span>
        </div>
      </div>
      <div class="single-teachers-column text-center">
        <div class="teachers-image-column">
          <a href="teacher-info.html"><img src="img/amine_profil_2.png"alt="Team Member" /></a>
        </div>
        <div class="teachers-content-column">
          <span>Étudiant en 4ᵉ année en Génie Informatique <br> Développeur</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Column Carousel End-->

   <!-- Footer Area -->
 <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-info-container text-center section-padding">
              <div class="footer-logo">
                <a href="#"><img src="img/6.png" alt="" style="width: 30%; margin-bottom: 10px;" /></a>
              </div>
              <div class="footer-info">
                <span
                  ><i class="fa fa-map-marker"></i>ENSA de Avenue de la Palestine Mhanech I, Tétouan</span >
                <span
                  ><i class="fa fa-envelope"></i>saad.barhrouj@etu.uae.ac.ma</span
                >
                <span><i class="fa fa-phone"></i>+212 2345 - 6789</span>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-widget-container section-padding">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single-footer-widget">
                <h4>Services</h4>
            <ul class="footer-widget-list">
            <li><a href="{{ url('demande') }}">Demander un document</a></li>
                    <li><a href="{{ url('reclamation') }}">Réclamer</a></li>
                    <li><a href="{{ url('about') }}">À propos</a></li>
            </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single-footer-widget">
                <h4>Services</h4>
                <ul class="footer-widget-list">
                 <li><a  href="{{ url('demande') }}">Demande de Relevé de Notes</a></li>
                 <li><a href="{{ url('demande') }}">Demande d'Attestation de Scolarité</a></li>
                 <li><a href="{{ url('demande') }}"> Demande de Convention de Stage</a></li>
                 <li><a href="{{ url('demande') }}">  Demande de Lettre de Recommandation</a></li>
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
                    <a href="#">Ensa Tetouan</a>. Tous droits réservés</span
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
    <!-- Scripts -->
    <script src="{{ asset('js/vendor/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('lib/nivo-slider/home.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
      document.getElementById('student-form2').addEventListener('submit', function(event) {
        event.preventDefault();
        this.submit();
      });
    </script>

  </body>
</html>
