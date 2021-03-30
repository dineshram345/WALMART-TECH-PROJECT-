
<?php
if(isset($_POST['submit']))
{
session_start();
$conn = new mysqli('localhost','root','','gp');
if($conn->connect_error){
die("गर्भाधान विफल:".$conn->connect_error);
}
$name=$_POST['username'];
$pass=md5($_POST['password']);
$Cookie_period=time()+60*60*24*30;
$s="select * from gp where email='$name' AND password='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num!=1){
    echo"<script type='text/javascript'>alert('अमान्य उपयोगकर्ता नाम ');window.location.href='indexh.php';</script>";
}else{
$username="select username from gp where email='$name' AND password='$pass'";
 $res_u=mysqli_query($conn,$username);
$row=mysqli_fetch_assoc($res_u);
$user=$row["username"];
$_SESSION['key']=$user;
$_SESSION['email']=$name; 
    if(isset($_SESSION['key'])){
        if(isset($_SESSION['email'])){
            $url = "dash\indexhd.php?username=" . $username;
            header('Location: ' . $url);

        }
        else{
        echo $_SESSION['key'];
    }}
    else
        echo $_SESSION['key'];
}
}
?>



<!--login page-->

<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Gareward लॉगिन समय</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>लॉग इन करें</strong> आपके खाते में</div>
                    <form action="#" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" placeholder="उर कूल मेल-आईडी डूड क्या है?" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="गुप्त समय" required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        
                        <div class="col-md-6" style="margin-left: 85px;">
                            <button class="btn btn-info btn-block" name="submit">लॉग इन करें</button>
                        </div>
                    </div>
                    
                    <div class="login-subtitle">
                        अब तक कोई खाता नहीं है? <a href="hsignup.php">खाता बनाएं</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                       
                    </div>
                    <div class="pull-right">
                        <a href="#">संपर्क करें</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>





