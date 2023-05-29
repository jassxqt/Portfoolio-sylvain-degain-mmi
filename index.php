<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Flickity = utilité pour le portfolio-->
    <link rel="stylesheet" href="assets/css/flickity.css" media="screen">

    <!-- Box Icons = utilité pour icons (instagram, linkindin) -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="shortcut icon" href="../site/assets/img/favicon.png" sizes="48x48" type="image/x-icon">

    <title>Portfolio</title>

  </head>
  <body>
    <canvas id='canvas1'></canvas>
    <canvas id='canvas2'></canvas>
    <!---- Met une flèche pour revenir en haut de la page ---->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>


<!---- Header ---->
<header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo"><img src="assets/img/video-sd-icon-favicon.png" width="60px" height="60px" alt=""></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"> <a href="#home" class="nav__link active-link">Acceuil</a> </li>
                    <li class="nav__item"> <a href="#about" class="nav__link">A propos</a> </li>
                    <li class="nav__item"> <a href="#portfolio" class="nav__link">Portfolio</a> </li>
                    <li class="nav__item"> <a href="#contact" class="nav__link">Contact</a> </li>
                    <li class="nav__item"> <a href="../site/Admin/index.php" class="nav__link">Connexion</a> </li>
                    
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
</header>



<main class="l-main">

 <!---- Home ---->
 <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
          <div class="home__data">
            <span class="home__greeting">Bonjour, Je suis</span>
            <h1 class="home__name">Sylvain Degain</h1>
            <span class="home__profession">Monteur Vidéo</span>
            <a download="" href="assets/pdf/Proposal.pdf" class="button">Download Cv</a>
          </div>

          <div class="home__social">
            <a href="https://www.linkedin.com/in/sylvain-degain-7042b3272/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
            <a href="https://www.instagram.com/luv.dgnnn/" class="home__social-icon"><i class='bx bxl-instagram'></i></a>
          </div>

          <div class="home__img">
            <img src="assets/img/imgprofil.png" height="60px" alt="">
          </div>
        </div>
 </section>



 <!---- A propos ---->
 <section class="about section bd-container" id="about">
        <span class="section-subtitle">Mon histoire</span>
        <h2 class="section-title">A propos de moi</h2>

        <div class="about__container bd-grid">
          <div class="about__data bd-grid">
            <p class="about__description"><span>Sylvain Degain<br></span>j'ai 20 ans et je suis actuellement étudiant en 1ère année d'un BUT Métiers du Multimédia et de l'Internet à l'IUT de Toulon, Porte D'italie. Au travers de ce portflio vous pourrez découvrir mes différentes réalisations créées au cours de mes études : en passant de la production graphique à la production audiovisuelle jusqu'à la communication, vous pourrez découvrir grand nombre de mes projets, réalisés à la fois à l'occasion de certains de mes cours mais aussi durant mon temps libre, et ainsi découvrir et mieux comprendre ma démarche artistique.
              </p>


              <div>
                <span class="about__number"> 10+ </span>
                <span class="about__achievement">Projets completés</span>
              </div>

              <div>
                <span class="about__number"> 01 </span>
                <span class="about__achievement">BUT MMI</span>
              </div>
          </div>
          <img src="assets/img/imgprofil2.png" alt="" class="about__img">
        </div>
 </section>



 <!---- Qualification (Expérience & Etudes) ---->
 <div class="qualification section bd-container">
        <span class="section-subtitle">Expérience et Education</span>
        <h2 class="section-title">Qualification</h2>

        <div class="qualification__container bd-grid">
          <div class="qualification__content">
            <h2 class="qualification__title">
              <i class='bx bx-briefcase-alt qualification__title-icon'></i> Expérience profesionnel
            </h2>

            <div class="bd-grid">
              <div class="qualification__data">
                <h3 class="qualification__area"><br>Stage MM1 - Monteur</h3>

                <div class="qualification__box">
                  <span class="qualification__work">
                    <i class='bx bx-briefcase-alt qualification__icon'></i>
                    La Poste - La valette-du-var
                  </span>

                  <span class="qualification__work">
                    <i class='bx bx-calendar-alt qualification__icon'></i>
                    5 juin - 5 août 2023
                  </span>
                </div>
                
              </div>

              <div class="qualification__data">
                  <h3 class="qualification__area"><br>STAGE AUDIOVISUEL</h3>
  
                  <div class="qualification__box">
                    <span class="qualification__work">
                      <i class='bx bx-briefcase-alt qualification__icon'></i>
                      CADASE - Toulon
                    </span>
  
                    <span class="qualification__work">
                      <i class='bx bx-calendar-alt qualification__icon'></i>
                      Decembre 2018
                    </span>
                  </div>
                </div>

              </div>
            </div>
          
          <div class="qualification__content">
            <h2 class="qualification__title">
              <i class='bx bx-bookmark qualification__title-icon'></i>
              Education
            </h2>

            <div class="bd-grid">
              <div class="qualification__data">
                <h3 class="qualification__area"><br>BUT MMI</h3>

                <div class="qualification__box">
                  <span class="qualification__work">
                    <i class='bx bx-book-alt qualification__icon'></i>
                    France - IUT De Toulon
                  </span>

                  <span class="qualification__work">
                    <i class='bx bx-calendar-alt qualification__icon'></i>
                    2022 - 2025
                  </span>
                </div>

                <div class="qualification__data">
                  <h3 class="qualification__area"><br>BAC STI2D</h3>
  
                  <div class="qualification__box">
                    <span class="qualification__work">
                      <i class='bx bx-book-alt qualification__icon'></i>
                      France - Lycée Rouvière
                    </span>
  
                    <span class="qualification__work">
                      <i class='bx bx-calendar-alt qualification__icon'></i>
                      2022
                    </span>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
 </div>



 <!-- Portfolio -->
 <section class="testimonial section bd-container" id="portfolio">
  <span class="section-subtitle">Projets</span>
  <h2 class="section-title">Portfolio</h2>
  
  <div class="testimonial__container gallery js-flickity" data-flickity-options='{ "wrapAround": true, "watchCSS": true }'>
  <?php
    // Configuration des informations de connexion à la base de données
    $servername = "localhost"; // Nom du serveur de la base de données
    $username = "root"; // Nom d'utilisateur de la base de données
    $password = "root"; // Mot de passe de la base de données
    $database = "sae203-1"; // Nom de la base de données
    $port = "3306"; // Numéro du port de la base de données
    
    // Établissement de la connexion à la base de données MySQL
    $connection = new mysqli($servername, $username, $password, $database, $port);
    
    // Vérification de la réussite de la connexion
    if ($connection->connect_error) {
      die("La connexion a échoué : " . $connection->connect_error);
    }
    
    // Vérification si une catégorie est spécifiée dans l'URL
    if (isset($_GET['category'])) {
      $selectedCategory = $_GET['category'];
      
    // Requête SQL pour sélectionner les projets de la catégorie spécifiée
    $sql = "SELECT * FROM projects WHERE project_category = '$selectedCategory'"; 
  } else {
    // Requête SQL pour sélectionner tous les projets si aucune catégorie n'est spécifiée
    $sql = "SELECT * FROM projects";}
  
    // Exécution de la requête SQL
    $result = $connection->query($sql);
    
    // Vérification de la validité de la requête
    if (!$result) {
    die("Requête invalide : " . $connection->error);
  }

  // Parcours des résultats de la requête
  while ($row = $result->fetch_assoc()) {
    ?>

    <div class="testimonial__content">
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

      <div class="testimonial__grid">
        <i class='bx bx-folder testimonial__icon'></i>
        <a href="<?php echo $row['project_address']; ?>" class="testimonial__link"><i class='bx bx-link-external'></i></a>
      </div>

      <div class="testimonial__intro">
        <span class="testimonial__client"><?php echo $row['project_category']; ?></span>
        <h3 class="testimonial__title"><?php echo $row['project_name']; ?></h3>
        <p class="testimonial__description"><?php echo $row['project_description']; ?></p>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
 </section>


 <!---- Contact ---->
 <section class="contact section bd-container" id="contact">
          <span class="section-subtitle">Envie de me contacter</span>
          <h2 class="section-title">Contactez-moi</h2>

          <div class="contact__container bd-grid">
            <div class="contact__content grid">
              <div class="contact__box">
                <i class='bx bx-home-alt contact__icon'></i>
                <h3 class="contact__title">Localisation</h3>
                <span class="contact__desciption">France - Var</span>
              </div>

              <div class="contact__box">
                <i class='bx bx-phone contact__icon'></i>
                <h3 class="contact__title">Téléphone</h3>
                <span class="contact__desciption">06 22 68 80 28</span>
              </div>

              <div class="contact__box">
                <i class='bx bx-envelope contact__icon'></i>
                <h3 class="contact__title">Adresse mail</h3>
                <span class="contact__desciption">degainsylvain@gmail.com</span>
              </div>

              <div class="contact__box">
                <i class='bx bx-chat contact__icon'></i>
                <h3 class="contact__title">Retrouvez-moi</h3>
                
                <div>
                  <a href="https://www.instagram.com/luv.dgnnn/" class="contact__social"><i class='bx bxl-instagram'></i></a>
                  <a href="https://www.linkedin.com/in/sylvain-degain-7042b3272/" class="contact__social"><i class='bx bxl-linkedin'></i></a>
                </div>
              </div>
            </div>

            <!-- ========================================================= -->
            <!-- ========================================================= -->
            <!-- ========================================================= -->

            <form action="mailto:degainsylvain@gmail.com" class="contact__form" method="post" enctype="text/plain">
            <div class="contact__inputs">
              <input type="text" name="Name" placeholder="Nom & prénom" class="contact__input">
              <input type="email" name="Email" placeholder="Email" class="contact__input">
            </div>

            <div class="contact__inputs">
              <input type="text" name="Subject" placeholder="Sujet du mail" class="contact__input">
            </div>

            <div class="contact__inputs">
              <textarea name="Message" cols="0" rows="7" placeholder="Message" class="contact__input"></textarea>
            </div>

            <input type="submit" value="Envoyer" class="button contact__button">
          </form>
          </div>
 </section>
</main>



<!---- Footer ---->
<footer class="footer">
        <div class="footer__container bd-container">
          <h1 class="footer__title">Sylvain Degain</h1>
            <p class="footer__description">
              2022-2023 -  1ERE ANNEE BUT MMI 
            </p>

            <div class="footer__social">
              <a href="https://www.linkedin.com/in/sylvain-degain-7042b3272/" class="footer__link"><i class='bx bxl-linkedin'></i></a>
              <a href="https://www.instagram.com/luv.dgnnn/" class="footer__link"><i class='bx bxl-instagram'></i></a>
            </div>

            <p class="footer__copy">&#169; 2023. Tout droit réservé.</p>
        </div>
</footer>



<!-- Flickity Js =  utilité pour le portfolio -->
<script src="assets/js/flickity.pkgd.min.js"></script>

<!-- GSAP = animation scroll -->
<script src="assets/js/gsap.min.js"></script>
  </body>
</html>