<!DOCTYPE html>
<html lang="en">

<head>
    <title>VentureVista | Travel Agent in Sri Lanka</title>
    <link href="css/style.css" rel="stylesheet">
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
  </style>
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
                <h2>~ CONTACT ~ </h2>
                </div>   
            <h2>Holiday & Trips 2023 <br>
                Sri Lanka, Maldives, Japan are now accepting all international travellers</h2>
        </div>

    </section>
    <!------------------Contact section------------>
<section class="contact" id="contact">
	<div class="contact-text">
        <div class="box D">
            
		<h1>Contact US</h1>
        <img src="G5.jpg"style="width: 400px;height: 320px;">
		<h4>In case you want to contact us, please send a message. </h4>
		
		<div class="contact-text">
			<li><i>+94 771 853 448</i></li>
			<li><i>VentureVista@gmail.com</i></li>
			<li><i>691/1 ,Gamunu mawatha,Kelaniya.</i></li>
		</div>
        <br>

		<div>
			<a href="https://twitter.com" ><img src="twitter.ico" width="40px" height="40px"></a>
			<a href="https://www.youtube.com/" ><img src="instagram.ico" width="40px" height="40px"></a>
			<a href="https://www.facebook.com/" ><img src="facebook.ico" width="40px" height="40px"></a>
			<a href="https://www.linkedin.com/" ><img src="linkedin.ico" width="40px" height="40px"></a>
			</div> 

	    </div>
        </div>
        <div class="box D">
	<div class="contact-form">
        <h2>Contact For Any Query</h2>
        <br>
		<form onsubmit="emailSend(); reset(); return false;">
			<input type="text" id="name" placeholder="Your Name " name="name" required>
			<input type="email" id="email"  placeholder="Your Email " required>
			<input type="text" id="subject" placeholder="Subject" required name="subject">
			<textarea name="Message" id="message" cols="35" rows="10" placeholder="Type Your Message Here... " required></textarea>
            <br>
			<input type="submit" value="Send Message" class="submit" required>
			<input type="reset" value="Reset"class="submit">
		</form>
        
	</div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script src = "contactEmail.js"></script>


</section>



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
     
                        <li>Location:Colombo,Sri Lanka </li>
                        <li>Tel : +011 345 3456 </li>
                        <li>Mail:VentureVista@gmail.com</li>
      
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