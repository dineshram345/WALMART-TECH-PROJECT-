<?php
session_start();
$conn = new mysqli('localhost','root','','gp');
if($conn->connect_error){
die("conection failed:".$conn->connect_error);
}
$name=$_POST['username'];
$pass=md5($_POST['password']);
$Cookie_period=time()+60*60*24*30;
$s="select * from gp where email='$name' AND password='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num!=1){
    echo"<script type='text/javascript'>alert('invalid username ');window.location.href='index.php';</script>";
}else{
$username="select username from gp where email='$name' AND password='$pass'";
 $res_u=mysqli_query($conn,$username);
$row=mysqli_fetch_assoc($res_u);
$user=$row["username"];
$_SESSION['key']=$user;
$_SESSION['email']=$name; 
    if(isset($_SESSION['key'])){
        if(isset($_SESSION['email'])){
            $url = "dash\index.php?username=" . $username;
            header('Location: ' . $url);

        }
        else{
        echo $_SESSION['key'];
    }}
    else
        echo $_SESSION['key'];
}
?>


<!--login page-->
