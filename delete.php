<?php include "config/db.php";
$id=$_GET['id'];
$conn->query("DELETE FROM randevular WHERE id=$id");
header("Location:index.php");
