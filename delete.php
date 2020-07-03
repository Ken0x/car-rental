<?php
require_once("db.php");
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
mysqli_query($db,$sql);
header("Location:admin.php");
?>