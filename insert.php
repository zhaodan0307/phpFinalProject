<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./_connect.php');
  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
$required_fields= array(
    'first_name',
    'last_name',
    'date_of_birth',
    'alias',
    'active',
    'hero'
);


foreach ($required_fields as $field) {

    if (empty($_POST[$field])) {

        echo "<br>The {$field} cannot be empty";
        exit;
    }
}

foreach ($required_fields as $field) {
    $_POST[$field] = filter_var($_POST[$field],FILTER_SANITIZE_STRING);
    $_POST[$field] = strtolower($_POST[$field]);
    $_POST[$field] = ucwords($_POST[$field]);
}

$sql ="INSERT  INTO  supers(
            first_name,
            last_name,
            date_of_birth,          
            alias,
            active,
            hero   
            ) VALUES (
            :first_name,
            :last_name,
            :date_of_birth,          
            :alias,
            :active,
            :hero
                      
            )";
$dateone = date($_POST['date_of_birth']);
$stmt = $conn->prepare($sql);
$stmt->bindParam(':first_name',$_POST['first_name'],PDO::PARAM_STR);
$stmt->bindParam(':last_name',$_POST['last_name'],PDO::PARAM_STR);
$stmt->bindParam(':date_of_birth',$dateone);
$stmt->bindParam(':alias',$_POST['alias'],PDO::PARAM_STR);
$stmt->bindParam(':active',$_POST['active'],PDO::PARAM_STR);
$stmt->bindParam(':hero',$_POST['hero'],PDO::PARAM_STR);



  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

session_start();
try{
    $stmt->execute();
    $_SESSION["message"] =  "The new super was created successfully";
}catch (PDOException $e){
    $_SESSION["message"] = "There was an error creating the new super".$e->getMessage();

}

header("Location:notification.php");
exit();

  // TOTAL POINTS POSSIBLE: 35
?>