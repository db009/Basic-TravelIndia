<html>
       <title> TRAVEL INDIA </title> 
       <head>
	   <style>
	            .myslides
             {
	            display:none;
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
				echo  " <a href='chg password.php' class='w3-bar-item w3-button'>Change password</a>";
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


<style>

.signup{
	border: 1px solid;
    box-shadow: 5px 10px 8px #888888;
}

</style> 		 
  
  
  <center>
  <div class="signup">
    
			<form action="signupaction.php" method="POST">
	<h2><u>SignUp</u></h2>
  <br>	
  First Name:<br>
  <input type="text" name="firstname" placeholder="Enter First Name">
  <br>
  <br>
  Last Name:<br>
  <input type="text" name="lastname" placeholder="Enter Last Name">
  <br>
  <br>
  Email Address:<br>
  <input type="text" name="email" placeholder="Enter Email">
  <br>
  <br>
  Mobile Number:<br>
  <input type="number" name="mobile" placeholder="Enter Mobile Number" >
  <br>
  <br>
  Address:<br>
  <input type="address" name="address" placeholder="Enter Address">
  <br>
  <br>
  Gender:
  <input type="radio" name="gender" value="Male" > Male
  <input type="radio" name="gender" value="Female"> Female
  <input type="radio" name="gender" value="Other"> Other
  <br>
  <br>
  Select Country:
  <select name="country">
    <option value="None selected">Please select below</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="India">India</option>
	<option value="Pakistan">Pakistan</option>
	<option value="SriLanka">Sri Lanka</option>
	<option value="Other">Other</option>
	</select>
	<br>
	<br>
  Age:
  <input type="number" name="age" min="1" max="100" value="Age" placeholder="Age">
  <br>
  <br>
  Password:
  <input type="password" name="password" placeholder="Enter Password">
  <br>
  <br>
  By Signing Up you agree to our <a href="tc.php"> <em>Terms and Conditions</em>
            </button></a> 
  <br>
  <button type="Submit">Submit</button>
  <br>
</form> 
		
		Already a Member? <a href="login.php"> <em>LogIn</em>
            </button></a> 

	
		</div>
		</center>
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
                  <p> Created on Subline Text </p>
                  Copyright &copy;(2018) TRAVEL INDIA Page         
			      
		</div>
		
		
		</body>
              
</html>