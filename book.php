<html>
       <title> TRAVEL INDIA </title> 
       <head>
	   <style>
	            .myslides
             {
	            display:none;
             }

             .button {
  display: inline-block;
  padding: 10px 16px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #1D2635;
  border: none;
  border-radius: 9px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #1D2635}

.button:active {
  background-color: #1D2635;
  box-shadow: 0 6px #666;
  transform: translateY(4px);
}
	   </style>
	                 
	               <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">        	               
			       <link rel="stylesheet" type="text/css" href="style.css">	
				   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">           
	       	        
	   </head>
   
        <body>
		<h1> 
            <img src="image/logo.png" style="float:left;width:750px;height:180px;">
	    </h1>
		

<div class="w3-bar w3-light-grey">
    <a href="file.php" class="w3-bar-item w3-button">Home</a>
    <a href="support.php" class="w3-bar-item w3-button">Support</a>
    <a href="aboutus.php" class="w3-bar-item w3-button">About us</a>
    <?php
        session_start();	  
            if(isset($_SESSION['is_login']))
			{
				echo $_SESSION['e-mail'];
				echo "<div class='w3-dropdown-hover'>";
				echo "<button class='w3-button'>Settings</a>";
				echo "<div class='w3-dropdown-content w3-bar-block w3-card-4'>";
				echo  " <a href='Profile.php' class='w3-bar-item w3-button'>Profile</a>";
				echo  " <a href='chg password.php' class='w3-bar-item w3-button'>Change Password</a>";
				echo  " <a href='logout.php' class='w3-bar-item w3-button'>Logout</a>";
              	echo "</div>";
				echo "</div>";
			}
			else
			{
				echo "<div class='w3-dropdown-hover'>";
				echo  " <button class='w3-button'>Account</button>";
				echo   "<div class='w3-dropdown-content w3-bar-block w3-card-4'>";
				echo     "<a href='login.php' class='w3-bar-item w3-button'>LogIn</a>";
				echo     "<a href='signup.php' class='w3-bar-item w3-button'>SignUp</a>";
				echo   "</div>";
				echo "</div>";	
				
			}
		?>
</div>		

<?php
include 'DBconfig.php';

if (!$conn) {
	die("Could not connect ".mysqli_error());
}
else{
       $query="INSERT INTO booking(user,Bus_Id,Seats,Total_fare,Bank,Payment_method)VALUES('".$_SESSION['e-mail']."','".$_SESSION['Bus_id']."','".$_SESSION['travellers']."','".$_SESSION['Total_fare']."','".$_POST['Bank']."','".$_POST['Payment_method']."')";
        if(mysqli_query($conn,$query))
    	{
	    	echo "Ticket Booked..!!!";
	    }
    	else{
	    	echo "ERROR".mysqli_error($conn);
	     }
}


if (!$conn) {
	die("Could not connect ".mysqli_error());
}
else{       
            $req=$_SESSION['travellers'];
            $id = $_SESSION['Bus_id'];

            $query= "UPDATE bus SET Seats=(Seats-$req) WHERE BusId=$id";
			if(mysqli_query($conn,$query))
           	 { 
                echo 'Payment Successfull..!!';
			 }
			else{
	    	    echo "ERROR".mysqli_error($conn);
	        }
}

?>

 
		<div class="footer">
			       

			<a href="https://en-gb.facebook.com/" class="fa fa-facebook">   </a>
			<a href="https://twitter.com/" class="fa fa-twitter"> 
			      </a>
            <a href="https://www.google.com" class="fa fa-google">
                  </a>
            <a href="https://www.instagram.com/?hl=en" class="fa fa-instagram">
                  </a> <br>

                  <p> Made By  </p>
                  <p> Dhananjay,Yash,Sanket,Khushal,Akramul,Vikas </p> 
                  <p> Created on Sublime Text, Notepad ++ </p> 
                  Copyright &copy;(2018) TRAVEL INDIA Page         
			      
		</div>
		
		
		</body>
              
</html>