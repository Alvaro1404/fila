<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Fácil</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <home></home>
        <rodape></rodape>
    </div>
   <script src="{{asset('js/app.js')}}"> </script>
   <script>
import Background from '../js/components/Background.vue';
import Home from '../js/components/home.vue';
import rodape from '../js/components/rodape.vue';


export default {
name: "Background",
components: { Background },
name: "home",
components: { home},
name: "rodape",
components: { rodape}

}
</script>
</body>
</html>