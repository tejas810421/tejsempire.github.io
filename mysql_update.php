<?php

require("connect.php");

$peoplename = $_POST['peoplename'];
$tochange = $_POST['tochange'];

if($peoplename&&$tochange)
{
	$change=mysqli_query($connect,"UPDATE people SET firstname='$tochange' WHERE id='$peoplename'") or die(mysqli_error($connect));
}

?>