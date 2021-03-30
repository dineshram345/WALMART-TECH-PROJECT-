<?php
$email =$_POST['username'];
$password = md5($_POST['password']);
$conn = new mysqli('localhost','root','','gp');
if($conn->connect_error){
die("coonection failed:".$conn->connect_error);
}
else
{
     error_reporting(E_ALL & ~E_NOTICE);
$query=mysql_query("SELECT * FROM gp WHERE email='$email' AND password='$password'");
if(mysql_num_rows($query)==0)
{
echo"no account found";
} 
else{
echo"login successfull";
}
);
$query->close();
$conn->close();
}
?>