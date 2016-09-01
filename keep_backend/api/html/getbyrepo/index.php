<?php

$var1=htmlspecialchars($_GET["repo"]);

if ($var1=='')
{
	print 0;
    exit; 
}

$connection = new MongoClient(); // connects to localhost:27017

$db = $connection->dhlab;

$collection = $db->data;

$mongoid = $var1;
$realmongoid = new MongoId($mongoid);

try {
$result = $collection->find(array('repo' => $realmongoid));
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

