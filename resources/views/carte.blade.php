<!DOCTYPE html>
<html>
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Service publics</title>

    <!-- Scripts -->


    <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('./img/global.png') }}" width="50px" >
                Accueil
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/monde.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/africa.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/civc.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/civ.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/bnetd.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/escri.jpg" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> 
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Services</h2>
          <form class="form-inline">
            <div class="form-group">
                  <label for="donnees">Selectionner un service public :</label></br>
                   <select id="donnees" class="custom-select mr-sm-2">
            </div>
            <div class="form-group">
                  <label for="regions">Rechercher </label>
                  <select  id="regions"class="custom-select mr-sm-2"></select>
            </div>
            <div class="form-group ">
                   <label for="analyse">Effectuer une analyse pour le service</label>
                   <select  id='analyse'class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
         </form>
        </div>

      </div>
<table border = 1>
	<tr>
		<td valign = top>
			<div id = 'toc'>
      <table cellpadding="5" cellspacing="5" width="100%" >
    <tr>
      <td>
          <form>
  
                 <div class="form-group ">
                   <label for="region">Rechercher par region</label>
                   <select  id="region"class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="departement">Rechercher par departement</label>
                   <select  id='departement'class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="prefecture">Rechercher par sous prefecture</label>
                   <select  id='prefecture'class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="localite">Rechercher par localité </label>
                   <select  id='localite'class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="quartier">Rechercher par quartier </label>
                   <select  id='quartier'class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
             </form>
      </td>
     </tr>
  </table >
			</div>
		</td>
		<td>
			<div id = 'viewDiv' style='width:700px;height:500px'></div>
		</td>
	</tr>
	<tr>
		<td colspan = 2><div id = 'pages'>PAGES GOES HERE</div></td>
	</tr>
	<tr>
		<td colspan = 2><div id = 'attributetable'>ATTRIBUTE TABLE</div></td>
	</tr>
</table>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src = 'https://js.arcgis.com/4.16'></script>
  <script src = "js/toc.js"></script>
  <script src = "js/attributetable.js"></script>
  <link rel = "stylesheet" href = "https://js.arcgis.com/4.16/esri/css/main.css">  
  <script src = 'js/carte.js' ></script>

</body>
</html>