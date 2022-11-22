<?php error_reporting(0);

include 'connection.php';

$sid = $_POST['sid'];
$sid = strtoupper($sid);
$sid = trim($sid," ");
$fname = "";
$lname = "";
$dob = "";
$boolvar = TRUE;
$sqlQ = "SELECT * FROM `student` WHERE sid = '$sid'";

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

if ($result = $conn -> query($sqlQ)) {
  if($result -> num_rows==1){
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $dob = $row['dob'];
    $boolvar = TRUE;
  }
  else{
    $boolvar = FALSE;
  }
}

$conn -> close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search | Student Logs</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>

    
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

            <a class="navbar-brand" href="index.html">StudentLogs.com</a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="signup.html">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="marks.php">Add Marks</a>
                </li>
                <li class='nav-item'>
                        <a class='nav-link' href='studentList.php'>Students</a>
                    </li>
            </ul>
            <br>
            <form class="form-inline" method="post" action="/search.php">
                <input class="form-control mr-sm-2 text-uppercase" id="sid" name="sid" type="text" placeholder="Search" required>
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </nav>
        
        <div class="p-5">
            <h1>Search for <?php echo $sid;?>.</h1>
            <br>
            <div class="p-2">
              <?php
                if($boolvar == FALSE){
                  echo "No records found...";
                }
                else{
                  echo "<div class='row p-1 mr-5'>
                          <label for='names'>Name:</label><br>
                          <input type='text' name='names' maxlength='30' value='".$fname." ".$lname."'class='form-control' readonly>  
                        </div>
                        <div class='row p-1 mr-5'>
                          <label for='dob'>Date of Birth:</label><br>
                          <input type='text' name='dob' maxlength='15' value='".$dob."' class='form-control' readonly>                
                        </div>
                        <div class='row p-1 mr-5'>
                          <label for='sid'>Student ID:</label><br>
                          <input type='text' name='sid' maxlength='10' value='".$sid."' class='form-control' readonly>
                        </div>
                        <br>
                        <form class='form-inline' method='post' action='/delete.php'>
                          <div class='row p-1 mr-5'>
                            <input class='form-control mr-sm-2' id='sid' value = '".$sid."' name='sid' type='checkbox' required>
                            <button class='btn btn-danger' type='submit'>DELETE STUDENT</button>
                          </div>
                        </form>
                        <br>
                        <p>Note: Deleting a Student record is irreversable and will permenantly delete all marks records.<p>";
                }
              ?>
            </div>
        </div>
    </body>

</html>