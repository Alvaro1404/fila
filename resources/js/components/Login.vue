<template>
   
   <section class="vh-100">
  <div class="container h-custom ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-lg-12 col-xl-6">
        <img style="height: 60%; width: 60%;" src="./images/celular1.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h1 class="fw-normal mb-0 me-3">Conectar-se</h1>
        <form>
          
         
           

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-md"
              placeholder="CPF" />
            <label class="form-label" for="form3Example3">Insira seu CPF</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-md"
              placeholder="Insira sua senha" />
            <label class="form-label" for="form3Example4">Senha</label>
          </div>

          <div class="d-lg-inline-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label small text-body" style="font-size: 0.8rem;" for="form2Example3">
                Lembrar-se de mim
              </label>
            </div>
            <a href="#!" class="small text-body" style="font-size: 0.8rem;">Recuperação de senha</a>
          </div>

          <div class=" text-center text-lg-start mt-4 pt-2">
            <button type="button"  class="btn btn-primary botao btn-md">Login</button>
            <p class="small">Não tem uma conta? <a href="#!" class="link-danger">Registrar</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="footer">
    <!-- Copyright -->
   <img style="width: 100%;max-height: 100px; object-fit:cover;" src="./images/cores.svg" alt="rodapé">
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
  background-image: url(./images/tela-amarela-gradiente.webp);
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