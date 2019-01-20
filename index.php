<?php
	include_once('data.php');
?>	
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- login form-->
	 <div id="loginpage">
			<h1>login</h1>
			<div id="log">
				 <form method="post">
					<input type="text" name="email" placeholder="Email"><br>
					<input type="password" name="pass" placeholder="Password"><br>
					<button name = "login">Login</button>
			    </form>
			</div>
	    </div>
	    <?php
			if(isset($_POST['login']))
			{
				$email = $_POST['email'];
             	$pass = $_POST['pass'];
             	geting_userdata($email,$pass);
			}
		?>
<!-- home page header-->
	<div id="header">
   		<div id="heading">
			<p id="name">Aid to Fund</p>
			<a class="visit">Home</a>
            <a class="visit">About</a>
            <a class="visit">Contect</a>
            <?php 
            	if(isset($_COOKIE['Email'])){
            	    $row = getdata($_COOKIE['Email']);
             		echo '<img id="Profile_image" src = "uplode/'.$row['image'].'" width = "50" height="50">';
            	}
             	else			
             	  echo '<img id="Profile_image" src ="user.jpg" width = "50" height="50">';
			?>
			<p id="user-name">
				<?php 
					if(isset($_COOKIE['Email']))
						echo '<a href="profile.php" style="text-decoration: none;color: black;">'.$row["UserName"].'</a>';
					else
					   	echo 'Username';  		
				?>	
			</p>
		</div>
		<p id="title">Aid To Fund</p>
			<?php
			if(!isset($_COOKIE['Email'])){
			   echo '<div id="login-regis-page">
			   	<a class="login" onclick="loginpage()">login</a>
			   	<a class="login" href="register.php">Register</a>
			   </div>';
         }
         ?>
		<a class="prev" onclick="addslide(-1)">&#10094;</a>
		<a class="next" onclick="addslide(1)">&#10095;</a>
		<div id="dots">
			<spam class="dot" onclick="showSlide(1)"></spam>
            <spam class="dot" onclick="showSlide(2)"></spam>
            <spam class="dot" onclick="showSlide(3)"></spam>
		</div>
	</div>
	<div id="gallery">
		<div class="card">
			<div class="s-img">
				<div class="type"></div>
			</div>
		</div>
		<div class="card">
			<div class="s-img">
				<div class="type"></div>
			</div>
		</div>
		<div class="card">
			<div class="s-img">
				<div class="type"></div>
			</div>
		</div>
		<div class="card">
			<div class="s-img">
				<div class="type"></div>
			</div>
		</div>
	</div>
	<div id="thoughts"> <p style="text-align: center;font-size: 40px;padding-top: 180px;">Taught</p></div>
	<div id="list">
		<h1 style="text-align: center;margin-top: 40px;">Types</h1>
     	<div id="card1">
     		<p class="subtitle">Social</p>
     		<p id="about-card1" class="about-c">This category consist of causes like fulfilling a wish for a poor Kids or raising a fund for peoples suffering from a climatic disaster. Just for an Example: A Poor kid who dreamed to eat a meal in some restaurant for at least once. </p>
     	</div>
     	<div id="card2">
     		<p class="subtitle">Medical</p>
     		<p id="about-card2" class="about-c"> In this Category, Contributors will help people to raise funds for peoples who are going through a serious disease and need a medical help or a person who go through a major accident which cost a lot for an individual to bear himself.</p>
     	</div>
     	<div id="card3">
     		<p class="subtitle">Educational</p>
     		<p id="about-card3" class="about-c">In this Category, People will basically raise funds for Education or Startup a Project or Ventures. Aid to Fund Will help to raise Funds for Peoples to bear their startups or educational cost. For Example : A person need to raise funds for their abroad studies which he achieved his seat by some scholarship.  </p>
     	</div>
     	<div id="card4">
     		<p class="subtitle">Other</p>
     		<p id="about-card4" class="about-c">This category will not considered contribution in terms of money but also in terms of materialistic things like Clothes or Food to the needy Person either suffering from a climatic disaster or those who are living on street for their survival. Just for an Example, donating Food and your old Clothes to peoples who are living in street in a cold weather.</p>
     	</div>
	</div>
	<footer>
		<div class="sub-footer">
			<h1>About Us</h1>
			<p>Aid to fund</p>
			<p>Partners</p>
			<p>Careers</p>
			<p>Privacy Policy</p>
			<p>Term and Condtion</p>
		</div>
		<div class="sub-footer">
			<h1>Contect Us</h1>
			<p>Facebook</p>
			<p>Twitter</p>
			<p>Email</p>
			<p>LinkedIn</p>
			<p>Instagram</p>
		</div>
		<div class="about_project">
		     <h1 style="padding-top: 30px;">about project</h1>
		     <p style="padding-top: 25px; text-align: left; font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">ewkguygehgiuqehriu ieegpuqepr pggrpqerg  eqgpuqre erquguqe qerrpgpqe erighqreg rghdfpugy ierurhgpiergh  iurhgherp gp eirgiprqehg uiorgpuehrg erhgperqhg  rghiuerrgh ppperhgpiuer hrergherq euprihguiehr ieirugpiuerhgu ergh erg erghiurehg er gieurhg ergh iuerhg ergherihg ergihergh ergeuirh ergierhgeruig erg eeg erigerh</p>
		</div>
		<p style="text-align: center;font-size: 20px; font-weight: bolder;">Copyright &copy Aid to fund</p>
	</footer>
<script type="text/javascript" src="script.js"></script>	
</body>
