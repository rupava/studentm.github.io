<?php error_reporting(0);

include 'connection.php';


$sid = $_POST['sid'];
$ccode = $_POST['ccode'];
$unit_1 = $_POST['unit_1'];
$unit_2 = $_POST['unit_2'];
$sem = $_POST['sem'];

$sqlQ = "INSERT INTO $ccode (`sid`,`unit_1`,`unit_2`,`sem`) VALUES ('$sid','$unit_1','$unit_2','$sem') ON DUPLICATE KEY UPDATE `unit_1` = '$unit_1', `unit_2` = '$unit_2', `sem` = '$sem'";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Marks | Student Logs</title>
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
            <h1>Add Student Marks at StudentLogs.com</h1>
            <br>

            <div class="p-2">
                <form action="marks.php" method="post" class="text">
                    <div class="row p-1">
                        <div class="col">
                            <label for="sid">Student ID:</label><br>
                            <input type="text" maxlength="50" id="sid" name="sid" placeholder="JK2582" class="form-control text-uppercase" required>
                        </div>
                        <div class="col">
                            <label for="scode">Course Code:</label><br>
                            <select id="ccode" name="ccode" class="form-control" required>
                                <option value="elc301">ELC301</option>
                                <option value="elc302">ELC302</option>
                                <option value="elc303">ELC303</option>
                                <option value="elc304">ELC304</option>
                                <option value="elc305">ELC305</option>
                                <option value="ell301">ELL301</option>
                                <option value="ell302">ELL302</option>
                                <option value="ell303">ELL303</option>
                                <option value="ell304">ELL304</option>
                                <option value="elm301">ELM301</option>
                            </select>    
                        </div>
                    </div>
                    <div class="row p-1">
                        <div class="col">
                            <label for="unit_1">UNIT 1:</label><br>
                            <input type="number" max="100" min="0" maxlength="3" id="unit_1" name="unit_1" placeholder="UNIT 1" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="unit_2">UNIT 2:</label><br>
                            <input type="number" max="100" min="0" maxlength="3" id="unit_2" name="unit_2" placeholder="UNIT 2" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="sem">Semester:</label><br>
                            <input type="number" max="100" min="0" maxlength="3" id="sem" name="sem" placeholder="Semester" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <input class="btn-secondary" type="submit" value="Submit">
                </form> 
            </div>
        </div>
    </body>

</html>

<?php
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }
    else{
    if(is_null($ccode)==FALSE && is_null($sid) == FALSE){
        if ($conn->query($sqlQ) === TRUE) {
        echo "<script type='text/javascript'> alert('Your entry has been sucessfully updated.'); </script>";
        } else {
        echo "<script type='text/javascript'> alert('There seems to be an error, make sure student id is created.'); </script>";
        }
    }
    }
    
    $conn->close();
    
?>