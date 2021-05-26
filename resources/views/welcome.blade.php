

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Honest Bakers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: rgb(5, 174, 180);">

<div class="container">
<div class="row">
        <div class="card-body" >
<nav class="navbar navbar-expand-md bg-warning navbar-light">


  <a class="navbar-brand" href="#"><I><b><h1>HONEST BAKERS</h1></b></I></a>
  <!-- <h2><span class="badge badge-primary">Count Memmories....Not Calories!!! Get In Touch With Us...</span></h2>
   -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
   
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
  
  

  
              @if (Route::has('login'))
               
               @auth
            
               <li class="nav-item">
           
                   <a  button type="button" class="btn btn-dark" class="nav-link" href="{{ url('/home') }}" class="text-sm text-gray-700 underline"><B>HOME</B></button></a>
                   </li>  
                  
               @else
               <li class="nav-item">
               &nbsp;&nbsp;<a  button type="button" class="btn btn-success" class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline"><B>LOGIN</B></button></a>
                
                   </li> 
                 
                   @if (Route::has('register'))
                  

                   <li class="nav-item" >
                   
                       &nbsp;&nbsp;&nbsp;<a button type="button" class="btn btn-danger" class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"><B>REGISTER</B></button></a>
                    
                       </li> 
                       
                   @endif
               @endauth
 
           </div>
       @endif
       <div class="clearfix">
  <div class="spinner-border float-right" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
    </div>
</div>
</ul>


</nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <!-- <img height='550px'src="https://media-cdn.tripadvisor.com/media/photo-s/04/67/d4/43/chino-cafe-gallery.jpg" class="d-block w-100" alt="...">
     -->
    <img height='550px'src="https://i.pinimg.com/originals/46/cb/36/46cb36afedf1dc9e616ae4614e064fda.jpg" class="d-block w-100" alt="...">
  
   
    </div>
   
   
  </div>
</div>

<div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

