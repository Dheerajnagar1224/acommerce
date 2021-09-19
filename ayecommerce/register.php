<?php

$conn=new mysqli("localhost","root","","test");
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
	echo 'die("connection failed:".$conn->connect_error)';
}

	$reguser=$_POST['name-register'];
	$regpass=$_POST['password-register'];
$sql="INSERT INTO register VALUES('$reguser','$regpass')";
if(!empty($reguser)&&!empty($regpass)){
echo $reguser.$regpass;
	if($conn->query($sql)===true){
		echo '<script> alert("registered")
		window.location.href="my-account.html";
		</script>';
	}
}
else{
	echo '  <script> alert("unregistered")
		window.location.href="my-account.html";
		</script>' ;


	}	
?>