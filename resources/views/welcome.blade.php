<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agenda Fácil</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <body>  
        
      
        <div id="app">
            <login></login>
            <rodape></rodape>
        </div>
        

           
            
          
        <script src="{{asset('js/app.js')}}">
           
        </script>
       <script>
import Background from '../js/components/Background.vue';
import Login from '../js/components/Login.vue';
import rodape from '../js/components/rodape.vue';


 export default {
    name: "Background",
    components: { Background },
    name: "Login",
    components: { Login},
    name: "rodape",
    components: { rodape}
    
}


</script>

    </body>
</html>
