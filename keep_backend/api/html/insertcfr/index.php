<?php

$var1 = json_decode($_GET["data"]);

$connection = new MongoClient(); 

$db = $connection->dhlab;

$collection = $db->data;

try
{
$result = $collection->insert($var1);
}

catch (Exception $e) 
{
    #echo $e->getMessage();
    echo 0;
}

echo 1; 
?>

