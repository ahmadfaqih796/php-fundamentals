<?php
include("koneksi.php");

$query = "SELECT * FROM messages";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
   echo "<strong>" . $row["id"] . ":</strong> " . $row["text"] . "<br>";
}
