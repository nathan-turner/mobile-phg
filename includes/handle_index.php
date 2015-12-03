<?php

if(isset($_POST["nextbtn"]))
{
	$valid=true;
	$msg="";
	$state=trim(urldecode($_POST["state"]));
	$spec=trim(urldecode($_POST["spec"]));
	
	if($state=="" )
	{
		//$valid=false;
		//$msg="Please select a state <br/>";
	}
	
	if($spec=="" || $spec=='--')
	{
		$valid=false;
		$msg.="Please select a specialty <br/>";
	}
	
	//save to cookies
	if($valid)
	{
		setcookie("spec",$spec);
		//setcookie("state",$state);
		header("location: results.php\n");
	}
	
}

//echo $_COOKIE["state"];
?>