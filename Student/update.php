<?php 
session_start();
include '../connect.php';
require '../dbcon.php';
if (isset($_POST["park"])) {
    $student_id=$_POST['student_id'];
    $surname = $_POST['surname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];

    $filetoupload = $_FILES["pix"]["name"];
    $target_dir = "upload/";
    $target_file = $target_dir . $filetoupload;
    $filetouploadsize= $_FILES["pix"]["size"];
    $filetouploadtype= $_FILES["pix"]["type"];
    $tmp = $_FILES["pix"]["tmp_name"];

    $update=mysqli_query($con,"UPDATE student SET surname='$surname',fname='$fname',mname='$mname',upload='$upload' WHERE student_id='$student_id'");
            if ($update) {
                header("location:update.php");
            }else{
                echo mysqli_error($con);
            }
            }else{
                $student_id = $_GET['update'];
                $select = mysqli_query($con,"select * from student where student_id= '$student_id'");
                if ($select) {
                    while ($row = mysqli_fetch_array($select)) {
    ?>

    <form action="update.php" method="post"  enctype="multipart/form-data">
						
    <div class="card" style="border-radius: 10px; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.9);height: 100%">

<h2 class="card-header">Profile</h2><br>

<div class="row container">

    <div class="col-md-6">
    
        <div>
            <?php echo  "<img src='upload/".$_SESSION['upload']."' style='width:400px; height:400px; border-radius:100%'>"; ?>
        </div>
    <br><br>
        <input type="file" name="pix" value="Change Profile">
    </div>

        <div class="col-md-6">
        
            <input type="hidden" name="student_id" value=<?php echo $row['student_id'];?>>

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