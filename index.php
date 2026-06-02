<?php
$date = new DateTime();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'fragmentos/metas.php'; ?>
    <title>Retiro Famílias CWB 2026</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="icon" type="image/svg+xml" href="./imgs/people-roof-solid-full.svg">
    <?php include 'fragmentos/google-anaitycs.php'; ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'fragmentos/homeHeader.php'; ?>

    <div class=" pt-5 d-flex flex-column align-items-center justify-content-center">
        <h1>Faltam:</h1>
    </div>
    <div id="countdown" class="col-12 col-lg-12 d-flex flex-wrap justify-content-center gap-2 p-4">
        <div class="countdown-item d-flex flex-column align-items-center justify-content-center shadow-sm">
            <span class="countdown-number fw-bold" id="days">00</span>
            <span class="countdown-label text-uppercase">Dias</span>
        </div>

        <div class="countdown-item d-flex flex-column align-items-center justify-content-center shadow-sm">
            <span class="countdown-number fw-bold" id="hours">00</span>
            <span class="countdown-label text-uppercase">Horas</span>
        </div>

        <div class="countdown-item d-flex flex-column align-items-center justify-content-center shadow-sm">
            <span class="countdown-number fw-bold" id="minutes">00</span>
            <span class="countdown-label text-uppercase">Minutos</span>
        </div>

        <div class="countdown-item d-flex flex-column align-items-center justify-content-center shadow-sm">
            <span class="countdown-number fw-bold" id="seconds">00</span>
            <span class="countdown-label text-uppercase">Segundos</span>
        </div>
    </div>

    <div class=" pt-2 pb-5 d-flex flex-column align-items-center justify-content-center shadow-sm">
        <h1>Para o retiro!!</h1>
    </div>

    <!-- <section class="galeria" id="produto">
        <div class="container d-flex justify-content-center">
            <div class="row p-4 d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center"><h2 class="big-title">Informações rápidas</h2></div>
            
            
            <div class="col-8 col-md-3 box-3 fotos" id="foto1">
                <a href="#" class="fechar-backdrop"></a>
                <a href="#foto1">
                    <img src="./imgs/pastor.jpeg" alt="">
                </a>
            </div>
            
            <div class="col-8 col-md-3 box-3 fotos" id="foto2">
                <a href="#" class="fechar-backdrop"></a>
                <a href="#foto2">
                    <img src="./imgs/local.jpeg" alt="">
                </a>
            </div>
            
            <div class="col-8 col-md-3 box-3 fotos" id="foto3">
                <a href="#" class="fechar-backdrop"></a>
                <a href="#foto3">
                    <img src="./imgs/itensTrazer.jpeg" alt="">
                </a>
            </div>
            
            <div class="col-8 col-md-3 box-3 fotos" id="foto4">
                <a href="#" class="fechar-backdrop"></a>
                <a href="#foto4">
                    <img src="./imgs/comercio.jpeg" alt="">
                </a>
            </div>
            
            <div class="col-8 col-md-3 box-3 fotos" id="foto5">
                <a href="#" class="fechar-backdrop"></a>
                <a href="#foto5">
                    <img src="./imgs/previsao.jpeg" alt="">
                </a>
            </div>

            <div class="col-3 box-3 fotos" id="foto6">
                <a href="#" class="fechar-backdrop"></a>
                <a href="#foto6">
                    <img src="./imgs/piscinaAviso.jpeg" alt="">
                </a>
            </div>

        </div>
        </div>
     </section> -->

    <?php include 'fragmentos/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            // Busca o elemento pelo ID que adicionamos na linha 3
            var menu = document.getElementById('mainNav');

            if (window.scrollY > 50) {
                menu.classList.add('scrolled');
            } else {
                menu.classList.remove('scrolled');
            }
        });


        // Data do evento: 30/01/2026 às 00:00:00 (horário de Brasília)
        const eventDate = new Date('2030-01-30T00:18:00-03:00').getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = eventDate - now;

            if (distance < 0) {
                // Se o evento já passou
                document.getElementById('countdown').innerHTML = `
                    <div class="countdown-item">
                        <span class="countdown-number">🎉</span>
                        <span class="countdown-label">Evento Iniciado!</span>
                    </div>
                `;
                return;
            }

            // Calcular tempo restante
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Atualizar elementos
            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        }

        // Atualizar contagem regressiva a cada segundo
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>

</html>