<?php
   $data;
   $conn = new mysqli('localhost','root','');
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }
   else{
    	mysqli_select_db($conn,'abhi');
    }
    function geting_userdata($email,$pass)
    {
    	$sql = "select * from userdata where Email ='".$email."'";
         $result = $GLOBALS['conn']->query($sql);
         if($result->num_rows>0)
         {
         	$row = $result->fetch_assoc();
            if(!isset($_COOKIE['Email'])){
                setcookie('Email',$row['Email'], time() + 86400 );
                header("location:index.php");
            }
         }
    }
    function getdata($userdata)
    {
        $sql = "select * from userdata where Email ='".$userdata."'";
        $result = $GLOBALS['conn']->query($sql);
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            return $row;
        }
    }
?>
