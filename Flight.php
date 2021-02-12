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
             <img src="image/logo.png" style="float:left;width:750px;height:180px;"/>
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

   <hr style="color:red;"> 
   </hr>
       <center>
    	<div class="form-flight">
         <h2><i class="fa fa-plane"style="font-size:30px;color: #900C3F"></i> &nbsp;Flight Booking </h2>
         <form class="form-inline" action="Flightaction.php" method="POST">
         <label for="From">From:</label>
         <input type="text" name="Origin" list="browser" class="form-control" placeholder="Enter City" style=" width: 22%">
         <datalist id="browser">                        
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="New York">New York</option>          
            <option value="London">London</option>
            <option value="Sydney">Sydney</option>           
            <option value="Dubai">Dubai</option>
			<option value="Singapore">Singapore</option>
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
         <input type="text" name="Destination" list="browser" class="form-control" placeholder="Enter City" style="width: 22%">
            <datalist id="browser">                       
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="New York">New York</option>          
            <option value="London">London</option>
            <option value="Sydney">Sydney</option>           
            <option value="Dubai">Dubai</option>
			<option value="Singapore">Singapore</option>
	        </datalist>  
           
	        <br>
			<br>
         
   &nbsp; <label for="departure" style="margin-left: -0.5%"> Departure:</label>
	      <input type="date" name="Ddate" value="DD/MM/YYYY" style="margin-left: 0%; width: 22%">       
            &nbsp;	
            &nbsp;
            &nbsp;   
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			   
   &nbsp; <label for="arrival" style="margin-left: -1%"> Return:</label>
	      <input type="date" name="Rdate" value="dd/mm/yyyy" style="margin-left: 0%; width: 22%">       
            &nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			
            
            		
			
		
	    <br>
		<br>
          <label for="Class" >Class: </label>		
          <input type="text" name="Class" list="brow" class="form-control" placeholder="Enter Class" style="margin-left: 0%; width: 22%">
           <datalist id="brow">                        
            <option value="First">First</option>
            <option value="Business">Business</option>
			<option value="Premium Economy">Premium Economy</option>
            <option value="Economy">Economy</option> 
 
        </datalist>
        <br>
        <br>
                               <tr>
                                <td  valign="middle" align="left">
                                    Number of passengers:
                                </td>
                                <td   valign="middle" align="left">
                                    Adults (above 12):-
                                    <select type="number" required="required" class="" id="enq_traveller_adult" name="traveller_adult">
									<option value="0">--select--</option>
									 	
										<option value="1">1</option>
									 	
										<option value="2">2</option>
									 	
										<option value="3">3</option>
									 	
										<option value="4">4</option>
									 	
										<option value="5">5</option>
									 	
										<option value="6">6</option>
									 	
										<option value="7">7</option>
									 	
										<option value="8">8</option>
									 	
										<option value="9">9</option>
									 	
										<option value="10">10</option>
									 	
										<option value="11">11</option>
									 	
										<option value="12">12</option>
									 	
										<option value="13">13</option>
									 	
										<option value="14">14</option>
									 	
										<option value="15">15</option>
									 	
										<option value="16">16</option>
									 	
										<option value="17">17</option>
									 	
										<option value="18">18</option>
									 	
										<option value="19">19</option>
									 	
										<option value="20">20</option>
										
									</select>
                                </td>
                                <td   valign="middle" align="left">
                                    Childrens (2-12):-
                                   <select type="number" required="required" class="" id="enq_traveller_child" name="traveller_childA">
										<option value="0">--select--</option>
										 	
										<option value="1">1</option>
									 	
										<option value="2">2</option>
									 	
										<option value="3">3</option>
									 	
										<option value="4">4</option>
									 	
										<option value="5">5</option>
									 	
										<option value="6">6</option>
									 	
										<option value="7">7</option>
									 	
										<option value="8">8</option>
									 	
										<option value="9">9</option>
									 	
										<option value="10">10</option>
									 	
										<option value="11">11</option>
									 	
										<option value="12">12</option>
									 	
										<option value="13">13</option>
									 	
										<option value="14">14</option>

										<option value="15">15</option>
									 	
										<option value="16">16</option>
									 	
										<option value="17">17</option>
									 	
										<option value="18">18</option>
									 	
										<option value="19">19</option>
									 	
										<option value="20">20</option>
										

									</select>
                                </td>
                                 
								<td   valign="middle" align="left">
                                    Infants (Below 2):-
                                   <select type="number" required="required" class="" id="enq_traveller_child" name="traveller_childB">
										<option value="0">--select--</option>
										 	
										<option value="1">1</option>
									 	
										<option value="2">2</option>
									</select>	
								</td>	
								
                                  <br>
								  
                     
                                   <hr width="40%" color="white">
								<button type="search" class="button">Search Flights</button>
								
								

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