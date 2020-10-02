<html>
    <head>
        
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>    
        <link href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css" rel="stylesheet">
       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Laboralink.com</title>

        <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display:400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
        <link href="../admin.css" rel="stylesheet" type="text/css">
        <link href="admin.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

        <link href="/registro/css/bootstrap.css" rel="stylesheet">
        <link href="/registro/css/autofaro.css" rel="stylesheet">
        <link href="/registro/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display:400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
        <script src="/registro/js/jquery.min.js"></script>

        <script type="text/javascript">
        function actualizar(){
            window.location.reload(true);
        }
        </script>
        <script type="text/javascript" src="/registro/js/sound-onclick.js"></script>

    </head>
    <body>
    <div class="tabla_admin">
     <div class="titulomenu">Pedro Simon</div>
     	<form action="products.php" method="get">

        <input type="hidden" name="desc_typep" value="">
        <input type="hidden" name="hi" value="">
        <input type="hidden" name="id_typep" value="1">

      <link href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css" rel="stylesheet">
      <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>  

      <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
      <tbody><tr class="catalogo">
   			  <td align="center" class="topcat">17.118.356-1  </td>
   			  <td class="topcat">
            Materia: Despido         	</td>
      </tr>
    </tbody></table>
      <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
      <tbody><tr class="catalogo">
  			<td align="right" class="">
  		  	      <input type="SUBMIT" name="list" value="Ver Antecedentes" class="btn btn_primario pl-5 pr-5 mb-3">
  			</td> 
        <td align="right" class="">
          <a href="products.php?c=1&amp;creaproc=1" class="btn btn_primario pl-5 pr-5 mb-3">Expediente Virtual</a>
        </td> 
        <td align="right" class="">
          <a href="products.php?c=1&amp;creaproc=2" class="btn btn_primario pl-5 pr-5 mb-3">Comunicados</a>
        </td> 
        <td align="right" class="">
          <a href="#" class="btn btn_primario pl-5 pr-5 mb-3">Calendario</a>
        </td>
  		  </tr>
      </tbody></table> 
      </form>

        <div class="container mb-5 mt-5">
        <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-4">
            <div class="step stepactual">1</div>
            <div class="stept steptactual d-none d-sm-block">Preparación Demanda</div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-4">
            <div class="step">2</div>
            <div class="stept d-none d-sm-block">Demanda enviada a firma</div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-4">
            <div class="step">3</div>
            <div class="stept d-none d-sm-block">Demanda aceptada</div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-4">
            <div class="step">4</div>
            <div class="stept d-none d-sm-block">Demanda presentada en tribunales</div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-4">
            <div class="step">5</div>
            <div class="stept d-none d-sm-block">Etapa judicial</div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-4">
            <div class="step">6</div>
            <div class="stept d-none d-sm-block">Término</div>
        </div>

        <div class="clearfix"></div>

        
        </div>
        </div>
        </div>

        
        <link href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css" rel="stylesheet">

        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

        <?php
          
          $identificador = mysqli_connect('mysql.laboralink.cl', 'laborali_root', '43dsfs*a.12', 'laborali_casos');

          if (mysqli_connect_errno()) {
              printf("Connect failed: %s\n", mysqli_connect_error());
              exit();
          } 

          $identificador->set_charset("utf8");

          $consultasql = "SELECT id, comunicado, fecha, descripcion FROM procesos WHERE id_user = 3";
          $consultasql2 = "SELECT id, comunicado, fecha, descripcion FROM procesos WHERE id_user = 1 ORDER BY fecha DESC";
          $resultadosql = mysqli_query($identificador,$consultasql);

          // if($sql = mysqli_fetch_array($resultadosql)){
          //     $id=$sql['id'];
          //     $comunicado=$sql['comunicado'];
          //     $fecha=$sql['fecha'];
          //     $descripcion=$sql['descripcion'];
          // }

          // echo "$id, $comunicado, $fecha, $descripcion";


          

        ?>
        <?php

          $return_arr = array();

          while ($row = mysqli_fetch_array($resultadosql)) {
              $row_array['id'] = $row['id'];
              $row_array['titulo'] = $row['comunicado'];
              $row_array['fecha'] = $row['fecha'];
              $row_array['mensaje'] = "Cita abogado";
              $row_array['enlace'] = "teams.ms/xjsa";

              array_push($return_arr,$row_array);
          }

          echo json_encode($return_arr);

        ?>

        <div class="container">
          <table id="table">
            <thead>
              <tr>
                <th data-field="id">ID</th>
                <th data-field="titulo">Título</th>
                <th data-field="fecha">Fecha</th>
                <th data-field="mensaje">Mensaje</th>
                <th data-field="enlace">Enlace</th>
              </tr>
            </thead>
            
          </table>

        </div>
          <script>
            var $table = $('#table')

            $(function() {

              
              
              
              var data = [
              
                {
                  'id': "ab",
                  'titulo': "",
                  'fecha': "",
                  'mensaje': "",
                  'enlace': ""
                },
                {
                  'id': "kd",
                  'titulo': "",
                  'fecha': "",
                  'mensaje': "",
                  'enlace': ""
                }
              ]

              
              $table.bootstrapTable({data: data})
            })
          </script>
    
    </body>
</html>