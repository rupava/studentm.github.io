<?php error_reporting(0);

include 'connection.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sid = $_POST['sid'];
$dob = $_POST['dob'];

$sqlQ = "INSERT INTO `student` (`sr`, `fname`, `lname`, `sid`, `dob`) VALUES (NULL, '$fname','$lname','$sid','$dob')";

?>

<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <meta http-equiv="refresh" content="5;url=index.html">
    </head>
    <body>
        <div class="mx-5 text-center align-items-center mt-5 border border-dark rounded">
          <?php

            if ($conn -> connect_errno) {
              echo "Failed to connect to MySQL: " . $conn -> connect_error;
              exit();
            }
            else{
              if(is_null($fname)==FALSE && is_null($sid) == FALSE){
                if ($conn->query($sqlQ) === TRUE) {
                  echo '<article>Your log for a student has been successfully recorded.</article>
                        <a href="index.html">Back to Home</a>';
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                  echo '<br><a href="index.html">Back to Home</a>';
                }
              }
              else{
                echo "Null form";
              }
            }

            $conn->close();
          ?>
        </div>
    </body>
</html>