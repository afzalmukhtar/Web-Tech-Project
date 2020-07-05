<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>My Circle: Sign-up/Sign-in</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2>Welcome to My Circle</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<!--<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>-->
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<!--<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>-->
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Username" name="Username"/>
			<input type="email" placeholder="Email" name="Email"/>
			<input type="password" placeholder="Password" name="Password"/>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="signin.php" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<!--<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>-->
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<!--<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>-->
			</div>
			<!--<span>or use your account</span>-->
			<input type="text" placeholder="Username" name="Username1"/>
			<input type="password" placeholder="Password" name="Password1" />
			<!--<a href="#">Forgot your password?</a>-->
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		<i class="fa fa-heart">
		<a target="_blank" href="#">
			Contact Us
		</a>
		</i>
	</p>
</footer>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>