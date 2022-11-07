<!DOCTYPE html> <!--$_REQUEST captura las variables sin importar cual es POST o GET-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <link href="../style/estilos.css" rel="stylesheet" type="text/css">
    <link href="../index/index.php" rel="stylesheet" type="text/css">
    <link href="alta_cli.php" rel="stylesheet" type="text/css">
    <link href="modificar_cli.php" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
</head>
<body>
  <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-2 text-white bg-opacity-75">
          <div class="container-fluid">
                    <a class="navbar-brand" href="../index/index.php">Perfumev</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="../index/index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Secciones
                          </a>
                          <ul class="dropdown-menu bg-light p-2 text-white " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../clientes/clientes.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="../proveedores/proveedores.php">Proveedores</a></li>
                            <li><a class="dropdown-item" href="../articulos_disponibles/articulos_disponiles.php">Articulos disponibles</a></li>
                            <li><a class="dropdown-item" href="../pedidos_proveedor/gestion_envios.php">Pedidos del proveedor</a></li>
                            <li><a class="dropdown-item" href="../pedidos_cliente/gestion_pedidos.php">Pedidos de cliente</a></li>
                            <!--<li><a class="dropdown-item" href="#">Cuetas por cobrar</a></li>
                            <li><a class="dropdown-item" href="#">Cuentas por pagar</a></li>
                            <li><a class="dropdown-item" href="#">Pedidos de la semana</a></li>-->
                           <!-- <li><hr class="dropdown-divider"></li>-->
                          </ul>
                        </li>
                        <!--<li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>-->
                      </ul>
                      <!--<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>-->
                    </div>
          </div>
        </nav>      
        <div class="separador-1 "></div>
        <article class="articulo container border border-5">
          <div class="container-fluid barra_alta">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 justify-content-center align-items-center margen">
                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
                        <div class="col text-center text-wrap fs-4 titulo rounded-pill altura3 lh-sm">
                        <div>Articulos disponibles</div>
                        </div>
                        <div class="col">
        
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 margen">
                        <div class="col selector-partes-2 altura rounded-pill ">
                            <div class="row justify-content-center">
                                <div class="col-9">
                                    <form class="d-flex" method="GET" action="#">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                                        <button type="submit" class="btn btn-success">Buscar</button>
                                    </form>
                                </div>
                                <div class="col-2 flexible_end">
                                    <form method="GET" action="alta_articulos.php">
                                        <button type="submit" class="btn btn-primary">Alta</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          </div>
              <div class="col-sm-12 table-responsive">
                <?php 
                           $busqueda=$_GET['busqueda'];
                           $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                           $query='SELECT cod_articulo, nombre_articulo, descripcion_articulo, gramo, mililitro, importe_compra, importe_venta, punt_calidad_articulo, cantidad_minima FROM articulos_disponibles WHERE (nombre_articulo LIKE "%'.$busqueda.'%") OR (cod_articulo LIKE "%'.$busqueda.'%");';
                           $consulta=mysqli_query($conexion,$query);
                           echo "<table class='tabla table table-success table-striped table-bordered border-primary border border-5'>";
                             echo "<thead>";  
                               echo "<tr>";
                                 echo "<td>";
                                   echo "Codigo";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Nombre";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Descripcion";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Gramo";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Mililitro";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Importe/c";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Importe/v";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Calidad";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Cantidad/a";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Cantidad/m";
                                 echo "</td>";
                                 echo "<td>";
                                   echo "Modificar";
                                 echo "</td>";
                                 echo "<td class>";
                                   echo "Borrar";
                                 echo "</td>";
                               echo "</tr>";
                             echo "</thead>";
                             $contador=0;
                             while($fila = mysqli_fetch_array($consulta)){
                               echo "<tbody>";    
                                 echo "<tr>";
                                   echo "<td>";
                                     echo $fila['cod_articulo'];
                                   echo "</td>";
                                   echo "<td>";
                                     echo $fila['nombre_articulo'];
                                   echo "</td>";
                                   echo "<td>";
                                     echo $fila['descripcion_articulo'];
                                   echo "</td>";
                                   echo "<td>";
                                     echo $fila['gramo'];
                                   echo "</td>";
                                   echo "<td>";
                                     echo $fila['mililitro'];
                                   echo "</td>";
                                   echo "<td>";
                                     echo $fila['importe_compra'];
                                   echo "</td>";
                                   echo "<td>";
                                     echo $fila['importe_venta'];
                                   echo "</td>";
                                   echo "<td>";
                                   echo $fila['punt_calidad_articulo'];
                                   echo "</td>";
                                      $conexion2=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                      $query2='SELECT SUM(cantidad) FROM almacena WHERE cod_articulo = "'.$fila['cod_articulo'].'";';
                                      $consulta2=mysqli_query($conexion2,$query2); 
                                      $fila2=mysqli_fetch_array($consulta2);
                                      $sum_cantidad = $fila2[0];
                                    $conexion3=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                    $query3='SELECT cantidad_minima FROM articulos_disponibles WHERE cod_articulo = "'.$fila['cod_articulo'].'"';
                                    $consulta3=mysqli_query($conexion2,$query3); 
                                    $fila3=mysqli_fetch_array($consulta3);
                                    if ($sum_cantidad <= $fila3['cantidad_minima'])  {
                                      echo "<td class='falta'>";
                                        echo "<p>Falta stock</p>";
                                        echo "<br>";
                                        echo $sum_cantidad;
                                    } else{
                                      echo "<td class='suficiente'>";
                                        echo "Stock suficiente ";
                                        echo $sum_cantidad;
                                    }
                                   echo '</td>';
                                   echo '<td>';
                                       echo $fila['cantidad_minima']; 
                                   echo '</td>';
                                   echo "<td>";
                                       echo '<a style href="modificar_art.php?cod_articulo='.$fila['cod_articulo'].'"><button class="btn btn-warning">Modificar</button></a>';
                                   echo "</td>";
                                   echo "<td>";
                                     echo '<a href="borrar_art.php?cod_articulo='.$fila['cod_articulo'].'"><button class="btn btn-danger">Borrar</button></a>';
                                   echo "</td>";
                                 echo "</tr>";
                               echo "</tbody>";
                             }
                           echo '</table>';                                 #var_dump($fila); para llamar array
                ?>
              </div>
        </article>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>