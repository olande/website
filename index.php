<?php
    include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		UPWARD LOOK COMPANY


	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="image/logo.png" type="image/house.jpg">
   <link rel="stylesheet" type="text/css" href="styles/style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  
   style="background-color: rgba(0, 128, 0, 0.3) " 
>




    <?php 
               if(isset($_POST['submit'])){
              $message = $_POST['message'];
              $query ="INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '', 'comment', '$message', 'unread', CURRENT_TIMESTAMP)";
              if(performQuery($query)){
                  header("location:index.php");
              }
          }
              
          ?>
          
 <nav class=" top-bar fixed"></nav>
	<div class="header">
         
				  <div class="header-right">
				  <a class="active" >Home</a>
				  	  <a href="AboutUs.php">About Us</a>
				   	  <a href="OurWork.php">Our Work</a>
		       	  <a href="ContactUs.php">Contact Us</a>
			  		   <a href="profile.php">Profile</a>
		


 </div>
  <h3 style="padding-top: 23px;">  <img src="image/logo.png" width="10%"  alt=""> UPWARD LOOK LTD</h3>
</div>  


<div class="container"  style=" width: 100%;   ">
  <div style="font-family: verdana:style:Bold; ">
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


<div class="carousel-inner">

      <div class="item active">
        <img src="image/1.png" alt="Los Angeles" style="width:100%; height: auto;">
        <div class="carousel-caption">
          <h1>Our Projects: Borana Lodge</h1>
          <p>Upward Looks Ltd Complete Projects.. </p>
        </div>
      </div>

      <div class="item">
        <img src="image/Borana.jpg" alt="Chicago" style="width:100% height: auto;" >
        <div class="carousel-caption">
          <h1> Upward Projects:Oldonyo Lodges </h1>
          <p> The Beautiful Structures Constructed by Upward Company LTD </p>
        </div>
      </div>
    
      <div class="item">
        <img src="image/sirai5.jpg" alt="New York" style="width:100%; height: auto;">
        <div class="carousel-caption">
          <h1> UPward Look Ltd Projects:Sirai Lodges</h1>
          <p></p>
        </div>
      </div>
  
    </div>
  <div>





<div style="background-color:#101820FF;color:#B1624EFF;padding:20px; margin-left: 20% ; margin-right: 20%" >
  <h2 style="color: #F95700FF">Our Experience</h2>
 <p> <h4>Upward Look  Construction Company are a well established construction company with over 10 years experience.</p>
  Specialising in the natural, beauty and Long lasting structures,
 Upward Look  Construction Company strive to form close working relationships with clients and industry
   professionals to provide a full service that reflects attention to details,
   quality and we build solutions together</p></h4>

</div> 


    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"><   
<section class="on-sale">
<div class="container">
    <div class="title-box">
  <h2> Aerial View Of The Latest Projects </h2>
    </div>
    <div class="row">
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/roof1.jpg"></a> 
        <div class="overlay-right">
                       </div>
    </div>
    <div class="product-bottom text-center">
       
        <h3>Beautiful Edges of the Roof</h3>
   
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/solio.jpg"></a>
        <div class="overlay-right">
    
        </div>
    </div>
    <div class="product-bottom text-center">
      
        <h3>Irregular Shape of the Edges roof</h3>
     
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/Tsavo.jpg" height="200px"></a>
        <div class="overlay-right">
        
        </div>
    </div>
    <div class="product-bottom text-center">
  
        <h3>100% waterproof roofs made up of reeds</h3>
        </div>
    </div>
     
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/sirai3.jpg" height="200px"></a>
        <div class="overlay-right">
 
        </div>
    </div>
    <div class="product-bottom text-center">
 
        <h3>Awesome roof with beautiful and uniform roofs</h3>
      
    </div>
    </div>    
    
    </div>
</div>  
</section>
   
 
    <div class="product-bottom text-center">
      
<section class="on-sale">
<div class="container">
    <div class="title-box">
  <h2> Inside View Of The Latest Projects </h2>
    </div>
    <div class="row">
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/inside3.jpg" height="180px"></a> 
        <div class="overlay-right">
                       </div>
    </div>
    <div class="product-bottom text-center">
    
        <h3> Nice Rolling of the reeds from inside the room</h3>
       
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/insideroof.jpg"></a>
        <div class="overlay-right">
    
        </div>
    </div>
    <div class="product-bottom text-center">
  
        <h3>Over 30 years house made of reeds roofs</h3>
    
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/roof3.jpg"></a>
        <div class="overlay-right">
             <h3></h3>
        </div>
    </div>
    <div class="product-bottom text-center">
    
        <h3>No Drops through the reed, 100% proof</h3>
  
    </div>
    </div>
     
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="image/shape1.jpg"></a>
        <div class="overlay-right">
 
        </div>
    </div>
    <div class="product-bottom text-center">
  
        <h3> Warm  Condusive environment</h3>
        
    </div>
    </div>    
    
    </div>
</div>  
</section>
    
 
<div style="background-color:rgb(140, 140, 140);color:white;padding:20px;">
  <h2>Our Work</h2>
  <h3>Most of our work here is building beautiful roofing, we  mainly utilise the reeds from the swampy areas.</p>
      <h3>Reeds are most environment friendly, very condusive shades and tourist attracting structures</p>
          <h3>Click here to see the process we undergo to make roofing</p>
  <p> </p></h3>
   <a href="OurWork.html">
       <button style="background-color: blue; border-radius: 30px; width: 100px; height: 30px; color:white;"> Our Work </button>
     </a>
    </div>


<div style="background-color:#b4b4b4;color:black;padding:10px; width: 100%; text-align: left; font-size: 15px">
  <h2 style="text-align: center;">What customers say</h2>
    <h2>Mrs Mike</h2>
 </p></h4>
    <img src="image/pic1.jpg" style="width: 100px; height: 60px; border-radius: 50%"  align="left" >
     Thanks to  Upward Look ltd, for  beautiful Houses, They make our tourist visit regularly 

       <br>Long Long live Upward look ltd</br>
  
</div> 




<div style="background-color:#b4b4b4;color:black;padding:10px; width: 100%; font-size: 15px;   text-align: right;">
  <h2>Mark Robert</h2>
 </p></h4>
    <img src="image/pic3.jpg" style="width: 100px; height: 60px; border-radius: 50%"  align="right" >
"Part of the challenge of going into a new market is committing to build a relationship with Upward Look Ltd.  It's a leap of faith to trust them with building your vision on budget, on schedule, and with attention to quality.  

Upward Look has exceeded our expectations, and we consider them one of our trusted partners in the Minneapolis market.  Novel Coworking could not have been as successful in the region had it not been for their outstanding performance with the build and with attending to the needs our staff.  They are an instrumental part of why we see Novel Coworking succeeding in Minneapolis."
</div> 

<div style="background-color:#b4b4b4;color:black;padding:10px; width: 100%; text-align: left; font-size: 15px">
  <h2>Micchael Dier</h2>
 </p></h4>
    <img src="image/pic2.jpg" style="width: 100px; height: 60px; border-radius: 50%"  align="left" >
  "Upward Look Ltd Company is one of the best general contractors we've worked with. The entire team tactfully delivered a project of exceptional quality while staying on schedule and under budget. We hope to work with Upward Look again in the near future!" 
      
</div> 

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

  <footer id="footer" class="footer-1" style="background-color: black; width: 100%; color: yellow">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title">UPWARD LOOK COMPANY<span></span></h5>

           <img src="image/logo.png"  width="100px"  alt=""> 
           <p>We Are Here For You</p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="AboutUs.html">About Us</a></div> 
</li>
<li>
<div class="thumb-content"><a href="ContactUs.html">Location</a></div> 
</li>
<li>
<div class="thumb-content"><a href="index.html">Testimonials</a></div> 
</li>
<li>
<div class="thumb-content"><a href="OurWork.html"> Our Materials</a></div> 
</li>
<li>
<div class="thumb-content"><a href="ContactUs.html">Location</a></div>  
 

</ul>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">We are Located <span></span></h5>
<p>Visit Our Offices In Nanyuki Town</p>
<ul class="thumbnail-widget">

<li>
<div class="thumb-content"><a href="#.">location</a></div> 

</li>
<li>
<div class="thumb-content"><a href="#.">Blogs</a></div> 

</li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Get Started<span></span></h5>

<a class="btn" href="#." target="_blank">Contact Us Now</a>
</div>
</div>

 <form method="post" class="form-inline my-2 my-lg-0" style="float:left">
          <input name="message"class="form-control mr-sm-2" type="text" placeholder="Email Us" required>
          <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
        </form>
</div>
</div>
</div>
   <div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center" style="padding-bottom:  1px;">
 <a href="https://twitter.com"> <img src="image/twitter1.png" width="30px" height="30px"> </a>

<a href="https://facebook.com"> <img src="image/fb.png" width="100px" height="50px"></a>
<a href="https://twitter.com"> <img src="image/ig1.png" width="60px" height="50px"></a> 
<p>Copyright Upward Look Limited © 2021. All rights reserved.</p>
  </div> 

</div>
</div>
</div>
</div>
</footer>

</body>
</html>
</body>



</html>