<template>
   
   <section class="vh-100">
  <div class="container h-custom ">
    <div class="row d-flex justify-content-lg-center align-items-center justify-content-sm-center p-2">
      <div class="col-md-6 col-sm-12 text-center mt-3 ">
        
        <img src="./images/celular1.webp" class="center-block mh-50 mw-50 h-50 w-50 " alt="Sample image">
      </div>
      <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1 pt-3">
       
        <form class="container">
          
          <div class="text-center text-light">
        <h1 class="fw-bold mb-0 me-3 fs-4 fs-sm-1">Conectar-se</h1>
      </div>
           

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-md"
              placeholder="CPF" />
            <label class="form-label text-light pt-1" for="form3Example3">Insira seu CPF</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
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


          <div class=" text-sm-center text-lg-start mt-4 pt-2 text-light">
            <button type="button"  class="btn btn-primary botao btn-md">Login</button>
            <p >Não tem uma conta? <a href="#!" class="link-info">Registrar</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="footer w-100 mh-100">
    <!-- Copyright -->
   <img style="width: 100%;max-height: 100px; object-fit:cover;" src="./images/cores.webp" alt="rodapé">
    <!-- Right -->
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

section{
  background-image: url(./images/tela-de-fundo.webp);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover
}
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
.footer {
  /* position:static;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center; */
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;  
}
</style>