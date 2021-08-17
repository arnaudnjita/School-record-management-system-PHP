<?php require_once ('auth.php'); ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *{
        margin: 0;
        box-sizing: border-box;
        /* font-family: Arial, Helvetica, sans-serif; */
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #112d80;
    }
    nav{
        display: flex;
        height: 12vh;
        background-color: #112d80;
        justify-content: space-between;
        /* grid-template-columns: auto auto; */
    }
    .logo{
        display: flex;
        color: white;
        margin: 0 20px;
        font-size: x-large;
        align-items: center;
        float: left;
    }
    .admin-divs{
        display: flex;
        float: right;
        flex-direction: row;
        align-items: center;
    }
    .admin-div{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 0 10px;
    }
    .admin-div > img, p, .admin-div>a{
        margin: 0 10px 0 0;
        color: white;
        text-decoration: none;
    }
    
    .big-div{
        display: grid;
    }
    .div-head{
        text-align: center;
        margin: 40px 0 50px 0;
    }
    .cards-div{
        display: grid;
        grid-template-columns: auto auto auto;
        place-items: center;
    }
    .card-div{
        display: grid;
        width: 280px;
        padding: 30px 50px;
        box-shadow: 2px 3px 5px grey;
        place-items: center;
        background-color: #F8F8F8;
    }
    .card-div:hover{
        box-shadow: 4px 6px 20px grey;
        /* font-weight: bold; */
    }
    .card-title{
        text-align: center;
        margin: 20px 0 0 0;
        font-size: large;
    }
    .card-links{
        text-decoration: none;
    }
    /* implementing sidebar */
    .sidenav {
        height: 100vh;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 12vh;
        left: 0;
        background-color: #C6DCF5;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 30px;
        text-align: center;
    }
    .sidenav a, .sidenav > p {
        padding: 10px;
        text-decoration: none;
        font-weight: normal;
        color: #112d80;
        display: block;
        transition: 0.3s;
    }
    .sidenav > a{
        border: 1px solid #112d80;
        margin: 10px 10px 0 10px;
        /* background-color: #f1f1f1; */
        
    }
    .sidenav a:hover {
        background-color: #112d80;
        color: white;
    }
    span{
        font-size:30px;
        color: white; 
        cursor:pointer;
        margin-right: 20px;
    }
    /* end of sidebar menu */

    
  

</style>
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	


<body>
<?php require_once ('navbar.php'); ?>
   
    <?php require_once ('sidnav.php'); ?>
    <div class="big-div">
        <div class="div-head">
            <h1>School Record Management System</h1>
        </div>
        <a class="card-links" href="teachers2.php">
        <div class="cards-div">
            <div class="card-div">
                <div class="card-img"><img src="./assets/teacher.png" height="140px" alt=""></div>
                <div class="card-title">Teacher management</div>
            </div>
        </a>
        <a class="card-links" href="students2.php">
            <div class="card-div">
                <div class="card-img"><img src="./assets/student.png" height="140px" alt=""></div>
                <div class="card-title">Student management</div>
            </div>
        </a>
        <a class="card-links" href="../index.php">
            <div class="card-div">
                <div class="card-img"><img src="./assets/logout.png" alt="" height="140px" style="color: white;"></div>
                <div class="card-title"><br>Log out</div>
            </div>
        </a>
        </div>
    </div>
    <script>
        a = document.getElementById("menu-open");
        b = document.getElementById("menu-close");

        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
            a.style.display = "none";
            b.style.display = "block";
        }
        
        function closeNav() {
            a.style.display = "block";
            b.style.display = "none";
            document.getElementById("mySidenav").style.width = "0";            
        }
    </script>
</body>
</html>