<?php include "connection.php";
	$id=$_POST['id'];
	$fn=$_POST['fn'];
	$ad=$_POST['ad'];
	$ln=$_POST['ln'];
	//calculate number of rows
	$rows=0;
	foreach ($id as $row)
	{
	  	$rows++;
	}

	//update the date
	for($x=0; $x<=$rows; $x++)
	{
		$add = $db -> prepare("UPDATE customers SET firstname=:fn, lastname=:ln, streetaddress=:ad WHERE id_customers=:id");
	    $add -> bindParam(':fn', $fn[$x]);
	    $add -> bindParam(':ln', $ln[$x]);
	    $add -> bindParam(':ad', $ad[$x]);
	    $add -> bindParam(':id', $id[$x]);
		$add -> execute();
	}
	header('Location: customers.php');
?>