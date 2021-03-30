<?php 
session_start();
if(!empty($_SESSION['key3'])and !empty($_SESSION['key4']))
{
        global $username,$conn,$pointsdb;
        $username = $_SESSION['key3']; 
        $conn = new mysqli('localhost','root','','gp');
        error_reporting(E_ALL & ~E_NOTICE);
        if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
        }
        else
        {
    
                    function working()
                    {
                        global $d,$c,$points1,$username,$conn,$pointsdb;
                        $d=(int)$c[0].(int)$c[1].(int)$c[2].(int)$c[3];
                        if($d<100)
                        {
                            $points1=50;
                        }
                        else if($d>=100 and $d<200)
                        {
                            $points=100;
                        }
                        else if($d>=200 and $d<300)
                        {
                            $points=200;
                        }
                        else if($d>=300 and $d<400)
                        {
                            $points=300;
                        }
                        else if($d>=400 and $d<500)
                        {
                            $points=400;
                        }
                        else if($d>=500 and $d<600)
                        {
                            $points=500;
                        }
                        else if($d>=600 and $d<700)
                        {
                            $points=600;
                        }
                        else if($d>=700 and $d<800)
                        {
                            $points=650;
                        }
                        else if($d>=800 and $d<900)
                        {
                            $points=700;
                        }
                        else if($d>=900 and $d<1500)
                        {
                            $points=900;
                        }
                        else{
                            $points=1200;
                        }
                        $conn = new mysqli('localhost','root','','gp');
                        $sql_u="SELECT Points FROM gp WHERE username='$username'";
                        $res_e=mysqli_query($conn,$sql_u);
                        $no_of_noti_rows=mysqli_num_rows($res_e);
                        if(mysqli_num_rows($res_e)>0){
                            while($rownoti = $res_e->fetch_array()){
                                $pointsdb=$rownoti['Points'];
                            }
                        }
                        $pointsdb=$pointsdb+$points;
                        $send="UPDATE gp set Points='$pointsdb' WHERE username='$username'";
                        $send_query=mysqli_query($conn,$send);
                        if($send_query)
                        {
                            $sendmsg="INSERT into $username.noti(id,description,status,dateandtime) values('Gareward','$pointsdb points has been rewarded','unread',current_timestamp())";
                            $sendmsg_query=mysqli_query($conn,$sendmsg);
                            if($sendmsg_query)
                            {
                                header('Location: ' . 'success.html');
                            }
                            
                        }
                        else{
                            echo"<script type='text/javascript'>alert('some error has occured sorry for the inconvinience!!!'); window.location.href='index.php';</script>";
                        }

                        

                    }

                    //$a='010016501630';//12
                    $b=$_POST['codetobedecoded'];
                    //$b= base64_encode($a);
                    //echo $b;?>
                    <br>
                    <?php
                    $c=base64_decode($b);
                    echo $b;
                    $sql="SELECT * FROM codegeneration WHERE code='$b'";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)>0){
                        echo"<script type='text/javascript'>alert('invalidcode'); window.location.href='index.php';</script>";
                    }
                else
                {   
                    ?>
                        <br><?php
                        $stmt2="INSERT into codegeneration(code) values('$b')";
                        $result1=mysqli_query($conn,$stmt2);                         
                        $h1=(int)$c[4];
                        /*date_default_timezone_set('Asia/Kolkata');
                        date('H:i');
                        $hr=(int)date('j');
                        $rdate=(int)$c[10].(int)$c[11];*/
                        if(strlen($c)==12)
                        {
                            if($h1<3)
                          {
                            if($h1==2 and (int)$c[5]>=4)
                            {
                                echo"<script type='text/javascript'>alert('invalidcode'); window.location.href='index.php';</script>";
                            }
                            elseif ((int)$c[6]>5) {
                                echo"<script type='text/javascript'>alert('invalidcode'); window.location.href='index.php';</script>";
                            }
                            elseif ((int)$c[8]>5) {
                                echo"<script type='text/javascript'>alert('invalidcode'); window.location.href='index.php';</script>";
                            }
                            else if((int)$c[10]==3 and (int)$c[11]>1)
                            {
                                echo"<script type='text/javascript'>alert('invalidcode'); window.location.href='index.php';</script>";
                            }
                            /*else if(($h1==2 and (int)$c[5]<4)and()){
                                working();
                            }*/
                            else{
                                working();
                            }
                         }
                            
                         else{
                             working();
                            }

                        }
                        else{
                            echo"<script type='text/javascript'>alert('invalidcode'); window.location.href='index.php';</script>";
                        }
                        
                }

    }


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