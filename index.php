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
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/main.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Gramix's Cars</span>
                            <span class="section-heading-lower">Masina potrivita pentru tine</span>
                        </h2>
                        <p class="mb-3">Alege-ne pe noi si iti garantam ca avem masina portrivita pentru tine!</p>
                        <div class="intro-button mx-auto"><a class="btn clr btn-xl" href="store.php">Vino la noi acum!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Promisiunea noastra </span>
                                <span class="section-heading-lower">catre tine</span>
                            </h2>
                            <p class="mb-0">Cand vei intra pe usa parcului nostru vei sti pe loc ca acesta este locul unde se afla solutia potrivita pentru tine. Vei fi asistat in permanenta de catre echipa noastra si vei pleca de la noi fericit, alaturi de o masina noua!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Programare Web 2024</p>
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FGramadAlexandru&layout&size&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>
    </body>
</html>
