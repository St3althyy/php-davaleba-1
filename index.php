<?php
require_once "db.php";

if (isset($_GET["name"])) {
    $name = mysqli_real_escape_string($conn, $_GET["name"]);
    $sql = "INSERT INTO `user`(`name`, `password`)
            VALUES ('$name', 'pwd')";

    if ($conn->query($sql) === TRUE) {
        echo "successსსსს";
    }
    else {
        "error: ". $conn->error;
    }
}