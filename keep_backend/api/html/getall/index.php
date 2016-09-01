<?php
header("Content-type: text/xml");

$connection = new MongoClient(); // connects to localhost:27017

$db = $connection->dhlab;

$collection = $db->data;

$result = $collection->find();

foreach($result as $k => $row){
    echo json_encode($row);
}

#var_dump( $document );

?>

