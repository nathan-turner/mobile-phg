<?php

function getSpecs($dbhandle)
{
	//echo 'SELECT * FROM dctspecial  ';
	$stmt  = $dbhandle->prepare('SELECT * FROM dctSpecial order by sp_name asc ');
	//$stmt->bind_param('ii',$list,$userid);
	$stmt->execute(array());

	while ($row  = $stmt->fetch(PDO::FETCH_ASSOC)){
		$specs[$row["sp_code"]]= $row["sp_name"];		
	}
	
	return $specs;
}

function getStates($dbhandle)
{
	$stmt  = $dbhandle->prepare('SELECT * FROM states  ');
	//$stmt->bind_param('ii',$list,$userid);
	$stmt->execute(array());

	while ($row  = $stmt->fetch(PDO::FETCH_ASSOC)){
		$states[$row["st_code"]]= $row["st_name"];
	}
	
	return $states;
}


function validateEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>