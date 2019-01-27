<?php

require("connect.php");

$todelete = $_POST['peoplename'];

$delete = mysqli_query($connect,"DELETE FROM people WHERE id='$todelete'") or die(mysqli_error($connect));

?>