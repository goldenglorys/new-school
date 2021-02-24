<?php 
require 'dbcon.php';
if (isset($_POST["park"])) {
    $id=$_POST['id'];
    $surname = $_POST['surname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];
    $update=mysqli_query($con,"UPDATE student SET surname='$surname',fname='$fname',mname='$mname',password='$password',email='$email',birth='$birth' WHERE student_id='$id'");
            if ($update) {
                header("location:change.php");
            }else{
                echo mysqli_error($con);
            }
            }else{
                $id = $_GET['update'];
                $select = mysqli_query($con,"select * from student where student_id= '$id'");
                if ($select) {
                    while ($row = mysqli_fetch_array($select)) {
            ?>
    
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
    <form method="post" action="admin.php" style="border:10px;width:600px;height:480px;border-radius:20px;background:rgba(60,60,60,8 );">
        <fieldset><h2 style="background-color:white"><em>Edit Profile </em></h2></fieldset>
        <input type="text" name="id" hidden="hidden" value=<?php echo $row ['student_id']; ?>>
            <div class="row">
                      
            <div class="col-md-6">
            <i class="fa fa-user" style="color:blue"><label style="color:white">Surname:</label></i><br>
            <input type="text" name="surname" style="width:500px" placeholder="surname" value=<?php echo $row ['surname']; ?>> <br>

            
            <i class="fa fa-user" style="color:blue"><label style="color:white">Firstname:</label></i> <br>
            <input type="text" name="fname" style="width:500px;" placeholder="firstname" value=<?php echo $row ['fname']; ?>> <br>

            <i class="fa fa-user" style="color:blue"><label style="color:white">Lastname:</label></i><br>
            <input type="text" name="mname" style="width:500px" placeholder="lastname" value=<?php echo $row ['mname']; ?>> <br>


            <i class="fa fa-key" style="color:blue"><label style="color:white">Password:</label></i><br>
            <input type="password" name="password" style="width:500px" placeholder="password" value=<?php echo $row ['password']; ?>> <br>

            <i class="fa fa-user" style="color:blue"><label style="color:white">Email:</label></i><br>
            <input type="text" name="email" style="width:500px" placeholder="email" value=<?php echo $row ['email']; ?>> <br>

            <i class="fa fa-user" style="color:blue"><label style="color:white">Birthday:</label></i><br>
            <input type="date" name="birth" style="width:500px" placeholder="birthday" value=<?php echo $row ['birth']; ?>> <br> 
            
        
            <i class="glyphicon glyphicon-log-in"><input type="submit" name="park" style="background-color:green;"></i>
        </div>
    <!-- </div> -->
    </form>

</body>
</html>
<?php 
    }
    }
}
 ?>