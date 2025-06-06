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
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Te asteptam la noi</span>
                                <span class="section-heading-lower">Program</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Sunday
                                    <span class="ms-auto">Closed</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Monday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Tuesday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Wednesday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Thursday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Friday
                                    <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Saturday
                                    <span class="ms-auto">9:00 AM to 5:00 PM</span>
                                </li>
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>Bulevardul Carol I 11</strong>
                                    <br />
                                    Iasi, Romania
                                    </em>
                            </p>
                            <p>
                            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FUAICdinIASI&width=75&layout&action&size&share=true&height=35&appId" width="75" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>                            </p>
                            <p class="mb-0">
                                <small><em>Call Anytime</em></small>
                                <br />
                                0232 201 000
                            </p>
                            <br><br>
                            <br>
                            <center><h1>Angajatii Nostri</h1></center>
                            <br><br><br>
                            <?php
                                include 'clase.php';
                                $angajat1=new angajati();
                                $angajat2=new angajati();
                                $angajat3=new angajati();
                                $angajat1->setNume('Gramix');
                                $angajat2->setNume('Cristi');
                                $angajat3->setNume('Vladut');
                                $angajat1->setFunctie('Owner');
                                $angajat2->setFunctie('Agent_vanzari');
                                $angajat3->setFunctie('Mecanic');
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
                                <th>Nume</th>
                                <th>Functie</th>
                            </tr>
                            <tr>
                                <td><?php $angajat1->afisareNume(); ?></td>
                                <td><?php $angajat1->afisareFunctie(); ?></td>
                            </tr>
                            <tr>
                                <td><?php $angajat2->afisareNume(); ?></td>
                                <td><?php $angajat2->afisareFunctie(); ?></td>
                            </tr>
                            <tr>
                                <td><?php $angajat3->afisareNume(); ?></td>
                                <td><?php $angajat3->afisareFunctie(); ?></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/str.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Din pasiune pentru tine</span>
                                    <span class="section-heading-lower">Ajuta-ne sa ne marim echipa</span>
                                </h2>
                                <p>Deoarece cererea de masini si numarul clientilor este foarte mare dorim sa ne marim echipa. Daca crezi ca esti o persoana prietenoasa, serioasa si dornica de munca, noi te asteptam in echipa noastra!
                                </p>
                                
                            </div>
                            <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="registerform.php">Hai in echipa noastra!</a></div>
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
