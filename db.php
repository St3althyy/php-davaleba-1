<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "davaleba_1";
$conn = new mysqli($servername, $username, $password, $db);


if ($conn -> connect_error){
    die("connection refused");
}

else {
//    echo "yes";
}
