<?php
include("includes/header.php");
include("includes/function.php");
include("includes/config.php");
$id=$_GET['del'];
mysqli_query($con,"DELETE FROM jl WHERE id='$id'");
header("location:list.php");
?>