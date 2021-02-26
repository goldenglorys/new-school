<?php 
include '../dbcon.php';
include 'connect.php';

$result = mysqli_query($con, "SELECT surname,fname,subject,uploads from staff");
$row=mysqli_num_rows($result);

echo "<div class='container'>";
echo "<h1 align='center'>List of Teachers and Subject Taken</h1>";
echo "<table class='table table-striped table-bordered' width='130px'>";
echo "<tr>";

echo "<th>S/N</th>";
echo "<th>Subject Name</th>";
echo "<th>Teachers Name</th>";
echo "<th>Profile</th>";
echo "Total number of Teachers : ".$row;
 $i=0;
echo "</tr>";

while  ($retrive=mysqli_fetch_array($result)){

    $subject=$retrive['subject'];
    $surname=$retrive['surname'] ." ". $fname=$retrive['fname'];
    $uploads=$retrive['uploads'];

    echo "<tr>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th>$subject</th>";
    echo "<th> $surname</th>";
    echo "<th><img src='../Staff/uploads/$uploads' height='100px' width='100px'></th>";      
    echo "</tr>";

}
echo "</table>";
echo "</div>";



