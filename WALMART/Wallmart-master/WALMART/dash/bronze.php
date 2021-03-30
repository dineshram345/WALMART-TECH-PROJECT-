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
}
else{
    header("location:../index.php");
}}
    else{
        header("location:../index.php");
    }
?>

<!--iugihgkbhghib-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>GAREWARD</title>
    <link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
 
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link href="css/bronzestyle.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <script src="lib/chart-master/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://www.gstatic.com/charts/loader.js"></script>
      </head>
    <script>
      $(window).on('load',function(){
        $('#examplemodal1').modal('show');
    });
  
    </script>

<body style="background:url(img/bronzebg.jpg) no-repeat;background-size:100%">
  <section id="container">
    
    
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        
      </div>
      
      <a href="index.php" class="logo"> <b><span>G</span><span>ar</span><span>ew</span><span>a</span><span>rd</span></b></a>
      
      <div class="nav notify-row" >
        
        <ul class="nav top-menu">
          
<?php  
$bio="bio";
$bio.=$username;
$status="SELECT * FROM $username.noti WHERE status='unread'";
$resultstatus=mysqli_query($conn,$status);
            $no_of_noti_rows=mysqli_num_rows($resultstatus);
?>
            
            
            
            
        <?php ?>    
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-tasks" ></i>
              <span class="badge bg-theme abc" id="abc" ></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar hi1">
              
            </ul>
          </li><?php  //}
            //else {
            ?>
            
            
            
            <?php// } ?>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
               4   <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">See all messages</a>
              </li>
            </ul>
          </li>
          
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">See all notifications</a>
              </li>
            </ul>
          </li>
          
        </ul>
       
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" ></i></a></li>
        </ul>
      </div>

        
    </header>
    
     <?php $a="SELECT image FROM gp WHERE email='$email'";
$result = mysqli_query($conn,$a);
$b="SELECT MAX(id) AS maximum FROM hello1";
$result1=mysqli_query($conn,$b);
$row1=mysqli_fetch_assoc($result1);
$maximum=$row1['maximum'];
     ?> 
    <aside>
      
    
    <section id="main-content">
      <section class="wrapper">
        <div class="row" style="margin-left:-50px;">
          <div class="col-lg-9 main-chart" style="width:100%;">
              
              
                    
                            <?php
                            $p="SELECT Points FROM gp WHERE email='$email'";
                            $check=mysqli_query($conn,$p);
                            $rowcheck=mysqli_fetch_assoc($check);
                            $acheck1=$rowcheck['Points'];
                            //$acheck1=12500;
                            if ($acheck1<=10000){
                            ?>
           
            <div class="row mt" style="width:100%;position:relative;display:inline-block;background-color:transparent;margin-bottom:25px;">
              <a href="ads.php">
              <div class="cards1" id="first">
               
               <!--<img class="inside-cards1 cover" src="img/bronzebanner.jpg"/>-->
              
                <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_1.png"/>
                <!--<h2 class="inside-cards1  cards1-title bronze">Bronze</h2>-->
               <!-- <p class="inside-cards1 cards1-content">Fewer than 20 times of usage</p>-->
                <div class="inside-cards1 progress-outside">
                <div class="inside-cards1 progress">
                  <?php $acheck=$rowcheck['Points'];$acheck=$acheck*0.01;?>
                <div class="inside-cards1 progress user-progress" style="width:<?php echo $acheck;?>%;"></div>
                </div>
                <h4 class="inside-cards1 points" style="margin-top: 210px;margin-left: 70px;color:#fff;"><?php echo $acheck;?>/100</h4>
              </div></a>
                            </div><?php } else {?>
                              <div class="cards1"  id="first">
           <!-- <img class="inside-cards1 cover" src="img/badgesilver.png"/>-->
            <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_1.png"/>
            <!--<h2 class="inside-cards1 cards1-title silver">Silver</h2>-->
            <!--<p class="inside-cards1 cards1-content">Fewer than 100 times of usage</p>-->
            <h4 class="inside-cards1 unlocked" style="margin-left:70px; color:#797979;font-family:cursive;">COMPLETED!!!</h4>
            </div>
                            <?php } ?>



                              <?php
                  if($acheck1<=10000)
                  {?>

            <div class="cards1" data-aos="fade-left" id="second">
           <!-- <img class="inside-cards1 cover" src="img/badgesilver.png"/>-->
            <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_2.png"/>
            <!--<h2 class="inside-cards1 cards1-title silver">Silver</h2>-->
            <!--<p class="inside-cards1 cards1-content">Fewer than 100 times of usage</p>-->
            <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i></h2>
            </div>  
                  <?php } elseif($acheck1>10000 and $acheck1 <=20000) {?>
                  <div class="cards1" data-aos="fade-left" id="second">
           <!-- <img class="inside-cards1 cover" src="img/badgesilver.png"/>-->
            <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_2.png"/>
            <!--<h2 class="inside-cards1 cards1-title silver">Silver</h2>-->
            <!--<p class="inside-cards1 cards1-content">Fewer than 100 times of usage</p>-->
            <div class="inside-cards1 progress-outside">
                <div class="inside-cards1 progress">
                  <?php $acheck=$rowcheck['Points']-10000;$acheck=$acheck*0.01;?>
                <div class="inside-cards1 progress user-progress" style="width:<?php echo $acheck;?>%;"></div>
                </div>
                <h4 class="inside-cards1 points" style="margin-top: 210px;margin-left: 90px;color:#fff;"><?php echo $acheck;?>/100</h4>
                  </div>
                  </div>
                    <?php } else { ?>
                    <div class="cards1" data-aos="fade-left" id="second">
           <!-- <img class="inside-cards1 cover" src="img/badgesilver.png"/>-->
            <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_2.png"/>
            <!--<h2 class="inside-cards1 cards1-title silver">Silver</h2>-->
            <!--<p class="inside-cards1 cards1-content">Fewer than 100 times of usage</p>-->
            <h4 class="inside-cards1 unlocked" style="margin-left:70px; color:#797979;font-family:cursive;">COMPLETED!!!</h4>
                  </div>
                  
                  <?php } ?>









            <div class="cards1" id="third">
            <!--<img class="inside-cards1 cover" src="img/badgegol.jpg"/>-->
            <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_3.png"/>
            <!--<h2 class="inside-cards1 cards1-title gold" >Gold</h2>-->
           <!-- <p class="inside-cards1 cards1-content">More than 100 times of usage</p>-->
            <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i></h2>
            </div>
            <div class="cards1" id="first">
               
              <!-- <img class="inside-cards1 cover" src="img/badgebronze.png"/>-->
              
                <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_4.png"/>
                <!--<h2 class="inside-cards1  cards1-title bronze">Bronze</h2>-->
               <!-- <p class="inside-cards1 cards1-content">Fewer than 20 times of usage</p>-->
               <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i></h2>
          </div>

          <div class="row mt" style="width:100%;position:relative;display:inline-block;background-color:transparent;margin-bottom:25px;">
              <div class="cards1" id="first">
               
             <!--  <img class="inside-cards1 cover" src="img/badgebronze.png"/>-->
              
                <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_5.png"/>
                <!--<h2 class="inside-cards1  cards1-title bronze">Bronze</h2>-->
               <!-- <p class="inside-cards1 cards1-content">Fewer than 20 times of usage</p>-->
               <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i></h2>
              </div>
            <div class="cards1" data-aos="fade-left" id="second">
           <!-- <img class="inside-cards1 cover" src="img/badgesilver.png"/>-->
            <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_6.png"/>
            <!--<h2 class="inside-cards1 cards1-title silver">Silver</h2>-->
            <!--<p class="inside-cards1 cards1-content">Fewer than 100 times of usage</p>-->
            <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i></h2>
            </div>
            <div class="cards1" id="third">
            <!--<img class="inside-cards1 cover" src="img/badgegol.jpg"/>-->
            <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_7.png"/>
            <!--<h2 class="inside-cards1 cards1-title gold" >Gold</h2>-->
            <!--<p class="inside-cards1 cards1-content">More than 100 times of usage</p>-->
            <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i></h2>
            </div>
            <div class="cards1" id="first">
               
               <!--<img class="inside-cards1 cover" src="img/badgebronze.png"/>-->
              
                <img class="inside-cards1 cards1-header" src="img/RankIcon_Bronze_8.png"/>
                <!--<h2 class="inside-cards1  cards1-title bronze">Bronze</h2>-->
                <!--<p class="inside-cards1 cards1-content">Fewer than 20 times of usage</p>-->
                <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i></h2>
              </div>
          </div>
            <!--- -->
           
          
          
          




<?php
$k1="SELECT username,points FROM gp order by points desc LIMIT 4";
$resultk1=mysqli_query($conn,$k1);
    $i=0;
    $ar=array();
    $ar1=array();
    while($rowk1=mysqli_fetch_assoc($resultk1))
    {
        $ar[$i]=$rowk1['username'];
        $ar1[$i]=$rowk1['points'];
        $i=$i+1;                                      
        ?><?php
    }
     
$k="SELECT image FROM gp order by points desc LIMIT 4";
$resultk = mysqli_query($conn,$k);
$j=0;
$arr1=array();
while($rowk = $resultk->fetch_assoc()){
    $arr1[$j]=base64_encode($rowk['image']);
    $j=$j+1;
}?>


              
            
          
        </div>
        <div class="rowcol-lg-9 main-chart">

</div>
       
      </section>
    </section>
    
    
    
  </section>
  
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  
  <script src="vendors/aos/js/aos.js">
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
      
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        
        title: 'Hi <?php echo $_SESSION['key'] ?>',
        
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        
        image: '../images/shopping2.png',
        
        sticky: false,
        
        time: 8000,
        
        class_name: 'my-sticky-class'
      });
        
        
        
        
        
       <?php if(mysqli_num_rows($result) > 0){ 
    
         while($row = $result->fetch_assoc()){ ?>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
<?php }else{ ?> 
        <img src="img/friends/fr-11.jpg" class="img-circle" width="80">
<?php } ?>
        
        
        
        
        
      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
        

    $(document).ready(function(){
       function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"notification.php",
   method:"POST",
   data:{view:view},
   
   success:function(data)
   {
     var obj = jQuery.parseJSON(data);
    //alert(obj.unseen_notification);
    $('.hi1').html(obj.notification);
    if(obj.unseen_notification > 0)
    {
     $('.abc').html(obj.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.badge bg-theme abc').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  $('#cl').load('timestamp.php');
  $('#pointstab').load('pointstab.php');
  load_unseen_notification();;
 }, 1000);
 
 
});
AOS.init({
  duration: 1200,
})

      
      
  </script>
  
  <div class="modal fade" id="exampleModal1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">SendMessage</h4>
            </div>
            <div class="modal-body">
              <form id="form" action="registration.php" method="POST">
                <div class="form-group">
                    <textarea style="width:100%;height:80px;padding:2px; background:transparent;color:white;"></textarea>
                </div>
                
                  <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-success" name="sign-up button" value="SEND">
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      
    
    
  
</body>

</html>
