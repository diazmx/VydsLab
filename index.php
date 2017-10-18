<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VydsLab</title>

  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" type="text/css" href="css/index.css">

	<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet"> 
	
</head>
<body>

  <?php 
  include 'header-nav.php';
  ?>

	<!-- Presentación -->
	<div class="row"> 
		<div class="col s12 #ef5350 red lighten-2 z-depth-3" id="fondo" ><br><br><br><br><br>
      <span id="eslogan" class="white-text"><center>Practica y Fortalece tus conocimientos</center>
      	<br>
      	<center><a class="waves-effect waves-light red lighten-2 btn-large" id="btnregistro">Registrate</a></center>
      	</span>
      <br><br><br><br>
	
		</div>

  </div>
   <!-- FIN Presentación --> 	

  <!-- Tabs -->
 	<div class="row" id="menu-tabs">
    <div class="col s12">
      <ul class="tabs">
	      <li class="tab col s3"><a class="active" href="#test1" id="submenu">Electrónica Básica</a></li>
	      <li class="tab col s3"><a  href="#test2" id="submenu">Ecuaciones Diferenciales</a></li>
	      <li class="tab col s3"><a href="#test3" id="submenu">Métodos Numéricos</a></li>
	      <li class="tab col s3"><a href="#test4" id="submenu">Simulación</a></li>
      </ul>
   	</div>
  </div>
  <!-- FIN Tabs -->


  <div class="row" >
    <div class="col s12" >
      <div class="col s12 m4" id="left-menu">
        <br>
        <a href=""><center><h5 id="titulo">Electrónica Básica</h5></a>
          <br>
        	<img class="circle" src="img/electronica.jpg" width="100px" height="100px">
        </center>	
      </div>
      <div class="col s12 m8" id="limite"><br>
		    <table>
		      <tbody>
		        <tr>
		          <td><a href="" id="temas1">Código de colores de resistencias</a></td>
		          <td><a href=""  id="temas1">Ley de Ohm</a></td>
		          <td><a href="" id="temas1">Resistencias Serie/Paralelo</a></td>
		        </tr>
		        <tr>
		          <td><a href="" id="temas1">Capacitores Serie/Paralelo</a></td>
		          <td><a href="" id="temas1">Calculadora de resistencias para LED</a></td>
		          <td></td>
		        </tr>
		      </tbody>
		    </table>
      </div>
    </div>
  </div>

<div class="row">
	<center><div class="col s12 red lighten-2 center"></div></center>
</div>

<div class="row">
        	<div class="col s12"></div>
        		<div class="col s12 m4" id="left-menu">
        		<br>
        		<center>
        		<a href=""><h5 id="titulo">Ecuaciones Diferenciales</h5></a>
        		<br>
        		<img class="circle" src="img/ed.png" width="100px" height="100px">
        		</center>	
        		</div>
	   	<div class="col s12 m8" id="limite"><br>

		<table>
		        <tbody>
		          <tr>
		            <td><a href="" id="temas1">Calculadora de Ecuaciones<br>Diferenciales</a></td>
		            <td><a href=""  id="temas1"> Calculadora de Derivadas</a></td>
		            <td><a href="" id="temas1">Calculadora de Integrales</a></td>
		          </tr>
		        </tbody>
		</table>
            
        		</div>
	 </div>
         
<div class="row">
	<center><div class="col s12 red lighten-2 center"></div></center>
</div>

<div class="row">
        	<div class="col s12"></div>
        		<div class="col s12 m4" id="left-menu">
        		<br>
        		<center>
        		<a href=""><h5 id="titulo">Métodos Numéricos</h5></a>
        		<br>
        		<img class="circle" src="img/metonum.png" width="100px" height="100px">
        		</center>	
        		</div>
	   	<div class="col s12 m8" id="limite"><br>

		<table>
		        <tbody>
		          <tr>
		            <td><a href="" id="temas1">Interpolación</a></td>
		            
		          </tr>
		        </tbody>
		</table>
            
        		</div>
	 </div>

<div class="row">
	<center><div class="col s12 red lighten-2 center"></div></center>
</div>

<div class="row">
        	<div class="col s12"></div>
        		<div class="col s12 m4" id="left-menu">
        		<br>
        		<center>
        		<a href="simul-home.php" id="temas"><h5 id="titulo">Simulación</h5></a>
        		<br>
        		<img class="circle" src="img/simula.jpg" width="100px" height="100px">
        		</center>	
        		</div>
	   	<div class="col s12 m8" id="limite"><br>

		<table>
		        <tbody>
		          <tr>
		            <td><a href="sim1.php" id="temas1">Números Aleatorios</a></td>

		          </tr>
		        </tbody>
		</table>
            
        		</div>
	 </div>
<br><br>
	 
  <?php 
    include 'footer-nav.php';  //  Nav del Footer
  ?>
               
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>