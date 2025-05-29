<?php
include 'connection.php';

if(isset($_COOKIE['username']) && !isset($_SESSION['username']))
{
	$_SESSION['username'] = $_COOKIE['username'];
}
if(isset($_SESSION['username'])){
    $sql="SELECT * FROM angajati WHERE username='{$_SESSION['username']}'";
    $query=mysqli_query($con,$sql) or die(mysqli_query($con));
    $record=mysqli_fetch_array($query);
    $pos=$record['user_type'];
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="registerform.php">Register</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrarebaza.php">Administrare baza de date</a></li>
                        <!--<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrareconturi.php">Administrare conturi</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrarebaza.php">Administrare baza de date</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Login</a></li>-->
                         
                        <?php 
                            if(isset($_SESSION['username'])){
                                echo '<li class="nav-item px-lg-4" style="color:white;">';
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
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Facuti pentru a face performanta</span>
                                <span class="section-heading-lower">Cumpara masina perfecta pentru tine</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/prod.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Vino la noi si cumpara-ti masina potrivita pentru tine, impreuna cu specialistii nostri te invitam sa iti alegi masina visurilor tale din colectia noastra si nu numai.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Ai nevoie de un ajutor rapid</span>
                                <span class="section-heading-lower">Inchiriaza o masina de la noi</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/prod1.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Daca nu iti doresti sa cumperi o masina, dar ai nevoie de una, la noi gasesti solutia. Vino la noi si iti inchiriem o masina asa cum iti place tie.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">La noi gasesti solutia</span>
                                <span class="section-heading-lower">Iti aducem noi o masina dupa preferintele tale</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/prod2.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Esti putin mai pretentios si nu ai gasit nimic pe gustul tau in parcul nostru auto, iti doresti ceva special, noi ne consultam cu tine si iti aducem masina visurilor tale.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                           
                            <center><h1>Cateva din masinile noastre</h1></center>
                            <br><br><br>
                            <?php
                                include 'clase.php';
                                $masina1=new masini();
                                $masina2=new masini();
                                $masina3=new masini();
                                
                                $masina1->setMarca('BMW 528i');
                                $masina2->setMarca('Subaru Impreza');
                                $masina3->setMarca('Dacia Logan');
                                $masina1->setAn_fabricatie('2015');
                                $masina2->setAn_fabricatie('2008');
                                $masina3->setAn_fabricatie('2005');
                                $masina1->setPret('16000$');
                                $masina2->setPret('10000$');
                                $masina3->setPret('3000$');
                                $masina1->setStoc('Este in Stoc');
                                $masina2->setStoc('Nu este in Stoc');
                                $masina3->setStoc('Este in Stoc');


                            ?>
                            <table border="1" style="position: relative;
                            bottom:0;
                            z-index: 2;
                            left: 50%;
                            top: 50%;
                            transform: translate(-50%,-50%);
                            width: 60%; 
                            border-collapse: collapse;
                            border-spacing: 0;
                            box-shadow: 0 2px 15px rgba(64,64,64,.7);
                            border-radius: 12px 12px 0 0;
                            overflow: hidden;">
                            <tr>
                                <th>Marca</th>
                                <th>An fabricatie</th>
                                <th>Pret</th>
                                <th>Stoc</th>
                            </tr>
                            <tr>
                                <td><?php $masina1->AfisareMarca(); ?></td>
                                <td><?php $masina1->AfisareAn_fabricatie(); ?></td>
                                <td><?php $masina1->AfisarePret(); ?></td>
                                <td><?php $masina1->AfisareStoc(); ?></td>
                            </tr>
                            <tr>
                                <td><?php $masina2->AfisareMarca(); ?></td>
                                <td><?php $masina2->AfisareAn_fabricatie(); ?></td>
                                <td><?php $masina2->AfisarePret(); ?></td>
                                <td><?php $masina2->AfisareStoc(); ?></td>
                            </tr>
                            <tr>
                                <td><?php $masina3->AfisareMarca(); ?></td>
                                <td><?php $masina3->AfisareAn_fabricatie(); ?></td>
                                <td><?php $masina3->AfisarePret(); ?></td>
                                <td><?php $masina3->AfisareStoc(); ?></td>
                            </tr>
                        </table>
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
