<?php
	extract($_GET);
	
	$datarr=array("cid"=>$cid,);
	$data=http_build_query($datarr);
	
	$header=array("Content-type:application/x-www-form-urlencoded");
	
	$req=array("http"=>array(
					"method"=>"POST",
					"header"=>$header,
					"content"=>$data	
	
	));
	$context=stream_context_create($req);
	$retval=file_get_contents("http://localhost/webtechproject/service_fetch.php",false,$context);
    $retval = json_decode($retval,true);
	echo json_encode($retval);


    

 






?>