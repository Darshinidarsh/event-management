<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($db, "DELETE FROM booking WHERE id=$id");
echo "<script>window.location='ViewEvents.php';</script>";

?>