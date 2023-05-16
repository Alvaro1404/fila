<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FILA</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <body>  
   
        <h1>Agenda Fácil</h1>
        
        <div id="app">
           <Login></Login>
        </div>
        

           
            
          
        <script src="{{asset('js/app.js')}}">
           
        </script>
       <script>
import Dashboard from '../js/components/Dashboard.vue';
import Login from '../js/components/Login.vue';

 export default {
    name: "Dashboard",
    components: { Dashboard },
    name: "Login",
    components: { Login}
    
}


</script>

    </body>
</html>
