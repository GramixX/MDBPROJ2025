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
        <link href="css/styles2.css" rel="stylesheet" />
       

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
                        <!--<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrareconturi.php">Administrare conturi</a></li>-->
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="administrarebaza.php">Administrare baza de date</a></li>
                        <!--<?php 
                            if(isset($_SESSION['username'])){
                                echo '<li>';
                                echo ' '.$_SESSION["username"].' ';
                                echo '<ul>';
                                if(isset($_SESSION['username'])){
                                    if($pos == 'admin' ){
                                        echo '<li><a lass="nav-item px-lg-4" href="administrareconturi.php">Administrare conturi</a></li>';
                                        echo '<li><a lass="nav-item px-lg-4" href="administrarebaza.php">Administrare baza de date</a></li>';
                                    }
                                }
                                echo '<li><a lass="nav-item px-lg-4" href="logout.php">Logout</a></li>';
                                echo '</ul>';
                                echo '</li>';
                            }
                            else{
                                echo '<li class="nav-item px-lg-4"><a  class="nav-link text-uppercase" href="login.php">Login</a></li>';
                            }
                            ?>-->
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            
                            <center>
                                <canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
                                Your browser does not support the HTML canvas tag.</canvas>

                                <script>
                                    var c = document.getElementById("myCanvas");
                                    var ctx = c.getContext("2d");
                                    ctx.font = "30px Arial";
                                    ctx.fillText("REGISTER",20,60);
                                </script>
                            </center>
                            <center>
                                <div class="register-container">
                                    <form method="post" class="register-form" action="register.php" name="form1" onsubmit="return checkCaptcha();" enctype="multipart/form-data">
                                        <h3 class="register-title">REGISTER</h3>
                                        <script>
                                            var captcha, chars;

                                            function getNewCaptcha(){
                                                chars='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                                                captcha = chars[Math.floor(Math.random()*chars.length)];
                                                for(var i=0; i<5; i++){
                                                    captcha = captcha + chars[Math.floor(Math.random()*chars.length)];
                                                }
                                                form1.ct.value=captcha;
                                            }

                                            function checkCaptcha(){
                                                var check=document.getElementById('ci').value;
                                                if(captcha==check){
                                                    return true;
                                                }
                                                else{
                                                    alert('Invalid captcha');
                                                    return false;
                                                }
                                            }

                                            getNewCaptcha();
                                        </script>
                                        <div class="form-group">
                                            <label class="form-label" for="username">User:</label>
                                            <input class="form-input" type="text" id="username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password:</label>
                                            <input class="form-input" type="password" id="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="varsta">Varsta:</label>
                                            <input class="form-input" type="text" id="varsta" name="varsta" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="image">Imagine de profil:</label>
                                            <input class="form-input" type="file" id="image" name="image" accept="image/*" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="cta" name="ct" value="####" readonly>
                                            <input type="text" id="ci" class="form-input" placeholder="Captcha">
                                            <input type="button" id="refreshbtn" class="submit-btn" value="Refresh" onclick="getNewCaptcha();">
                                        </div>
                                        <input class="submit-btn" type="submit" name="upload" value="Join">
                                    </form>
                                </div>
                            </center>
                            
                            <p class="mb-0">
                                <small><em>Call Anytime</em></small>
                                <br />
                                0232 201 000
                            </p>
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
