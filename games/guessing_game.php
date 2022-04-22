<head>
 <meta charset=UTF-8" />
 <?php include_once 'phpnavbar.php' ?>
 <title>Palabras Desordenadas</title>
 <link rel="stylesheet" type="text/css" href="style-quiz.css" />
</head>

<?php
include_once("guessing_game_style.inc");
$ArrayWords = array("bateria", "puntos de reciclaje");
$ArrayClues = array("Es un componente muy contaminante, ya que suele contener litio", "Un lugar en donde reciclar nuestras cosas");
$ArrayPics = array("img\dead-battery-gf88646075_1280.png", "img\park-gf6d309273_1920.jpg", "img/game_over.jpg" );



$index = isset($_POST['index']) ? $_POST['index'] : 0;
$message2 = str_shuffle($ArrayWords[$index]);
$message3 = ($ArrayClues[$index]);
if(!isset($_POST['guess'])){
    $message1="<h1>¡Bienvenido al juego de las palabras desordenadas!</h1></br>";
    //$message3=str_shuffle($strArrayClues[$index]);
    $message2=str_shuffle($ArrayWords[$index]);
    echo '<img src="' . $ArrayPics[$index] . '" width="300" height="300" />';
}


elseif($_POST['guess'] == $ArrayWords[$index]){   
    $message1="<h1>¡Bienvenido al juego de las palabras desordenadas!</h1>";
    $index++;
    if ($index < count($ArrayWords)) {
        $message2=str_shuffle($ArrayWords[$index]);
        $message3 = ($ArrayClues[$index]);
    }
    echo '<img src="' . $ArrayPics[$index] . '" width="300" height="300" />';
}

elseif($_POST['guess'] != $ArrayWords[$index]){
    $message1="<h1>Estuvo cerca, intentá de nuevo</h1></br>";
    echo '<img src="' . $ArrayPics[$index] . '" width="300" height="300" />';
}


?>
<!DOCTYPE html>
<html>
<head><title>Palabras desordenadas</title></head>
<meta charset="utf-8"><!-- Your HTML file can still use UTF-8-->
<body>
<?php 
echo $message1; 
if ($index < count($ArrayWords)) {
    ?>
    <center>
    <b>Intentá encontrar cual es la palabra desordenada:</b>" <?php echo "<h3> $message2;</h3>"?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <b>Pista:</b>" <?php echo "<h2>$message3; </h2>"?>
    <p><label for="guess">¿Cuál crees que es la palabra?:</label>
    <input oninput="this.value = this.value.toLowerCase()" autofocus type="text" id="guess" name="guess" /></p>
    <input type="hidden" name="index" value="<?php echo $index; ?>">
    <button type="submit" name="submit" value="submit">Adivinar</button>
    </center>
    <?php
} else {
    ?>
    <b>¡Fin del juego!</b>
    <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Jugar de nuevo</a></p>
    <?php
}
?>
</body></html>