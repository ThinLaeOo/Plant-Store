<?php

require_once "dbconn.php";
$sql = "select * from products";
$stmt = $conn->query($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
foreach ($rows as $data) {
    echo $data ['pName'] ."<br>";
    echo $data ['price'] ."<br>";
    echo "<img src ='$product [image]>";
}

?>
