<!DOCTYPE html>
<html>
<head>
<style type="text/css">

button{
float:right;
}
/*THIS PART IS FOR THE COLUMNS AND GRID (both the css below)*/
		.BodyElement{
			display: grid;
			position: absolute;
			/*width: 97%;*/
			margin-left: 210px;
			margin-top: 80px;
			/*background: yellow;*/
			grid-template-columns:750px 300px;
			/*grid-template-columns:325px 325px 300px;*/
			padding: 10px;
			justify-content: center;
			align-content: center;
			/*grid-gap: 10px 10px;*/
			grid-column-gap: 25px;
			grid-row-gap: 25px;
		}


		.BodyItem {
			/*background-color: rgba(255, 255, 255, 0.8);*/
			/*border: 1px solid rgba(0, 0, 0, 0.8);*/
			border: 1px solid white;
			padding: 20px;
			font-size: 25px;
			text-align: center;
		}
		
		.bodyitem
		{
		    /*border: 1px solid rgba(0, 0, 0, 0.8);*/
		    border:1px solid white;
		    /*border-left:white;*/
			padding: 20px;
			font-size: 30px;
			text-align: left;
		}
		
		/*main button styles*/
.btn-group .button {
  background-color: #3D19E8; /* Green */
  border: 1px solid #3D19E8;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 250px;
  display: block;
}

.btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: #2A0EB0;
}
/*main buttons style over*/

/* form styling starts */
input{
  width: 75%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}  

.username,.pw,.email{width:200px;  /*heading name*/
height:100px;
border: 5px solid white;
margin: 0; 
float:left;
text-align:left;
}
#alignrt{width:420px;   /*given data+input*/
height:150px;
border: 5px solid white;
margin: 0;
float:right; 
text-align:left;
}

#edit{position:relative;  /* edit button*/
right:20px;
top:5px;
background-color: #0D80E0; /* Green */
  border: 1px solid #0D80E0;
  color: white;
  padding: 5px 15px;
  text-align: center;
  text-decoration: none;
  font-size: 15px;
  cursor: pointer;
}
#edit:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


#panel1,#panel2,#panel3{                /*input region and button*/
display:none;
width:300px;
height:80px;
border:3px solid white;
margin:0;
float:left;
}

.btn{
background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding:5px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  float:left;
}
.btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.pw{position:relative;
top:50px;
}
.email{position:relative;
top:100px;
}
#del{
background-color: #0D80E0; /* Green */
  border: 1px solid #0D80E0;
  color: white;
  padding:5px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  position:relative;
  top:150px;
  left:420px;
}
#del:hover{ background-color: #f44336;
  color: white;
  border:1px solid #f44336
}

/*#Inv{
display:none;}
new thing*/

/* #alignrt{position:absolute;
right:400px;
top:5px;
}*/
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#something").hide();
    });
$(document).ready(function(){
  $("#inv").click(function()
  {
    $("#something").show();
    $("#delete").hide(); /*hide delete acc stuff*/
    $("#Account").hide();
    }); 
});    
$(document).ready(function(){
  $("#ac").click(function(){
    $("#Account").show();
     $("#something").hide();
     $("#delete").show();
    });
  });  
  

function conf1(){ window.confirm("Are you sure you want to cancel the changes? ");
}

function conf2(){ window.confirm("Are you sure you want to save the changes? ");
}
function conf3(){window.confirm("Are you sure you want to delete your account? ");
}

</script>
</head>
<body>


<div class="BodyElement">
		
		<div class="BodyItem">
			<div class="Acc" id="Account">
			  <form action="formval.php" method="POST" >
              <div class="username">Username</div>
              <div id="alignrt"><?php $url=$_SERVER['PHP_SELF'];
              $arr=explode('/',$url);
              echo end($arr);?>
              <button id="edit" onclick="unhide1()">edit</button>
                <div id="panel1">
              <!--<span id="panel"><input type="text" name="usrname"></span>-->
                <input type="text" name="usrname"><br />
                <!--<button class="btn" onclick="conf1()">cancel</button>-->  <!--add hover and alerts-->
                <button class="btn">save</button>
                </div>
                
              </div>
              <br />
              <div class="pw">Password</div>
              <div id="alignrt"><?php $url=$_SERVER['PHP_SELF'];
              $arr=explode('/',$url);
              $user=end($arr);
              $db=mysqli_connect('localhost', 'root','1405martin@home');
              mysqli_select_db($db,'Authentication');
              $query=mysqli_query($db,"SELECT Password FROM users WHERE Username='".$user."' ");
              $row=mysqli_fetch_assoc($query);
              echo $row['Password'];?>
              <button id="edit" onclick="unhide2()">edit</button>
                <div id="panel2">
                <input type="password" name="pword"><br />
                <!--<button class="btn" onclick="conf1()">cancel</button>-->
                <button class="btn">save</button>
                </div>
              </div>
              <br />
              <div class="email">Email</div>
              <div id="alignrt"><?php $url=$_SERVER['PHP_SELF'];
              $arr=explode('/',$url);
              $user=end($arr);
              $db=mysqli_connect('localhost', 'root','1405martin@home');
              mysqli_select_db($db,'Authentication');
              $query=mysqli_query($db,"SELECT Email FROM users WHERE Username='".$user."' ");
              $row=mysqli_fetch_assoc($query);
              echo $row['Email'];?>
              <button id="edit" onclick="unhide3()">edit</button>
                <div id="panel3">
                <input type="email" name="newmail"><br />
               <!-- <button class="btn" onclick="conf1()">cancel</button>-->
                <button class="btn" >save</button>
                </div>
              </div>
              <br />
			</div>
			<button id="del" class="delete" onclick="conf3()">Delete Acc</button>
			<br />
			<div id="Inv">
			<div id="something">hello fraands</div>
			</div></form>
		</div>		
		<div class="BodyItem">
		
		 <div class="btn-group">
		  <button class="button" id="ac" >Account</button>
		  <!--<button class="button" id="inv">Invite Friends</button>-->
		  <button class="button" >About Us</button>
		 </div>
		</div>
		
		   
	</div>

<script>

/*NEW*/

/*function myacc() {document.getElementById("contentf").innerHTML=" ";
document.getElementById("contentp").innerHTML=" ";
var dummy1="Current username :<button id='change' onclick='getusrname()'>Edit</button><br />";
var dummy2="current email:<button id='change' onclick='getemail()'>Edit</button><br />";
var dummy3="current password:<button id='change' onclick='getpw()'>Edit</button><br />";
var dummy4="<button id='delete' onclick='delacc()'>Delete account</button><br />";
document.getElementById("contentp").innerHTML+=dummy1+dummy2+dummy3+dummy4;

}*/




function getusrname(){
var dummy="<br /><input type='text' name='username' maxlength='15'>"
document.getElementById("contentf").innerHTML+=dummy;
}

function getemail(){
var dummy="<br /><input type='email' name='emailid'>"
document.getElementById("contentf").innerHTML+=dummy;
}

function getpw(){
var dummy="<br /><input type='password' name='pw'>"
document.getElementById("contentf").innerHTML+=dummy;
}

function delacc(){
/* idk what to do*/
var dummy="allo fraands";
document.getElementById("content").innerHTML+=dummy;
}
function unhide1(){
document.getElementById("panel1").style.display="block";
}
function unhide2(){
document.getElementById("panel2").style.display="block";
}
function unhide3(){
document.getElementById("panel3").style.display="block";
}
</script>
</body>
</html>