<?php 
include '../dbcon.php';
include 'connect.php';

$result = mysqli_query($con, "SELECT surname,fname,subject,address,numb,uploads from staff");
$row=mysqli_num_rows($result);

echo "<div class='container'>";
echo "<h1 align='center'>Other Staffs</h1>";
echo "<table class='table table-responsive table-striped table-bordered' style='width:63.4%;margin: auto;color:black'>";
echo "<tr style=' border:none;'>";

echo "<th>S/N</th>";
echo "<th>Surname</th>";
echo "<th>Firstname</th>";
echo "<th>Suject Taken</th>";
echo "<th>Home Address</th>";
echo "<th>Phone Number</th>";
echo "<th>Profile</th>";
 $i=0;
echo "</tr>";

while  ($retrive=mysqli_fetch_array($result)){

    $surname=$retrive['surname'];
    $fname=$retrive['fname'];
    $subject=$retrive['subject'];
    $address=$retrive['address'];
    $numb=$retrive['numb'];
    $uploads=$retrive['uploads'];
    echo "<tr>";
    echo "<th>".$i=$i+1;"</th>";
    echo "<th> $surname</th>";
    echo "<th> $fname</th>";
    echo "<th>$subject</th>";
    echo "<th>$address</th>";
    echo "<th>$numb</th>"; 
    echo "<th><img src='../Staff/uploads/$uploads' height='100px' width='100px'></th>";
      
    echo "</tr>";

}
echo "</table>";
echo "</div>";



