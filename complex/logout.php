<?php

session_start();
$conn = mysqli_connect("localhost","root","","test");
if(isset($_SESSION['firstname']))
{
    $firstname=$_SESSION['firstname'];
    
    $sql = "UPDATE `users` SET `status`= 0 WHERE firstname='$firstname' ";
    mysqli_query($conn,$sql);
    session_destroy();
    echo "<script>location.href='login.php'</script>";
}
else{
    echo "<script>location.href='login.php'</script>";
}

?>