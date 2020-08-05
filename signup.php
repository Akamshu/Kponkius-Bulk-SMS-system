<?php 
	include_once "includes/new/header.php"
 ?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>Create Account</h2>
			<form class="signup-form" action="includes/signup.php" method="post">
				<input type="text" name="username" placeholder="Enter a Username">
				<input type="email" name="email" placeholder="Enter an Email">
				<input type="text" name="phone" placeholder="Enter a Phone Number">
				<input type="radio" name="sex" value="Male" class="demo2">Male
				<input type="radio" name="sex" value="Female">Female
				<input type="password" name="password" placeholder="Enter a Password">
				<input type="password" name="cpassword" placeholder="Confirm Password">
				
				<div style="background: #cdf;box-shadow: 1px 2px 1px gray; border-radius: 30px 0;">
				<br><br><input type="checkbox" name="check" class ="checkbox"><label>Option</label> <p>By clicking the <span style="color: #11c;">Create</span> button you Accept the Terms and Conditions.</p>
				<button type="submit" name="submit" class="signup_button">CREATE</button>
				<br></div>
			</form>
		</div>
	</section>


<?php 
	include_once "includes/new/footer.php"
 ?> 
 

