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
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/ads.css" rel="stylesheet">
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

<body style="background:url(img/purple.jpg) no-repeat;background-size:100%;background-attachment: fixed;">
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"> <b><span>G</span><span>ar</span><span>ew</span><span>a</span><span>rd</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" >
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
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
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
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
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
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
      
   
    <section id="main-content" style="margin-left:10px;">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart" style="width:100%;">
              
              
                    
                  
                            <?php $a=1;
                            $p="SELECT Points FROM gp WHERE email='$email'";
                            $check=mysqli_query($conn,$p);
                            $rowcheck=mysqli_fetch_assoc($check);
                            $acheck1=$rowcheck['Points']; 
                            ?>
                      
                  <div class="row mt" style="width:100%;position:relative;display:inline-block;background-color:transparent;margin-bottom:25px;">
                <?php if($acheck1>=8000){?>
                <img src="img/offer.gif" style="width:100%;"data-toggle="modal" data-target="#ad1"/><?php } else { ?>
                <img src="img/offer.gif" style="width:100%;opacity:0.5;" data-toggle="modal" data-target="#adl"/>
                <?php } if($acheck1>=2000){ ?>
                <img src="img/ad4.gif" style="margin-top:10px;width: 520px;"data-toggle="modal" data-target="#ad2"/><?php } else { ?>
                <img src="img/ad4.gif" style="margin-top:10px;width: 520px;opacity:0.5;" data-toggle="modal" data-target="#adl"/>
                <?php } if($acheck1>=5000){ ?>
                <img src="img/ad1%20(2).jpeg" style="margin-top:10px;width: 710px;"data-toggle="modal" data-target="#ad3"/><?php } else { ?>
                <img src="img/ad1%20(2).jpeg" style="margin-top:10px;width: 710px;opacity:0.5;" data-toggle="modal" data-target="#adl"/>
                <?php } if($acheck1>=9000){ ?>
                <img src="img/adbanner.jpg"style="margin-top:10px;width: 850px;"data-toggle="modal" data-target="#ad4" /><?php } else { ?>
                <img src="img/adbanner.jpg"style="margin-top:10px;width: 850px;opacity:0.5;"data-toggle="modal" data-target="#adl" />
                <?php } if($acheck1>=4000){ ?>
                <img src="img/ad5.gif" style="margin-top:10px;"data-toggle="modal" data-target="#ad5"/><?php } else { ?>
                <img src="img/ad5.gif" style="margin-top:10px;opacity:0.5;" data-toggle="modal" data-target="#adl"/>1
                <?php } if($acheck1>=10000){ ?>
                <img src="img/ad1%20(3).jpeg" style="margin-top:10px;width: 100%;"data-toggle="modal" data-target="#ad6"/><?php } else { ?>
                <img src="img/ad1%20(3).jpeg" style="margin-top:10px;width: 100%;opacity:0.5;" data-toggle="modal" data-target="#adl"/>
                <?php } if($acheck1>=3000){ ?>
                <img src="img/offer3.gif" style="width:100%;"data-toggle="modal" data-target="#ad7"/><?php } else { ?>
                <img src="img/offer3.gif" style="width:100%;opacity:0.5;" data-toggle="modal" data-target="#adl"/>
                <?php } if($acheck1>=7000){ ?>
                <img src="img/offer1.gif" style="width:100%;"data-toggle="modal" data-target="#ad8"/><?php } else { ?>
                <img src="img/offer1.gif" style="width:100%;opacity:0.5;" data-toggle="modal" data-target="#adl"/>
                      <?php } ?>
         </div>
              
        <div class="rowcol-lg-9 main-chart">

</div>
            </div>
          </div>
        <!-- /row -->
      </section>
    </section>
      </aside>
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
  
<div class="modal fade" id="ad1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>8000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="8000"/>
                <input type="hidden" name="class1" value="ad1"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
            </div>
              </form>
          </div>
        </div>
      </div>
    
<div class="modal fade" id="ad2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>2000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="2000"/>
                <input type="hidden" name="class1" value="ad2"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
            </div>
              </form>
          </div>
        </div>
      </div>
    
<div class="modal fade" id="ad3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>5000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="5000"/>
                <input type="hidden" name="class1" value="ad3"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
            </div>
              </form>
          </div>
        </div>
      </div>
    <!-- ad4 modal-->
<div class="modal fade" id="ad4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>9000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="9000"/>
                <input type="hidden" name="class1" value="ad4"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
            </div>
              </form>
          </div>
        </div>
      </div>
    
<div class="modal fade" id="ad5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>4000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="4000"/>
                <input type="hidden" name="class1" value="ad5"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
            </div>
              </form>
          </div>
        </div>
      </div>
    <!-- ad6 modal-->
<div class="modal fade" id="ad6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>10000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="10000"/>
                <input type="hidden" name="class1" value="ad6"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
            </div>
              </form>
          </div>
        </div>
      </div>
    <!-- ad7purchase-->
<div class="modal fade" id="ad7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>3000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="3000"/>
                <input type="hidden" name="class1" value="ad7"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
            </div>
              </form>
          </div>
        </div>
      </div>
    
<div class="modal fade" id="ad8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
              
              <form action="adaccess.php" method="POST">
            <div class="modal-header" style="border:none;"><h2>7000 Coins</h2>
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to purchase???</h4>
                <input type="hidden" name="class" value="7000">
                <input type="hidden" name="class1" value="ad8"/>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a><button type="submit" class="btn btn-light">Yes</button></a>
                  </div>
            </form>
          </div>
        </div>
      </div>
      
    
    <div class="modal fade" id="adl">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#7e36a4;">
            <div class="modal-header" style="border:none;">
                <h2 class="modal-title" id="exampleModalLabel" style="color:#000;"><center><i class="fa fa-lock"></i>Locked</center></h2>
            </div>
            <div class="modal-body">
                <center><h3 style="color:#fff;">Insufficient coins!!!</h3></center>
              </div>
            
          </div>
        </div>
      </div>
      
    
  
</body>

</html>
