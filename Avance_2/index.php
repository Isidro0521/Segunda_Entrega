<?php require_once('Connection/bd_conexion.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <title>Generador de Base de Datos</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Generador de Base de Datos">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script src="JavaScript/ajaxFunctions.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/jquery.min.js"></script>

  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header>
      <div class="jumbotron">
        <div class="container">
          <h1 class="text-center">Generador de Base de Datos</h1>
          <p class="text-center">Nunca Crear Una Base de Datos Fue Tan Fácil</p>
        </div>
      </div>
      <div class="section" id="creada">
        
      </div>
    </header>

    <!-- aparecera el nombre de la base de datos-->
    <section class="section-colored texte-center">
      <div class="container" id="informacion">
        <div class="table-responsive" id="table" >
          <table class="table">
            <tr class="active">
              <td>Nombre Base de Datos</td>
              <td id="x">Nombre Tabla</td>
            </tr>
            <tr class="active">
              <td id="jaja"><input type="text" id="nombreBaseDatos" name="nombreBaseDatos" class="form-control" readonly></td>
              <td id="jaja2"><input type="text" id="NombreTabla" name="NombreTabla" class="form-control" readonly></td>
            </tr>
          </table>
        </div>
      </div><!-- //Aparecera el nombre de la base de datos -->
      <hr id="0">
      <!-- Nombre de la base de datos-->
      <div class="container" id="BD_Name" name="BD_Name">
        <form class="form-signin" name="formName" id="formName">
          <!-- Nombre de la base de datos -->
          <div class="row">
            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Nombre Base de Datos" id="name_BD" name="name_BD">
                <span class="input-group-btn" id="nBD">
                  <button type="submit" class="btn btn-info" id="btn-gBD" onclick="nameBase();">Siguiente</button>
                </span>
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <hr id="hr1">
        </form>
      </div><!-- //Nombre de la base de datos -->

      <!-- Nombre de la Tabal-->
      <div class="container" id="TD_Name" name="TD_Name">
        <form class="form-signin" name="formNameTable" id="formNameTable" >
          <!-- Nombre de Tablas -->
          <div class="row" id="name_T" name="name_T" >
            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Nombre de la Tabla" id="name_Table" name="name_Table">
                <span class="input-group-btn">
                  <button class="btn btn-info" id="btn-gTD" type="button" onclick="nameTable();">Siguiente</button>
                </span>
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
          </div>
          <hr id="hr2" >
        </form>
      </div><!-- //Nombre de la Tabla -->

      <div class="container-fluid" id="Campos">
        <!--<form class='form-signin' id='cantCampos' name='cantCampos'>-->
          <div class="table-responsive" id="table">
            <table class="table" id="jajaja">
              <!--<tr class="active">
                <td></td>
                <td><input type="text" class="form-control" id="" name=""></td>
                  <td>
                    <select class="form-control"> 
                      <option>Selecctione Tipo de Dato</option>
                      <optgroup label="Númericos">
                        <option>Auto_Increment</option>
                        <option>Int</option>
                        <option>Float</option>
                        <option>Double</option>
                      </optgroup>
                      <optgroup label="Alfanúmericos">
                        <option>Char</option>
                        <option>Varchar</option>
                        <option>String</option>
                      </optgroup>
                    </select>
                  </td>
                  <td><input type="text" class="form-control"></td>
                  <td>
                    <input type="number" name="" class="form-control">
                  </td>
                  <td><input type="checkbox" class="checkbox"></td>
              </tr>-->
            </table>
          </div>
          <div class="container">
            <div class="input-group">
              <button type="submit" id="btn-GCols" name="btn-GCols" class="btn btn-success btn-lg" onclick="Create();">Crear Tabla</button>
            </div>
          </div>
        <!--</form>-->
      </div>

      <hr id="hr3">
    
      <div class="container" id="cantidad">
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group">
              <select class="form-control" placeholder="Número de Campos" id="cantidadCol" name="cantidadCol">
                <option>Seleccione Cantidad de Campos</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
              </select>
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="cantiCol();" id="btn-cantidad">Agregar</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->      
      </div>
    </section>

    <script type="text/javascript" src="JavaScript/js_index.js"></script>
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </body>
</html>