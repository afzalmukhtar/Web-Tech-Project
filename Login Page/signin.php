<?php
$user=$_POST['Username1'];
$pword=$_POST['Password1'];
$db=mysqli_connect('localhost', 'root','1405martin@home');
mysqli_select_db($db,'Authentication');
$query=mysqli_query($db,"SELECT Username,Password FROM users WHERE Username='".$user."' AND Password ='".$pword."' ");
//$res=mysqli_query($db,$query);
/*while($row=mysqli_fetch_assoc($res))
{
if($row['Username']==$user && $row['Password']==$pword)
{
  header('Location: temp.html');
}
}
//echo "<script>window.location='index.php?error=1';</script>";
echo"hello";
?>*/
if(mysqli_num_rows($query)>0)
{
 header('Location:temp.php/'.$user);
}
else{
echo"<html>";
echo"<script>";
echo"alert(\"Please check your details\")";
echo"</script>";
echo"</html>";
echo "<a href =\"index.php\">Login again</a>";}