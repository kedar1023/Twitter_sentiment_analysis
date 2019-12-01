
<?php

$conn = mysqli_connect('localhost','root','','test');

if(!$conn){
    echo 'Not connected';
}

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $emailid = $_POST['emailid'];
    $mobilenumber = $_POST['mobilenumber'];
    $userpassword = $_POST['userpassword'];

    $sql = "INSERT INTO users (firstname,lastname,birthdate,emailid,mobilenumber,userpassword)
    VALUES ('$firstname','$lastname','$birthdate','$emailid','$mobilenumber','$userpassword')";

if(!mysqli_query($conn,$sql)){
    echo "Not inserted";
} 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Twitter Analysis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

</head>
<style>
/* ::placeholder{
    color:black;
} */

 .nav {
        display: inline-flex;
        margin-left:20px;
        margin-top:20px;
    }
    
    .nav .logo {
        background: white;
    }
    
    ul {
        list-style: none;
    }
    li{
        float:left;
    }
    
    .logo {
        font-size: 32px;
        font-family: 'Courier New', Courier, monospace;
        cursor:pointer;
        
    }
    
 
 
    
</style>
<body>
<center>
 <div class="nav">
        <ul>
            <li class="logo">
                <font color="#55acee">Tweets</font>
                <font color="#337ab7">Analyzer</font>
            </li>
        
           
        </ul>
    </div>
    </center>


    <center>
        
    <div class="contact" id="contact">
    
    <section style="margin-top: 50px;" id="contact">
    <h1 class="card-title center" style="font-size:38px;font-weight:500;">Register</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
               
                    <div class="card">
                    <!-- <div class="card blue darken-1">
                                            <div class="card-content white-text"> -->
                                          
                                            <!-- </div>
                                          </div> -->
                        <div class="card-body">
        <form action="index.php" method="POST">
        <div class="row">
        <div class="col-md-6 form-group">
            FirstName<input type="text" name="firstname"  placeholder="Enter your FirstName" required>
</div>
<div class="col-md-6 form-group">
        LastName<input type="text" name="lastname"  placeholder="Enter your LastName" required>
            </div>
            <div class="col-md-6 form-group">
            Birthdate:
            <input type="Date" class="datepicker" placeholder="Choose Birthdate Date Here" name="birthdate" required>
            </div>
<div class="col-md-6 form-group">
            Email
            <input type="email" name="emailid"  placeholder="Enter yourEmail" required>
            </div>
<div class="col-md-6 form-group">
            MobileNumber:
            <input type="text" name="mobilenumber"  placeholder="Enter your MobileNumber" required>
            </div>
            <div class="col-md-6 form-group">
            Password
            <input type="password" name="userpassword"  placeholder="Enter your Password" required>
            </div>
            <br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="submit">Register</button>
            <br>
            
        </form>
        </div>Already have account?<a href="login.php">&nbsp;Login</a>
                   </div>
               </div>
           </div>
       </div></div>
   </section>
   


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  


<script>
$(document).ready(function(){
$('.sidenav').sidenav();
$('.materialboxed').materialbox();
$('.parallax').parallax();
$('.tabs').tabs();
$('.datepicker').datepicker();
$('.timepicker').timepicker();
$('select').formSelect();

});
</script>
    
</body>
</html>

