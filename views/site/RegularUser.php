<?php
use yii\helpers\Html;
use yii\grid\GridView;
//use ../../models/Torneos;
//echo Torneos::find()->all();
require_once('../../models/obtenerTorneos.php');
session_start();
echo $_SESSION['id'];
print_r($filas[0][1]);
  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>E-Sports Superleague</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">E-Sports Superleague</a>
        </div>
       <!-- <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
  <h2>Ingresar a un torneo</h2>
    <form action="/action_page.php">
      <div class="form-group">
        <label for="sel1">Torneo:</label>
        <select class="form-control" id="sel1">
          <?php
              for($i = 0; $i<count($filas); $i++){
                
                
                  ?>
                  <option value='<?php  echo $i+1; ?>'><?php echo  $filas[$i][1]; ?></option>
                <?php
                
              }
            ?>
        </select>
      </div>
      <div class="form-group">
        <label for="pwd">Cantidad de Participantes</label>
        <input type="number" class="form-control" id="pwd" placeholder="Cantidad de Participantes" name="cantParticipantes">
      </div>
      <div class="form-group">
         <label for="pwd">Categoria</label>
         <div class="radio">
        <label><input type="radio" name="categoria">Principiante</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="categoria">Aficionado</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="categoria">Profesional</label>
      </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>