<?php
    $server = "mysql:host=localhost:3306;dbname=dwwm2";
    // $server = "localhost:3306";
    $username = 'root';
    $password = 'Webdev13*';
    // $database = 'dwwm2';
    $cnx = new PDO($server, $username, $password);
    // $cnx = mysqli_connect($server, $username, $password, $database);
?>