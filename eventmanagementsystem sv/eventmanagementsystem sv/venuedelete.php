<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($db, "DELETE FROM venue WHERE id=$id");
echo "<script>window.location='viewVenuelist.php';</script>";

?>