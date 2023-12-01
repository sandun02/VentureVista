<!DOCTYPE html>
<html lang="en">

<head>
<title>VentureVista | Travel Agent in Sri Lanka</title>
<style>
          .headImg {
    
            height: 500px;
            width: 100%;
            background-image: url(headpic-min.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            background-repeat: no-repeat;
   
        }  
        .td{
          text-decoration: ;
        }
        
    </style>
    
    
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
   
    <!-- Header Start -->
    <header>
		<a href="package.php" class="logo">Venture<span>Vista</span>...</a>
    <ul class="navlist">
        <li><a href="index.php" >Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="service.php">Service</a></li>
			<li><a href="package.php">Packages</a></li>
            <li><a href="destination.php">Destination</a></li>
            <li><a href="Booking.php">Booking</a></li>
			<li><a href="contact.php">Contact</a></li>
    </ul>
	</header>
    
    <!-- Header End -->
    <section class="headImg">
    <div class="main-text "> 
        <div class="main-text logo">
            <h2>~ BOOKING ~ </h2>
            </div>   
        <h2>Holiday & Trips 2023 <br>
            Sri Lanka, Maldives, Japan are now accepting all international travellers</h2>
    </div>

    </section>


<div class="box">
<h2 style="text-align:center;">- Book A Tour -</h2>
</div>
<section class="Booking">


<div class="contact-form">

<div class="box">
<div class="td">
<h2 style="text-align:center;"><span> Sign Up Now </span></h2>
<p><span class="error">* required field</span></p>



<form name="appointment_form" action="insertDetails.php" method="post" onsubmit="return validateform(appointment_form)">

<table style="border-spacing: 0px;width : 100%;">
  <tr>
    <td style="width : 40%;">
  Name: </td><td style="width : 60%;"><input type="text" name="fullName" placeholder="Name with initials" required>
  </td>
</tr>
<tr>
    <td>
  E-mail: </td><td> <input type="text" name="email" placeholder="myname@example.com" required>
  </td>
</tr>

  <tr>
    <td>
  Mobile: </td><td> <input type="text" name="phone" placeholder="XXXXXXXXXX" required>
  </td>
</tr>

  <tr>
    <td>
  Nationality: </td><td> <input type="text" name="nationality" required placeholder="Sri Lankan" required>
  
  </td>
</tr>

  <tr>
    <td>
  Gender: </td><td>
  <input type="radio"name="gender" id="myRadio" Value="Male">Male
	<input type="radio"name="gender" id="myRadio" Value="Female">Female
  </td>
</tr>

  <tr>
    <td>
  Arrival Date:  </td><td><input type="date" name="arrivaldate" required>
  
  </td>
</tr>

  <tr>
    <td>
  Departure Date: </td><td> <input type="date" name="departuredate" required>
  
  </td>
</tr>

  <tr>
    <td>
  Number of Travellers:  </td><td> <input type="number" name="notravellers" placeholder="Type here..." required>

  </td>
</tr>

  <tr>
    <td>

  Destination: </td><td><input type="text" name="destination" placeholder="Type here..." >

  </td>
</tr>

  <tr>
    <td>
  Comment: </td><td><textarea name="comment" rows="3" cols="5"placeholder="Type here..."></textarea>
  </td>
</tr>

  <tr>
    <td></td>
    <td>
  <input type="submit" name="submit" value="Sign Up Now" onclick="myFunction()">   </td>

	
</tr>
</table>
</form>
</div>
</div>


</section>

	
<script type="text/javascript">
			function validateform(form){
				var nic = form.nic.value;
				var phone = form.phone.value;
				var email = form.email.value;
				
				if(!(nic.length == 10)){
					alert("Please enter a valid NIC number");
					return false;
				}
				
				if(!(phone.length == 10 && phone[0]==0)){
					alert("Please enter a valid phone number");
					return false;
				}
				
				
				count = 0;
				validEmail = false;
				while(count<email.length){
					if(email[count]=="@"){
						validEmail = true;
					}
					count++;
				}
				
				if(validEmail != true){
					alert("Please enter a valid email address");
					return false;
				}else{
					return true;
				}
				
			}
			function myFunction() {
  document.getElementById("myRadio").required = true;
			}
		</script>





    <!---------End Section---------->
 <section class="end">
	 
        
    <table  width = "100%" cellspacing="20"  >
        <tr >
            <th>
                <h2>Company</h2>
                <br>
                <ol>
     
                    <li>> About Us</li>
                    <li>> Contact Us</li>
                    <li>> Privacy Policy</li>
                    <li>> Terms & Condition</li>
                    <li>> Testimonial</li>
                    <li>> FAQ & Help</li>

                </ol>
                <br>
            </th>
            <th>
                <h2>Follow us</h2>
                <br>
                <div style="background-color: yellowgreen;text-align: center;">
                    <p>
                    <a href="https://twitter.com" ><img src="twitter.ico" width="30px" height="30px"></a>
                    <a href="https://www.youtube.com" ><img src="instagram.ico" width="30px" height="30px"></a>
                    <a href="https://www.facebook.com" ><img src="facebook.ico" width="30px" height="30px"></a>
                    <a href="https://www.linkedin.com" ><img src="linkedin.ico" width="30px" height="30px"></a>
                    </p>    
                </div> 
                <br>
                    <ol>
     
                        <li>Location -Colombo,Sri Lanka </li>
                        <li>Tel - +011 345 3456 </li>
                        <li>Mail - VentureVista@gmail.com</li>
      
                    </ol>
                    <br>
            
            </th>
         
                
         
            <th><h2 style ="text-align: center">
                Visit Us
            </h2>
            <div style="margin-top: 20px; text-align: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31681.51310402643!2d79.8933575684032!3d6.986988576961197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597c8dde7e47%3A0x341e7e820c46d3ed!2sUniversity%20of%20Kelaniya!5e0!3m2!1sen!2slk!4v1678526907201!5m2!1sen!2slk" width="60%" height="75%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br>
    </th>
    <th>  
        <h2>OUR SERVICES</h2>
        
        <ol>

            <li>> Destination</li>
            <li>> Guides</li>
            <li>> Packages</li>
            <li>> Services</li>
            <li>> Testimonial</li>
            <li>> Blog</li>

        </ol>
      <a href="Booking.php" class="btn">BOOK NOW</a>

    </th>
    <th>
        <div class="top">
            <a href="#"><i class='bx bx-up-arrow-alt' >UP</i></a>
        </div>
    </th>
    

        </tr>
    </table>
    


</section>
    

    
    <script src="js/main.js"></script>
</body>

</html>