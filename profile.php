<?php 
  include_once("data.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  background-color:#F9F9F9;
}
#card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width:25%;
  float:left;
  padding:10px;
  margin-left:8%;
  margin-top: 50px;
  background-color:#DDF5F2;
}
#card form{
	cursor: pointer;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width:55%;
  float:left;
  padding:10px;
  height:600px;
   margin-left: 20px;
  margin-top: 50px;
  margin-bottom: 30px;
  background-color:#DDF5F2;
}
.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
h3{
  font-family:sans-serif;
  font-size: 20px;
  color: #415872;
}
h4{
  font-family:sans-serif;
  font-size: 15px;
  color: #2C6C64;
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top:5%;
  margin-left:15%; 
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 15px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.img_pro{
	width: 100%;
	height: 300px;
}
@media screen and (max-width:800px) {
#card{
     margin-left:5%;
  margin-top: 50px;
  width:85%; 
  }
}
@media screen and (max-width:800px) {
  .card1{
     margin-left:5%;
  margin-top: 50px;
  width:85%; 
  }
  }

</style>
</head>
<body>
<div id="card">
 <form action="in.php" method="post" enctype="multipart/form-data">
  <?php 
 		$row = getdata($_COOKIE['Email']);
 		if($row['image']!=NULL){
 		    echo '<img src= "uplode/'.$row['image'].'" class="img_pro">';
 		}
        else
        {
        	echo '<img src="user.jpg" class="img_pro">';
        }

    ?>
</form>
<form action="profile.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<input type="submit" value="submit" name="submit">
</form>
<?php 
 if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){   
                $fileExt = explode('.',$name);
          	 	$fileActualExt = strtolower(end($fileExt));
          	 	$allow = array('jpg','jpeg','png');
          	 	if(in_array($fileActualExt, $allow))
          	 	{
                 	$fileNameNew = uniqid('',true).$name;
                 	$sql = 'update userdata set image = "'.$fileNameNew.'" where Email = "'.$row['Email'].'";';
          	     	if($GLOBALS['conn']->query($sql)===TRUE){
          	           $fillDestination = 'uplode/'.$fileNameNew;
          	    	    if(move_uploaded_file($temp_name, $fillDestination)){
          	    	    	header("location:profile.php");
          	    	    }
          	    	   
          	    	} 
          	        else{
          	        	echo "erroe";
          	        }
                }
                else{
                	echo "You can not uplode this file!!";
                }

        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
<div class="card1">  
  <div class="container">
    <h3>Name:</h3><?php echo '<h4>'.$row["UserName"].'</h4>'?>
    <h3>Gmail Id:</h3><?php echo '<h4>'.$row["Email"].'</h4>'?>
    <h3>Gender:</h3><h4>Male</h4>
    <h3>Age:</h3><h4>26</h4>
     <h3>Phone No:</h3><?php echo '<h4>'.$row["Phone"].'</h4>'?>
  </div>
  	<form method="post">
  		<button class="button" name="logout"><span>Logout </span></button>
  		<button class="button"><span>LeaderBoard</span></button>
	</form>
<?php
         if(isset($_POST["logout"]))
         {
         	if(isset($_COOKIE['Email']))
         	{
              	setcookie('Email','',time()-3600);
                header("location:index.php");
            }
         }
		?>
</div>
</body>
</html>

