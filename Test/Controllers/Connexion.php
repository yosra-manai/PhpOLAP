<?php

require_once '../../autoload.php';


use phpOlap\Xmla\Connection\Connection;
use phpOlap\Xmla\Connection\Adaptator\SoapAdaptator;


function connect(){
$connection = new Connection(
    new SoapAdaptator('http://localhost:80/olap/msmdpump.dll','Administrateur','admin'),  
    array(
        'DataSourceInfo' => null,
        'CatalogName' => 'Cube'
        )
);


return $connection;
}
?>

