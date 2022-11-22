<?php error_reporting(0);

include 'connection.php';

$sid = $_POST['sid'];

$sqlQ = "DELETE FROM `student` WHERE `sid` = '$sid';";
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
              if(is_null($sid) == FALSE){
                if ($conn->query($sqlQ) === TRUE) {
                  echo '<article>The student log along with all its data has been deleted. It cant be retrieved anymore.</article>
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