<?php
include 'connection.php';
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
                            if(isset($_SESSION['username'])){
                                echo '<li class="nav-item px-lg-4" style="color:white;" >';
                                echo ' '.$_SESSION["username"].' ';
                                echo '<ul>';
                                if(isset($_SESSION['username'])){
                                    if($pos == 'admin' ){
                                        echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrareconturi.php">Administrare conturi</a></li>';
                                        echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrarebaza.php">Administrare baza de date</a></li>';
                                    }
                                }
                                echo '<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="logout.php">Logout</a></li>';
                                echo '</ul>';
                                echo '</li>';
                            }
                            else{
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
                            <h1>Adauga in baza de date</h1>
                                <form method="post" action="save.php" enctype="multipart/form-data">
                                    Utilizator:<input type="text" name="username" required><br><br>
                                    Parola:<input type="password" name="password" required><br><br>
                                    Profil:<input type="file" name="image" accept="image/*"><br><br>
                                    Varsta:<input type="number" name="varsta" min="0" required><br><br>
                                    Tipul de utilizator: <br> 
                                    <select name="user_type" required>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select><br><br>
                                    <input type="hidden" name="id" value="<?php echo isset($record['id']) ? $record['id'] : ''; ?>">
                                    <input type="submit" name="upload" value="Incarcati">
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
