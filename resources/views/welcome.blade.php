<!DOCTYPE html>
<html>
<title>BAKESCOOKIESAPP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7DYuugZdeiUv3B3LGgslln6oKZfDW6QtSTQ&usqp=CAU");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">HONEST BAKERS</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <!-- <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a> -->
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <!-- <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a> -->
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <!-- <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a> -->
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large"> <h3>Our Mission</h3></span>
   <p><i>Our Mission is to provide quality, 100 % fresh and widest range of products to all our customers. Honest Bakers aims to offer high-quality fresh and widest range of design cakes and confectionary products at a competitive price to meet the demand of the all-income classes.
 We believe in customer satisfaction.</i></p>
    <span class="w3-large">Count Memmories...Not Calories!!!</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
    @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py">
                 
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                       <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">LOGIN</a>

                        @if (Route::has('register'))
                       <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">REGISTER</a>
                        @endif
                    @endauth
               </div>
            @endif
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center w3-large">Key features of our Store</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">STANDARD ORDERS</p>
      <p>We are happy to serve you the delicious cake . You could select from multiple categories available.
Try our Standard Order Menu to find cake variants and our other products. You will feel the cake walk by hovering through our menu and experience hassle free shopping. Standard order is perfectly suites you , if you are looking for quick buy.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">WHY CHOOSE US</p>
      <p>We provide the best output and hand it over to you at an honest price. Once you taste that you will want more. Our cakes & pastries have taken us to most of our celebrity homes, news channels, newspapers, TV shows, well known schools & colleges.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">PASSION</p>
      <p>We always strives to satisfy the customer with our quality products by having a tag special.Try our customized products prepared with love and care to make your moment more special.Customized cake give you the flexibility in products range.You could try this if you are looking to express your feeling in customized way !!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">OUR VALUES</p>
      <p>Our endeavour is to be an example of constantly providing outstanding customer service in person with our premier cakes & pastries and believe that customer satisfaction is our ultimate goal.

</p>
    
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>HONEST BAKERS</h3>
      <p>Our endeavour is to be an example of constantly providing outstanding customer service in person with our premier cakes & pastries and believe that customer satisfaction is our ultimate goal. We are dedicated to provide our family of employees with a respectful and positive work environment where everyone is equal.</p>
      <h4> Client Testimonials</h4>
      <p><h6>"Look at the photos...have you ever seen a more attractive and creative cake? And trust me, it was even more tastier than it looks!It was a b'day of a friend and this time we ordered Mango cake. Cake was fresh , soft and just delicious. So far one of the best Mango cakes I have tasted in Bangalore": NAGASHETTY PATIL</h6></p>
    
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Menu</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://data.whicdn.com/images/352314441/original.jpg"alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>



<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img  height='300px'src="https://i.pinimg.com/originals/22/f1/55/22f155d5090270b2f28249384793070d.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img height='300px' src="https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/exps21928_THCA153054B10_15_5b.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
    <div class="w3-col l3 m6">
      <img  height='300px'src="https://i.pinimg.com/736x/6a/53/61/6a53610f75e8427f5571629eb4c9fef1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img height='300px' src="http://rahulsweets.com/wp-content/uploads/2018/05/Burger-HD.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img height='300px' src="https://i.pinimg.com/736x/a2/f2/90/a2f290a3bfd798ff1e63a7e6341b88ae--color-patterns-lyon.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img height='300px'src="https://images.media-allrecipes.com/userphotos/6343020.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img height='300px'  src="https://www.modernhoney.com/wp-content/uploads/2021/01/Strawberries-and-Cream-Smoothie-10-scaled.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img height='300px'src="https://dulciabakerydotcom.files.wordpress.com/2016/01/img_7280_borde-e1453782658942.png?w=640" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h1 class="w3-center">CONTACT US</h1>
  <p class="w3-center w3-large">Lets get in touch.</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
   
    <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">honest@bakers</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>




 
