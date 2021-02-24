<?php

$dbuser = 'admin';
$dbpass = 'adminpass';
$dbhost = 'testdevops-mysqldb.cnngjtvs9cww.us-east-2.rds.amazonaws.com';



try {
    $conn = new PDO("mysql:host=$dbhost", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfully connected to RDS!";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }




?>