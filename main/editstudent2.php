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
        color: #0B1E59;
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
    .admin-div > img, p, a{
        margin: 0 10px 0 0;
        color: white;
        text-decoration: none;
    }
    .input-div{
        display: grid;
        grid-area: input-div;
        grid-template-columns: auto auto;
    }
    .reg-div{
        display: grid;
        background-color: #F8F8F8;
        grid-template-areas: 
        'input-div upload-div'
        'btn-div btn-div';
        box-shadow: 4px 6px 20px grey;
        padding: 50px 50px 30px 40px;

    }
    .big-div{
        display: grid;
        place-items: center;
        /* justify-content: center;
        align-items: center; */
        margin-top: 25px;
    }
    .upload-img{
        margin:5px 0 0 30px;
    }
    .upload-img>div:nth-child(1){
        background-color: #C6DCF5;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .upload-div{
        display: grid;
        grid-area: upload-div;
        place-items: center;
        grid-template-columns: auto auto;
        border: 1px solid #C6DCF5;
        padding: 3px;
        border-radius: 5px;       
    }
    .upload-div:hover{
        background-color: #C6DCF5;
        cursor: pointer; 
    }
    input, select{
        margin: 8px 15px;
        padding: 8px 10px; 
        border: 0.1px solid #112d80;
        border-radius: 3px;
    }
    input:focus, select:focus{
        border: none;
    }
    .btn-div{
        display: grid;
        grid-area: btn-div;
        justify-content: center;
        margin: 20px 0 10px 0;
    }
    .add-stud-btn{
        background-color: #112d80;
        border: none;
        border-radius: 3px;
        padding: 15px 40px;
        color: white;
    }
    .add-stud-btn:hover{
        box-shadow: 4px 6px 20px grey;
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

    /* Dropdown Button for class */
    .dropbtn {
        margin: 8px 15px;
        padding: 8px 15px; 
        border: 0.1px solid #112d80;
        border-radius: 3px;
        background-color: white;
        font-size: 13px;
    }
    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        z-index: 1;
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
        display:flex;
        flex-direction: column;
        margin: 0px 15px;
        border: 0.1px solid #112d80;
        border-radius: 3px;
        width: 180px;
        font-size: 13px;
    } 
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
	<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM students WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
        <form class="reg-div" action="updateStudent.php" method="post" enctype="multipart/form-data">
            <div class="input-div">
                <input type="hidden" name="memi" value="<?php echo $id; ?>" />
                <input type="text" placeholder="First name" name="first_name" value="<?php echo $row['first_name'] ?>">
                <input type="text" placeholder="Last name" name="last_name" value="<?php echo $row['last_name'] ?>">
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of birth" name="dob" value="<?php echo $row['dob'] ?>">
                <input type="text" placeholder="Place of birth" name="pob" value="<?php echo $row['pob'] ?>">
                <input type="text" placeholder="Matricule" value="<?php echo $row['matricule'] ?>" name="matricule" readonly Required >


                <select name="gender">
                    <option hidden><?php echo $row['gender'] ?></option>
                    <option >Male</option>
                    <option >Female</option>
                    <option >Other</option>
                </select>



                <input type="text" placeholder="Nationality" name="nationality" value="<?php echo $row['nationality'] ?>">
                <select onclick = "myFunction()" name="class">
                    <option id="selected-class"><?php echo $row['class'] ?></option>
                    <option id="f1" class="classes forms">Form 1</option>
                    <option id="f2" class="classes forms">Form 2</option>
                    <option id="f3" class="classes forms">Form 3</option>
                    <option id="f4" class="classes forms">Form 4</option>
                    <option id="f5" class="classes forms">Form 5</option>
                    <option id="L" class="classes ups">Lowersixth</option>
                    <option id="U" class="classes ups">Uppersixth</option>
                </select>
                <select onclick="spec()" name="specialty" id="major" value="<?php echo $row['specialty'] ?>">
                    <option id="selected-specialty"><?php echo $row['specialty'] ?></option>
                    <option id="AOS" class="specialty">Arts or Science</option>
                    <option id="S" class="specialty">Science</option>
                    <option id="A" class="specialty">Art</option>
                    <option id="NA" class="specialty">Not applicable</option>
                </select>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Admission date" name="doa" value="<?php echo $row['doa'] ?>">
                <input type="text" placeholder="Parent's name" name="parent_name" value="<?php echo $row['parent_name'] ?>">
                <input type="text" placeholder="Parent's contact" name="parent_phone" value="<?php echo $row['parent_phone'] ?>">
            </div>

            <div class="upload-img">
                <div><img src="../uploads/<?php echo $row['file'] ?>" alt="" width="150px"></div>
                    <div class="upload-div">
                        <img src="./assets/upload.png" alt="">
                        <input style="display: none;" id="file" type="file" placeholder="Upload image" name="file" accept="image/*" onchange="loadFile(event)">
                        <label for="file">Upload image</label>
                    </div>                
            </div>

            <div class="btn-div">
                <button id="btn" class="add-stud-btn">Update</button>
            </div>
        </form>
    </div>
	<?php
	}
	?>
    <script>
        a = document.getElementById("menu-open");
        b = document.getElementById("menu-close");
        c = document.getElementById("myDropdown");
        l = document.getElementById("Lower-Sixth");
        u = document.getElementById("Upper-Sixth");
        e = document.getElementById("major");
        f = document.getElementById("male");
        g = document.getElementById("female");
        h = document.getElementById("other");
        i = document.getElementById("sel-sex");
        sc = document.getElementById("selected-class");
        classes = document.getElementsByClassName("classes");
        sp = document.getElementById("selected-specialty");
        na = document.getElementById("NA");
        science = document.getElementById("S");
        aos = document.getElementById("AOS");
        arts = document.getElementById("A");
        specialty = document.getElementsByClassName("specialty");
        forms = document.getElementsByClassName("forms");
        ups = document.getElementsByClassName("ups");
        btn = document.getElementById("btn");

        function myFunction(){
            sc.hidden = true;
            sp.hidden = true;     

            for(var i=0; i<ups.length; i++){
                if(ups[i].selected == true){
                    na.hidden = true;
                    science.hidden = false;
                    arts.hidden = false;
                    aos.selected = true;
                    aos.hidden = true;
                    if(ups[i].selected == true ){
                        btn.disabled = true;
                        alert("Please select the student's specialty");
                    }    
                }                
            }

            for(var j=0; j<forms.length; j++){
                if(forms[j].selected == true){
                    na.selected = true;
                    na.hidden = true;
                    science.hidden = true;
                    arts.hidden = true;
                }
            }
            // console.log(e.innerText);
            
            
            }

        function spec(){
            sp.hidden = true;
            aos.hidden = true;

            if(arts.selected == true || science.selected == true) {
                        btn.disabled = false;
                    }   

            for(var i=0; i<ups.length; i++){
                if(ups[i].selected == true || sc.innerText == "Uppersixth" || sc.innerText == "Lowersixth"){
                    na.hidden = true;
                }
            }
        }

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

        var loadFile = function(event){
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</body>
</html>