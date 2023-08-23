<?php 
session_start(); 
include "db_conn.php";

if ((isset($_POST['username'])) && (isset($_POST['idnumber']))) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$idnum = validate($_POST['idnumber']);

	if (empty($uname)) {
		header("Location: login.php?error1=User Name is required");
	    exit();
	}else if(empty($idnum)){
        header("Location: login.php?error2=Id number is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND id_number='$idnum'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
         
		 	$row = mysqli_fetch_assoc($result);
            if (($row['user_name'] === $uname) && ($row['id_number'] === $idnum)) {
          	    $_SESSION['user_name'] = $row['user_name'];
				$_SESSION['id_number'] = $row['id_number'];
				$_SESSION['name'] = $row['name'];
         	    header("Location: activity.php");
	            exit();
            }else{
				header("Location: login.php?error3=Incorect User name or idnumber");
		        exit();
			}
		}else{
			header("Location: login.php?error4=Incorect User name or Id number");
	         exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}