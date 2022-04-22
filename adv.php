<!DOCTYPE html>
<html lang="en">
<head>


    <!-- SEO Meta Tags testing new install  -->
    <meta name="description" content="Nos apasiona crear sitios web atractivos y eficientes para nuestros clientes.">
    <meta name="author" content="K&A Developers">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>TCU</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/fontello.css" rel="stylesheet">
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon2.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets_adv/css/reset.css">
    <link rel="stylesheet" href="assets_adv/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <title>Adivinanzas</title>


</head>

<body>
    <div class="container mt-3 pt-4">
        <div class="jumbotron mt-5 mb-5 pt-5">
            <div class="row">
                <div class="col-lg-12 pt-4">
                    <div class="text-center">
                        <h1>Adivinanza </h1>
                        <h2>Residuos electrónicos</h2>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-12 text-center pb-3">
                    <p><h4 id="welcome" class="blink">¡Presione cualquier tecla para empezar!</h5></p>
                    <br>
                    <div><h5>Palabra:  <span id="currentWord"></span></h5></div>
                    <br>
                    <div><h6>Ganes:  <span id="totalWins" class="varColor"></span></h6></div>
                    
                    <div><h6>Intentos restantes:  <span id="remainingGuesses" class="varColor"></span></h6></div>
                    
                    <div><h6>Letras erroneas:  <span id="guessedLetters" class="varColor"></span></h6></div>
                
                </div>
            </div>
        </div>
    </div>
    <script src="assets_adv/javascript/game.js" type="text/javascript"></script>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <!-- Scripts -->
    
     <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
     <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
     <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
     <script src="js/scripts.js"></script> <!-- Custom scripts -->
 
     <script src="js/wow.min.js"></script>
     <script>
     new WOW().init();
     </script>
     <script>
         $(document).ready(function() {
   $(".more").on("click", function() {
     // cambiar la visibilidad de complete
     $(".complete").toggle();
 
     // cambiar el texto del boton dependiendo del texto actual
     if ($(this).text() == "Leer menos...") {
       $(this).text("Leer mas...");
     } else {
       $(this).text("Leer menos...");
     }
   });
 });
     </script>

</body>
</html>
<?php include_once 'adv-nav.php' ?>