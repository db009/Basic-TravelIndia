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
  
  
 <style>
  
  
  
    .chgpass{
	
	background:linear-gradient(to bottom, #cc66ff 0%, #ffff00 100%);
    width: 950px;
	border-radius: 10px;
	padding: 14px;
    margin: 14px;
    border: solid 1px;	
	box-shadow: 5px 10px 8px #888888;
}	
   
  </style>
  
		
  <center>
  <div class="chgpass">
  <FORM name="requestform" id="requestform" method="POST" action="passaction.php" autocomplete="off">
  
               <img src="image/user.png" class="user" style="width: 130px; height: 130px;">
                               <h3> Change Password </h3>
							   
  <table width="60%" class="table table-border" cellspacing="10" cellpadding="14" border="0" class="form_text">
   <tbody>
  <p>
  <label style="float: left;">Email</label>
  <input class="w3-input w3-border w3-round" name="email" type="email" placeholder="Enter Email"></p>
  <p>
  <label style="float: left;">Old password</label>
  <input class="w3-input w3-border w3-round" name="passw" type="password" placeholder="Enter Old Password"></p>
  <p>
  <label style="float: left;">New password</label>
  <input class="w3-input w3-border w3-round" name="newpass" type="password" placeholder="Enter New Password"></p>
  
  <p>
  <label style="float: left;">Confirm password</label>
  <input class="w3-input w3-border w3-round" name="confirm" type="password" placeholder="Enter Confirm Password"></p>
  
  <p>
    <button class="button" style="background-color: #48acff; width:150px; height:auto; border-radius: 9px; "> Submit </button>  
  </p>
  
  </tbody>
  </table>
  </form>
  
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
                  <p> Created on Sublime Text, Notepad ++ </p> 
                  Copyright &copy;(2018) TRAVEL INDIA Page         
			      
		</div>
		
		
		</body>
              
</html>