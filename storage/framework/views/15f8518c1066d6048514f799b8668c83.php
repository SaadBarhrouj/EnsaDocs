<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    
    
    
    <link rel="shortcut icon" href="<?php echo e(asset('assets/compiled/svg/favicon.svg')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="<?php echo e(asset('assets/compiled/css/app.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/compiled/css/app-dark.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/compiled/css/iconly.css')); ?>">

</head>

<body>
<script src="<?php echo e(asset('assets/static/js/initTheme.js')); ?>"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                        <a href="index.html">
    <img src="<?php echo e(asset('assets/compiled/png/logoo-removebg-preview.png')); ?>" 
         alt="Logo" 
         style="height: 80px; width: 90px; margin-top: 20px;">
</a>
                        </div>
                        <div class="theme-toggle d-flex gap-3 align-items-center mt-2">
                            <!-- Icône Dark Mode -->
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            

                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <!-- Accueil -->
                        <li class="sidebar-item active">
                            <a href="index.html" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Accueil</span>
                            </a>
                        </li>
                    
                        <!-- Demandes -->
                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-envelope-fill"></i>
                                <span>Demandes</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="historiquesdemandes.html" class="submenu-link">Historique de demandes</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="demandesencours.html" class="submenu-link">Demandes en cours</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Réclamations -->
                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Réclamations</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="historiquereclamations.html" class="submenu-link">Historique de réclamations</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="demandesencours.html" class="submenu-link">Réclamations en cours</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Déconnexion -->
                        <li class="sidebar-item">
                            <a href="logout.html" class="sidebar-link">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Déconnexion</span>
                            </a>
                        </li>
                    </ul>    
                </div>

                
            </div>
        </div>
        
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <div class="page-heading d-flex justify-content-between align-items-center">
                <h3>Profile Statistics</h3>
                <!-- Icône de notification -->
                <div class="dropdown">
                    <button class="btn btn-link" type="button" id="message-icon" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell-fill" style="font-size: 24px;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" id="message-list">
                        <li>
                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>: Vous avez une nouvelle réclamation.
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>: Votre demande a été mise à jour.
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <button class="dropdown-item" id="close-list-btn">
                                <i class="bi bi-x" style="font-size: 18px;"></i> Fermer
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            
            
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                <!-- Première carte -->
                <div class="col-12 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-start">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deuxième carte -->
                <div class="col-12 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-start">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Troisième carte -->
                <div class="col-12 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-start">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quatrième carte -->
                <div class="col-12 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-start">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Autres sections (tableau, graphiques, etc.) -->
            <section class="section">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="bar"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="line"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <table class="table table-striped">
                <thead class="table-dark">
                  <tr>
                    <th>Nom étudiant</th>
                    <th>Code Apogée</th>
                    <th>Email</th>
                    <th>Type de document</th>
                    <th>Date</th>
                    <th>Actions</th>
                    <th>Détails</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Exemples de données -->
                  
                    <tr>
                      <td>Amine Jaakike</td>
                      <td>123456</td>
                      <td>amine.jaakike@example.com</td>
                      <td>Attestation de scolarité</td>
                      <td>2024-12-12</td>
                      <td>
                        <button class="btn btn-success btn-sm me-1">Valider</button>
                        <button class="btn btn-danger btn-sm">Refuser</button>
                      </td>
                      <td>
                        <a href="details.html?id=123456" class="btn btn-primary btn-sm">
                         voir les détails
                        </a>
                      </td>
                    </tr>
                  <!-- Ajoutez plus de lignes ici -->
                </tbody>
              </table>
              
              <div></div>
            <!-- Tableau -->
            <table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nom étudiant</th>
            <th>Code Apogée</th>
            <th>Email</th>
            <th>Date de réclamation</th>
            <th>Type de document</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $reclamations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reclamation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($reclamation->nom); ?></td>
            <td><?php echo e($reclamation->code_apogee); ?></td>
            <td><?php echo e($reclamation->email); ?></td>
            <td><?php echo e($reclamation->date_envoi); ?></td>
            <td><?php echo e($reclamation->reclamation); ?></td>
            <td>
                <a href="#" class="btn btn-primary btn-sm">Voir les détails</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

        </div>
    </div>
        </div>
    </section>
</div>


<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2024 &copy; ENSA DOCS</p>
        </div>
       
    </div>
</footer>
        </div>
    </div>

 <script src="<?php echo e(asset('assets/static/js/components/dark.js')); ?>"></script>
<script src="<?php echo e(asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/compiled/js/app.js')); ?>"></script>

   

    
<!-- Need: Apexcharts -->
<script src="<?php echo e(asset('assets/extensions/chart.js/chart.umd.js')); ?>"></script>
<script src="<?php echo e(asset('assets/static/js/pages/ui-chartjs.js')); ?>"></script>
<script src="<?php echo e(asset('assets/extensions/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/static/js/pages/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('notification.js')); ?>"></script>

</body>

</html><?php /**PATH /home/youssef-ghannam/Downloads/EnsaDocs-demande/resources/views/dashboard.blade.php ENDPATH**/ ?>