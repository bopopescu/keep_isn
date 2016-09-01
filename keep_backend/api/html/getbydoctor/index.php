<?php

$var1=htmlspecialchars($_GET["doctor"]);

if ($var1=='')
{
	print 0;
    exit; 
}

$connection = new MongoClient(); 

$db = $connection->dhlab;

$collection = $db->data;

try{
$result = $collection->find(array('data.doctor_id' => $var1));

}

catch (Exception $e) 
{
    #echo $e->getMessage();
    echo 0;
}

header("Content-type: text/xml");

foreach($result as $k => $row){
    echo json_encode($row); 
}

?>

