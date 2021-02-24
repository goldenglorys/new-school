<?php 
include '../dbcon.php';
include 'connect.php';

$rsult = mysqli_query($con, "SELECT * from student where class='Sss 2'");

$row=mysqli_num_rows($rsult);

echo "<div class='container'>";
echo "<table class='table table-responsive table-striped table-bordered' width='130px'>";

echo "<tr>";
echo "<th>S/N</th>";
echo "<th>Name</th>";
echo "<th>Suject Taken</th>";
echo "<th>Profile</th>";
echo "Total number of Students in Ss 2 class : ".$row;
 $i=0;
echo "</tr>";

while  ($retrive=mysqli_fetch_array($rsult)){

    $surname=$retrive['surname'];
    $fname=$retrive['fname'];
    $upload=$retrive['upload'];
    echo "<tr>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th> $surname</th>";
    echo "<th> $fname</th>";    
    echo "<th><img src='..../Student/upload/$upload' width='130px' 'border-radius: 80px';></th>";
      
    echo "</tr>";

}
echo "</table>";
echo "</div>";



