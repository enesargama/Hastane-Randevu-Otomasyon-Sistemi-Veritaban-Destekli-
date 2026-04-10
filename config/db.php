<?php
session_start();
$conn = new mysqli("localhost","root","","hastane_db");
if($conn->connect_error){ die("DB Hata"); }
?>
