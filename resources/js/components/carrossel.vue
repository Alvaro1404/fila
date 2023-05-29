<template>
    <div id="myCarousel" style="max-width:900px;" class="carousel slide  " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active img-fluid">
        <img src="./images/5047522.webp" alt="Image">
        <div class="carousel-caption">
          <h3>Banner 1</h3>
          <p>texto texto texto texto texto texto texto </p>
        </div>      
      </div>

      <div class="item img-fluid">
        <img src="./images/5047522.webp" alt="Image">
        <div class="carousel-caption">
          <h3>Banner 2</h3>
          <p>texto texto texto texto texto texto texto </p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

</template>

<!-- SCRIPT PARA CHAMAR -->

<script lang="ts">
  export default {
      name: "carrossel"
  }
 </script>

<!-- ESTILO -->

 <style>

</style>