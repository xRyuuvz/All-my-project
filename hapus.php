<?php
include_once("konfig.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM manhwa WHERE id=$id");

header("Location:indek.php");
?>         