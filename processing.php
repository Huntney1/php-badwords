<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = $_GET['nome'];
$cognome = $_GET['cognome'];

$paragraph = $_GET['paragraph'];
$censored_word = $_GET['censored_word'];

/* cambio il valore iniziale censurandolo *** */
$censored_paragraph = str_replace($censored_word, "***", $paragraph);

/* 
    $email = $_POST['cognome'];
    $password = $_POST['cognome']; */


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Personal Css -->
    <link rel="stylesheet" href="./CSS/style_processing.css">

</head>

<body style="background-color: #5800FF;">
    <div class="container_2 container-xl">
        <div class="row">
            <div class="col my-5 shadow-2 border border-primary rounded-4 d-flex justify-contetn-center">

                <div class="shadow rounded-start-4 w-50 text-center m-3">
                    <h1 class="mt-4">
                        Benvenuto
                    </h1>
                    <h2 class="text-light">
                        <?php echo $nome . " " . $cognome; ?>
                    </h2>
                    
                </div>

                <div class="parag shadow rounded-end-4 m-2">
                    <h1 class="mt-4">
                        Il paragrafo contiene la seguente frase:
                    </h1>
                    <h2 class="text-light">
                        <?php echo $paragraph; ?>
                    </h2>
                    <h1>
                        La frase con la parola censurata è:
                    </h1>
                    <h2 class="text-warning">
                        <?php echo $censored_paragraph; ?>
                    </h2>
                    <h1>
                        La parola censurata era:
                    </h1>
                    <h1 class="text-warning">
                        <?php echo $censored_word; ?>
                    </h1>
                    <h1 class="text-light">
                        <?php echo "La tua frase censurata è lunga: " . strlen($censored_word) . " caratteri."; ?>
                    </h1>
                    <h1 class="pb-5 text-light col-mb-10 text-center">
                        <?php echo "La frase ha la lunghezza di: " . strlen($paragraph) . " caratteri contando gli spazi vuoti.!."; ?>
                    </h1>
                </div>
            
            </div>  
        </div>
    </div>

</body>

</html>