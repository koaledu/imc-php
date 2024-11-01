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
                    <li class="breadcrumb-item active"><a href="#">Historial</a></li>
                </ol>
            </nav>

            <main>
                <div class="container">
                    <!--Inicio Contenido -->
                    <h1>Historial</h1>

                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li><strong>Nombre: </strong>Willhelmys Durán</li>
                                <li><strong>Celular: </strong>300 248 1023</li>
                                <li><strong>Sexo: </strong>Masculino</li>
                                <li><strong>Fecha de nacimiento: </strong>12/08/1998</li>
                            </ul>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Altura</th>
                                        <th scope="col">Peso</th>
                                        <th scope="col">IMC</th>
                                        <th scope="col">Recomendación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>31/10/24</td>
                                        <td>1.65m</td>
                                        <td>72kg</td>
                                        <td>26.4 - <strong>Sobrepeso</strong></td>
                                        <td>Limitar las calorías consumidas.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
