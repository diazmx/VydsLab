<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>VydsLab</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" type="text/css" href="css/tema.css">

  <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet"> 
	
</head>
<body>
  
  <?php 
  include 'header-nav.php'; 
  ?>
	
	<div class="row">	
		<div class="col s12 #ef5350 z-depth-3" id="fondo1"><br><br>
      <center><span id="eslogan" class="white-text"><a href="simul-home.php" class="white-text">Números Aleatorios</a>
      </span></center>
      <a href="index.php"><span id="atras" class="white-text"><center>< Menú</center></span></a>
      <br><br>
		</div>
  </div>

  <div class="row"> <!--  Resumen y Temas -->
    <div class="col l3 hide-on-med-and-down" id="columnaleft">  <!--  Columna de Temas -->     
      <?php 
        include 'simul-temas.php';
      ?>
    </div>
    <div class="col s12 m12 l9" id="columnaright">  <!--  Columna de Resumen -->
      <center><p id="subti"><a href="#" onclick="Materialize.toast('Debajo tenemos un tutorial, échale un ojo!',4000)" class="black-text">Algoritmo Lineal</a></p></center>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, libero, impedit. Et voluptatum, consequatur aperiam corrupti reprehenderit enim eveniet, quis consectetur itaque aut, dolorem vero, autem earum aspernatur dolor officia expedita obcaecati porro impedit asperiores dolores. A assumenda unde hic at placeat, voluptatem dolorem quia ipsam vero magni temporibus iste fugiat deleniti sunt, accusamus nemo corrupti reprehenderit aliquid! Neque, voluptatum iste! Veritatis quo ipsum mollitia aperiam error. Possimus quisquam mollitia facilis, porro tenetur? Quos repellat laborum voluptas, commodi aspernatur dolorem, voluptatem hic exercitationem. Magni, vel, quas. Error veritatis dignissimos, ducimus, odio quidem impedit saepe sed reprehenderit, necessitatibus nesciunt mollitia neque.</p>

      <div class="input-field col s6">
          <input type="email">
          <label>Ingrese e valor de a</label>
        </div>
      
      
      <!--recuerden de validar todos los input text -->
      <div class="col s4">
      <center><a class="waves-effect waves-light red lighten-1 btn" id="btnregistro" onclick="compro3()">Calcular</a></center></div>      

      <div class="col s12"><center>
      <input type="text" id="res3" placeholder="Resultado"></center></div>
    </div>
  </div>


  <!--Boton flotante debe ir al video -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large teal">
      <i class="large material-icons">play_arrow</i>
    </a>
  </div>
        

<br><br>

  <?php 
    include 'footer-nav.php';
  ?>
        
<script type="text/javascript">
  function compro3() {
      
      var v1 = document.getElementById('ejer31').value;
      var n = document.getElementById('n').value;
      var a = document.getElementById('a').value;
      var c = document.getElementById('c').value;
      var m = document.getElementById('m').value;

      var res = new Array();
      for (var i = 0; i < n; i++) {
        res[i] = (a*v1+33)%m;
        v1 = res[i];
        res[i] = (v1/(m-1)).toFixed(4);
      }
     document.getElementById('res3').value = res;
        
      
    }
</script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>