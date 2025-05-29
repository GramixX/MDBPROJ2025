<?php
session_start();
require 'connection.php';

// 1. Restaurăm sesiunea din cookie dacă există
if (isset($_COOKIE['username']) && !isset($_SESSION['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
}

// 2. Dacă există sesiune, extragem user_type din MongoDB
if (isset($_SESSION['username'])) {
    $filter = ['username' => $_SESSION['username']];
    $query = new MongoDB\Driver\Query($filter);
    $result = $client->executeQuery("Angajati.angajati", $query);
    $record = current($result->toArray());

    if ($record) {
        $pos = $record->user_type ?? '';
        $_SESSION['ADMIN'] = $pos;
    }
}

// 3. Preluăm termenul de căutare
$search_term = '';
if (isset($_POST["search"])) {
    $search_term = trim($_POST["search_box"]);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Gramix's Cars</title>
        <link rel="icon" type="image/x-icon" href="assets/cars.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="./css/styles1.css" rel="stylesheet"/>

    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Gramix's Cars</span>
                <span class="site-heading-lower">Best Cars in Town</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Store</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrarebaza.php">Administrare baza de date</a></li>
                            <?php 
                            if (isset($_SESSION['username'])) {
                                echo '<li class="nav-item px-lg-4" style="color:white;">';
                                echo $_SESSION["username"];
                                echo '</li>';

                                if (isset($_SESSION['ADMIN']) && $_SESSION['ADMIN'] === 'admin') {
                                    echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrarebaza.php">Administrare baza de date</a></li>';
                                }

                                echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="logout.php">Logout</a></li>';
                            } else {
                                echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Login</a></li>';
                            }
                            ?>

                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">

            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            
                            <p class="svg">
                                <img src="./assets/img/svg.svg" width="500" height="250" alt="">
                            </p>
                            <center>
                                <form name="search_form" method="post" action="administrarebaza.php">
                                    Search: <input type="text" name="search_box" value="">
                                    <input type="submit" name="search" value="Search the table">
                                </form>

                                <?php
                                require_once 'connection.php';

                                $search_term = $_POST['search_box'] ?? '';

                                // Construim filtrul MongoDB
                                $filter = [];
                                if (!empty($search_term)) {
                                    $filter = ['username' => $search_term];
                                }

                                // Executăm interogarea
                                $query = new MongoDB\Driver\Query($filter);
                                $res = $client->executeQuery("Angajati.angajati", $query);

                                // Afișăm tabelul
                                echo "<table border='1'>
                                <tr>
                                    <th>ID</th>
                                    <th>Profil</th>
                                    <th>Utilizator</th>
                                    <th>Parola</th>
                                    <th>Varsta</th> 
                                    <th>Pozitie</th>
                                    <th>Actiuni</th>
                                </tr>";

                                foreach ($res as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row->_id . "</td>";
                                    echo "<td><img src='" . $row->image . "' height='100px' width='100px'></td>";
                                    echo "<td>" . $row->username . "</td>";
                                    echo "<td>" . $row->password . "</td>";
                                    echo "<td>" . $row->varsta . "</td>";
                                    echo "<td>" . $row->user_type . "</td>";
                                    // Aici poți adăuga și linkuri spre edit/view/delete
                                    echo "<td>
                                        <a href='edit.php?id=" . $row->_id . "'>Edit</a> |
                                        <a href='view.php?id=" . $row->_id . "'>View</a> |
                                        <a href='delete.php?id=" . $row->_id . "' onclick=\"return confirm('Sigur vrei să ștergi acest document?')\">Sterge</a>
                                    </td>";
                                    echo "</tr>";
                                }

                                echo "</table>";
                                ?>
                                <br><br>
                                </center>
                                <center>
                                <div class="intro-button mx-auto"><a class="btn btn-xl" href="add.php">Adauga in baza de date!</a></div>
                                </center>

                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Programare Web 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>
    </body>
</html>