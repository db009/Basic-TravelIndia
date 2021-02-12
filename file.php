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
     
          <div class="slideshow-container">

              <div class="mySlides fade">
  
                <img src="image/london.jpg" style="width:100%; height: 50%;">
  
              </div>

              <div class="mySlides fade">
  
                <img src="image/india.jpg" style="width:100%; height: 50%;">
  
              </div>

              <div class="mySlides fade">
  
                <img src="image/paris.jpg" style="width:100%; height: 50%;">
  
              </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


	        
   <script>
          var slideIndex = 0;
            showSlides();

            function showSlides() 
             {
                  var i;
                   var slides = document.getElementsByClassName("mySlides");
                   var dots = document.getElementsByClassName("dot");
                   for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";  
                                      }
                             slideIndex++;
                          if (slideIndex > slides.length) {slideIndex = 1}    
                               for (i = 0; i < dots.length; i++) {
                             dots[i].className = dots[i].className.replace(" active", "");
                                      }
                            slides[slideIndex-1].style.display = "block";  
                           dots[slideIndex-1].className += " active";
                        setTimeout(showSlides, 2000); // Change image every 2 seconds
             }
   </script>
		
		
		
		<h2 style="text-align: center; color: #1D2635;"> Book Trains, Buses & Flights!! </h2>
<center>
	  <div>
        
        <a href="TrainB.php"><button style="font-size:28px; width:20%; border-radius:5px; margin:50px;
		box-shadow:10px 10px 5px grey;">Train <i class="fa fa-subway" style="font-size:30px;color:#3383FF"></i>
            </button></a> &nbsp;
 
           <t>

        <a href="BusB.php"><button style="font-size:28px; width:20%; border-radius:5px; margin:50px;
		box-shadow:10px 10px 5px grey;">Bus <i class="fa fa-bus" style="font-size:30px;color:#FA0816"></i>
            </button></a> &nbsp;

            <t>

        <a href="Flight.php"> <button style="font-size:28px; width:20%; border-radius:5px; margin:50px;
		box-shadow:10px 10px 5px grey;">Flight <i class="fa fa-plane"style="font-size:30px;color:#900C3F"></i>
            </button></a> &nbsp;     
       
	  </div>
</center>
		

		<div class="container2">

             <a href="https://www.axisbank.com/grab-deals/wednesday-delights/offer-details/make-my-trip-flights" target="blank">
               <div class="con1">
                <p> </p>     
               </div>
             </a>           

			 <a href="https://offers.smartbuy.hdfcbank.com/offer_details/7957" target="blank">
               <div class="con2">
                      <p>    </p>                  
               </div>
             </a>
			   
              <a href="https://www.yesbank.in/personal-banking/nri-banking/yes-privileges/yes-privileges-offers?CategoryName=Travels%20And%20Holidays" target="blank">
               <div class="con3">
                   <p> </p>                 
               </div>
			  </a>
		</div>




		
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