<?php


   
if(isset($_POST["nextbtn"]))
{
	$valid=true;
	$msg="";
	$email=trim(urldecode($_POST["email"]));
	$state=trim(urldecode($_POST["state"]));
	$spec=trim(urldecode($_POST["spec"]));
	$phone=trim(urldecode($_POST["phone"]));
	$licenses=trim(urldecode($_POST["licenses"]));
	if(isset($_POST["notifications"]))
		$notifications=1;
	
	if($email=="" || !validateEmail($email))
	{
		$valid=false;
		$msg="Please enter an email <br/>";
	}
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
		
		$stmt  = $dbhandle->prepare('SELECT * FROM userprofiles WHERE email=? ');	
		$stmt->execute(array($email));
		
		$row_cnt = $stmt->fetch(PDO::FETCH_NUM);
		$row_cnt = $row_cnt[0];		
		
		if($row_cnt>0)
		{
			//update
			$stmt  = $dbhandle->prepare('UPDATE userprofiles SET email=?, specialty=?, state=?, phone=?, licenses=?, notifications=? WHERE email=? LIMIT 1');	
			$stmt->execute(array($email, $spec, $state, $phone, $licenses, $notifications, $email));
			$msg2="Email address exists. Profile has been updated";
		}
		else
		{
			//insert into userprofiles
			$stmt  = $dbhandle->prepare('INSERT INTO userprofiles(email, specialty, state, phone, licenses, notifications) VALUES(?,?,?,?,?,?)');	
			$stmt->execute(array($email, $spec, $state, $phone, $licenses, $notifications));
			$msg2="Profile has been saved";
		}
		
		
	
		
	}
	
}

//echo $_COOKIE["state"];
?>