<?php
session_start();
include('./config/db_connect.php');

$email = $pass = '';
$errors = array('email' => '', 'pass' => '', 'check' => '');
$formError = false;

if (isset($_POST['submit'])) {

    // check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    // check pass
    if (empty($_POST['pass'])) {
        $errors['pass'] = 'A password is required <br>';
    }

    if (array_filter($errors)) {
        // echo 'errors in the form';
        // $formError = true;
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
}
        // create sql
        $sql = "SELECT * FROM users WHERE inemail = '$email' AND inpass = '$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0 ) {
           
            //  success
                    header('Location: index.php');
                  
            } else {
               // error
            $errors['check'] = 'The email/password is incorrect.';
            $formError = true;
            }
    } // end of post check
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
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="join-form">

                <!-- email input -->
                <div class="input-group emailer">
                    <label for="email">Email:</label>
                    <div style="color:red; font-size:0.9em;"><?php echo $errors['email']; ?></div>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($email) ?>">
                </div>
                <!-- password -->
                <div class="input-group passer">
                    <label for="pass">Password:</label>
                    <div style="color:red;font-size:0.9em;"><?php echo $errors['pass']; ?></div>
                    <input type="password" name="pass">
                    <div style="color:red;font-size:0.9em;"><?php echo $errors['check']; ?></div>
                </div>
                <div class="input-group">
                    <button name="submit" value="Login" class="btn" type="submit">Login</button>
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