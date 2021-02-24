<?php 
session_start();
require '../dbcon.php';

if (!isset($_REQUEST['n'])) {
	$mone = $_POST["tone"];
	$mtwo = $_POST["ttwo"];
	$mthree = $_POST["tthree"];
	$exam = $_POST["exam"];

	$id = $_POST['regid'];

	$name = $_POST['name'];
	$class = $_POST["class"];
	$year = $_POST["year"];
	$upload = $_POST['upload'];
	$teacher = $_POST["teacher"];

	$eone = $_POST["eone"];
	$etwo = $_POST["etwo"];
	$ethree = $_POST["ethree"];
	$efour = $_POST["efour"];
	$efive = $_POST["efive"];
	$esix = $_POST["esix"];
	$eseven = $_POST["eseven"];

	$yone = $_POST["yone"];
	$ytwo = $_POST["ytwo"];
	$ythree = $_POST["ythree"];
	$yfour = $_POST["yfour"];
	$yfive = $_POST["yfive"];
	$ysix = $_POST["ysix"];
	$yseven = $_POST["yseven"];

	$csone = $_POST["csone"];
	$cstwo = $_POST["cstwo"];
	$csthree = $_POST["csthree"];
	$csfour = $_POST["csfour"];
	$csfive = $_POST["csfive"];
	$cssix = $_POST["cssix"];
	$csseven = $_POST["csseven"];

	$ssone = $_POST["ssone"];
	$sstwo = $_POST["sstwo"];
	$ssthree = $_POST["ssthree"];
	$ssfour = $_POST["ssfour"];
	$ssfive = $_POST["ssfive"];
	$sssix = $_POST["sssix"];
	$ssseven = $_POST["ssseven"];

	$aone = $_POST["aone"];
	$atwo = $_POST["atwo"];
	$athree = $_POST["athree"];
	$afour = $_POST["afour"];
	$afive = $_POST["afive"];
	$asix = $_POST["asix"];
	$aseven = $_POST["aseven"];

	$bsone = $_POST["bsone"];
	$bstwo = $_POST["bstwo"];
	$bsthree = $_POST["bsthree"];
	$bsfour = $_POST["bsfour"];
	$bsfive = $_POST["bsfive"];
	$bssix = $_POST["bssix"];
	$bsseven = $_POST["bsseven"];

	$caone = $_POST["caone"];
	$catwo = $_POST["catwo"];
	$cathree = $_POST["cathree"];
	$cafour = $_POST["cafour"];
	$cafive = $_POST["cafive"];
	$casix = $_POST["casix"];
	$caseven = $_POST["caseven"];

	$btone = $_POST["btone"];
	$bttwo = $_POST["bttwo"];
	$btthree = $_POST["btthree"];
	$btfour = $_POST["btfour"];
	$btfive = $_POST["btfive"];
	$btsix = $_POST["btsix"];
	$btseven = $_POST["btseven"];

	$sbone = $_POST["sbone"];
	$sbtwo = $_POST["sbtwo"];
	$sbthree = $_POST["sbthree"];
	$sbfour = $_POST["sbfour"];
	$sbfive = $_POST["sbfive"];
	$sbsix = $_POST["sbsix"];
	$sbseven = $_POST["sbseven"];

	$fone = $_POST["fone"];
	$ftwo = $_POST["ftwo"];
	$fthree = $_POST["fthree"];
	$ffour = $_POST["ffour"];
	$ffive = $_POST["ffive"];
	$fsix = $_POST["fsix"];
	$fseven = $_POST["fseven"];

	$ceone = $_POST["ceone"];
	$cetwo = $_POST["cetwo"];
	$cethree = $_POST["cethree"];
	$cefour = $_POST["cefour"];
	$cefive = $_POST["cefive"];
	$cesix = $_POST["cesix"];
	$ceseven = $_POST["ceseven"];

	$crone = $_POST["crone"];
	$crtwo = $_POST["crtwo"];
	$crthree = $_POST["crthree"];
	$crfour = $_POST["crfour"];
	$crfive = $_POST["crfive"];
	$crsix = $_POST["crsix"];
	$crseven = $_POST["crseven"];

	$phone = $_POST["phone"];
	$phtwo = $_POST["phtwo"];
	$phthree = $_POST["phthree"];
	$phfour = $_POST["phfour"];
	$phfive = $_POST["phfive"];
	$phsix = $_POST["phsix"];
	$phseven = $_POST["phseven"];

	$save = mysqli_query($con, "INSERT into math set test1 = '$mone', test2 = '$mtwo', test3 = '$mthree', exam = '$exam', class = '$class', year = '$year', teachers_comment = '$teacher', regnumber = '$id'");
	if($save){
		header("location:loginstaff.php");	
	}
}

if (isset($_REQUEST['n'])) {
	$id = $_REQUEST['n'];
	$any = mysqli_query($con, "SELECT * from student");
    while($any1 = mysqli_fetch_array($any,MYSQLI_ASSOC)){
    	$show = json_encode($any1);
	     $one = $any1['surname'] ." ".$any1['fname']." ".$any1['mname'];
	     if ($id==$one) {
	   	 	echo "[".$show."]";
	     }
 	}
	// $id = mysqli_query($con, "SELECT regnumber from student where ");
	// $done = mysqli_fetch_array($id);
	// $reg = $done['regnumber'];
	// echo "string";
}
 ?>