<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
   include ('./_connect.php');
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
   $sql="DELETE FROM supers
       WHERE id=:id
 
 
 
    ";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':id',$_GET['id']);



  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
session_start();
try{
    $stmt->execute();
    $_SESSION["message"] =  "The super was deleted successfully";
}catch (PDOException $e){
    $_SESSION["message"] = "There was an error deleting the super".$e->getMessage();

}

header("Location:notification.php");
exit();

  
  // TOTAL POINTS POSSIBLE: 38
?>