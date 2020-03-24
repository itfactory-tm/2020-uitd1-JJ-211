<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Website webbureau">
    <meta name="author" content="Wodran Van de Sande, Yanik Piessens, Zalmai Majid">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

    <title>webbureau</title>

    <!-- CSS: Bootstrap, new-age, FA5 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
    <!--<link rel="stylesheet" href="formulier.php">-->

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <!--    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="./index.html">
                <img src="../favicon.ico" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./index.html">Ontwerpers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./index.html">Potenties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./index.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5">Bedankt!</h1>
                        <h4>Wij beantwoorden u vraag spoedig.</h4>
                        <p>Hier onder kan u nalezen wat u invulde:</p>
                        <?php
                if (isset($_POST["gebruikersnaam"]) && $_POST["gebruikersnaam"] != "") {
                    echo "<p> Ingevuld bij naam: " . $_POST["gebruikersnaam"] . "</p>\n";
                } else {
                    echo "<p> Gebruikersnaam werd niet ingevuld </p>\n";
                }
                
                if (isset($_POST["email"]) && $_POST["email"] != "") {
                    echo "<p> Ingevuld bij e-mail: " . $_POST["email"] . "</p>\n";
                } else {
                    echo "<p> E-mail werd niet ingevuld </p>\n";
                }
                
                if (isset($_POST["tel"]) && $_POST["tel"] != "") {
                    echo "<p> Ingevuld bij eigen telefoonnummer: " . $_POST["tel"] . "</p>\n";
                } else {
                    echo "<p> Telefoonnummer werd niet ingevuld </p>\n";
                }
                
                if (isset($_POST["gemeente"]) && $_POST["gemeente"] != "") {
                    echo "<p> Ingevuld bij gemeente: " . $_POST["gemeente"] . "</p>\n";
                } else {
                    echo "<p> Gemeente werd niet ingevuld </p>\n";
                }
                
                if (isset($_POST["opmerking"]) && $_POST["opmerking"] != "") {
                    echo "<p> Ingevuld bij opmerkingen: " . $_POST["opmerking"] . "</p>\n";
                } else {
                    echo "<p> Er werd geen vraag gesteld </p>\n";
                }
                
                ?>
                        <a href="./index.html" class="btn btn-outline btn-xl js-scroll-trigger">Ga terug</a>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <footer>
        <div class="container">
            <img src="../favicon.ico" alt="Logo">
            <p>&copy; Your Website 2019. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#"><i class="kip fab fa-instagram"></i>Instagram</a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><i class="kip fab fa-facebook-f"></i>Facebook</a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.thomasmore.be/"><i class="fas fa-university"></i>Thomas More</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- JS: jQuery, Bootstrap, new-age -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
