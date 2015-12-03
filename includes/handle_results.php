<?php

function getJobs($dbhandle)
{
	$state=urldecode(addslashes($_COOKIE["state"]));
	$spec=urldecode(addslashes($_COOKIE["spec"]));
	if($state!='')
		$sql=" state='".$state."' ";
	if($spec!='' && $sql!='')
		$sql.=" and spec='".$spec."' ";
	elseif($spec!='' )
		$sql=" spec='".$spec."' ";
	if($sql!='')
		$sql="where ".$sql;
	
	//echo $sql;
	//$sql=''; //remove
	
	$stmt  = $dbhandle->prepare('SELECT * FROM jobs  '.$sql. ' order by state asc');
	//$stmt->bind_param('ii',$list,$userid);
	$stmt->execute(array($list,$userid));
	
	$i=0;
	$arr=array();
	while ($row  = $stmt->fetch(PDO::FETCH_ASSOC)){
		$arr[$i]["id"]= $row["id"];
		$arr[$i]["job_id"]= $row["job_id"];
		$arr[$i]["id_cat"]= $row["id_cat"];
		$arr[$i]["spec"]= $row["spec"];
		$arr[$i]["state"]= $row["state"];
		$arr[$i]["recruiter"]= $row["recruiter"];
		$arr[$i]["description"]= $row["description"];
		$arr[$i]["locum"]= $row["locum"];
		$arr[$i]["featured"]= $row["featured"];
		$i++;
		
	}
	
	return $arr;
}
?>