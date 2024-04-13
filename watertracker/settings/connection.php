<?php
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'water_tracker');


// $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


define('DB_HOST', 'us-cluster-east-01.k8s.cleardb.net');
define('DB_USER', 'bd80e3f607d2ea');
define('DB_PASSWORD', 'ade1214f'); 
define('DB_NAME', 'heroku_f7dfd3145aba5cc');


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

?>
