<?php

  // Step 1: (1 point) Start your session
  // CREATE YOUR SESSION START BELOW THIS LINE
   session_start();
  // Step 2: (4) Redirect the user if they don't have a notification
  // CREATE YOUR REDIRECT LOGIC BELOW THIS LINE
    if (!isset($_SESSION["message"])){
        header("Location:index.php");
    }

  // Step 3: (5) Output the notification and clear it from the session (once it's outputted)
  // CREATE YOUR NOTIFICATION OUTPUT AND CLEAR BELOW THIS LINE



    if (isset($_SESSION["message"])) {
        echo $_SESSION["message"];
        //unset the session [message]
        unset($_SESSION['message']);
     }


// TOTAL POINTS POSSIBLE: 10

?>