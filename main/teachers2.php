
<?php 
require_once('auth.php');
?>



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
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #112d80;
    }
    nav{
        display: flex;
        height: 12vh;
        background-color: #112d80;
        justify-content: space-between;
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
    .admin-div > img, p,a{
        margin: 0 10px 0 0;
        color: white;
        text-decoration: none;
    }
    table{
        border-collapse: collapse;
        width: 95vw;
        margin: 0 50px;
        /* border: 2px solid #418ade5f; */
    }
    th,td{
        text-align: center;
        border: 1px solid #112d80;
        padding: 8px;
    }
    th{
        background-color: #C6DCF5;
        padding: 10px;
    }
    .table-actions{
        display: flex;
        justify-content: space-evenly;
        padding: 5px 25px;
    }
    .table-div{
        display: grid;
        justify-content: center;
    }
    .search-btn-div{
        display: flex;
        margin:30px 35px 30px 0;
        align-items: center;
        justify-content: space-between;
    }
    .add-stud-btn{
        float: right;
        background-color: #112d80;
        border-radius: 3px;
        padding: 10px 25px;
        color: white;
    }
    div>input{
        padding: 10px 20px;
        width: 25vw;
        margin-left: 35px;
        border: 1px solid #112d80;
        border-radius: 3px;
    }
    div>input:focus{
        border: none;
    }
    a>img{
        height: 30px;
        width: 30px;
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

    button {
        padding: 5px 10px;
    }
</style>

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
    </nav>
    <?php require_once ('sidnav.php') ?>

    <?php 
			include('../connect.php');
				$result = $db->prepare("SELECT * FROM teachers ORDER BY id DESC");
				$result->execute();
				$rowcount = $result->rowcount();
	?>
    <div class="search-btn-div">
        <div><input type="text" placeholder="Search teachers" name="filter" id="filter"></div>
        <div style="text-align:center;">
			         Total Number of Teachers: <b>(<?php echo $rowcount;?>)</b>
		</div>
        <a href="addteacher2.php"><div class="add-stud-btn">Add teacher</div></a>
    </div>

    <div class="table-div">
        <table>
        <thead>
        <tr>
              <th>First name</th>
              <th>Last name</th>
              <th>Gender</th>
              <th>Class(es)</th>
              <th>Date of birth</th>
              <th>Edit - Delete - Profile</th>
        </tr>
        </thead>
			<?php
			
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM teachers ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				
			?>
            </tr>
            <td><?php echo $row['first_name']; ?> </td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            
            <td>
                          <a title="Click to View the Student" href="viewteacher2.php?id=<?php echo $row  ['id']; ?>">
                             <button class="btn btn-success btn-mini">
                             <img src="./assets/profile.png" height="15px"></img>
                               View
                             </button> 
                           </a>

                           <a title="Click to Edit the Student" href="editteacher2.php?id=<?php echo $row  ['id']; ?>">
                             <button class="btn btn-success btn-mini">
                             <img src="./assets/edit.png" height="15px"></img>
                               Edit 
                             </button> 
                           </a>

                           <a title="Click to Delete the Student" href="deleteteacher2.php?id=<?php echo $row  ['id']; ?>">
                             <button class="btn btn-success btn-mini">
                             <img src="./assets/del.png" height="15px"></img>
                               Delete
                             </button> 
                           </a>
			     </td>
            </tr>
          <?php } ?>
        </table>
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