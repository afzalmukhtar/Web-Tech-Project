<?php

$username=$_POST['Username'];
$password=$_POST['Password'];
$email=$_POST['Email'];

if($db=mysqli_connect('localhost', 'root', '1405martin@home')) //echo "done<br/>";else die("nooooo some problem");
if(mysqli_select_db($db,'Authentication')) //echo "selected<br/>";

$check="SELECT * FROM `users` where Username='$username'";
$result=mysqli_query($db,$check);

if(mysqli_num_rows($result)>=1)//You are mixing the mysql and mysqli, change this line of code
           {
           
           //echo"<html>";
           //echo"<script>";
           echo"Username already exists<br/>";
           echo"Please chose a different username<br/>";
           echo "<a href =\"index.php\">Sign Up</a>";
           //echo"</script>";
           //echo"</html>";
           //header('Location: signup.php');
            //echo"name already exists";
            
           }
         else
{ 

$query="INSERT INTO `users` (`Username`,`Password`,`Email`) VALUES ('$username', '$password','$email')";
if(mysqli_query($db,$query))
 //header('Location: temp.html');
 echo "New user inserted<br/>";
 echo "<a href =\"index.php\">Login </a>";
 }
?> 