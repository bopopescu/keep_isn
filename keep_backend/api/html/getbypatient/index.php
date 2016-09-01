<?php

$var1=htmlspecialchars($_GET["patient"]);

if ($var1=='')
{
	print 0;
    exit; 
}

$connection = new MongoClient(); // connects to localhost:27017

$db = $connection->dhlab;

$collection = $db->data;

try{
$result = $collection->find(array('data.id' => $var1));
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

