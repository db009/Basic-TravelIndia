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
  color: white;
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
  <hr style="color:red;">                                   </hr>


       <center>
       <div class="form-bus">
      &nbsp;<h2>Debit Card</h2>
   <br>
         <form class="form-inline" action="busaction.php" method="POST" autocomplete="off">
         
         <input type="number" name="cardno" list="browser" class="w3-input w3-border w3-round" placeholder=" Enter Card Number" style=" width: 300px">
    	
        <br>
               
         <input type="text" name="name" list="browser" class="w3-input w3-border w3-round" placeholder=" Enter Card Holders Name" style=" width: 300px"> 
    	

      

          <br>
		  <td   valign="right" align="right" >
                                    
                        <select type="number" name="month"  class="form-control valid form-control-sm" style=" width:7.5%;height:5%;>
               <!-- <option value="">No. of Passenger</option> -->
               <option  value="">MM</option>
<option value="1">01</option>
<option   value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option  value="5">05</option>
<option  value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option  value="12">12</option>
</select>
  </td>

   
      <td   valign="right" align="right" >
                                    
    <select type="number" name="year" class="form-control valid form-control-sm" style=" width:9%;height:5%;>
    <!-- <option value="">No. of Passenger</option> -->
    <option  value="">YYYY</option>
        <option  value="2018">2018</option>
        <option  value="2019">2019</option>
        <option  value="2020">2020</option>
        <option  value="2021">2021</option>
        <option  value="2022">2022</option>
        <option  value="2023">2023</option>
        <option  value="2024">2024</option>
        <option  value="2025">2025</option>
        <option  value="2026">2026</option>
        <option  value="2027">2027</option>
        <option  value="2028">2028</option>
        <option  value="2029">2029</option>
        <option  value="2030">2030</option>
        <option  value="2031">2031</option>
        <option  value="2032">2032</option>
        <option  value="2033">2033</option>
        <option  value="2034">2034</option>
    </select>
      </td>

		



<input type="text" name="origin" list="browser" class="form-control" placeholder=" CVV" style=" width: 15.5%;height:5%;">
<br>
		
	<br>
                               <hr style="color:white;" width="40%"> </hr>
                     <button type="button" class="button" style="width:100px;color:white">Pay</button></div>
								
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