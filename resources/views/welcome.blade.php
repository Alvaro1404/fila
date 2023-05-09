<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FILA</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <body>  
    
    <template>
        
        <div id="app">
        <home/>
        </div>
    
    </template>
           
            
          
        <script src="{{asset('js/app.js')}}">
            import Home from './components/Home.vue'
            export default {
                name: 'App',
                component:{
                    Home
                }
            }
        </script>
    </body>
</html>
