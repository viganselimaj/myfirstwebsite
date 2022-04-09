<?php
  session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signup.php');
}

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: signin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="dist/css/style.css">
        <title>Gjuhet</title>
    </head>
    <body>
        <header>

            <a href="index.php" class="logo">
                <img src="dist/img/Print-Logo.svg" alt="Gjuhet Logo">
            </a>

            <div class="menubar">
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

            <div class="header-inner">
                <ul>
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Kurset</a>
                    </li>
                    <li>
                        <a href="teacher.php">Mesuesit</a>
                    </li>
                    <li>
                        <a href="contact.html">Kontakti</a>
                    </li>
                    <li>
                        <a href="index.php?logout='1'">Logout</a>
                    </li>

                </ul>
            </div>
        </header>
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Meso si te flasesh Shqipen perfekt.</h1>
                        <p>Platforma jone mundeson kursin me te avancuar per mesimin e gjuheve.</p>
                    </div>
                    <div class="offset-md-1 col-md-6">
                        <img src="dist/img/Home.png" alt="Header Image">
                    </div>
                </div>
            </div>
            <div class="sub-menu">
                <div class="container">
                    <div class="desktop-dropdown">
                        <ul class="row">
                            <li class="col-md-2">Un dua te mesoj</li>
                            <li class="col-md-2">
                                <a href="#"><img src="dist/img/Ikonat-01.svg" alt=""> Shqip</a>
                            </li>
                            <li class="col-md-2">
                                <a href="#"><img src="dist/img/Ikonat-02.svg" alt="">English</a>
                            </li>
                            <li class="col-md-2">
                                <a href="#"><img src="dist/img/Ikonat-03.svg" alt="">German</a>
                            </li>
                            <li class="col-md-2">
                                <a href="#"><img src="dist/img/Ikonat-04.svg" alt="">French</a>
                            </li>
                            <li class="col-md-2">
                                <a href="#"><img src="dist/img/Ikonat-02.svg" alt="">Matematik</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile-dropdown">
                        <h2>Un dua te mesoj</h2>
                        <select class="form-control" onchange="window.open(this);">
                            <option selected disabled hidden>
                                <a href="#"><img src="dist/img/Ikonat-01.svg" alt=""> Selekto Gjuhen</a>
                            </option>
                            <option value="https://www.google.com/search?q=put+link+in+option+html&oq=put+link+in+option+html&aqs=chrome..69i57j0i22i30l2.7770j0j7&sourceid=chrome&ie=UTF-8">
                                <a href="#"><img src="dist/img/Ikonat-01.svg" alt=""> Shqip</a>
                            </option>
                            <option>
                                <a href="#"><img src="dist/img/Ikonat-01.svg" alt=""> Shqip</a>
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="home-intro">
                <div class="row">
                    <div class="col-12">
                        <h2>Pse duhet mesuar me <span>Gjuhet.com?</span></h2>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-3">
                                <img src="dist/img/Sukses.svg" alt="Image">
                            </div>
                            <div class="col-9">
                                <h3>Programi</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-3">
                                <img src="dist/img/Programi.svg" alt="Image">
                            </div>
                            <div class="col-9">
                                <h3>Sukses</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-3">
                                <img src="dist/img/diplomim.svg" alt="Image">
                            </div>
                            <div class="col-9">
                                <h3>Diplomim</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 center register">
                        <a href="signup.php" class="button">Regjistrohu</a>
                    </div>
                </div>
            </div>
            <div class="explanation">
                <div class="row">
                    <div class="col-12">
                        <h2><span>Si</span> funksionon?</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-12 explanation-item">
                                <h3>1.Zgjedhe Programin</h3>
                                <p>Së pari zgjidhet programi të cilin do ta vazhdoni deri në fund të</p>
                            </div>
                            <div class="col-12 explanation-item">
                                <h3>2. Krijo Account</h3>
                                <p>Së pari zgjidhet programi të cilin do ta vazhdoni deri në fund të</p>
                            </div>
                            <div class="col-12 explanation-item">
                                <h3>3.Bëhu një folës i mirë!</h3>
                                <p>Së pari zgjidhet programi të cilin do ta vazhdoni deri në fund të</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="dist/img/Home.png" alt="Explanation Image">
                    </div>
                </div>
            </div>
            <div class="prices">
                <div class="row">
                    <div class="col-12">
                        <h2>Cmimet?</h2>
                    </div>
                    <div class="col-md-4">
                        <h3>Individual</h3>
                        <p>Së pari zgjidhet programi të cilin do ta vazhdoni deri në fund të</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Mësime në grup</h3>
                        <p>Së pari zgjidhet programi të cilin do ta vazhdoni deri në fund të</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Mësime intensive</h3>
                        <p>Së pari zgjidhet programi të cilin do ta vazhdoni deri në fund të</p>
                    </div>
                </div>
            </div>
            <div class="faq">
                <div class="row">
                    <div class="col-12">
                        <h2>FAQ!</h2>
                    </div>
                    <div class="offset-md-1 offset-2 col-md-5 faq-questions">
                        <div class="row">
                            <div class="col-12 faq-item">
                                <a href="#">Si te regjitrohem?</a>
                                <div class="faq-answer">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vel nostrum modi.
                                </div>
                            </div>
                            <div class="col-12 faq-item">
                                <a href="#">Si te regjitrohem?</a>
                                <div class="faq-answer">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vel nostrum modi.
                                </div>
                            </div>
                            <div class="col-12 faq-item">
                                <a href="#">Si te regjitrohem?</a>
                                <div class="faq-answer">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vel nostrum modi.
                                </div>
                            </div>
                            <div class="col-12 faq-item">
                                <a href="#">Si te regjitrohem?</a>
                                <div class="faq-answer">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vel nostrum modi.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-2 col-md-4 faq-contact">
                        <h3>Me shume <span>pyetje</span>?</h3>
                        <p>Grupi jone do te jete online per qfar do pyetje, Kliko tek teksti poshte.</p>
                        <a href="#" class="contact-home">Na kontakto</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-wrapper" style="background-image: url(dist/img/end-page.jpg);">
            <div class="container">
                <div class="register-content">
                    <h2>A je gati per te mesuar?</h2>
                    <a href="signup.php" class="button">Regjistrohu</a>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>About <span>Gjuhet.com</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ipsa modi suscipit sapiente, perferendis.</p>
                    </div>
                    <div class="offset-md-3 col-md-3">
                        <h3>Pages</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#">Home</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#">Mesuesit</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#">Kurset</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#">Kontakti</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3>Social Media</h3>
                        <ul class="social-media">
                            <li>
                                <a href="#" class="icon-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="icon-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="icon-youtube"></a>
                            </li>
                            <li>
                                <a href="#" class="icon-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="src/js/jquery.js"></script>
    <script src="src/js/main.js"></script>
    <script>
        function openInNewTab(obj)
        {
            //alert(obj.value);
            var win = window.open(obj.value, '_blank');
            win.focus();
        }
    </script>
</html>