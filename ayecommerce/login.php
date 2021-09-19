<?php

// $connS=new mysqli("localhost","root","","test");
// if($conn->connect_error){
// 	die("connection failed".$conn->connect_error);
// }

// $sql="select * from register";
	
// $retrive=mysql_query($sql,$conn);

// if(!$retrive){
// die("retrive failed".mysql_error());	
// }

// while($row=mysqli_fetch_array($retrive,MYSQL_NUM))
// {
// 	echo "username:{row[0]}
// 	userpass:{row[1]} ";
// }
// mysql_close($conn);


$conn=new mysqli("localhost","root","","test");
if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}

$username=$_POST['name-login'];
$userpass=$_POST['password-login'];
$sql="select * from register  	";
	
if($retrive=mysqli_query($conn,$sql)){



while($row=mysqli_fetch_array($retrive))
{
echo $row[0];
echo $row[1];
	if($username==$row[0] && $userpass==$row[1]){
echo '<script> alert("login successfully")
		window.location.href="my-account.html";
		</script>';
	}
	
}
}
else{
	echo "failed connection to table";
}
mysqli_close($conn);

?>