<?php
require_once "db.php";

$query = "SELECT * FROM `user`";

$result = $conn->query($query);

while ($row=$result->fetch_assoc()){
    echo $row["name"];
}