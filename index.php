<?php

$conexion = mysqli_connect('localhost', 'root', '', 'discapacidad');

?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMINISTRADOR DE DATOS</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    
<style>
       body{
  zoom:54%  
}
#content{
  overflow-x: hidden;
  white-space: nowrap;
}
</style>

<link rel="stylesheet" type="text/css" href="tabla.css">

</head>

<body zoom:10%>
    <nav class="alert alert-dark">
        <a class="navbar-brand" href="./">
            <img src="https://manizales.gov.co/wp-content/uploads/2021/10/Alcaldia_Manizalesgrande_blanco-1.png" width="250" height="100" alt="">
        </a>


        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="images/usuario.png" alt="User Avatar">
            </a>
            <div class="user-menu dropdown-menu">
                <a class="nav-link" href="../index.php"><i class="fa fa-power -off"></i>Cerrar Sesión</a>
            </div>
        </div>

    </nav>
    
    <!-- Content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="text-center">
                        <img src="images/discapacidad2.jpg" style="height: 300px; width: 50%;">
                    </div>

                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->

        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">INFORMACION DE REGISTRADOS </h4>
                        </div>
                       
                                <div id="main-container">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#SOLICITUD</th><th>NUMERO DOCUMENTO</th><th>PRIMER NOMBRE</th>
                                                <th>SEGUNDO NOMBRE</th><th>PRIMER APELLIDO</th><th>SEGUNDO APELLIDO</th>
                                                <th>FECHA NACIMIENTO</th><th>EDAD</th><th>EPS</th>
                                                <th>CORREO ELECTRONICO</th><th>COMUNA</th><th>BARRIO</th> 
                                                <th>DIRECCIÓN</th><th>ESTRATO</th><th>POBLACION VICTIMA</th>
                                                <th>HISTORIA CLINICA</th><th>ACCIONES</th>
                                                <th>DIAGNOSTICO</th><th>REMISÍON</th><th>RES. REMISÍON</th>
                                            </tr>
                                         </thead>
                                                 <?php
                                                    $sql = "SELECT * from inscripcion ORDER BY id DESC";
                                                    $result = mysqli_query($conexion, $sql);
                                                    while ($mostrar = mysqli_fetch_array($result)) {
                                                 ?>
                                            <tr>
                                                <td> <span class="name"><?php echo $mostrar['id'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['numero_documento'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['primer_nombre'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['segundo_nombre'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['primer_apellido'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['primer_apellido'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['fecha_nacimiento'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['edad'] ?></span> </td> 
                                                <td> <span class="name"><?php echo $mostrar['eps'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['correo'] ?></span> </td>

                                                <td> <span class="name"><?php echo $mostrar['comuna'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['barrio'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['direccion'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['estrato'] ?></span> </td>
                                                <td> <span class="name"><?php echo $mostrar['poblacion_victima'] ?></span> </td>
                                                <td> <a href="archivos/<?php echo $mostrar['adjunto'] ?>" download="<?php echo $mostrar['adjunto'] ?>">
                                                    <i class="fa fa-cloud-download" style="font-size:48px;color:red"></i>
                                                    </a></td>
                                                <td><a href="tabla.php?id=<?php echo $mostrar["id"];?>" title="Ver detalle"><img src="images/eye.svg"></a>
                                                </td>
                                                       
                                                <td>
                                                    <a href="formulario/diagnostico.php?id=<?php echo $mostrar["id"]; ?>">
                                                        
                                                        <?php
                                                        $estado=$mostrar['estado'];

                                                                if ($mostrar['estado'] =='APROBADO'){
                                                                    echo "<button type='button'class='btn btn-outline-success'>Diagnostico $estado </button>";
                                                                }

                                                                
                                                                
                                                                if ($mostrar['estado'] =='DESAPROBADO' or $mostrar['estado'] ==''){
                                                                    echo "<button type='button'class='btn btn-outline-danger'>Diagnostico $estado </button>";
                                                                }

                                                        ?>
                                                        
                                              </a>
                                          </td>

                                          <td>

                                            <a href="formulario/remision.php?id=<?php echo $mostrar["id"]; ?>">
                                                <?php
                                                $ips = $mostrar['ips'];
                                                $mesagge="Usuario desaprobado";
                                                $estado=$mostrar['estado'];

                                                if ($mostrar['estado'] =='APROBADO' or $mostrar['ips'] == 'CONFA' or $mostrar['ips'] == 'CEDER' or $mostrar['ips'] == 'SAN ISIDRO' or $mostrar['ips'] == 'PAUSA') {
                                                    echo "<button type='button' class='btn btn-dark'> $ips </button>";
                                                }

                                                
                                                
                                                if ($mostrar['estado'] =='DESAPROBADO' or $mostrar['estado'] =='') {
                                                    echo "<a href='#' title='$mesagge'>$mesagge</a>";
                                                }

                                                if ($mostrar['ips'] == '') {
                                                    echo "<button type='button' class='btn btn-primary'>Remision</button>";

                                                }
                                                ?>
                                            </a>
                                        </td>

                                                  <td>
                                                    <a href="formulario/respuestarem.php?id=<?php echo $mostrar["id"]; ?>">
                                                        <button href="#" type="button" class="bbtn btn-outline-dark">Respuesta</button>
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                        
                                          <?php
                                              }
                                              ?>
                                    </table>
                                </div>

                                            
                                <a href="excel.php">DESCARGAR ARCHIVOS</a>
                                       
                                  
                               
                    </div> <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <footer class="footer footer-ppal">
<br><br><br><br><br>
        <div class="text-center ">
            <img src="images/manizales.jpg" alt="Logo" style="height: 130px; width: 35%;">
        </div>

    </footer>
    <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

</body>

</html>