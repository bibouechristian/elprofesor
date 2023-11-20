
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google policies font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  media="screen,projection"/>
    <!--Import feuille de style-->
    <link rel="stylesheet" href="css/style.css">
       <!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
        <title>Portfolio de Aime BIBOUE</title>
</head>
<body>
    <header>
    </header>
 
    <!--*****************************************************navbar******************************************************-->
   
    <div class="navbar-fixed">
      <nav class="blue darken-4">
          <!-- <div class="container"> -->
              <div class="nav-wrapper">
                   <a id="logo-container" href="#" class="brand-logo">
                    <h6 class="wihte-text left"><img src="assets\images.jpeg" width="50" alt="logo"  ><span class="text-upercase px-4 py-4">EL profesor</span></h5></a></h5></a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                      <li><a href="#home">Accueil</a></li>
                      <li><a href="#apropos">A propos</a></li>
                      <!-- <li><a href="#blog">Blog</a></li> -->
                      <li><a href="#contact">Contact</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      
  </div>
  

  <ul class="sidenav" id="mobile-demo">
          <li><a id="logo-container" href="#" class="brand-logo"><h6 class="black-text left"><img src="assets\images.jpeg" width="25" alt="logo"  ><span class="text-upercase px-4 py-4">El profesor</span></h5></a></h5></a></li>
          <li><a href="#home">Accueil</a></li>
          <li><a href="#apropos">A propos</a></li>
          <!-- <li><a href="#blog">Blog</a></li> -->
          <li><a href="#contact">Contact</a></li>
  </ul>
<!--*****************************************************contenu******************************************************-->
<!--*****************************************************accueil******************************************************-->

        <!--*****************************************************contact******************************************************-->
        <section class="container"> 
        <p>BIENVENUE SUR LA PAGE ACCUEIL</p>
    <?php
    if (isset ($_POST['mail']))
         echo " <br> Votre email est:" ." ".$_POST['mail'];
    if (isset ($_POST['mdp']))
        echo " <br> votre mot de passe est:" ." ".$_POST['mdp'];
        ?>
    
    <p> Si vous voulez appoter  des modifications  <a href="form.php"> Pour revenir à la page du formulaire</a> </p>
   </section>
      <!--*****************************************************accueil******************************************************-->
      <!--*****************************************************accueil******************************************************--> 

   
   
    
   
  <!--*****************************************************footer******************************************************-->
  
<!--*****************************************************footer******************************************************-->
<footer class="page-footer blue darken-4 ">
  <div class="container">
    <div class="row">
        <div class="col l6 s12">
            <h5 class="black-text">el-profesor</h5>
            <p class="black-text text-lighten-4"></p>
          <!-- </div>
          <div class="col l4 offset-l2 s12"> -->
            <h5 class="black-text">Pages du site</h5>
            <ul>
              <li><a class=" black-text text-lighten-3" href="#home">Accueil</a></li>
              <li><a class=" black-text text-lighten-3" href="#apropos">A propos</a></li>
              <!-- <li><a class=" black-text text-lighten-3" href="#blog">blog</a></li> -->
              <li><a class=" black-text text-lighten-3" href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="col l6 s12">
          <p class="black-text text-lighten-4"></p>
          <h4 class="black-text text-lighten-4">Nous suivre</h4>
                <p class="black-text text-lighten-4">contact <strong>:</strong></p><span class="black-text text-lighten-4">690288189</span>
               <p class="black-text text-lighten-4">Suivez nous sur les Réseaux sociaux</p>
               <div>
                <a href="#" class="black-textwhite-text">
                  <i class="fab fa-facebook"><a href="#"><img src="assets\rs_facebook.png" alt=""></i></a>
                </a>
                <a href="#" class="black-text">
                  <i class="fab fa-whatsapp"><a href="# 690288189 ou 651250658"><img src="assets\icon w.png" alt=""></i></a>  
                </a>
                <a href="#" class="black-text">
                    <i class="fab fa-instagramme">
                </a>
                <a href="#" class="black-text">
                    <i class="fab fa-google-plus"></i>
                </a>
                
              </div>
              <div class="footer-copyright blue darken-4">
              <div class="container blue darken-4 black-text text-center">
                © Copyright - 2023 - ELPROFESOR  developed by FOKO ELISABETH LAURE
              </div>
          </div>
    </div>
  </div>

  <!-- <section class=" darken-2 black-text right"> -->
      <!-- <div class="container"> 
            <div class="row">
              <div class="col s12">
                <h4>Nous suivre</h4>
                <p>contact <strong>:</strong></p><span>690288189</span>
               <p>Suivez nous sur les Réseaux sociaux</p>
              <div class="footer-copyright blue darken-4">
              <div class="container blue darken-4 black-text">
                © Copyright - 2023 - ELPROFESOR  developed by FOKO ELISABETH LAURE
              </div>
                <div>
                    <a href="#" class="black-textwhite-text">
                      <i class="fab fa-facebook"><a href="#"><img src="assets\h_imgs\rs_facebook.png" alt=""></i></a>
                    </a>
                    <a href="#" class="black-text">
                      <i class="fab fa-whatsapp"><a href="#"><img src="assets\h_imgs\icon w.png" alt=""></i></a>  
                    </a>
                    <a href="#" class="black-text">
                        <i class="fab fa-instagramme">
                    </a>
                    <a href="#" class="black-text">
                        <i class="fab fa-google-plus"></i>
                    </a>
                    <a href="#" class="black-text">
                        <i class="fab fa-pinterest"></i>
                    </a>
                  </div>
               </div>
              </div>
        </section>-->
 
</footer>   


  <!-- Load library from the CDN -->
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

  <!-- Setup and start animation! -->
  <script>
    var typed = new Typed('#element', {
      strings: ['<i>: </i>en SVTEEHB.', ' <i>: </i>en PCT.',' <i>: </i>en français.',' <i>: </i>en Mathématique.',' <i>: </i>en Physique.',' <i>: </i>en Chimie.',' <i>: </i> en anglais.'],
      typeSpeed:100,
      backSpeed:100,
      loop:true,
      fadeOut:true,
      fadeOutClass: 'typed-fade-out',
      fadeOutDelay:500
      
    });
  </script>
<script src="js/jquery.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
  $(function (){
      $('.sidenav').sidenav();
      $('.parallax').parallax();
      $('.slider').slider({full_width: false, height:1200});
  });

</script>
 
</body>
</html>