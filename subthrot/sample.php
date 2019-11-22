<?php
	extract($_GET);
	$res=array();
	$file=fopen("Course.txt","r");
	while(!feof($file)){
		$line=trim(fgets($file));
//		if(($pos = strncasecmp($line,$term,strlen($term)))>=0){
		$npos = strncasecmp($line,$term,strlen($term));
		$pos = strripos($line,$term);
		//$npos=int($pos);
		if($npos == 0 || $pos != FALSE){
			$res[]=$line;	
		}
	}
	echo json_encode($res);	
?>
