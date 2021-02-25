<?php 
session_start();
include '../connect.php';
require '../dbcon.php';
if (isset($_POST["park"])) {
    $student_id=$_POST['student_id'];
    $prev_img=$_POST['prev_img'];
    $surname = $_POST['surname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $_SESSION['student_id'] = $_POST['student_id'];
    $filetoupload = $_FILES["pix"]["name"];
    $target_dir = "upload/";
    $target_file = $target_dir . $filetoupload;
    $filetouploadsize= $_FILES["pix"]["size"];
    $filetouploadtype= $_FILES["pix"]["type"];
    $tmp = $_FILES["pix"]["tmp_name"];
    $pixmove = move_uploaded_file($tmp, $target_file);
    if($filetoupload == '') $filetoupload = $prev_img;
    $update=mysqli_query($con,"UPDATE student SET surname='$surname',fname='$fname',mname='$mname',upload='$filetoupload' WHERE student_id='$student_id'");
            if ($update) {
                $select = mysqli_query($con,"SELECT * from student where student_id = '$id'");
                    while ($row = mysqli_fetch_array($select)) {
                        $_SESSION['upload'] = $row['upload'];
                        $_SESSION['surname']=$row['surname']; 
                        $_SESSION['fname']=$row['fname'];
                        $_SESSION['regnumber']=$row['regnumber'];
                        $_SESSION['mname']=$row['mname'];
                    }
                header("location:dashboard.php");
            }else{
                echo mysqli_error($con);
            }
            }else{
                $id = $_SESSION['student_id'];
                $select = mysqli_query($con,"SELECT * from student where student_id = '$id'");
                if ($select) {
                    while ($row = mysqli_fetch_array($select)) {
                        $_SESSION['upload'] = $row['upload'];
                        $_SESSION['surname']=$row['surname']; 
                        $_SESSION['fname']=$row['fname'];
                        $_SESSION['regnumber']=$row['regnumber'];
                        $_SESSION['mname']=$row['mname'];

    ?>

    <form action="update.php" method="post"  enctype="multipart/form-data">
						
    <div class="card" style="border-radius: 10px; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.9);height: 100%">

<h2 class="card-header">Profile</h2><br>

<div class="row container">

    <div class="col-md-6">
    
        <div>
            <?php echo  "<img src='upload/".$row['upload']."' style='width:400px; height:400px; border-radius:100%'>"; ?>
        </div>
    <br><br>
        <input type="file" name="pix" value="Change Profile">
    </div>

        <div class="col-md-6">
        
            <input type="hidden" name="student_id" value=<?php echo $row['student_id'];?>>
            <input type="hidden" name="prev_img" value=<?php echo $row['upload'];?>>

            <label>Surname</label>
              <input type="text" name="surname" class="form-control" value=<?php echo $row['surname'];?>> 
              <br> 

            <label>Firstname</label>	
              <input type="text" name="fname" class="form-control" value=<?php echo $row['fname']; ?>> <br>

              <label>Middlename</label>	
              <input type="text" name="mname" class="form-control" value=<?php echo $row['mname']; ?>> <br>

              <label>Registration Number</label>
              <input type="text" name="regnumber" readonly class="form-control" value=<?php echo $row['regnumber']; ?>> <br>	

          </div>

    </div>
        
    <br>
    <input type="submit" name="park">

</div>
                            </form>
<?php 
    }
    }
}
 ?>