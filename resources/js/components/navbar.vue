<!-- Template -->
<template>
   
   <nav class="navbar navbar-inverse container-fluid ">
  <!-- <div class="container-fluid"> -->
    <div class="navbar-header container">
     <!-- <div class="row d-flex justify-content-lg-center align-items-center justify-content-sm-center p-2"> -->
      <div class="col-md-2 col-sm-0 text-center mt-3">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        
        <div> <h4 class="AFlogo" href=""><i data-feather="check-circle"></i> <br> Agenda Fácil</h4></div>
        <!-- <img src="./images/logo.webp" class="img-fluid col-lg-12 col-xs-0  hover-shadow" alt=""> -->
     
       <!-- </div> -->
    </div>
    </div>
    <div class="collapse navbar-collapse container pt-2" id="myNavbar">
      <ul class="nav navbar-nav ">
        <li><a style="padding-top: 20px;" href="">Home</a></li>
        <li><a style="padding-top: 20px;" href="#">Marcações</a></li>
        <li><a style="padding-top: 20px;" href="#">Perfil</a></li>
        <li><a style="padding-top: 20px;" href="#">Suporte</a></li>
      </ul>
    
    <!-- </div> -->
  </div>
</nav>



  

</template>
<!-- script -->
<script lang="ts">
export default {
      name: "navbar"
  }
</script>


<!-- estilo -->
<style>

 .AFlogo {
  font-size: 1.5rem;
  color: white;
 }
 .AFlogo:hover {
  color: gray;
  cursor: pointer;  
 }

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