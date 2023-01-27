<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = 'Simone';
$cognome = 'Fera';

$paragraph = '';
$censored_word = 'lorem';

// $nome_cognome = 'Simone Fera';
// $nomeCognome = 'Marco Rossi';

/* echo $nome.''.$cognome;
echo $NOME; */

// echo $nome_cognome;
// echo $nomeCognome;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input php</title>

    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <div class="container">

        <!-- in 'action' ci va solo il 'pat' (nome) del fail che voglio raggiungere  -->
        <!-- method [GET] 'espone i dati nell'URL' -->
        <form method="GET" action="processing.php">
            
            <input type="text" id="nome" name="nome" placeholder="Nome">
            <input type="text" id="cognome" name="cognome" placeholder="Cognome">

            <br>

            <label for="censored_word">Parola da censurare:</label>
            <input type="text" id="censored_word" name="censored_word">

            <br>

            <label for="paragraph">Paragrafo:</label>
            <textarea id="paragraph" name="paragraph"></textarea>

            <button id="myButton" type="submit" value="Invia">Invia</button>

            <script>
                const button = document.getElementById('myButton');
                button.addEventListener('keyup', function(enter){
                console.log('Tasto premuto: ', enter.key);
            });
            </script>
        </form>
    
    </div>
</body>


</html>