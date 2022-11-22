<!DOCTYPE html>
        <html>
            <head>
                <title>Home | Student Logs</title>
                <link href='css/bootstrap.min.css' rel='stylesheet'>
                <script src='js/bootstrap.min.js'></script>
            </head>
            <script type='text/javascript'>
                    function printDiv() {
                        var printContents = document.getElementById('printableArea').innerHTML;
                        var originalContents = document.body.innerHTML;
                
                        document.body.innerHTML = printContents;
                
                        window.print();
                
                        document.body.innerHTML = originalContents;
                    }
            </script>
            <body>
                <nav class='navbar navbar-expand-sm bg-dark navbar-dark sticky-top'>
        
                    <a class='navbar-brand' href='index.html'>StudentLogs.com</a>
                    
                    <ul class='navbar-nav ml-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='signup.html'>Add Student</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='marks.php'>Add Marks</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='studentList.php'>Students</a>
                    </li>
                    </ul>
                    <br>
                    <form class='form-inline' method='post' action='/search.php'>
                        <input class='form-control mr-sm-2 text-uppercase' id='sid' name='sid' type='text' placeholder='Search' required>
                        <button class='btn btn-success' type='submit'>Search</button>
                    </form>
                </nav>

                <?php error_reporting(0);

                    include 'connection.php';

                    $course = $_GET['course'];
                    $boolRequest = TRUE;
                    $courseList = ['elc301','elc302','elc303','elc304','elc305','ell301','ell302','ell303','ell304','elm301'];

                    if(is_numeric($course) && $course>=0 && $course <= 9){
                        $boolRequest = TRUE;
                    }
                    else{$boolRequest = FALSE;}

                    if($boolRequest != TRUE){
                        echo "BAD REQUEST<br>";
                        echo "<a href='index.html'>Home</a>";
                    }
                    else{
                        echo "
                            <div class='p-5 mt-5 mx-5 border border-secondary rounded' id='printableArea'>
                                <div class='row p-1'>
                                    <div class = 'col'><h2>Marksheet Results for Subject Code: ".strtoupper($courseList[$course])."</h2></div>
                                    <div class = 'col'><input type='button' class='btn btn-danger float-right' onclick='printDiv()' value='Print'></div>
                                </div>
                                
                                <br>
                                
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First Unit</th>
                                            <th>Second Unit</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                        if ($conn->connect_errno) {
                                            echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
                                        }
                                    
                                        $sql = "select * from `$courseList[$course]`";
                                        $result = $conn->query($sql);
                                        
                                        while($row = $result->fetch_assoc()){
                                            echo"<tr>
                                            <td>".$row['sid']."</td>
                                            <td>".$row['unit_1']."</td>
                                            <td>".$row['unit_2']."</td>
                                            <td>".$row['sem']."</td>
                                            </tr>";
                                        }
                                
                                    echo "</tbody>
                                </table>
                            </div>
                            ";
                    }
            ?>

</body>
</html>


        
        
            
