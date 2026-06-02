<?php
$date = new DateTime();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'fragmentos/metas.php'; ?>
    <title>Local</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="icon" type="image/svg+xml" href="./imgs/people-roof-solid-full.svg">
    <?php include 'fragmentos/google-anaitycs.php'; ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'fragmentos/header.php'; ?>
    <br>
    <h1 class="container d-flex justify-content-center">Local</h1><br>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div id="carouselExampleIndicators" class="col-8 col-md-6 carousel slide" data-bs-theme="light">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 0"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imgs/jardimCima.jpg" class="d-block w-100" alt="Chácara vista de cima">
                    </div>
                    <div class="carousel-item">
                        <img src="./imgs/jardimbotanicofrente.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imgs/jardimlongo.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden=""></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden=""></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col-md-6 pt-4">
                <br>
                <h2 class="align-items-center d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i> Endereço</h2><br>
                <p class="text-center">Jardim Botânico Municipal de Curitiba, R. Engo. Ostoja Roguski, 350 - Jardim Botânico, Curitiba - PR, 82590-300<a href="https://maps.app.goo.gl/S8EgxjjhQ3ofE5V26" target="_blank"> MAPS</a></p>
            </div>
        </div>
        <div class="">
            <br><br>
            <h2 class="align-items-center d-flex justify-content-center"><i class="fa-solid fa-scroll"></i> Regras de uso</h2><br><br>

            <h5 class="align-items-center d-flex justify-content-center"><i class="fa-solid fa-ban"> </i>Proibições Importantes:</h5><br>

            <ul class="lista text-center">
                <li><i class="fa-solid fa-paw"></i> Não é permitida a entrada de animais de estimação de qualquer espécie</li><br>
                <li><i class="fa-solid fa-utensils"></i> É proibido comer ou beber dentro da piscina</li>
            </ul><br>

            <h5 class="align-items-center d-flex justify-content-center"><i class="fa-solid fa-building"></i> Cuidado com os Alojamentos:</h5><br>

            <ul class="lista text-center">
                <li><i class="fa-solid fa-bed"> </i> Não retirem as camas e colchões do lugar!</li><br>
                <li><i class="fa-solid fa-droplet-slash"></i> Não deitem nos colchões com roupas sujas ou molhadas e evitem transitar molhados nos corredores e quartos</li><br>
                <li><i class="fa-solid fa-lightbulb"> </i> Ao final, lembrem-se de fechar as janelas e apagar as luzes</li><br>
            </ul>
        </div>
    </div>
    </div>
    <br>
    <?php include 'fragmentos/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>