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
  <div class="pp">
<?php
session_start();
$email=$_POST["email"];
$passw=$_POST["password"];
echo "<br>";
echo "<table class='pp' style='background:linear-gradient(to bottom, #cc66ff 0%, #ffff00 100%); margin:10px; padding:10px; width:99%; text-align:center'>"; 
echo "<tr><th class='pp'>Id</th><th class='pp'>First Name</th><th class='pp'>Last Name</th><th class='pp'>Email Address</th>
      <th class='pp'>Mobile No</th><th class='pp' >Address</th><th class='pp'>Gender</th><th class='pp'>Country</th><th class='pp'>Age</th></tr>";
include 'DBconfig.php';
$_SESSION['is_login']=true;
$_SESSION['e-mail']=$email;
header("location:file.php");


if (!$conn) {
	die("Could not connect ".mysqli_error());
}
else{
	//echo "Connected Successfully ";
	$query="Select * from signup where BINARY EmailAddress='$email'and BINARY Password='$passw'";
	$resultValue=mysqli_query($conn,$query);
	
	if(mysqli_num_rows($resultValue)>0)
	{
		while ($row=mysqli_fetch_assoc($resultValue)) 
		{ 
			echo "<tr>
				<td class='pp'>{$row['Id']}</td>
				<td class='pp'>{$row['FirstName']}</td>
				<td class='pp'>{$row['LastName']}</td>
				<td class='pp'>{$row['EmailAddress']}</td>
			    <td class='pp'>{$row['MobileNo']}</td>
				<td class='pp'>{$row['Address']}</td>
				<td class='pp'>{$row['Gender']}</td>
				<td class='pp'>{$row['Country']}</td>
				<td class='pp'>{$row['Age']}</td>
				</tr>";
			
		}
	}
	else{
		echo "No records";
	}
}
echo "</table>";
?>	  
  

</div>

<div class="footer">
			<a href="https://en-gb.facebook.com/" class="fa fa-facebook"></a>
			<a href="https://twitter.com/" class="fa fa-twitter"> 
			      </a>
            <a href="https://www.google.com" class="fa fa-google">
                  </a>
            <a href="https://www.instagram.com/?hl=en" class="fa fa-instagram">
                  </a> <br>
					<br>
					<p> Made By  </p> 
                  <p> Dhananjay,Yash,Sanket,Khushal,Akramul,Vikas </p>
                  <p> Created on Sublime Text, Notepad ++ </p> 
                  Copyright &copy;(2018) TRAVEL INDIA Page         
			      
		</div>
</body>		
           
</html>