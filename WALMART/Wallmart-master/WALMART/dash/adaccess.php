<?php
session_start();
if(!empty($_SESSION['key']))
{
$username = $_SESSION['key']; 
if(!empty($_SESSION['email']))
{
$email = $_SESSION['email']; 
$conn = new mysqli('localhost','root','','gp');
if($conn->connect_error){
die("conection failed:".$conn->connect_error);
}
else{
$sql_e="SELECT * FROM credits";
$res=mysqli_query($conn,$sql_e);
$sql_e1="SELECT * FROM $username.bio";
$res1=mysqli_query($conn,$sql_e);
$_SESSION['key1']=$_SESSION['key'];
$_SESSION['key2']=$_SESSION['email'];
date_default_timezone_set('Asia/Kolkata');
}
}}
$points=(int)$_POST['class'];
$adname=$_POST['class1'];
echo $name;
$sql_u="SELECT Points FROM gp WHERE username='$username'";
$res_e=mysqli_query($conn,$sql_u);
$no_of_noti_rows=mysqli_num_rows($res_e);
if(mysqli_num_rows($res_e)>0){
while($rownoti = $res_e->fetch_array()){
$pointsdb=$rownoti['Points'];
}
}
$pointsdb=$pointsdb-$points;
$send="UPDATE gp set Points='$pointsdb' WHERE username='$username'";
$send_query=mysqli_query($conn,$send);
if($send_query)
{
$sendmsg="INSERT into $username.noti(id,description,status,dateandtime) values('Gareward','$points incentive has been used','unread',current_timestamp())";
$sendmsg_query=mysqli_query($conn,$sendmsg);
$sql_u1="SELECT frequency FROM ads WHERE adname='$adname'";
$res_e1=mysqli_query($conn,$sql_u1);
$no_of_noti_rows=mysqli_num_rows($res_e1);
if(mysqli_num_rows($res_e1)>0){
while($rownoti = $res_e1->fetch_array()){
$frequency=$rownoti['frequency'];
}
    $frequency+=1;
}
$sendfreq="UPDATE ads SET frequency='$frequency' WHERE adname='$adname'";
$qsendfreq=mysqli_query($conn,$sendfreq);
if($sendmsg_query and $sendfreq)
{
 header('Location: ' . 'success.html');
}
                
}
else{
echo"<script type='text/javascript'>alert('some error has occured sorry for the inconvinience!!!'); window.location.href='index.php';</script>";
}
?>
<html>
<head></head>
<script >
if ( window.history.replaceState ) {
    var a="index.php";
  window.history.replaceState( null, null,a);
}
</script>
</html>

<!--adaccess page-->
