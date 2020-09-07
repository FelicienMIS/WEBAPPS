<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cartographie</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"></a></h1>


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Accueil</a></li>
          <li><a href="#clients">Partenaire</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#carte">Carte</a></li>
          <li class="drop-down"><a href="">Outils</a>
            <ul>
              <li><a href="#">Telecharger la liste des services publics</a></li>
              <li><a href="#">Telecharger la brochure de l'application</a></li>
              <li><a href="/invoice">Payement</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('login') }}"class="get-started-btn scrollto">se connecter </a>

    </div>
  </header>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h2>Découvrez les services publics ivoirien sur une carte près de chez vous, contactez-les facilement et rapidement..</h2>
      <div class="d-flex">
        <a href="/carte" class="btn-get-started scrollto">Lancer vous</a>
        <a href="https://www.youtube.com/watch?v=_VrWeJov7jM" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Voir la vidéo <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section>

    <!-- ======= Clients Section ======= -->
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
    </section><!-- End Clients Section -->

    <!-- ======= Services Section =======
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <form class="form-inline">
            <div class="form-group">
                  <label for="donnees">Selectionner un service public :</label></br>
                   <select id="donnees" class="custom-select mr-sm-2">
            </div>
            <div class="form-group">
                  <label for="region">Rechercher par region</label>
                  <select  id="region"class="custom-select mr-sm-2"></select>
            </div>
         </form>
  <table cellpadding="5" cellspacing="5" width="100%" >
    <tr>
      <td>
          <form>
               <fieldset class="scheduler-border">
                 <legend>Localisé le service public</legend>
                 <div class="form-group ">
                   <label for="region">Rechercher par region</label>
                   <select  id='region'class="custom-select mr-sm-2"></select>
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
                 <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
                 <div class="d-flex">
                <a href="#carte" class="btn-get-started scrollto">Visualiser sur la carte</a>
             </div>
               </div>
               </fieldset>
             </form>
      </td>
      <td>
      <form>
               <fieldset class="scheduler-border" >
                 <legend>Traitement et analyse</legend>
                 <div class="form-group ">
                   <label for="region">Effectuer une analyse spaciale</label>
                   <select  id='region'class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="departement"></label>
                   <button  id='departement'class="btn btn-outline-secondary">Lancer l'analyse</button>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="prefecture">Effectuer un traitement spacial</label>
                   <select  id='prefecture'class="custom-select mr-sm-2"></select>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="localite"> </label>
                   <button id='localite'class="btn btn-outline-secondary">Lancer le traitement</button>
                   </select>
                 </div>
               </fieldset>
             </form>
      </td>

     </tr>
  </table >

        </div>

      </div>
    </section><!-- End Services Section -->
<!-- ======= Carte Section ======= -->
<!-- <section id="carte" class="contact" >
      <div class="section-title">
      <div class="container">
          <h2>carte</h2>
          <p>Visualiser Carte</p>

<table >

	<tr>
		<td valign = top>
			<div id = 'toc'>
			
		</div>
		</td>
		<td>

			<div id = 'viewDiv' style='width:1100px;height:900px'></div>
		</td>
	</tr>
	<tr>
		<td colspan = 2><div id = 'pages'></div></td>
	</tr>
	<tr>
		<td colspan = 2><div id = 'attributetable'></div></td>
	</tr>
</table>
      </div>
</div>
</section> -->
<!-- End carte Section -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

    <div class=" section-title">
        <h2>Contact</h2>
        <p>Contacter Nous</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Address</h3>
                <p>BNETD-CIGN Avenue Joseph Anoma, Cocody, Abidjan</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p>info@bnetd.ci<br>contact@bnetd.ci</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Contact</h3>
                <p>+22548031080<br>+22543278020</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-5 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-5 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Chargement</div>
              <div class="error-message"></div>
              <div class="sent-message">message envoyé. Merci</div>
            </div>
            <div class="text-center"><button type="submit">Soumettre le message</button></div>
          </form>
        </div>

      </div>

      </div>
    </section>

    <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BNETD</span></strong>. All Rights Reserved
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>

      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
        Designed by <a href="https://www.bnetd.ci/fr">BNETD</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
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
  <script src ="js/carte.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>