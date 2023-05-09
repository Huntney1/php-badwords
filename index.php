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
    <div class="container-fluid">
        <div class="row mt-1 d-flex justify-content-center align-items-center" id="margin-row">

            <div class="col-12 d-flex text-center align-items-center justify-content-center">
                <div class="col-11 py-5 d-flex justify-content-center align-items-center text-info" id="container-box">
                    <!-- in 'action' ci va solo il 'path' (nome) del fail che voglio raggiungere  -->
                    <!-- method [GET] 'espone i dati nell'URL' && method [POST] 'non espone i dati nell'URL' -->
                    <form method="post" action="processing.php">

                        <div class="continer-lg text-center">

                            <!-- input con anagrafica (Nome & Cognome)-->
                            <div class="anagrafe row">

                                <div class="anagInput col-12 d-flex justify-content-around text-center align-middle mt-3">

                                    <div class="mb-3">

                                        <div class="col-lg-12 d-flex justify-content-center gap-4 text-center">

                                            <!-- Name -->
                                            <div class="form-group col-6 rounded-pill border border-3 border-info py-2">
                                                <label for="name" class="form-label h5 d-flex align-items-start justify-content-center"> Nome </label>
                                                <input class="col-10 rounded-pill border border-3 border-info my-2 text-capitalize text-center" type="text" id="nome" name="nome" placeholder="Your Name">
                                            </div>

                                            <!-- Surname -->
                                            <div class="form-group col-6 rounded-pill border border-3 border-info py-2">
                                                <label for="name" class="form-label h5 d-flex align-items-start justify-content-center"> Cognome </label>
                                                <input class="col-10 rounded-pill border border-3 border-info my-2 text-capitalize text-center" type="text" id="cognome" name="cognome" placeholder="Your Surname">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Parola da censurare - censurata -->
                            <div class="censured">
                                <div class="row d-flex justify-content-center">

                                    <div class="form-group col-12 rounded-pill border border-3 border-info py-2">

                                        <label for="censored_word" class="form-label h5 d-flex align-items-center align-items-start justify-content-center"> Parola da censurare </label>
                                        <input class="col-10 rounded-pill border border-3 border-info my-2 text-capitalize text-center" type="text" name="censored_word" id="censored_word" placeholder="Insert Censorship">
                                    </div>

                                </div>
                            </div>

                            <!-- Paragrafo text area (crei un testo con la parola da censurare) -->
                            <div class="form-group col-12 rounded-pill border border-3 border-info py-2 my-4">
                                <label for="paragraph" id="paragraph" class="form-label h5 d-flex align-items-center align-items-start justify-content-center"> Paragrafo </label>
                                <textarea class="col-10 rounded-pill border border-3 border-info my-2 text-capitalize text-center" id="paragraph" name="paragraph" placeholder="Inserisci il Testo"></textarea>
                            </div>

                            <br>

                            <div class="col-12 mt-1">
                                <button class="rounded-pill" id="myButton" type="submit" value="Invia">Invia</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Personal -->
    <script type="text/javascript" src="./js/script.js"></script>
    <!-- JavaScript CDN Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>