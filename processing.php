<?php
    //servono per mostrare gli errori
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];

    $paragraph = $_GET['paragraph'];
    $censored_word = $_GET['censored_word'];

    $email = $_POST['cognome'];
    $password = $_POST['cognome'];

    $censored_paragraph = str_replace($censored_word, "***", $paragraph);
    echo "Il paragrafo censurato è: $censored_paragraph";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>

    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <div class="container">
        <h1>
            Benvenuto<?php echo $nome." ".$cognome; ?>
        </h1>
        <div class="parag">
            <h1>
                <?php echo $paragraph."<br> La tua frase è lunga: ".strlen($paragraph)." caratteri.";?>
            </h1>
        </div>   
    
        <div>
            <h1>
                <?php echo $censored_word_string."<br> La tua frase censurata è lunga: ".strlen($censored_word_string)." caratteri.";?>
            </h1>
        </div>
    </div>
    <?php
    echo $_GET;
    echo '<br/>';
    echo '<pre>';
    var_dump($_GET);
    ?>
</body>
</html>