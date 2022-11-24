<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKMM-TD XXXIII</title>
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>
        body{
            background-image: url('image/Desain-Web-PC.jpg');
            background-position: absolute;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        @media screen and (max-width: 767px) {
            body{
            background-image: url('image/Desain-Web-HP.jpg');
            }
        }

        @font-face {
        font-family: fonsecalight;
        src: url(../font/Fonseca-Light.otf);
        }
        @font-face {
        font-family: fonsecablack;
        src: url(../font/Fonseca-Black.otf);
        }
        @font-face {
        font-family: louisgeorge;
        src: url(font/Louis-George-Cafe-Light.ttf);
        }
        @font-face{
            font-family: louisgeorgebold;
            src: url(Louis-George-Cafe-Bold.ttf);
        }

        .navbar{
            font-family: louisgeorge;
            src: url(../font/Fonseca-Light.otf);
            color: white;
            -webkit-backdrop-filter: blur(8px);
            backdrop-filter: blur(8px);
        }
        .navbar-nav{
            margin-left: auto;
        }
        .nav-link{
            color: white;
        }
        .nav-link:hover{
            color: orange;
        }

        .container {
        width: 100%;
        margin-top: 13em;
        overflow: hidden;
        max-width: 30em;
        }
        
        /* Animation Text Slide In*/
        .container h2 {
        animation: 3s container;
        animation-delay: 0s;
        }
        @keyframes container {
        from {
            margin-left: -180%;
        }
        to {
            margin-left: 0%;
        }
        }

        /* Hover Text Bigger Size */
        .container h2{
            color: white; 
            font-family: louisgeorgebold; 
            text-align: center;
            font-size: 2em;

            -webkit-transition: font-size .5s ease;
            -moz-transition: font-size .5s ease;
            -o-transition: font-size .5s ease;
            transition: font-size .5s ease;
        }
        .container h2:hover{
            font-size: 2.2em;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand">LKMM-TD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: white;">
        <span class="navbar-toggler-icon">
            <i class="fas fa-bars" style="padding-top: 0.2em;">
            </i>
        </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Daftar Kelompok</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Absensi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Perizinan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    

    <div class="container">
        <h2>
            <div class="header" style="font-weight: bold;">
            LKMM-TD XXXIII
            </div>
            <br>
            "INDISPENSABLE LEADER,
            <br>
            THE EXALTED ACHIEVER"
        </h2>
    </div>

</body>
</html>
