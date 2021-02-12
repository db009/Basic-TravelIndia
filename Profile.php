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
table {border-collapse: collapse;  width:70% !important}
td    {padding: 6px;}

      .button {		  
		  border: 1px solid black;
		  color: white;
		  padding: 20px;
		  text-align: center;
		  text-decoration: none;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		  width: 600px;		  
	  }

      .button1 {border-radius: 60px;}
      .button2 {border-radius: 60px;}
	  .button3 {border-radius: 60px;}
	  .button4 {border-radius: 60px;}	
	  
	  
	.button:hover, .button:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    width: 600px;
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #37ff5b;}

.show {display: block;}



.profile{
	
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

<div class="profile">

  <FORM name="requestform" id="requestform" action="javascript:;">
           
                         <img src="image/user.png" class="user" style="width: 130px; height: 130px">
                               <h3> Profile </h3>
    <table width="60%" class="table table-border" cellspacing="10" cellpadding="14" border="0" class="form_text">
                            <tbody>
            
                   
                   
  
              <tr>
			                 
                                <td width="200%" valign="middle" align="center">
								  <div class="dropdown">
                                   <button onclick="myFunction()" class="button button1" style="background-color: e60404;"> My Booking </button>           
								      <div id="myDropdown" class="dropdown-content" align="left">
							              <a href="#"> Train </a>
                                          <a href="#"> Bus </a>
                                          <a href="#"> Flight </a>									
                                    </div>
								   </div>
								</td>                              							   
                             
                            </tr>
							<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.button')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
                                                  
							
                            <tr>
                                <td width="200%" valign="middle" align="center">
                                    <button class="button button2" style="background-color: #04e628;"> Get Ticket Details </button>
                                </td>
                                
                            </tr>
                                
                            <tr>
                                <td width="200%" valign="middle" align="center">
                                  <button class="button button3" style="background-color: #a75dff;"> Cancel Ticket </button> 
                                </td>
                                
                            </tr>
                            &nbsp;
                            &nbsp;
                            							
                            <tr>
                                <td width="200%" valign="middle" align="center">
                                  <button class="button button4" style="background-color: #3e31ff;"> Failed Transaction </button>                                    
                                </td>
                                
                            </tr>

                       
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