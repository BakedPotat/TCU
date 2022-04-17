<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<head>
 <meta charset=UTF-8" />
 <?php include_once 'phpnavbar.php' ?>
 
 <title>Quiz - Resultado</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
 <div id="page-wrap">
 
 <h1>Resultado</h1>
 
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect = $totalCorrect + 20; 
                echo " <div style ='font:20px Arial,tahoma,sans-serif;color:black'> 1. ¿En dónde suelen terminar los desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:green'> Elegiste la respuesta correcta: Ríos";
            }
            if ($answer1 != "C") {
                echo " <div style ='font:20px Arial,tahoma,sans-serif;color:black'> 1. ¿En dónde suelen terminar los desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:red'> Elegiste una respuesta incorrecta, la respuesta correcta es: Ríos";
            } 
            if ($answer2 == "B") { $totalCorrect = $totalCorrect + 20; 
                echo " <div style ='font:20px Arial,tahoma,sans-serif;color:black'> 2. ¿Cuál es una de las consecuencias de los desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:green'> Elegiste la respuesta correcta: Contaminación en tierra, agua y aire";
            }
            if ($answer2 != "B") {
                echo " <div style ='font:20px Arial,tahoma,sans-serif; color:black'> 2. ¿Cuál es una de las consecuencias de los desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:red'> Elegiste una respuesta incorrecta, la respuesta correcta es: Contaminación en tierra, agua y aire";
            } 
            if ($answer3 == "D") { $totalCorrect = $totalCorrect + 20; 
                echo " <div style ='font:20px Arial,tahoma,sans-serif;color:black'> 3. ¿Cuál se considera como uno de los materiales más contaminantes provenientes de desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:green'> Elegiste la respuesta correcta: Mercurio";
            }
            if ($answer3 != "D") {
                echo " <div style ='font:20px Arial,tahoma,sans-serif; color:black'> 3. ¿Cuál se considera como uno de los materiales más contaminantes provenientes de desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:red'> Elegiste una respuesta incorrecta, la respuesta correcta es: Mercurio";
            } 
            if ($answer4 == "B") { $totalCorrect = $totalCorrect + 20; 
                echo " <div style ='font:20px Arial,tahoma,sans-serif;color:black'> 4. ¿Cuál enfermedad se suele asociar con los desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:green'> Elegiste la respuesta correcta: Asma";
            }
            if ($answer4 != "B") {
                echo " <div style ='font:20px Arial,tahoma,sans-serif; color:black'> 4. ¿Cuál enfermedad se suele asociar con los desechos electrónicos?";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:red'> Elegiste una respuesta incorrecta, la respuesta correcta es: Asma";
            } 
            if ($answer5 == "A") { $totalCorrect = $totalCorrect + 20; 
                echo " <div style ='font:20px Arial,tahoma,sans-serif;color:black'> 5. En los vertederos de basura existen problemas al gestionar la basura electrónica, esto provoca que…";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:green'> Elegiste la respuesta correcta: Se acumulan desechos electrónicos en dichos verteredos";
                echo "<br>";
            }
            if ($answer5 != "A") {
                echo " <div style ='font:20px Arial,tahoma,sans-serif; color:black'> 5. En los vertederos de basura existen problemas al gestionar la basura electrónica, esto provoca que…";
                echo "<br>";
                echo"<div style ='font:20px Arial,tahoma,sans-serif;color:red'> Elegiste una respuesta incorrecta, la respuesta correcta es: Se acumulan desechos electrónicos en dichos verteredos";
                echo "<br>";
            } 
            /**echo "<div style ='font:20px Arial,tahoma,sans-serif; color:black' id='results'>$totalCorrect / 5 correctas</div>";**/
            echo "<br>";
            echo '<div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar"
            aria-valuenow="40" aria-valuemin="0" aria-valuemax="5" style="width:'.$totalCorrect.'%">
             ¡ '.$totalCorrect.'% de las respuestas correctas !
            </div>
          </div>'

           
        ?>