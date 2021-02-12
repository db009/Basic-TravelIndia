<!DOCTYPE html>
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

<center>
<div class="support">

<p><h2><em>For Website Related Queries Contact:-</em></h2>
Dhananjay Bhatkar- 9867897784 , dhananjay.bhatkar999@outlook.com<br>
Sanket Rajput- 9594409601 , sr7.techguy@yahoo.in<br>
Yash Bamb- 8200579476 , cheetahamrut@gmail.com<br>
Khushal Prajapati- 7977709540 , khushal112432@gmail.com<br>
Akramul Ali- 7045053487 , akramulali@gmail.com<br>
Vikas Gupta- 8169570432 , vikasguptavg93282@gmail.com<br>
</p>

<p><h2><em>For Train Booking Queries Contact:-</em></h2>
<h4>Customer Care Numbers:</h4> 0755-6610661 , 0755-3934141 (Language: Hindi and English)
<br>
<h4>For Railway Tickets Booked through IRCTC:</h4>
<h4>I-tickets/e-tickets:</h4> care@irctc.co.in
<br>
<h4>For Cancellation E-tickets:</h4> etickets@irctc.co.in
<br>
<h4>For Mumbai Suburban Season tickets:</h4> seasontickets@irctc.co.in
<br></p>

<p><h2><em>For Flight Booking Queries Contact:-</em></h2>
<h3>Air India-</h3>
<h4>Customer Care Number:</h4> 1800 180 1407
<br>
<h4>Call Centre Email IDs:</h4>
call.del@airindia.in<br> 
call.bom@airindia.in<br>
traveldocs@airindia.in<br>

<h3>Go Air-</h3>
<h4>Customer Care Number:</h4> 18602 100 999
<br>
<h4>Call Centre Email IDs:</h4>
feedback@goair.in<br>
media@goair.in<br>

<h3>Jet Airways-</h3>
<h4>Customer Care Number:</h4> 080 3924 3333

<h3>Vistara-</h3>
<h4>Customer Care Number:</h4> 092892 28888
<h4>Call Centre Email IDs:</h4>
custrelations@airvistara.com<br>

<h3>AirAsia-</h3>
<h4>Customer Care Number:</h4> 080 4666 2222

<h3>Emirates-</h3>
<h4>Customer Care Number:</h4> 091670 03333

<h3>SpiceJet-</h3>
<h4>Customer Care Number:</h4> 096540 03333
<h4>Call Centre Email IDs:</h4>
custrelations@spicejet.com<br>

<h3>British Airways-</h3>
<h4>Customer Care Number:</h4> 0124 412 0715

<h3>Indigo Airlines-</h3>
<h4>Customer Care Number:</h4> 0124 617 3838
<br>
<h4>Call Centre Email ID:</h4>
corporate@goindigo.in,<br>
</p>

<p><h2><em>For Bus Booking Queries Contact:-</em></h2>
Mumbai-(022) 394 12345<br>
Goa-1860-121-2102<br>
Kolkata-(033) 394 12345<br>
Delhi-(011) 394 12345<br>
Pune-(020) 394 12345<br>
Chennai-(080) 394 12345
</p>
</div>
</center>
		
		<div class="footer">
			       

			<a href="https://en-gb.facebook.com/" class="fa fa-facebook">   </a>
			<a href="https://twitter.com/" class="fa fa-twitter"> 
			      </a>
            <a href="https://www.gooogle.com" class="fa fa-google">
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