<?php
// connect to database
$conn = mysqli_connect('localhost', 'bhagya', 'test1234', 'music');

// check connection 
if (!$conn) {
    // if the conncetion fails to conenct to the server
    echo 'Connection error: ' . mysqli_connect_error();
}