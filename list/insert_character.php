<?php

$title = $_POST["title"];
$release_year = $_POST["release_year"];
$platform = $_POST["platform"];
$game_engine = $_POST["game_engine"];
$poster_img = $_POST["poster_img"];
$characters_id = $_POST["characters_id"];

include "connect.php";

$sql = "INSERT INTO `seasons`
        (`title`, `release_year`, `platform`, `game_engine`, `poster_img`, `Characters_id`)
        VALUES 
        ('$title','$release_year','$platform','$game_engine','$poster_img','$characters_id')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "เพิ่มข้อมูลไม่สำเร็จ: " . mysqli_error($con);
}else{
    header("location: ../index.php");
    exit;
}