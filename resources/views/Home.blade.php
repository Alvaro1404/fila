<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Fácil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div id="app">
        <navbar></navbar>
        <div class="container-fluid" style="margin: 0px; max-width:max-content">
            <div class="row">
            <div class="col-md-6"> 
                <carrossel ></carrossel>
            </div>

            <div class="col-md-6"   >
                <marcacao></marcacao>
            </div>
               
           </div>
        </div>
        <rodape></rodape>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
import Background from '../js/components/Background.vue';
import navbar from '../js/components/navbar.vue';
import carrossel from '../js/components/carrossel.vue';
import marcacao from '../js/components/marcacao.vue';



 export default {
    name: "Background",
    components: { Background }
    name: "navbar",
    components: { navbar }
    name: "carrossel",
    components: { carrossel }
    name: "marcacao",
    components: { marcacao }
    
}
    </script>
      <script>
      feather.replace()
    </script>
</body>
</html>