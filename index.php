<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
    <!-- <meta http-equiv="refresh" content="40"> -->

    <!-- Personal CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body style="background-color: #5800FF;">
    <div class="container-xl">
        <div class="row d-flex justify-content-center" id="margin-row">
            <div class="col-10 py-5 d-flex justify-content-center align-items-center bg-black text-info" id="container-box"> <!-- top-50 start-50 translate-middle -->
                <!-- in 'action' ci va solo il 'path' (nome) del fail che voglio raggiungere  -->
                <!-- method [GET] 'espone i dati nell'URL' -->
                <form method="POST" action="./processing.php">

                    <div class="continer-lg text-center">

                        <!-- input con anagrafica (Nome & Cognome)-->
                        <div class="anagrafe row">

                            <div class="anagInput col-12 d-flex justify-content-around text-center align-middle mt-3">

                                <div class="mb-3">

                                    <div class="col-12 d-flex justify-content-between gap-5">

                                        <div>
                                            <label for="name" class="form-label"> Nome </label>
                                            <input class="form-control rounded-pill border border-3 border-info" type="text" id="nome" name="nome" placeholder="Nome">
                                        </div>

                                        <div>
                                            <label for="name" class="form-label"> Cognome </label>
                                            <input class="form-control rounded-pill border border-3 border-info" type="text" id="cognome" name="cognome" placeholder="Cognome">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <!-- parola da censurare censurata -->
                        <div class="censured">

                            <label for="censored_word"> Parola da censurare </label>
                            <input class="form-control rounded-pill border border-3 border-info my-3" type="text" id="censored_word" name="censored_word" placeholder="Inserisci Censura">

                        </div>

                        <br>
                        <!-- Paragrafo text area (crei un testo con la parola da censurare) -->
                        <div class="d-flex justify-conten-between">
                            <label class="align-text-top-text-bottom" for="paragraph" id="titleParag"> Paragrafo </label>
                            <textarea class="textParag" id="paragraph" name="paragraph" placeholder="Inserisci il Testo"></textarea>

                            <button class="rounded-pill" id="myButton" type="submit" value="Invia">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript CDN Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- JavaScript Personal -->
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>