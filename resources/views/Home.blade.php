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
        <rodape></rodape>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
import Background from '../js/components/Background.vue';
import navbar from '../js/components/navbar.vue';

 export default {
    name: "Background",
    components: { Background },
    name: "navbar",
    components: { navbar }
    
}
    </script>
      <script>
      feather.replace()
    </script>
</body>
</html>