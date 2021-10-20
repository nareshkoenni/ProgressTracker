<?php

$conn = mysqli_connect("127.0.0.1:8889", "root", "root", "progresstracker");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



