<?php    
    //Set content-type header
    header("Content-type: image/png");

    //Include phpMyGraph5.0.php
    include_once('phpMyGraph5.0.php');
    $con=mysqli_connect("localhost","te","123","tecomp");
	
    $cfg = array 
        ( 
            'title'=>'GRAPH FOR MAINTENANCE', 
            'background-color'=>'FFFFFF', 
            'graph-background-color'=>'FFFFFF', 
            'font-color'=>'000000', 
            'border-color'=>'9900CC', 
            'column-color'=>'9966CC', 
            'column-shadow-color'=>'9900CC', 
            'column-font-color-q1'=>'000000', 
            'column-font-color-q2'=>'000000', 
            'random-column-color'=>0 
			
        ); 
	
	
	$res=mysqli_query($con,"SELECT COUNT(*) FROM maintain WHERE status='paid'");
	$row=mysqli_fetch_array($res,MYSQL_ASSOC);
	$s=$row["COUNT(*)"];
	$res=mysqli_query($con,"SELECT COUNT(*) FROM maintain WHERE status='not paid'");
	$row=mysqli_fetch_array($res,MYSQL_ASSOC);
	$k=$row["COUNT(*)"];
	
    //Set data
    $data = array(
        'PAID' => $s,
        'NOT PAID' => $k,
     
    );
    
    //Create phpMyGraph instance
    $graph = new phpMyGraph();

    //Parse
$graph->parseVerticalColumnGraph($data, $cfg);



?>


