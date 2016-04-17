<?php


require_once 'includes/connection.php';

function getUser()
{


	$query = "SELECT * FROM tbl_invoice";

	$result = mysql_query($query);

	while($fetchAssoc = mysql_fetch_assoc($result))
	{

		$info[] = $fetchAssoc;

	}
	if(empty($info))
	{

		return null;

	}
	return $info;


}

function updateUser($POST)
{


	$query = "UPDATE tbl_invoice SET  firstname = '{$POST['firstname']}', lastname = '{$POST['lastname']}' , address = '{$POST['address']}', age = '{$POST['age']}' WHERE id='{$POST['id']}' ";

	$result = mysql_query($query);


	if($result == false)
	{

		return null;

	}
	return true;


}

function deleteUser($POST)
	{
		$query = "DELETE FROM tbl_invoice WHERE id='{$POST['id']}' ";
		$result = mysql_query($query);
		if($result == false)
		{
			return null;
		}
		return true;
	}


function insertUser($POST)
	{
		$query = "INSERT INTO tbl_invoice (firstname, lastname, address, age)
		VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['address']}', '{$_POST['age']}')";
		$result = mysql_query($query);
		if($result)
		{
			return  null;
		}
		return true;
	}
