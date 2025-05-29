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
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about1.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Dupa munca si rasplata</span>
                                    <span class="section-heading-lower">Despre afacerea noastra</span>
                                </h2>
                                <p>Infiintata in anul 2020 de catre Gramada Alexandru afacerea noastra se bucura de un succes considerabil atat pe plan local cat si pe plan international, urmand ca in curand sa ne extindem si in afara tarii cu un nou parc auto.</p>
                                <p class="mb-0">
                                    Iti garantam ca noi iti putem oferi 
                                    <em>solutia,</em>
                                     alaturi de echipa noastra foarte bine pregatita, suntem gata sa iti oferim serviciile de calitate superioara de care ai nevoie.
                                </p>
                            </div>
                        </div>
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
                                <span class="section-heading-upper">Esti in cautare de senzatii tari?</span>
                                <span class="section-heading-lower">La noi gasesti performanta</span>
                            </h2>
                        </div>
                    </div>
                    <iframe width="1110" height="740" src="https://www.youtube.com/embed/ZnpWFYqlg0Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Daca esti o persona dornica de adrenalina, la noi gasesti performanata!</p></div>
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
                                <span class="section-heading-lower">Cu masinile noastre vei ajunge pe cele mai frumoase drumuri!</span>
                            </h2>
                        </div>
                    </div>
                    <video width="1110" height="720" controls>
                        <source src="./video.mp4" type="video/mp4">
                    </video>
                   
                </div>
            </div>
        </section>
        <section class="page-section">
                <div class="incentru">       
                    <audio controls>
                            <source src="./assets/media/music.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                    </audio>
                </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-lower">Ne gasiti aici</span>
                            </h2>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10848.632882968946!2d27.553916680042825!3d47.174338688452806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20%E2%80%9EAlexandru%20Ioan%20Cuza%E2%80%9D!5e0!3m2!1sro!2sro!4v1717443582196!5m2!1sro!2sro" width="1110" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Vino la noi si cumpara-ti masina potrivita pentru tine, impreuna cu specialistii nostri te invitam sa iti alegi masina visurilor tale din colectia noastra si nu numai.</p></div>
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
