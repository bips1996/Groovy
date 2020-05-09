<?php
/* Database connection start */
	include_once("db_connect.php");
	$error = false;

#fetching the data

if(isset($_POST['btn']))	
$email=$_POST['email'];
$pass=$_POST['pass'];


#checking for existing record 
$sql = "SELECT email,pass from user where email = '$email' and pass='" . md5($password) . "' ";
$result = $conn->query($sql);

if($result->num_rows > 0)
{ 
	session_start();
	$row = mysqli_fetch_array($result);
	$_SESSION['email'] = $row['email'];
	$_SESSION['email'] = $row['pass'];
	//echo "<script type='text/javascript'>alert('Sucess');windows.location.href='dbmspro/Home.php'</script>";

    header("Location:Home.php");
    exit;
}
else
{
	echo "wrong user ID or PASSWORD";
}

?>