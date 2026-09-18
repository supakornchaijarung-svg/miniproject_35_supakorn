<?php

$id = $_GET["id"];

include "connect.php";

$sql = "DELETE FROM seasons WHERE season_id = '$id'";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "ERROR";
}else{
    header("location: ../manage_character.php");
    exit;
}
