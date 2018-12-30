<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header">
   		<div id="heading">
			<p id="name">Aid to Fund</p>
			<a>Home</a>
            <a>About</a>
            <a>Contect</a>
			<img src="1BBXQAfdUMTL6SQt66eSLYS7.jpg" width="50px" height="50px" id="im">
			<p id="user-name">Abhishek Kumar Singh</p>
		</div>
		<p id="title">Aid To Fund</p>
		<div id="login-regis-page">
			<a class="login" onclick="loginpage()">login</a>
			<a class="login" href="register.php"	>Register</a>
		</div>
		<a class="prev" onclick="addslide(-1)">&#10094;</a>
		<a class="next" onclick="addslide(1)">&#10095;</a>
		<div id="dots">
			<spam class="dot" onclick="showSlide(1)"></spam>
            <spam class="dot" onclick="showSlide(2)"></spam>
            <spam class="dot" onclick="showSlide(3)"></spam>
		</div>
	</div>
	<div id="loginpage">
		<h1>login</h1>
		<div id="log">
			<input type="text" name="" placeholder="Email"><br>
			<input type="password" name="" placeholder="Password"><br>
			<button onclick="fun()">Login</button>
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
     		<p id="about-card1" class="about-c">this is about funding the peopel who are suffering from </p>
     	</div>
     	<div id="card2">
     		<p class="subtitle">Medical</p>
     		<p id="about-card2" class="about-c">This is all about the funding  the peopel who are suffering from health problrm and they have not money for treatment.</p>
     	</div>
     	<div id="card3">
     		<p class="subtitle">Educational</p>
     		<p id="about-card3" class="about-c">This is all about funding the people who are requid money for educatio or for higher education</p>
     	</div>
     	<div id="card4">
     		<p class="subtitle">Other</p>
     		<p id="about-card4" class="about-c">This is all about funding the people who are requid money for educatio or for higher education</p>
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
<?php
?>
</body>
