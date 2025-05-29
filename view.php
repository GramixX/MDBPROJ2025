<?php
require_once 'connection.php';
$id = new \MongoDB\BSON\ObjectId($_GET['id']);
$filter = ['_id' => $id];
$query = new MongoDB\Driver\Query($filter);
$article = $client->executeQuery("Angajati.angajati", $query);
$doc = current($article->toArray()); // folosim $doc în loc de $record
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Gramix's Cars - View</title>
    <link rel="icon" type="image/x-icon" href="assets/cars.ico" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles1.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Gramix's Cars</span>
            <span class="site-heading-lower">Best Cars in Town</span>
        </h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrarebaza.php">Administrare baza de date</a></li>
            </ul>
        </div>
    </nav>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h3>Detalii utilizator</h3>
                        <center>
                            <form>
                                <input type="hidden" name="id" value="<?php echo $doc->_id; ?>">
                                Nume: <input type="text" name="username" value="<?php echo $doc->username; ?>" readonly><br/>
                                Parola: <input type="text" name="password" value="<?php echo $doc->password; ?>" readonly><br/>
                                Profil: <br><img width="200px" height="200px" src="<?php echo $doc->image; ?>"><br/>
                                Vârstă: <input type="text" name="varsta" value="<?php echo $doc->varsta; ?>" readonly><br/>
                                Poziție: <input type="text" name="user_type" value="<?php echo $doc->user_type; ?>" readonly><br/>
                                <br>
                                <a href="administrarebaza.php" class="btn btn-primary">Înapoi la tabel</a>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-faded text-center py-5">
        <div class="container"><p class="m-0 small">Copyright &copy; Programare Web 2024</p></div>
    </footer>
</body>
</html>
