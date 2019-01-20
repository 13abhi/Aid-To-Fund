<?php
include_once('data.php');
if(isset($_POST['register']))
{
	$name = $_POST['user_name'];
	$to = $_POST['email'];
	$Phone = $_POST['phone'];
	$pass = $_POST['pass'];
    $sql = "insert into userData values('".$name."','".$to."',".$Phone.",'".$pass."');";
    if(mysqli_query($conn,$sql))
    {
		$subject = "HTML email";
		$message = "
					<html>
						<head>
							<title>HTML email</title>
							<style>
   								h1{
   	 								background-color:lightblue;
   	 			 					padding:20px;
   	  								text-align:center;
   								}
   								h2{
   	  								color:lightgreen;
   	  								text-align:center;
   								}
							</style>
						</head>
						<body>
							<h1>Aid To Fund</h1>
							<h2>Thanks For registration!!!</h2>
						</body>
				</html>
			";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <aidtofund@gmail.com>' . "\r\n";
	$headers .= 'Cc: you@gmail.com' . "\r\n";
	mail($to,$subject,$message,$headers);
     echo "registered";
  }
  else{
  	echo "error ". $sql . "<br>" . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="heading" style="position: fixed;">
			<p id="name">Aid to Fund</p>
			<a href="index.php">Home</a>
            <a>About</a>
            <a>Contect</a>
            <?php 
            	if(isset($_COOKIE['Email']))
            	{
            		$row = getdata($_COOKIE['Email']);
            	}
            ?>
           	<?php 
            	if(isset($_COOKIE['Email']))
             		echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['image']).'" width = "50" height="50">';
             	else	
             	  echo '<img src ="user.jpg" width = "50" height="50">';
			?>
			<p id="user-name">
				<?php 
					if(isset($_COOKIE['Email']))
						echo $row['UserName'];
					else 
					   	echo "Username";	
				?>	
			</p>
	</div>
	<div id="container">
		<div class="sub-container">
			<h1 style="padding-top: 55px;padding-bottom: 30px;">Registration</h1>
			<form method="post" action="register.php" enctype="multiport/from-data">
				<input type="text" name="user_name" placeholder="Name"><br>
				<input type="email" name="email" placeholder="Email"><br>
				<select style="padding: 8px; outline: none;border:none;">
					<option>IN(+91)</option>
					<option>US(+1)</option>
					<option>AE(+971)</option>
					<option>HT(+509)</option>
					<option>GT(+502)</option>
					<option>DE(+49)</option>
					<option>GH(+233)</option>
				</select>
				<input type="text" name="phone" placeholder="Phone Number" style="width: 180px;"><br>
				<input type="password" name="pass" placeholder="password"><br>
				<button name="register">Register</button>
		</form>
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
</html>