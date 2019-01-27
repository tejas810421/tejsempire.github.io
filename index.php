<?php

//connect file include
require("connect.php");

//if($_POST['submit'])
//{
	
	//get post data
	$firstname_form = $_POST['firstname'];
	$lastname_form = $_POST['lastname'];



//write data
//$date=date("Y-m-d");
//$write = mysqli_query($connect,"INSERT INTO people VALUES ('','abc','Khunt','2001-03-15','F')") or die(mysqli_error($connect));

//update data
//$update = mysqli_query($connect,"UPDATE people SET dob='1999-06-25' WHERE id='4'") or die(mysqli_error($connect));

//show data
//$extract = mysqli_query($connect,"SELECT * FROM people ORDER BY id DESC LIMIT 2") or die(mysqli_error($connect));
//$extract = mysqli_query($connect,"SELECT * FROM people WHERE firstname='$firstname_form' AND lastname='$lastname_form'") or die(mysqli_error($connect));
$extract = mysqli_query($connect,"SELECT * FROM people") or die(mysqli_error($connect));
$numrows = mysqli_num_rows($extract) or die(mysqli_error($connect)) ;

echo "<form action='mysql_delete.php' method='POST'><select name='peoplename'>";

while($row = mysqli_fetch_assoc($extract))
{
	$id = $row["id"];
	$firstname = $row["firstname"];
	$lastname = $row["lastname"];
	//$dob = $row["dob"];
	//$gender = $row["gender"];
	/*
	if($gender =="F")
		$gender="Female";
	else
		$gender="Male";
	*/
	//echo "<br>$firstname $lastname was born on $dob and is $gender<br>";
	
	echo "
	<option value='$id'>$firstname $lastname</option>
	";
}
//}

echo "
</select>
<!--  <input type='text' name='tochange'> -->
<input type='submit' value='delete'>
";
?>


<!--
<form action='mysql.php' method='POST'>
	Firstname : <input type="text" name="firstname"><br><br>
	Lastname : <input type="text" name="lastname"><br><br>
	<input type="submit" value="Click to get" name="submit"> 
</form>
-->