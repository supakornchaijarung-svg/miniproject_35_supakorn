<?php

$season_id = $_POST["name"];
$title = $_POST["title"];
$release_year = $_POST["release_year"];
$characters_id = $_POST["character_id"];
$platform = $_POST["platform"];
$game_engine = $_POST["game_engine"];
$poster_img = $_POST["poster_img"];

include "connect.php";

$n = "UPDATE `seasons` 
SET 
    `title`='$title',
    `release_year`='$release_year',
    `Characters_id`='$characters_id',
    `platform`='$platform',
    `game_engine`='$game_engine',
    `poster_img`='$poster_img'
WHERE season_id = '$season_id' ";

$result = mysqli_query($con, $n);

if(!$result){
    echo "อัปเดตไม่สำเร็จ: " . mysqli_error($con);
}else{
    header("location: ../manage_character.php");
    exit;
}