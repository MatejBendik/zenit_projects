<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Sir Arthur Conan Doyle (* 22. máj 1859, Edinburgh – † 7. júl 1930, Crowborough, Sussex, Spojené kráľovstvo) bol škótsky spisovateľ, ktorý sa preslávil poviedkami o Sherlockovi Holmesovi. Jeho ďalšie veľmi známe dielo je Stratený svet.">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Old Cars Reservation</title>
</head>

<body class="container-fluid">
    <div class="container mainHeader ">
        <header id="topHeader"
            class=" flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 " id="navigation">
                <li>
                    <a id="navText" href="index.html" class="nav-link px-2"> ÚVOD</a>
                </li>
                <li>
                    <a id="navText" href="autor.html" class="nav-link px-2"> SLUŽBY</a>
                </li>
                <li>
                    <a id="navText" href="knihy.php" class="nav-link px-2"> NAŠA PRÁCA</a>
                </li>
                <li>
                    <a id="navText" href="knihy.php" class="nav-link px-2"> REZERVAČKA</a>
                </li>
            </ul>
        </header>

        <div class="row" id="mainSection">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img" style= "background-image: url(img/pozadie-uvod.jpg)"></div>
                    <div id="carouselCaption" class="carousel-caption ">
                        <img class="img-fluid"  src="img/logo.png" id="logo"
                        alt="Logo" title="Logo">    
                    <h1 id="carouselCaptionH1">ZEN & HAR</h1>
                        <p id="carouselCaptionP">VÁŠ ŠPECIALISTA NA VETERÁNY</p>
                    </div>
                </img>
                </div>
            </div>
        </div>

            <div style="background-image: url(img/pozadie-sluzby.jpg)" class=" text-center container-fluid text-white" id="sluzby">
                <div class="row justify-content-md-center">

                <div class="col col-md-12 text-center">
                    <h2 class="text-white">SLUŽBY</h2>
                    <hr class="hr" style="height:5px">
                </div>
                </div>
                <div class="row justify-content-md-center gx-5" id="sluzbyTexts">
                <div class="col col-4 ">
                <img src="img/sluzby-opravy.png" alt="">
                <h2 id="headingH2" class="text-white">OPRAVY</h2>
                <p>Všeobecné opravy <br> Špecializované opravy <br> Dobové náhradné diely <br> </p>
                </div>
                <div class="col col-md-auto">
                <img src="img/sluzby-opravy.png" alt="">
                <h2 id="headingH2" class="text-white">Čalúnenie</h2>
                <p>Veľký rozsah tkanín <br> Vrátane dobových koží <br> Široká paleta farieb <br> </p>
                </div>
                <div class="col col-4">
                <img src="img/sluzby-opravy.png" alt="">
                <h2 id="headingH2" class="text-white">NÁTERY</h2>
                <p>Striekanie <br> Ručné malovanie na základe <br> požiadavky klienta <br> </p>
                </div>
                </div>
            </div>

        <!-- Footer -->
        <footer id="footer" class="text-center ">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                        <p id="footerText">
                            Ⓒ 2018 vytvoril Matej Bendik, SPŠ technická
                            <br>
                            všetky práva vyhradené ZENIT
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>