<!-- Template -->
<template>
   
   <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header container">
     <div class="row d-flex justify-content-lg-center align-items-center justify-content-sm-center p-2">
      <div class="col-md-2 col-sm-0 text-center mt-3 ">
      <a class="navbar-brand" href="#">
        
        
        <img src="./images/logo.webp" class="center-block h-50 w-50 " alt="Sample image">
     
      </a>
       </div>
    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    
    </div>
  </div>
</nav>



  

</template>
<!-- script -->
<script lang="ts">
export default {
      name: "home"
  }
</script>


<!-- estilo -->
<style>
 /* Remove the navbar's default margin-bottom and rounded borders */ 
 .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
</style>