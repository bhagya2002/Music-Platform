<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Mutone</title>
</head>

<body class="container full-height-grow">
    <!-- header(logo + name) and nav(different pages) -->
    <header class="main-header">
        <!-- left side of the header (logo and name) -->
        <a href="index.php" class="brand-logo">
            <!-- logo -->
            <img src="./images/logo.png" alt="App Logo">
            <!-- name -->
            <div class="brand-logo-name">Mutone</div>
        </a>

        <!-- right side of the header (different pages) -->
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="discover.php">Discover</a>
                </li>
                <li>
                    <a href="join.php">Join</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- section(main content of the page) -->
    <section class="home-main-section">
        <div class="img-wrapper">
            <div class="lady-image" style="background-image: url('./images/music-man.png');"></div>
        </div> <!-- end of image tag-->
        <div class="call-to-action">
            <h1 class="title">Feel The Music</h1>
            <span class="subtitle">Stream over <span class="accent-text2">thousands</span> of songs with <span
                    class="accent-text1">one click.</span></span>
            <span class="subtitle ad">Ad-free Listening</span>
            <a href="join.php" class="btn">Join Now</a>
        </div>
    </section>

    <div id="circles">
        <div class="home-page-circle1"></div>
        <div class="home-page-circle2"></div>
        <div class="home-page-circle3"></div>
    </div>

    <!-- JavaScript Files Upload -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
        integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</body>

</html>