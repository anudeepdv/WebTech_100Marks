<?php

$res=array();

if($_SERVER["REQUEST_METHOD"]=="POST"){
	
$params=file_get_contents("php://input");
$arr=explode("&",$params);
$cidarr=explode("=",$arr[0]);
$cid=$cidarr[1];

$data = file_get_contents("courses.json");
$json = json_decode($data, true);
    foreach ($json as $key => $value) {
        if($key==$cid)
        {
            if (!is_array($value)) {
            echo $key . '=>' . $value . '<br/>';
            }   
            else {
            foreach ($value as $key => $val) {
                
                $res[$key]=$val;
                //echo $key . '=>' . $val . '<br/>';
                
            }
        }
            
        }
        
    }
    
    echo json_encode($res);

    
    
}
	



?>