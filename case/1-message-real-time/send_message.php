<?php
include("koneksi.php");

$message = $_POST["text"];

$query = "INSERT INTO messages (text) VALUES ('$message')";
mysqli_query($conn, $query);
