<template>
   
   <section class="vh-100">
  <div class="container h-custom ">
    <div class="row d-flex justify-content-lg-center align-items-center justify-content-sm-center p-2">
      <div class="col-md-6 col-sm-0 text-center mt-3 ">
        
        <img src="./images/celular1.webp" class="center-block mh-50 mw-50 h-50 w-50 animated" alt="Sample image">
      </div>
      <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1 pt-3">
       
        <form class="container" style="font-size: 0.5rem;">
          
          <div class="text-center text-white">
        <h1 class="fw-bold mb-0 me-3 fs-4 mb-3">Conectar-se</h1>
      </div>
           

          <!-- Email input -->
          <div class="form-label-group mb-3">
            <input type="email" id="form3Example3" class="form-control form-control-md"
              placeholder="CPF" />
            <label class="form-label text-light pt-1" for="form3Example3">Insira seu CPF</label>
          </div>

          <!-- Password input -->
          <div class="form-label-group mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-md"
              placeholder="Insira sua senha" />
            <label class="form-label text-light pt-1" for="form3Example4">Senha</label>
          </div>

          <!-- <div class="d-inline-flex align-items-center">
           
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label small text-body" style="font-size: 0.7rem; white-space: nowrap;" for="form2Example3">
                Lembrar-se de mim
              </label>
            </div>
            <a href="#!" class="small text-body" style="font-size: 0.7rem;padding-left: 20px;white-space: nowrap;">Recuperação de senha</a>
          </div> -->


          <div class=" text-center ts-sm-2 mt-4 pt-2 text-light text-center">
            <button type="button"  class="btn btn-primary botao btn-md">Login</button>
            <p >Não tem uma conta? <a href="#!" class="link-info">Registrar</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
   </section>

 </template>
 
 
 <script lang="ts">
  export default {
      name: "Login"
  }
 </script>

<!-- ESTILO -->
 
 <style scoped>

/* section{
  background-image: url(./images/tela-de-fundo.webp);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover
} */
.botao{
  padding-left: 2.5rem; padding-right: 2.5rem; background-color: #3A9DD5; border: #eee;
}
.botao:hover {
  background-color: #0e5379;
  animation-delay: 1ms;
}
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 150px) {
.h-custom {
height: 50%;
}
}

</style>