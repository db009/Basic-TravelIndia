<!DOCTYPE html>
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

   <hr style="color:red;">                                   </hr>
       <center>
    	<div class="form-bus">
         <h2>  <i class="fa fa-bus" style="font-size:30px;color: #FA0816"></i> &nbsp;Bus Booking </h2>
         <form class="form-inline" action="busaction.php" method="POST" autocomplete="off">
         <label for="From">From:</label>
         <input type="text" name="origin" list="browser" class="form-control" placeholder="Enter city" style=" width: 22%">
         <datalist id="browser">                        
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Ahemedabad">Ahemedabad</option>          
            <option value="Pune">Pune</option>
            <option value="Kolkata">Kolkata</option>           
            <option value="Goa">Goa</option>
	        </datalist>
			
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;


               <img src="https://images.railyatri.in/assets/busbooking/switch-bus-booking-69ba48fb95141313286ce062feec401ccd731e1c12ed9933c6ff3f39ab3d1f1b.png" alt="Switch bus booking" />

		    &nbsp;
			&nbsp;
			&nbsp;
			&nbsp;            

         <label for="To">To:</label> 
         <input name="destination" list="browser" class="form-control" placeholder="Enter City" style="width: 22%">
            <datalist id="browser">                       
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Ahemedabad">Ahemedabad</option>          
            <option value="Pune">Pune</option>
            <option value="Kolkata">Kolkata</option>           
            <option value="Goa">Goa</option>
	        </datalist>  

	        <br>
			<br>










  &nbsp;  <label for="departure" style="margin-left: -0.5%">Departure:</label>
	      <input type="date" name="date" style="margin-left: 0%; width: 22%">       
				&nbsp;	
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				
			
  &nbsp; &nbsp;       <label for="Class" style="margin-left: 2%">Class: </label>
          <input name="class" list="brow" class="form-control" placeholder="Enter a class" style="margin-left: 0%; width: 22%">
            &nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
		  <datalist id="brow"> 
		   
									<option value="AC">AC </option>
	                                <option value="NON-AC">NON-AC</option>
	                                
        </datalist>

        <br>
        <br>
                               <tr>
                                <td  valign="middle" align="left">
                                    Number of passengers:
                                </td>
                                <td   valign="middle" align="left" >
                                    
                                       <label for="class">Travellar(s):</label>
              <select type="number" name="travellers" id="no_of_pass" class="form-control valid form-control-sm">
               <!-- <option value="">No. of Passenger</option> -->
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
  </td>

                                 
                                  <br>
								  
                     
                                  <hr width="40%" color="white">
								<button class="button">Search Buses</button>
								
								

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