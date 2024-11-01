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
                    <li class="breadcrumb-item"><a href="#">IMC</a></li>
                    <li class="breadcrumb-item active"><a href="#">Medición</a></li>
                </ol>
            </nav>

            <main>
                <div class="container">
                    <!--Inicio Contenido -->
                    <h1>Medición</h1>

                    <div class="card">
                        <form class="card-body">
                            <h2>Formulario nueva medición</h2>
                            <div class="mb-3">
                                <label class="form-label">Altura</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Peso</label>
                                <input type="number" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <!--Fin Contenido -->
                </div>
            </main>

            <?php include 'comun/footer.php' ?>
        </div>
    </div>
    <?php include 'comun/js.php' ?>
</body>
</html>
