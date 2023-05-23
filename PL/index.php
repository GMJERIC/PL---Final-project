<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="style.css">
    <title>INFINIX</title>

</head>
<body>
  <div class="header">
  <a  class="logo" href="index.php" >Infinix</a>
      <div class="header-right">
        <a class="active" href="index.html"> Home</a>
        <a href="products.php"> Products</a>
        <a href="aboutus.php"> About us</a>
        <a class="loginbanner"href="userlogin.php">Login</a>
       </div>
  </div>

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext1">1 / 5</div>
        <img src="./images/note10pro.jpg" style="width:100%">
        
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="./images/hot20.jpg" style="width:100%">
       
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="./images/note12.jpg" style="width:100%">
        
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="./images/note12pro.png" style="width:100%">
       
      </div>
      
        <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="./images/hot20front.jpg" style="width:100%">
        
      </div>
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
      
      
      
      <script>
      let slideIndex = 0;
      showSlides();
      
      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
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
        
      <center >
        <h1 class="smartphonesheader">Smartphones</h1>
      </center>
      <div class="container">
        <h3 class="title">Infinix Zero 5G 2023 </h3>
        <div class="content">
            <div class="image-overlay"></div>
            <img class="content-image"
              src="./images/zero5g.jpg" alt="Zero 5G Picture" style="width:100%">

              <div class="content-details fadeIn-bottom">
                <h3>Specs</h3> 
                             
                <p>MediaTek Dimensity 1080 5G</p>
                <p>256GB Massive Storage
                  & Up to 13GB RAM</p>
                <p>5000mAh Battery
                  & 33W Fast Charge</p>
                <p>50MP
                  Ultra Nightscape
                  Triple Camera</p>
                <p>₱11,990.00</p>
              </div>
            </a>
          </div>
        </div>
        <div class="container">
          <h3 class="title">Infinix Hot 20 </h3>
          <div class="content">
              <div class="image-overlay"></div>
              <img class="content-image"
                src="./images/hot20phone.png" alt=" Inifnix Hot20 Picture" style="width:100%">
  
                <div class="content-details fadeIn-bottom">
                  <h3>Specs</h3> 
                                
                  <p>Helio G85 Upgraded Gaming Processor</p>
                  <p>Up to 11GB RAM1+128GB ROM Next-Level Storage</p>
                  <p>5000mAh Power Monster 18W Fast Charge</p>
                  <p>50MP
                    Super Nightscape
                     Camera</p>
                    <p>₱9,499.00</p>
                </div>
              </a>
            </div>
          </div>
        <center>
          <div class="viewmorebotton" >
            <a href="products.php">
              <button class="button" >View more</button>
            </a>
          </div>
        </center>  
</body>
</html>
