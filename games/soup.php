<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sopa de letras</title>
    <link rel="stylesheet" type="text/css" href="wordfind.css">
    <?php include_once 'phpnavbar.php' ?>
</head>
<body>
    <h1>Sopa de letras - La basura electrónica</h1>
    <div id="main" role="main">
        <div id="puzzle"></div>
        <ul id="words">
            <li><button id="add-word">Añadir una palabra</button></li>
        </ul>
        <fieldset id="controls">
             <label for="allowed-missing-words">Palabras vacias permitidas :
                <input id="allowed-missing-words" type="number" min="0" max="5" step="1" value="2" disabled="disabled">
            </label>
            <label for="max-grid-growth">Crecimiento máximo :
                <input id="max-grid-growth" type="number" min="0" max="5" step="1" value="5" disabled="disabled">
            </label>
            <label for="extra-letters">Letras extra :
                <select id="extra-letters">
                   <!-- <option value="secret-word">formar una palabra secreta</option>-->
                    <!--<option value="none">Ninguna, permitir espacios vacios</option>-->
                   <!-- <option value="secret-word-plus-blanks">Forma una palabra secreta, pero permite espacios vacios</option>-->
                    <option value="random" selected>Aleatoria</option>
                </select>
            </label>
           <!-- <label for="secret-word">Palabra secreta :
                <input id="secret-word">
            </label>-->
            <button id="create-grid">Crear una nueva sopa de letras</button>
            <p id="result-message"></p>
            <button id="solve">Resolver!</button>
        </fieldset>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
    <script type="text/javascript" src="wordfind.js"></script> 
    <script type="text/javascript" src="wordfindgame.js"></script> 
    <script>
    /* Example words setup */
    [
        /*'adorable',
        'comique',
        'curieuse',
        'drole',
        'engagee',
        'enjouee',
        'fidele',
        'futee',
        'radieuse',
        'sensible',
        'sincere',*/
        'basura',
        'reciclar',
        'enfermedades',
        'contaminacion',
        'vertederos',
        'explotacion',
        'plomo',
        'mercurio',
        'residuos',
        'volumen',
    ].map(word => WordFindGame.insertWordBefore($('#add-word').parent(), word));
    $('#secret-word').val('ECOSISTEMA');

    /* Init */
    function recreate() {
        $('#result-message').removeClass();
        var fillBlanks, game;
        if ($('#extra-letters').val() === 'none') {
            fillBlanks = false;
        } else if ($('#extra-letters').val().startsWith('secret-word')) {
            fillBlanks = $('#secret-word').val();
        }
        try {
            game = new WordFindGame('#puzzle', {
                allowedMissingWords: +$('#allowed-missing-words').val(),
                maxGridGrowth: +$('#max-grid-growth').val(),
                fillBlanks: fillBlanks,
                allowExtraBlanks: ['none', 'secret-word-plus-blanks'].includes($('#extra-letters').val()),
                maxAttempts: 100,
            });
        } catch (error) {
            $('#result-message').text(`😞 ${error}, try to specify less ones`).css({color: 'red'});
            return;
        }
        wordfind.print(game);
        if (window.game) {
            var emptySquaresCount = WordFindGame.emptySquaresCount();
            $('#result-message').text(`😃 ${emptySquaresCount ? 'ya hay espacios vacios' : ''}`).css({color: ''});
        }
        window.game = game;
    }
    recreate();

    /* Event listeners */
    $('#extra-letters').change((evt) => $('#secret-word').prop('disabled', !evt.target.value.startsWith('secret-word')));

    $('#add-word').click( () => WordFindGame.insertWordBefore($('#add-word').parent()));

    $('#create-grid').click(recreate);

    $('#solve').click(() => game.solve());
    </script>
</body>
</html>

