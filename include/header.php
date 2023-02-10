<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Byron</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/avenir" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="./assets/css/main.css" rel="stylesheet">
    <link href="./assets/css/main.scss" rel="stylesheet">
  </head>
  <body>


<header>
    <div class="header-pc">
    <div class="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./about.php">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./menu.php">menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./order.php">order</a>
                        </li>
                        <a class="navbar-brand nav-link" href="./index.php"><img src="./assets/images/site-logo.svg" alt=""></a>
                    <li class="nav-item">
                    <a class="nav-link" href="./book.php">book</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">locations</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./club.php">club</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link last" href="#">shop</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="image"><img src="./assets/images/header-light-right.svg" alt=""></div>
        <div class="image1"><img src="./assets/images/header-light-right-1.svg" alt=""></div>
    </div>
    </div>




    <div class="header-mobile">
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="./assets/images/hamburger-close.svg" alt=""></a>
        <a href="./index.php" class="ham-logo"><img src="./assets/images/site-logo-mob.svg" alt=""></a>
        <div class="overlay-content">
            <img src="./assets/images/menu-character.svg" alt="">
            <ul>
            <a href="about.php">ABOUT US</a>
            <a href="./menu.php">MENU</a>
            <a href="./order.php">ORDER</a>
            <a href="./book.php">BOOK</a>
            <a href="#">LOCATIONS</a>
            <a href="./club.php">CLUB</a>
            <a href="#">SHOP</a><hr>
            </ul>

            <h2>Social</h2>
            <div class="nav-social">
            <a href="" class="icon-twitter"></a>
            <a href="" class="icon-facebook"></a>
            <a href="" class="icon-instagram"></a>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="mb-nav">
                <img src="./assets/images/site-logo.svg" alt="">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="./assets/images/hamburger.svg" alt=""></span>
            </div>
        </div>

    </div>

</header>