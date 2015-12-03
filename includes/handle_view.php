<?php

function getJob($dbhandle, $id)
{
	$id=urldecode(addslashes($id));
		
	//$stmt  = $dbhandle->prepare('SELECT *,j.id as id FROM jobs AS j LEFT JOIN recruiters AS r ON r.id=j.recruiter where j.id=? ');	
	$stmt  = $dbhandle->prepare('SELECT *,j.id as id FROM jobs AS j LEFT JOIN recruiters AS r ON r.id=j.recruiter 
LEFT JOIN pinnacm9_dbo2.lstemployees AS e ON e.emp_id=r.emp_id
LEFT JOIN pinnacm9_dbo2.lstcontacts AS c ON c.ctct_id=e.emp_ctct_id
where j.id=? ');
	$stmt->execute(array($id));
	
	$i=0;
	$arr=array();
	while ($row  = $stmt->fetch(PDO::FETCH_ASSOC)){
		//echo var_dump($row);
		$arr[$i]["id"]= $row["id"];
		$arr[$i]["job_id"]= $row["job_id"];
		$arr[$i]["id_cat"]= $row["id_cat"];
		$arr[$i]["spec"]= $row["spec"];
		$arr[$i]["state"]= $row["state"];
		$arr[$i]["recruiter"]= $row["recruiter"];
		$arr[$i]["description"]= $row["description"];
		$arr[$i]["locum"]= $row["locum"];
		$arr[$i]["featured"]= $row["featured"];
		$arr[$i]["job_image_name"]= $row["job_image_name"];
		$arr[$i]["email"]= $row["email"];
		$arr[$i]["name"]= $row["name"];
		$arr[$i]["phone"]= $row["ctct_phone"];
		$arr[$i]["cell"]= $row["ctct_cell"];
		$i++;
		
	}
	
	return $arr;
}
?>