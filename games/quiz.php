<!--code by webdevtrick (webdevtrick.com) -->
<head>
 <meta charset=UTF-8" />
 <?php include_once 'phpnavbar.php' ?>
 <title>Quiz - Desechos electronicos</title>
 <link rel="stylesheet" type="text/css" href="style-quiz.css" />
 
</head>
 
<body>

 <div id="page-wrap">
 
 <h1>La importancia del manejo de desechos electronicos</h1>
 
 <form action="resultado.php" method="post" id="quiz">
 
            <ol>
            
                <li>
                
                    <h3>¿En dónde suelen terminar los desechos electrónicos?</h3>
                    
                    <div>
                        <input type="radio" checked=":" name="question-1-answers" id="question-1-answers-A" value="A"  />
                        <label for="question-1-answers-A">A) Playas </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Calles</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Ríos</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Parques</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>¿Cuál es una de las consecuencias de los desechos electrónicos?</h3>
                    
                    <div>
                        <input type="radio" checked=":" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Mejor calidad de vida</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Contaminación en tierra, agua y aire</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Beneficios económicos</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Venta de electrodomésticos</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>¿Cuál es uno de los materiales más contaminantes provenientes de desechos electrónicos?</h3>
                    
                    <div>
                        <input type="radio" checked=":" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Cloro</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Fósforo</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Dióxido de carbono</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Mercurio</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>¿Cuál enfermedad se suele asociar con los desechos electrónicos?</h3>
                    
                    <div>
                        <input type="radio" checked=":" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Cáncer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Asma</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Hepatitis</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Diabetes</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>En los vertederos de basura existen problemas al gestionar la basura electrónica, esto provoca que…</h3>
                    
                    <div>
                        <input type="radio" checked=":" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Se acumulan desechos electrónicos en dichos verteredos</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Se abren nuevos trabajos</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Se genera menos basura</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Todas las anteriores</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
 
 </form>
 
 </div>

 
</body>
 
</html>