<?php

error_reporting(0);
$connect = mysqli_connect ("localhost","root","") or die (mysqli_connect_error());
mysqli_select_db($connect,"phpdb") or die(mysqli_error($connect));

echo "Connected!<p>";



?>