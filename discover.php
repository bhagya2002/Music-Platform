<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/discover.css">
    <title>Mutone - Discover</title>
</head>

<body class="full-height-grow">
    <div class="container full-height-grow">
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
                    <li class="selected">
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
        <section class="discover-main-section">
            <div class="call-to-action">
                <h1 class="title">Discover new music</h1>
                <div class="icon-section">
                    <div class="icon">
                        <img src="./images/microphone.svg" alt="microphone">
                        Charts
                    </div>
                    <div class="icon">
                        <img src="./images/albums.svg" alt="albums">
                        Albums
                    </div>
                    <div class="icon">
                        <img src="./images/more.svg" alt="more">
                        More
                    </div>
                </div>
                <div class="subtitle">By joining you can benefit by listening to the latest albums released for
                    <span class="accent-text2">free!</span>
                </div>
            </div>
            <img src="./images/covers.jpg" alt="covers" class="covers-image">
        </section>
    </div> <!--  end tag for the content of the page -->

    <footer class="main-footer">

        <div class="container">
            <nav class="footer-nav">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <!-- <nav class="footer-nav">
                <ul>
                    <li><a href="#" class="social-link">
                            <img src="/images/twitter.svg" alt="twitter">
                            Twitter
                        </a></li>
                    <li><a href="#" class="social-link">
                            <img src="/images/facebook.svg" alt="facebook">
                            Facebook
                        </a></li>
                </ul>
            </nav> -->
        </div>
    </footer>

    <div id="circles">
        <div class="disc-page-circle1"></div>
        <div class="disc-page-circle2"></div>
        <div class="disc-page-circle3"></div>
    </div>

    <!-- JavaScript Files Upload -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
        integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="./js/discover.js"></script>
</body>

</html>