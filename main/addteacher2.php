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
        justify-content: center;
        align-items: center;
        margin-top: 70px;
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

<body>
    <?php require_once ('navbar.php'); ?>
    <?php require_once ('sidnav.php'); ?>
    </nav>
    <?php require_once ('sidnav.php'); ?>
    <div class="big-div">
        <form class="reg-div" action="saveteacher2.php" method="post" enctype="multipart/form-data">
            <div class="input-div">
                <input type="hidden" name="memi" value="<?php echo $id; ?>" />
                <input type="hidden" name="memi" value="<?php echo $id; ?>" />
                <input type="text" placeholder="First name" name="first_name">
                <input type="text" placeholder="Last name" name="last_name">
                <select onclick="myGender()" name="gender">
                     <option id="sg" value=""  selected hidden>Sex</option> 
                    <option id="m" >Male</option>
                    <option id="f" >Female</option>
                </select>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of birth" name="dob">
                <input type="text" placeholder="Nationality" name="nationality">
                <input type="text" placeholder="phone number" name="phone">
                <select onclick = "myFunction()" name="class">
                    <option value="" selected hidden>Class</option> 
                    <option>Form 1</option>
                    <option>Form 2</option>
                    <option>Form 3</option>
                    <option>Form 4</option>
                    <option>Form 5</option>
                    <option id="LS">Lowersixth</option>
                    <option id="US">Uppersixth</option>
                </select>
                <select name="specialty" onclick="spec()" id="major">
                    <option id="AorS" selected hidden>Arts or Science</option> 
                    <option id="NA">Not applicable</option>
                    <option id="A">Arts</option>
                    <option id="S">Science</option>
                </select>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Year of employment" name="yoe">
            </div>

            <div class="upload-img">
                <div><img src="./assets/img-prof.png" id="output" alt="" width="150px"></div>
                    <div class="upload-div">
                        <img src="./assets/upload.png" alt="">
                        <input style="display: none;" id="file" type="file" placeholder="Upload image" name="file" accept="image/*" onchange="loadFile(event)">
                        <label for="file">Upload image</label>
                    </div>                
            </div>

            <div class="btn-div">
                <button id="btn" class="add-stud-btn">Add teacher</button>
            </div>
        </form>
    </div>
    <script>
        a = document.getElementById("menu-open");
        b = document.getElementById("menu-close");
        c = document.getElementById("myDropdown");
        l = document.getElementById("LS");
        u = document.getElementById("US");
        e = document.getElementById("AorS");
        p = document.getElementById("A");
        q = document.getElementById("S");
        r = document.getElementById("NA");
        m = document.getElementById("major");
        btn = document.getElementById("btn");

         /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
         function myFunction() {
            if(l.selected == true || u.selected == true){
                e.selected = true;  
                r.hidden = true;  
                p.hidden = false;
                q.hidden = false;
                btn.disabled = true;
                alert("Please select the student's specialty");
            }
            else{
                r.selected = true;
                p.hidden = true;
                q.hidden = true;
                btn.disabled = false;

            }
        }

        function spec(){
            if(p.selected == true || q.selected == true) {
                        btn.disabled = false;
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

        function check() {
            if(l.checked == true || u.checked == true){
                e.disabled = false;
            }
            else if(l.checked == false || u.checked == false){
                e.disabled = true;
            }
        }

        var loadFile = function(event){
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</body>
</html>