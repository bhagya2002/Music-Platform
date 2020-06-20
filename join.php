<?php
session_start();
include('config/db_connect.php');

if(isset($_POST['submit'])){
    // Fetching variables of the form which travels in URL
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    
    if($fname != " " && $lname != " " && $email != " " && $pass != " " && $repass != " "){
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $repass = mysqli_real_escape_string($conn, $_POST['repass']);
    }

        // create sql
        $sql = "INSERT INTO users(fname, lname, inemail, inpass, repassword) VALUES ('$fname', '$lname', '$email', '$pass', '$repass')";


        // save to db and check
        if (mysqli_query($conn, $sql)) {
            //success
            header('Location: index.php');
        } else {
            // error
            echo 'query error:' . mysqli_error($conn);
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
                <img src="images/logo.png" alt="App Logo">
                <!-- name -->
                <div class="brand-logo-name">Mutone</div>
            </a>

            <!-- right side of the header (different pages) -->
            <nav class="main-nav">
                <ul>
                    <li>
                        <a href="discover.php">Discover</a>
                    </li>
                    <li class="selected">
                        <a href="join.php">Join</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- section(main content of the page) -->
        <section class="join-main-section">

            <!-- left content -->
            <h1 class="join-text">
                Start streaming <span class="accent-text">here!</span>
            </h1>

            <!-- right side of the section -->
            <!-- form that sign's people up -->
            <form action="join.php" method="POST" class="join-form" name="signer" id="regForm">
                <!-- tab 1 (first and last name) -->
                <div class="tab">
                    <div class="input-group">
                        <label for="fname">First Name:</label>

                        <input type="text" name="fname">
                        <label for="lname">Last Name:</label>

                        <input type="text" name="lname">
                    </div>
                </div>

                <!-- tab 2 (email) -->
                <div class="tab">
                    <div class="input-group">
                        <label for="email">Email:</label>

                        <input type="email" name="email">
                    </div>
                </div>

                <!-- tab 3 (password and confirm) -->
                <div class="tab">
                    <div class="input-group">
                        <label for="pass">Password:</label>

                        <input type="password" name="pass">
                        <label for="repass">Comfirm Password:</label>

                        <input type="password" name="repass">
                    </div>
                </div>

                <!-- next and previous buttons -->
                <div class="input-group .buttoner">
                    <div>
                        <button style="float: left;" class="btn" type="button" id="prevBtn"
                            onclick="nextPrev(-1)">Previous</button>
                        <button style="float: right" class="btn" type="button" id="nextBtn"
                            onclick="nextPrev(1)">Next</button>
                        <button style="float: right;display:none" class="btn" type="submit" id="submited"
                            name="submit">Sumbit</button>

                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:-20px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
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
    <script src="./js/join.js"></script>

</body>

</html>