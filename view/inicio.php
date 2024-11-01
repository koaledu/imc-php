
<!DOCTYPE html>
<html lang="en">
<?php include 'comun/head.php' ?>
<body>
    <div class="wrapper">
    <?php include 'comun/aside.php' ?>
        <div class="main">
            <?php include 'comun/header.php' ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                    <li class="breadcrumb-item active"><a href="#">Inicio</a></li>
                </ol>
            </nav>

            <main>
                <div class="container">
                    <!--Inicio Contenido -->
                    <h1>Inicio</h1>
                        <div class="charts">
                            <div class="col">
                                <h2>Usuarios<h2>
                                <div>
                                  <canvas id="myChart1"></canvas>
                                </div>
                            </div>
                            <div class="col">
                                <h2>Mediciones<h2>
                                <div>
                                  <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    <!--Fin Contenido -->
                </div>
            </main>

            <?php include 'comun/footer.php' ?>
        </div>
    </div>
    <?php include 'comun/js.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
