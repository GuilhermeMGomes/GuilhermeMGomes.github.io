<?php
$date = new DateTime();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'fragmentos/metas.php'; ?>
    <title>Cronograma</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="icon" type="image/svg+xml" href="./imgs/people-roof-solid-full.svg">
    <?php include 'fragmentos/google-anaitycs.php'; ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'fragmentos/header.php'; ?>
    
    <ul class="nav nav-pills mb-3 mt-4 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link btn-color active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sexta-feira</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn-color" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sábado</button>
        </li>
        <li class="nav-item btn-bg-color" role="presentation">
            <button class="nav-link btn-color" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Domingo</button>
        </li>

    </ul>
    <div class="tab-content text-center container justify-content-center" id="pills-tabContent d-flex">
        <div class="tab-pane fade show active justify-content-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            
            <!-- SEXTA-FEIRA -->
            <div class="container-md mt-4 mb-4">
                <div class="row">
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/recepcao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">18h</h5>
                                <p class="card-text">Recepção e instalação nos alojamentos</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/refeicao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">20h</h5>
                                <p class="card-text">Jantar</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/hangout.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">21h</h5>
                                <p class="card-text">Tempo Livre</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/dormindo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">00h</h5>
                                <p class="card-text">Dormir (Silêncio!)</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade justify-content-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

              <!-- SÁBADO -->
            <div class="container-md mt-4 mb-4">
                <div class="row">
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/refeicao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">08h</h5>
                                <p class="card-text">Café da manhã</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/pregando.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">10h</h5>
                                <p class="card-text">Ministração</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/refeicao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">12h30min</h5>
                                <p class="card-text">Almoço</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/tempoLivre.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">13h</h5>
                                <p class="card-text">Tempo Livre</p>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/refeicao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">20h</h5>
                                <p class="card-text">Jantar</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/dormindo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">01h</h5>
                                <p class="card-text">Dormir (Silêncio!)</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade justify-content-center" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">

                      <!-- SÁBADO -->
            <div class="container-md mt-4 mb-4">
                <div class="row">
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/refeicao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">08h</h5>
                                <p class="card-text">Café da manhã</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/pregando.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">10h</h5>
                                <p class="card-text">Ministração</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/refeicao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">12h30min</h5>
                                <p class="card-text">Almoço</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/tempoLivre.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">13h</h5>
                                <p class="card-text">Tempo Livre</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md container d-flex justify-content-center mt-4">

                        <div class="card d-flex justify-content-center">
                            <img src="./imgs/saida.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">16h</h5>
                                <p class="card-text">Saída*</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="container mt-5 mb-5">
                <h3>
                    *Pedimos a compreensão de todos para que sejam atenciosos quanto ao horário de saída! <br>
                    Há uma multa caso o mesmo não seja respeitado!
                </h3>
            </div>

        </div>
    </div>

    <?php include 'fragmentos/footer.php'; ?>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>