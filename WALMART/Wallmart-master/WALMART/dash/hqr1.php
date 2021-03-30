<?php
session_start();
if(!empty($_SESSION['key1']))
{
       $username = $_SESSION['key1']; 
         if(!empty($_SESSION['key2']))
         {
             $email = $_SESSION['key2']; 
             $conn = new mysqli('localhost','root','','gp');
             if($conn->connect_error){
                 die("गर्भाधान विफल:".$conn->connect_error);
                    }
        $phno="SELECT number FROM gp WHERE email='$email'";
        $res_u=mysqli_query($conn,$phno);
        $_SESSION['key3']=$_SESSION['key1'];
        $_SESSION['key4']=$_SESSION['key2'];
        }
        else{
           header("location:../index.php");
        }
}
else{
            header("location:../index.php");
}
#profile pic starts



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>GAREWARD</title>

  <!-- Favicons -->
  <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
<link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/easing/EasePack.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenLite.min.js"></script>
     <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" rel="nofollow"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
    
    <body style="overflow:hidden;">
  <section id="container">
    
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b><span>G</span><span>ar</span><span>ew</span><span>a</span><span>rd</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            
          <?php  
$bio="bio";
$bio.=$username;
$status="SELECT * FROM $username.noti WHERE status='unread'";
$resultstatus=mysqli_query($conn,$status);
            $no_of_noti_rows=mysqli_num_rows($resultstatus);
?>
            
            
            
            <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-tasks" ></i>
              <span class="badge bg-theme abc" id="abc" ></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar hi1">
              
            </ul>
          </li>

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
                <p class="green">आपके पास 5 नए संदेश हैं</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">अभी</span>
                  </span>
                  <span class="message">
                  हाय मेट, कैसा है सब कुछ?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 मिनट.</span>
                  </span>
                  <span class="message">
                 नमस्ते, मुझे आपकी सहायता चाहिए.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 घंटे.</span>
                  </span>
                  <span class="message">
                  अपने नए डैशबोर्ड से प्यार करें.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 घंटे.</span>
                  </span>
                  <span class="message">
                  कृपया, उत्तर दें.
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
                <p class="yellow">आपके पास 7 नई सूचनाएं हैं</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 मिनट.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  मेमोरी # 2 जवाब नहीं.
                  <span class="small italic">30 मिनट.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  डिस्क स्पेस 85% तक पहुंच गया.
                  <span class="small italic">2 मिनट.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  नया उपयोगकर्ता पंजीकृत.
                  <span class="small italic">3 मिनट.</span>
                  </a>
              </li>
              <li>
                <a href="index.php"> सभी अधिसूचनाएं</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        <li><a class="logout" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-sign-out" aria-hidden="true" ></i></a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
     <?php $a="SELECT image FROM gp WHERE email='$email'";
$result = mysqli_query($conn,$a);
$b="SELECT MAX(id) AS maximum FROM hello1";
$result1=mysqli_query($conn,$b);
$row1=mysqli_fetch_assoc($result1);
$maximum=$row1['maximum'];
     ?> 
    <aside>
      <div id="sidebar" class="nav-collapse" style="overflow: hidden;outline: none;">
        <!-- sidebar menu start-->
          <?php if(mysqli_num_rows($result) > 0){ ?> 
        <ul class="sidebar-menu" id="nav-accordion">
            <?php while($row = $result->fetch_assoc()){ ?> 
          <p class="centered"><a href="profile.php"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-circle" width="80"></a></p>
             <?php } ?>
            <?php }else{ ?> 
                    <p class="status error"><a href="profile.php"><img src="img/friends/fr-11.jpg" class="img-circle" width="80"></a></p> 
                <?php } ?>
          <h5 class="centered" style="text-transform:capitalize;"><?php echo $username; ?></h5>
          
          <li class="sub-menu">
            <a class="active" href="hqr1.php">
              <i class=" fa fa-bar-chart-o"></i>
              <span>यहां स्कैन करें!!!</span>
              </a>
          </li>  
          
         <li>
            <a href="profilehd.php">
              <i class="fa fa-book"></i>
                <span>प्रोफ़ाइल</span>
              </a>
          </li>
          
          <li class="mt" style="margin-top:0px;">
            <a href="indexhd.php">
              <i class="fa fa-dashboard"></i>
              <span>डैशबोर्ड</span>
              </a>
          </li>
          <img class="sidebar-gif" src="img/sidebar-bottom.gif">
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    
    <!--main content start-->
    <section id="main-content" style="background-image:url(img/forest1.png);">
      <section class="wrapper site-min-height">
        <div class="s1">
        
        
        <video id="preview"></video>
        <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
  <label class="btn btn-primary active" style="margin-left:510px;margin-top:-45px;">
  
    <input type="radio" name="options" value="1" autocomplete="off" checked> सामने का कैमरा
  </label>
  <label class="btn btn-secondary" style="margin-top:-45px;margin-left:630px">
    <input type="radio" name="options" value="2" autocomplete="off"> पृष्ठ कैमरा
  </label>
  <p class="print"></p>-->
</div>


          </div>
        <!--  <div class="s1">
       <form>
  <fieldset class="account-info" style="border-color:#2f323a;">
    <label class="col-lg-2 control-label" style="color:#c6c7cc; width:inherit;padding: 6px 16px 0px 6px;left:9px;top:9px;">स्कैन कोड</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="c-name" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div> 
    
  </fieldset>
  <fieldset class="account-action" style="border-color:#2f323a;">
    <input class="btn" type="submit" name="submit" value="Send" style="background:#64c3c2;color:#f2f2f2">
  </fieldset>
</form>
          </div>-->
          
          <style>
            
        #preview{
           width:500px;
           height: 500px;
           margin:0px auto;
           display: block;
           
           justify-content: center;
        }
          
          *,
*:before,
*:after {
   box-sizing: border-box;
}
form {
  border: 1px solid #2f323a;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 240px;
   display: inline-block;
    width: 40%;
}
fieldset {
    background-color: #2f323a !important;
  border: 1px solid #2f323a;
  margin: 0;
  padding: 0;
    height:100px;
    justify-content: center;
    align-items: center;
}
input {
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin: 0;
 width: inherit;
    position: relative;
left:1px;
    top:-2px;
  }
.account-info {
  padding: 20px 20px 0 20px;
}
.account-info label {
  color: #395870;
  display: block;
  font-weight: bold;
  margin-bottom: 20px;
}
.account-info input {
  background: #fff;
  border: 1px solid #c6c7cc;
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
  color: #636466;
  padding: 6px;
  margin-top: 6px;
  width: 100%;
}
.account-action {
  background: transparent;
  border-top: 1px solid #c6c7cc;
  padding: 20px;
}
.account-action .btn {
  background: linear-gradient(#49708f, #293f50);
  border: 0;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
  float: left;
  padding: 8px 16px;
}
.account-action label {
  color: #7c7c80;
  font-size: 12px;
  float: left;
  margin: 10px 0 0 20px;
}
              
              .btn{
                  margin-left: 30%;
              }
              .btn:hover{
                  background: #000 !important;
              }

              .s1{
                  display: inline;
              }

              /*svg starts
              svg {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: 0;
}*/

.input {
  position: absolute;
  z-index: 1;
  font-size: 20px;
  text-align: center;
  left: 55%;
  top:50%;
  transform: translateX(-50%);
  font-family: helvetica, sans-serif;
  bottom: 40%;
  background: none;
  border: none;
  color: grey;
  box-shadow: 3px 5px 20px 0 rgba(94, 92, 154, 0.31);
}
.submit {
  position: absolute;
  z-index: 1;
  font-size: 20px;
  text-align: center;
  left: 55%;
  top:35%;
  transform: translateX(-50%);
  font-family: helvetica, sans-serif;
  bottom: 40%;
  background-color: #fff;;
  border: 1px solid #fff;
  color: #669dc7;
  width:15%;
  height:10%;
  border-radius:10%;
  box-shadow: 3px 5px 20px 0 rgba(94, 92, 154, 0.31);
}
.submit:hover{
  background-color:#669dc7;
  color:#fff;
}

.text, .offscreen-text {
  width: 100%;
  top: 40%;
  transform: translateY(-50%) translateX(-10%);
  display: block;
  position: absolute;
  margin: 0;
}
.text1{
  width: 100%;
  top: 79%;
  color:#60a4ce;
  transform: translateY(-50%) translateX(-10%);
  display: block;
  position: absolute;
  margin-left: 50%;
}

.offscreen-text {
  text-align: center;
  top: -9999px;
}

.text span {
  position: absolute;
}


              /* svg ends*/
          
          
          
          </style>
          
          
          
          
          
          
          
          </div>  
          
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
     
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
 <!-- <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <!--<script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'GAREWARD!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
  let self = this;
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
    scanner.addListener('scan',content => {
        //alert(content);
        window.location.href="qrtest.php?b=" + content;
    });
    //391805
    
    Instascan.Camera.getCameras().then(function (cameras){
        if(cameras.length>0){
            scanner.start(cameras[0]);
            $('[name="options"]').on('change',function(){
                if($(this).val()==1){
                    if(cameras[0]!=""){
                        scanner.start(cameras[0]);
                    }else{
                        alert('कोई फ्रंट कैमरा नहीं मिला!');
                    }
                }else if($(this).val()==2){
                    if(cameras[1]!=""){
                        scanner.start(cameras[1]);
                    }else{
                        alert('कोई बैक कैमरा नहीं मिला!');
                    }
                }
            });
        }else{
            console.error('कोई कैमरा नहीं मिला.');
            alert('कोई कैमरा नहीं मिला.');
        }
    }).catch(function(e){
        console.error(e);
        alert(e);
    });
    









  const selectSVG = id => {
  const el = document.getElementById(id);
  return new SVGElement(el);
};

const createSVG = type => {
  const el = document.createElementNS('http://www.w3.org/2000/svg', type);
  return new SVGElement(el);
};

class SVGElement {
  constructor(element) {
    this.element = element;
  }

  set(attributeName, value) {
    this.element.setAttribute(attributeName, value);
  }

  style(property, value) {
    this.element.style[property] = value;
  }
}

const colors = [
  { main: '#FBDB4A', shades: ['#FAE073', '#FCE790', '#FADD65', '#E4C650'] },
  { main: '#F3934A', shades: ['#F7B989', '#F9CDAA', '#DD8644', '#F39C59'] },
  { main: '#EB547D', shades: ['#EE7293', '#F191AB', '#D64D72', '#C04567'] },
  { main: '#9F6AA7', shades: ['#B084B6', '#C19FC7', '#916198', '#82588A'] },
  { main: '#5476B3', shades: ['#6382B9', '#829BC7', '#4D6CA3', '#3E5782'] },
  { main: '#085d4f', shades: ['#4DBFAD', '#73CDBF', '#27A18D', '#1F8171'] },
  { main: '#70B984', shades: ['#7FBE90', '#98CBA6', '#68A87A', '#5E976E'] }
];
const svg = selectSVG('svg');
const text = document.getElementById('text');
const offscreenText = document.getElementById('offscreen-text');
const input = document.getElementById('input');
let width = window.innerWidth;
let height = window.innerHeight;
let textSize = 0;
let textCenter = 0;
const letters = [];
//const prompt = ['s', 't', 'a', 'r', 't', ' ', 't', 'y', 'p', 'i', 'n', 'g'];
let runPrompt = true;

const resizePage = () => {
  width = window.innerWidth;
  height = window.innerHeight;
  svg.set('height', height);
  svg.set('width', width);
  svg.set('viewBox', `0 0 ${width} ${height}`);
  resizeLetters();
}

const resizeLetters = () => {
  textSize = width / (letters.length+2);
  if (textSize > 100) textSize = 100;
  text.style.fontSize = `${textSize}px`;
  text.style.height = `${textSize}px`;
  text.style.lineHeight = `${textSize}px`;
  offscreenText.style.fontSize = `${textSize}px`;
  const textRect = text.getBoundingClientRect();
  textCenter = textRect.top + textRect.height/2;
  positionLetters();
};

const positionLetters = () => {
  letters.forEach(letter => {
    const timing = letter.shift ? 0.1 : 0;
    TweenLite.to(letter.onScreen, timing, {x:letter.offScreen.offsetLeft+'px', ease: Power3.easeInOut});
    letter.shift = true;
  });
}

const animateLetterIn = letter => {
  const yOffset = (0.5+Math.random()*0.5) * textSize;
  TweenLite.fromTo(letter, 0.4, {scale:0}, {scale:1, ease: Back.easeOut});
  TweenLite.fromTo(letter, 0.4, {opacity:0}, {opacity: 1, ease: Power3.easeOut});
  TweenLite.to(letter, 0.2, {y:-yOffset, ease: Power3.easeInOut});
  TweenLite.to(letter, 0.2, {y:0, ease: Power3.easeInOut, delay: 0.2});
  const rotation = -50 + Math.random()*100;
  TweenLite.to(letter, 0.2, {rotation: rotation, ease: Power3.easeInOut});
  TweenLite.to(letter, 0.2, {rotation: 0, ease: Power3.easeInOut, delay: 0.2});
}

const addDecor = (letter, color) => {
  setTimeout(() => {
    var rect = letter.getBoundingClientRect();
    const x0 = letter.offsetLeft + letter.offsetWidth/2;
    const y0 = textCenter - textSize*0.5;
    const shade = color.shades[Math.floor(Math.random()*4)];
    for (var i = 0; i < 8; i++) addTri(x0, y0, shade);
    for (var i = 0; i < 8; i++) addCirc(x0, y0);
  }, 150);
};

const addTri = (x0, y0, shade) => {
  const tri = createSVG('polygon');
  const a = Math.random();
  const a2 = a + (-0.2 + Math.random()*0.4);
  const r = textSize*0.52;
  const r2 = r + textSize*Math.random()*0.2;
  const x = x0 + r * Math.cos(2 * Math.PI * a);
  const y = y0 + r * Math.sin(2 * Math.PI * a);
  const x2 = x0 + r2 * Math.cos(2 * Math.PI * a2);
  const y2 = y0 + r2 * Math.sin(2 * Math.PI * a2);
  const triSize = textSize * 0.1;
  const scale = 0.3 + Math.random()*0.7;
  const offset = triSize*scale;
  tri.set('points', `0,0 ${triSize*2},0 ${triSize},${triSize*2}`);
  tri.style('fill', shade);
  svg.element.appendChild(tri.element);
  TweenLite.fromTo(tri.element, 0.6, {rotation: Math.random()*360, scale: scale, x: x-offset, y: y-offset, opacity: 1}, {x: x2-offset, y: y2-offset, opacity: 0, ease: Power1.easeInOut, onComplete: () => {
    svg.element.removeChild(tri.element);
  }});
}

const addCirc = (x0, y0) => {
  const circ = createSVG('circle');
  const a = Math.random();
  const r = textSize*0.52;
  const r2 = r + textSize;
  const x = x0 + r * Math.cos(2 * Math.PI * a);
  const y = y0 + r * Math.sin(2 * Math.PI * a);
  const x2 = x0 + r2 * Math.cos(2 * Math.PI * a);
  const y2 = y0 + r2 * Math.sin(2 * Math.PI * a);
  const circSize = textSize * 0.05 * Math.random();
  circ.set('r', circSize);
  circ.style('fill', '#eee');
  svg.element.appendChild(circ.element);
  TweenLite.fromTo(circ.element, 0.6, {x: x-circSize, y: y-circSize, opacity: 1}, {x: x2-circSize, y: y2-circSize, opacity: 0, ease: Power1.easeInOut, onComplete: () => {
    svg.element.removeChild(circ.element);
  }});
}

const addLetter = (char, i) => {
  const letter = document.createElement('span');
  const oLetter = document.createElement('span');
  letter.innerHTML = char;
  oLetter.innerHTML = char;
  text.appendChild(letter);
  const color = colors[i%colors.length];
  letter.style.color = color.main;
  offscreenText.appendChild(oLetter);
  letters[i] = {offScreen: oLetter, onScreen: letter, char: char};
  animateLetterIn(letter);
  addDecor(oLetter, color);
}

const addLetters = value => {
  value.forEach((char, i) => {
    if (letters[i] && letters[i].char !== char) {
      letters[i].onScreen.innerHTML = char;
      letters[i].offScreen.innerHTML = char;
      letters[i].char = char;
    }
    if (letters[i] === undefined) {
      addLetter(char, i);
    }
  });
};

const animateLetterOut = (letter, i) => {
  TweenLite.to(letter.onScreen, 0.1, {scale: 0, opacity: 0, ease: Power2.easeIn, onComplete: () => {
    console.log('removing');
    console.log(letter);
    offscreenText.removeChild(letter.offScreen);
    text.removeChild(letter.onScreen);
    positionLetters();
  }});
  letters.splice(i, 1);
}

const removeLetters = value => {
  for (let i = letters.length-1; i >= 0; i--) {
    const letter = letters[i];
    if (value[i] === undefined) {
      animateLetterOut(letter, i)
    }
  }
}

const onInputChange = () => {
  const value = input.value === '' ? [] : input.value.toLowerCase().split('');
  addLetters(value);
  removeLetters(value);
  resizeLetters();
};

const keyup = (e) => {
  if (runPrompt) {
    input.value = '';
    runPrompt = false;
  };
  onInputChange();
}

const addPrompt = (i) => {
  setTimeout(() => {
    if (runPrompt && prompt[i]) {
      input.value = input.value + prompt[i];
      onInputChange();
      addPrompt(i+1);
    }
  }, 300);
}
  
resizePage();
window.addEventListener('resize', resizePage);
input.addEventListener('keyup', keyup);
input.focus();
addPrompt(0);

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
  load_unseen_notification();; 
 }, 5000);
 
});</script>

</body>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">क्या आप लॉगआउट करना चाहते हैं???</h4>
            </div>
                
                  <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">नहीं</button>
              <a href="logout.php"><button type="button" class="btn btn-light">हाँ</button></a>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

</html>
