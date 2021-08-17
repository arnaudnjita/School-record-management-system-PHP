<?php require_once ('auth.php') ?>



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
    .body{
        /* display: grid; */
        /* justify-content: center; */
        margin: 0 auto;
    }
    .big-container{
        display: grid;
        grid-template-columns: auto auto;
        color: black;
        place-items: center;
        box-shadow: 4px 6px 20px grey;
        background-color: #f8f8f8;
        place-items: start;
        padding: 60px 60px 60px 60px;
        margin-top: 40px;
    }
    .p-info-div{
        margin: 0 20px;
    }
    .o-info-div{
        margin: 0 20px 0 10px;
    }
    .p-info-div>p, .o-info-div>p{
        color: black;
        margin: 10px 0;
        font-size: 15px;
    }
    .container1, .container2{
        display: grid;
        grid-template-columns: auto auto;
        border: 0.1px solid #8ebaec;
        border-radius: 3px;
        padding: 20px 10px 20px 30px;
        width: max-content;
        height: 240px;
        margin: 10px 0;
    }
    .container2{
        padding: 20px 10px 20px 10px;
    }
    .img-div{
        background-color: #C6DCF5;
        padding: 20px;
        border-radius: 5px;
    }
    .papa{
        display: grid;
        place-items: center;
    }
    .btn{
        border: none;
        background-color: #112d80;
        border-radius: 3px;
        padding: 15px 40px;
        color: white;
        width: 230px;
        margin: 10px 0 0px 0;
        place-items: center;
        text-align: center;
    }


</style>
<body>
    <?php require_once ('navbar.php'); ?>
    </nav>
    <?php require_once ('sidnav.php'); ?>

    <?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM students WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
    ?>


    <div class="papa">
        <div class="big-container">
            <div class="container1">

            

                <div class="img-div">
                    <img  src="../uploads/<?php echo $row['file'];?>" height="150px" alt="">
                </div>

                <div class="p-info-div">
                    <h4>Personal information</h4>
                    <p>Name: <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></p>
                    <p>Class: <?php echo $row['class'] ?>  <span id="specialty" style="color:black; font-size:medium;"><?php echo $row['specialty'] ?></span> </p>
                    <p>Date of Birth: <?php echo $row['dob'] ?></p>
                    <p>Place of Birth: <?php echo $row['pob'] ?></p>
                    <p>Sex: <?php echo $row['gender'] ?></p>
                    <p>Nationality: <?php echo $row['nationality'] ?></p>
                </div>
            </div>
            <div class="container2">
                <div class="o-info-div">
                    <h4>Other information</h4>
                    <p>Admission date: <?php echo $row['doa'] ?></p>
                    <p>Parent’s name: <?php echo $row['parent_name'] ?></p>
                    <p>Parent’s contact: <?php echo $row['parent_phone'] ?></p>
                </div>
            </div>
            <a  href="students2.php"><div class="btn">Back</div></a>
        </div>
    </div>
    
    <?php } ?>

    <script>
        a = document.getElementById("menu-open");
        b = document.getElementById("menu-close");
        c = document.getElementById("specialty");

        if(c.innerText=="Not applicable"){
            c.hidden = true;
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

        /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
        function myFunction() {
            c.classList.toggle("show");
        }
    </script>
</body>
</html>