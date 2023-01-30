<?php
    //servono per mostrare gli errori
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $nome = $_GET['nome'];
    $cognome = $_GET['cognome']; 

    $paragraph = $_GET['paragraph'];
    $censored_word = $_POST['censored_word'];
    
    /* cambio il valore censurandolo *** */
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

    <link rel="stylesheet" href="./CSS/style_processing.css">
</head>
<body style="background-color: #5800FF;">
    <div class="container_2">
   <?php echo "Il paragrafo censurato è: $censored_paragraph";?>
        <h1>
            Benvenuto <?php echo $nome." ".$cognome; ?>
        </h1>
        <div class="parag">
            <h1>
                <?php echo $paragraph."<br> La tua frase è lunga: ".strlen($paragraph)." caratteri contando gli spazi vuoti.!.";?>
            </h1>
        </div>   
    
        <div>
            <h1>
                <?php echo $censored_word."<br> La tua frase censurata è lunga: ".strlen($censored_word)." caratteri.";?>
            </h1>
        </div>
    </div>
    
</body>
</html>