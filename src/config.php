<?php
$host_name = 'db5000707045.hosting-data.io';
$database = 'dbs649825';
$user_name = 'dbu831686';
$password = 'Eventtracker1.';
$link = mysqli_connect($host_name, $user_name, $password, $database);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

 echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
 echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
 
?>