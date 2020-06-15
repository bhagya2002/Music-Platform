<?php

if(isset($_POST['submit'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/join.css">
    <title>Mutone - Join</title>
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
                    <li>
                        <a href="discover.php">Discover</a>
                    </li>
                    <li>
                        <a href="join.php">Join</a>
                    </li>
                    <li class="selected">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- section(main content of the page) -->
        <section class="join-main-section">
            <h1 class="join-text">
                Effortless <span class="accent-text test">listening.</span>
            </h1>
            <form action="login.php" method="post" class="join-form">

                <!-- email input -->
                <div class="input-group emailer">
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                </div>
                <!-- password -->
                <div class="input-group passer">
                    <label for="password">Password:</label>
                    <input type="password" name="password">
                </div>
                <div class="input-group">
                    <button name="submit" class="btn" type="submit">Login</button>
                </div>
            </form>
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
        <div class="join-page-circle-1"></div>
        <div class="join-page-circle-2"></div>
    </div>

    <!-- JavaScript Files Upload -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
        integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    <script src="./js/login.js"></script>
</body>

</html>