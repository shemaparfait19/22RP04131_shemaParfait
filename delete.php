<?php
session_start();
include 'conn.php';
		$id = $_GET['id'];
		$sql = mysqli_query($link,"delete from students where id = '$id'");
		header("location:dashboard.php");

?>