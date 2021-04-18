<?php

  // Step 1: (12) Using either MySQLi or PDO
  //    Create a connection to your MySQL DB and store it in a variable named $conn
  // CREATE YOUR CONNECTION BELOW THE LINE

try {
    $dsn = 'mysql:host=localhost;dbname=project01';
    $username = 'root';
    $password = '';

    $conn = new PDO($dsn,$username, $password);

    // This attribute ensures that any SQL errors are reported
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $error) {
    if(session_status()===PHP_SESSION_NONE)
        session_start();

    $_SESSION['errors'][] = $error->getMessage();


}

  
  // TOTAL POINTS POSSIBLE: 6

?>