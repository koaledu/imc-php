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
                    <li class="breadcrumb-item active"><a href="#">Usuarios</a></li>
                </ol>
            </nav>

            <main>
                <div class="container">
                    <!--Inicio Contenido -->
                    <h1>Usuarios</h1>

                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Celular</th>
                                        <th scope="col">Sexo</th>
                                        <th scope="col">Fecha de nacimiento</th>
                                        <th scope="col">Acción 1</th>
                                        <th scope="col">Acción 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Willhelmys Durán</td>
                                        <td>300 248 1023</td>
                                        <td>Masculino</td>
                                        <td>12/08/1998</td>
                                        <td><a href="index.php?url=measurement">Medición</a></td>
                                        <td><a href="index.php?url=history">Historial</a></td>
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
