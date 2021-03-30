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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
  <?php $theme="style";?>
  <link id="theme" href="css/<?php echo $theme;?>.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles-banner.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <script src="lib/chart-master/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="https://www.gstatic.com/charts/loader.js"></script>
     
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      </head>
    <script>
      $(window).on('load',function(){
        $('#myModal').modal('show');
    });
    function swap(sheet)
    {
      document.getElementById('theme').setAttribute('href',sheet);
    }
  
    </script>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
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
          
          
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-sign-out" aria-hidden="true" ></i></a></li>
        </ul>
      </div>

        
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
     <?php $a="SELECT image FROM gp WHERE email='$email'";
$result = mysqli_query($conn,$a);
$b="SELECT MAX(id) AS maximum FROM hello1";
$result1=mysqli_query($conn,$b);
$row1=mysqli_fetch_assoc($result1);
$maximum=$row1['maximum'];
     ?> 
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
          <?php if(mysqli_num_rows($result) > 0){ ?> 
        <ul class="sidebar-menu" id="nav-accordion">
            <?php while($row = $result->fetch_assoc()){ ?> 
          <p class="centered"><a href="profile.php#edit"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-circle" width="80"></a></p>
             <?php } ?>
            <?php }else{ ?> 
                    <p class="status error"><a href="profile.php#edit"><img src="img/friends/fr-11.jpg" class="img-circle" width="80"></a></p> 
                <?php } ?>
          <h5 class="centered" style="text-transform:capitalize;"><?php echo $username; ?></h5>
          
          <li class="sub-menu">
            <a href="qr1.php">
              <i class=" fa fa-bar-chart-o"></i>
              <span>scan Here!!!</span>
              </a>
                     </li>
      
          <li>
            <a href="profile.php">
              <i class="fa fa-book"></i>
                <span>profile</span>
              </a>
          </li>
          <li class="mt" style="margin-top:0px;">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <img class="sidebar-gif" src="img/sidebar-bottom.gif">
        
          
         
        </ul>
        
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <div class="row mt" style="margin-left: 0px !important;margin-right: 0px !important;margin-top: 10px !important;margin-bottom:10px !important;">
              <!-- SERVER STATUS PANELS -->
              <img class="banner" src="img/banner-bg.png"/>
              <!--<img class="banner" src="img/darkthemebanner.jpg" style="background-size:100% 100%;"/>-->
              <img class="bannericon" src="img/badges-icon.png"/>
              <p class="overview">Overview</p>
              
                                  <?php
                            $p="SELECT Points FROM gp WHERE email='$email'";
                            $check=mysqli_query($conn,$p);
                            $rowcheck=mysqli_fetch_assoc($check);
                            ?>
            </div>
            
            <div class="row mt" style="width:100%;position:relative;display:inline-block;background-color:transparent;margin-left:5px;margin-bottom:25px;">
            <?php if($rowcheck['Points']<=10000){?>
            <a href="bronze.php">
            <div class="cards1" id="first" href="bronze.php">
               
               <img class="inside-cards1 cover" src="img/badgebronze.png"/>
              
                <img class="inside-cards1 cards1-header" src="img/bronze-b.png"/>
                <h2 class="inside-cards1  cards1-title bronze">Bronze</h2>
                <p class="inside-cards1 cards1-content">Fewer than 10000 points!!</p>
                <div class="inside-cards1 progress-outside">
                <div class="inside-cards1 progress">
                  <?php $acheck=(int)$rowcheck['Points'];$acheck=$acheck*0.00125;?>
                <div class="inside-cards1 progress user-progress" style="width:<?php echo $acheck;?>%;"></div>
                </div>
                <h4 class="inside-cards1 points"><?php echo $rowcheck['Points'];?></h4>
                <a class="inside-cards1 points"href="bronze.php" style="margin-left: 100px; margin-top: 0px;font-size: xx-large;">>></a>
              </div>
              
              </div>
            </a>
            <?php } else {?>
              <a href="bronze.php">
            <div class="cards1" id="first" href="bronze.php" style="background-color:#ffe4a5;">
               
               <img class="inside-cards1 cover" src="img/badgebronze.png"/>
              
                <img class="inside-cards1 cards1-header" src="img/bronze-b.png"/>
                <h2 class="inside-cards1  cards1-title bronze">Bronze</h2>
                <p class="inside-cards1 cards1-content">Fewer than 10000 points!!</p>
                <h2 class="inside-cards1 unlocked">Completed</h2>
              </div>
            </a>

            <?php } ?>



            <div class="cards1" data-aos="fade-left" id="second">
            <img class="inside-cards1 cover" src="img/badgesilver.png"/>
            <img class="inside-cards1 cards1-header" src="img/silver-b.png"/>
            <h2 class="inside-cards1 cards1-title silver">Silver</h2>
            <p class="inside-cards1 cards1-content">Fewer than 100 times of usage</p>
            <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i>Locked</h2>
            </div>
            <div class="cards1" id="third">
            <img class="inside-cards1 cover" src="img/badgegol.jpg"/>
            <img class="inside-cards1 cards1-header" src="img/gold-b.png"/>
            <h2 class="inside-cards1 cards1-title gold" >Gold</h2>
            <p class="inside-cards1 cards1-content">More than 100 times of usage</p>
            <h2 class="inside-cards1 unlocked"><i class="fa fa-lock"></i>Locked</h2>
            </div>
          </div>

        
            <!--- -->
           
            <!--CUSTOM CHART START -->
            <div class="row mt" style="width:100%;height:auto;position:relative;display:inline-block;background-color:transparent;margin-left:5px;margin-bottom:25px;" id="row-mt1">
            <div class="border-head">
              <h3>TODAY</h3>
            </div>
            <div class="custom-bar-chart">
            <div class="col-md-3" data-aos="fade-left">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock" id="cl"><?php echo date('H:i');?></div>                            
                                <div class="widget-subtitle plugin-date"><?php echo date("l, F j,Y") ?></div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            <?php
                            $p="SELECT Points FROM gp WHERE email='$email'";
                            $check=mysqli_query($conn,$p);
                            $rowcheck=mysqli_fetch_assoc($check);
                            ?>
                            
                        </div>
                        <div class="col-md-3">

                            <div class="widget widget-success widget-no-subtitle">
                                <div class="widget-big-int"><span class="fa fa-trophy" id="pointstab"></span></div>                            
                                <div class="widget-subtitle">Points</div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-left"><span class="fa fa-cloud"></span></a>
                                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                        
                            
                        </div>
                        <div class="col-md-2">                        
                            <a href="#" class="tile tile-info">
                                <?php  echo date("j"); ?>
                                <p><?php  echo date("F"); ?></p>                            
                                <div class="informer informer-default dir-tr"><span class="fa fa-calendar"></span></div>
                            </a>                        
                        </div>
            
                        <div class="border-head">
              <h3>OFFERS</h3>
              <!--<button onClick="swap('css/style.css')">old</button>
              <button onClick="swap('css/styledark.css')">dark</button>-->
            </div>
            </div>
            </div>
            <!--custom chart end-->
            
            <!-- /row -->
            <div class="row">
              
            <img src="img/offer1.gif" style="width:95%;margin-left:20px;">
              

              <!-- WEATHER PANEL -->
              
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
            
              <!-- /col-md-8  -->
            </div>
            
            <!-- /row -->
            <div class="row">
            
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
              
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
                   <!-- /col-md-4 -->
            </div>
            <div class="col-lg-9 main-chart">
            <div class="row">
            
            </div>
            </div>
            <div class="col-lg-9 main-chart">
            <div class="row">
            <img src="img/offer3.gif" class="gif">
            </div>
            </div>
            <!-- /row -->
          </div>
          

          
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT




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


              *********************************************************************************************************************************************************** -->
            
          <div class="col-lg-3 ds"><div class="hi">
              <h2 class="centered mt" style="padding-bottom:10px;"><i class="fa fa-money" style="font-size:38px;"></i>&nbsp;LeaderBoard</h2>
            <!-- First Member --></div>
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="data:image/jpg;charset=utf8;base64,<?php echo $arr1[0]; ?>" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                    <a href="#" style="text-transform:capitalize;"><h4> <?php echo $ar[0];?></h4> </a>
                  <muted><i class="fa fa-trophy"><?php echo $ar1[0];?></i></muted>
                </p>
              </div>
            </div>
            <!-- Second Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="data:image/jpg;charset=utf8;base64,<?php echo $arr1[1]; ?>" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                    <a href="#" style="text-transform:capitalize;"><h4><?php echo $ar[1]; ?></h4></a>
                  <muted><i class="fa fa-trophy"><?php echo $ar1[1];?></i></muted>
                </p>
              </div>
            </div>
            <!-- Third Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="data:image/jpg;charset=utf8;base64,<?php echo $arr1[2]; ?>" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#" style="text-transform:capitalize;"><h4><?php echo $ar[2]; ?></h4></a>
                  <muted><i class="fa fa-trophy"><?php echo $ar1[2];?></i></muted>
                </p>
              </div>
            </div>
            <!-- Fourth Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="data:image/jpg;charset=utf8;base64,<?php echo $arr1[3]; ?>" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                    <a href="#" style="text-transform:capitalize;"><h4><?php echo $ar[3]; ?></h4></a>
                  <muted><i class="fa fa-trophy"><?php echo $ar1[3];?></i></muted>
                </p>
              </div>
            </div>
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              <h4>COMPLETED ACTIONS & PROGRESS</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: 70,
                    color: "#4ECDC4"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
            </div>
            <!--NEW EARNING STATS -->
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>TODAY EARNINGS</span>
                    <strong>$ 890,00 | 15%</strong>
                  </div>
                  <br>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
              </div>
            </div>
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">RECENT ACTIVITY</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Just Now</muted>
                  <br/>
                  <a href="#">Paul Rudd</a> purchased an item.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>2 Minutes Ago</muted>
                  <br/>
                  <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>3 Hours Ago</muted>
                  <br/>
                  <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!-- Fourth Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>7 Hours Ago</muted>
                  <br/>
                  <a href="#">Brando Page</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!-- USERS ONLINE SECTION -->
              

              
              
              
              
              
              
              
              
            
            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        
      <p class="text-center text-muted pt-4"><button class="px-1"  data-toggle="modal" data-target="#exampleModal12" style="border:none;color:#fff;background-color:#1998ff;border-radius:.1875rem;"> Any trouble in understanding English?</a></p>
        <div class="credits">
          
          
        </div>
                <a href="index.php#" class="go-top">
                  
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="background:#fff;">
            <div class="modal-header" style="border:none;">
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Do you want to logout???</h4>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
              <a href="logout.php"><button type="button" class="btn btn-light">Yes</button></a>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    <!--footer end-->
    <?php $a=$_SERVER['HTTP_REFERER'];$path="success.html";if(strpos($a, $path) !== false){ ?>
    <div class="modal fade" id="myModal" role="dialog">
  
    <div class="modal-dialog"style="border-radius:20px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <!--<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>-->
        <div class="modal-body" style="border:2px solid #fff;height:250px;background:url(img/badgegold1.png);background-size:100%;border-radius:20px;">
        <button type="button" class="close" data-dismiss="modal" style="z-index:1000;">&times;</button>
        <h2 style="margin-top: -5px;height: 35px;color:#675ff2;font-family: 'papyrus';margin-left: 135px;"><b><?php echo $rowcheck['Points'];?> Points!!</b></h2>
          <div class="modal-body" style="border-top:2px solid #fff;background:url(img/modalcoins.gif);background-size: 100% 100%;height: 220px;margin-top: -10px;margin-left: 25px;">
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  <?php } ?>
  </div>


  <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top:200px;">
          <div class="modal-content" style="background:#fff;">
            <div class="modal-header" style="border:none;">
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;font-size:19px;">Do you want to switch over languages???</h4>
            </div>
                
                  <div class="modal-footer" style="border:none;">
              <button type="button" class="btn btn-light" data-dismiss="modal" style="background-color:#1998ff;">English</button>
              <a href="indexh.php"><button type="button" class="btn btn-light">Hindi</button></a>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
  </section>
  </body>

</html>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="vendors/aos/js/aos.js">
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
 
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Hi <?php echo $_SESSION['key'] ?>',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '../images/shopping2.png',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
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
   //dataType:'json',
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
    
    
    
  
