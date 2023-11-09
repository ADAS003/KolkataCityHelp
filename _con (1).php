<?php
$con= new MongoDB\Driver\Manager("mongodb://localhost:27017");
echo "connection to the database has been succesfully made.";
$db = $con->NewDatabase;
echo "\n Database edunet connected/selected successfully.";
$newCollection = $db->createCollection("newCollection",[
    'validator'=>['username'=>['$type'=> 'string'],
    'email'=>['regex'=>'@example\.com'],
],
]);
echo "\n collectio created successfully.";

?>