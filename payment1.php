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
  
  .pp{
	  border: 1px solid;
	  align : center;
  }
   
   div.ad {
    text-align: center;
	color:white;
	}
  </style>
 
<?php	
		$_SESSION['travellers']=$_GET['travellers'];
		$_SESSION['Train_id']=$_GET['Train_id'];
		$_SESSION['Train_no']=$_GET['Train_no'];
		$_SESSION['total_fare']=$_GET['total_fare'];
?>
  <center>
  <div class="form-bus">
						<center><h3><u>Welcome to BookMyTicket(PAYMENT OPTION)</u></h3></center>
				
    <form action="book1.php" method="POST">
      Select Bank:<br>
    <!-- &nbsp; &nbsp; &nbsp; &nbsp;--> 
     <select name="Bank" type="text" list="browser" class="form-control" placeholder="Select Bank" style=" width: 22%">
	  <datalist id="browser"> 
  	   <option value="SBI">State Bank of INDIA</option>
  	   <option value="BOI">Bank of INDIA</option>
  	   <option value="PNB">Punjab National Bank</option> 
	   <option value="BOB">Bank of Baroda</option>
  	   <option value="HDFC">HDFC Bank</option>
  	   <option value="ICICI">ICICI Bank</option> 
	  </datalist> 
	  </select>
  	 <br>
     <br>
      Choose Payment Method:<br>
    <!-- &nbsp; &nbsp; &nbsp; &nbsp;-->
     <select name="Payment_method" type="text" list="browser" class="form-control" placeholder="Select Payment Method" style=" width: 22%">
  	  <datalist id="browser"> 
       <option value="Net Banking">Net Banking</option>
  	   <option value="Debit Card">Debit Card</option> 
	  </datalist>
	 </select>
  	<br>
	
  	   <p> <i>Total Fare: Rs.<?php echo $_GET['total_fare'] ?></i></p>
 
    <input type="submit" value="Submit">

	</form>
  </div>
  </center>
<br>	

   
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