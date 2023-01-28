<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = 'Simone';
$cognome = 'Fera';

$paragraph = '';
$censored_word = '';

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

    <!-- Autore -->
    <meta name="author" content="Simone Fera">
    <!-- Descrizione del sito -->
    <meta name="description" content="primo utilizzo della programmazione PHP">
    <!-- Refresh permette il client-pull (refrescia la pagina in automatico) -->
   <!--  <meta http-equiv="refresh" content="40"> -->

    <!-- Persona CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <!-- JavaScript CDN Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body style="background-color: #5800FF;">
    <div class="container_1">
        <div class="row">
            <div class="col-12  top-50 start-50 translate-middle" id="container-box">
                <!-- in 'action' ci va solo il 'pat' (nome) del fail che voglio raggiungere  -->
                <!-- method [GET] 'espone i dati nell'URL' -->
                <form method="GET" action="processing.php">

                    <!-- input con anagrafica (Nome & Cognome)-->
                    <div class="anagrafe">
                        <div class="d-flex justify-content-evenly"></div>
                        <label for="name">Nome</label>
                        <label for="cognome">Cognome</label>
                        <br>
                        <input type="text" id="nome" name="nome" placeholder="Nome">
                        <input type="text" id="cognome" name="cognome" placeholder="Cognome">
                    </div>
                    <br>  

                    <div class="censured">
                        <!-- parola da censurare censurata -->
                        <input type="text" id="censored_word" name="censored_word">
                        <label for="censored_word">Parola da censurare:</label>
                    </div>

                    <br>
                    <!-- Paragrafo text area (crei un testo con la parola da censurare) -->
                
                    <label for="paragraph">Paragrafo:</label>
                    <textarea id="paragraph" name="paragraph"></textarea>

                    <button id="myButton" type="submit" value="Invia">Invia</button>
                </form>
            </div>
        </div>
    </div>
    <!-- script (keyup_enter.key) -->
    <script>
        const button = document.getElementById('myButton');
        button.addEventListener('keyup', function(enter){
        console.log('Tasto premuto: ', enter.key);
    });
    </script>
</body>


</html>