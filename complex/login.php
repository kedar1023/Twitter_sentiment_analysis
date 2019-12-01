
<?php

session_start();
if(isset($_SESSION['firstname'])){
    header("location:index2.php");
}

$conn = mysqli_connect('localhost','root','','test');

if(!$conn){
    echo "Not connected";
}
if(isset($_POST['submit'])){
    $emailid = $_POST['emailid'];
    $userpassword = $_POST['userpassword'];

    $sql = "SELECT * from users WHERE emailid='$emailid' AND userpassword='$userpassword'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);

    if($row<1){
        echo "<div class='alert'>";
        echo "Email or password invalid";
        echo "</div>";
    }
    else{
        $data = mysqli_fetch_assoc($result);
        $firstname = $data['firstname'];
        $_SESSION['firstname'] = $firstname;
        $sql = "UPDATE `users` SET `status`=1 WHERE emailid ='$emailid'";
        $result = mysqli_query($conn,$sql);
        header("location:index2.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<body>

    <center>
      
        <div class="contact" id="contact">
            <section style="margin-top: 50px;" id="contact">
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
               
                    <div class="card">
                    <span class="card-title center" style="font-weight: 500;font-size: 36px;"> Login</span>
                    
                        <div class="card-body">
        <form action="login.php" method="POST">
        <div class="input-field col s8 offset-s2 blue-text">
        <i class="material-icons prefix">account_circle</i>
        <input type="email" style="color:black;" name="emailid" Placeholder="Enter EmailAddress" required>
</div>
<div class="input-field col s8 offset-s2 blue-text">
<i class="material-icons prefix">lock</i>
        <input type="password" style="color:black;" name="userpassword" Placeholder="Enter Password" required>
</div>
<div class="input-field col s8 offset-s2 blue-text">
        <button type="submit" class="btn btn-primary" name="submit">Login  <i class="material-icons right">send</i></button>
       
</div>
        </form>
    </center>
</body>
</html>