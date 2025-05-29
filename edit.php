<?php
include 'connection.php';
$bulk  = new MongoDB\Driver\BulkWrite;

if(!isset($_POST["submit"])){
    $id = new \MongoDB\BSON\ObjectId($_GET['id']);
    $filter = ['_id'=>$id];
    $query = new MongoDB\Driver\Query($filter);
    $article = $client->executeQuery("Angajati.angajati",$query);
    $doc = current($article->toArray());
} else {
    if (isset($_FILES['image'])) {
        $target = "./assets/img/" . basename($_FILES['image']['name']);
    }
    else {
        $target = $doc->image; // Use the existing image if no new file is uploaded
    }
    $data= [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'varsta' => $_POST['varsta'],
        'image' => $target,
        'user_type' => $_POST['usertype']
    ];    
    $id = new \MongoDB\BSON\ObjectId($_POST['id']);
    $filter = ['_id'=>$id];
    $update = ['$set' => $data];
    $bulk->update($filter,$update);
    $client->executeBulkWrite('Angajati.angajati',$bulk);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    header('Location: administrarebaza.php');

}?>

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
                            <h1>Editare conturi</h1>
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . (isset($doc->_id) ? $doc->_id : ''); ?>" enctype="multipart/form-data">
                                    Utilizator:<input type="text" name="username" value="<?php echo isset($doc->username) ? $doc->username : ''; ?>"><br>
                                    Parola:<input type="text" name="password" value="<?php echo isset($doc->password) ? $doc->password : ''; ?>"><br>
                                    Profil:<input type="file" name="image"><br>
                                    <img width="200px" height="200px" src="<?php echo isset($doc->image) ? $doc->image : ''; ?>"><br/>
                                    Vârsta:<input type="number" name="varsta" value="<?php echo isset($doc->varsta) ? $doc->varsta : ''; ?>"><br>
                                    Tip utilizator:
                                    <select name="usertype">
                                        <option value="admin" <?php echo (isset($doc->user_type) && $doc->user_type == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                        <option value="user" <?php echo (isset($doc->user_type) && $doc->user_type == 'user') ? 'selected' : ''; ?>>User</option>
                                    </select><br>
                                    <input type="hidden" name="id" value="<?php echo isset($doc->_id) ? $doc->_id : ''; ?>">
                                    <input type="Submit" name="submit" value="Submit" onclick="window.location.href='administrarebaza.php';">
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>
    </body>
</html>
