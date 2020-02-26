<?php
    include ('FORMULARIOS/abrir_conexion.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Super House</title>
        <link rel="stylesheet" href="CSS/estilo.css">
        <link rel="shortcut icon" type="image/x-icon" href="IMG/icon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script type="text/javascript" href="js/script.js"></script>

    </head>
    <body background="IMG/IMGP/Fondof.jpg">
        <header  style="position: fixed; z-index: 2" class="encabezado animated pulse">
            <div class="contenido-header flexbox">
                <a href="index.html" ><img src="IMG/imgX/SD.png" alt="Logo de SuperHouse"></a>
                <span class="icono-menu">Ver Menu</span>
                <nav class="navegacion">
                    <ul class="show">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="contactanos.html">Contactanos</a></li>
                        <li><a href="catproductos.php">Categorias</a></li>
                        <li><a href="carrito.php">Carrito</a></li>
                        <li><a href="./FORMULARIOS/login.php">Cerrar Sesion</a></li>
                    </ul>

                </nav>
            </div>
        </header>


         <main class="main">
             |<div class="logo-imagen">
                <div class="gif">
                    <img  src="img/navidad/luces.gif" alt="Decoracion">
                    <img  src="img/navidad/luces.gif" alt="Decoracion">
                    <img  src="img/navidad/luces.gif" alt="Decoracion">
                    <img  src="img/navidad/luces.gif" alt="Decoracion">
                    <img  src="img/navidad/luces.gif" alt="Decoracion">
                    <img  src="img/navidad/luces.gif" alt="Decoracion">
                    <img  src="img/navidad/luces.gif" alt="Decoracion">


                 </div>
                 <p style="padding-bottom: 50px">Todo lo que necesitas, <i>aqui mismo.</i><a href="catproductos.php">  ¡Ordena ya!</a></p>
             </div>

              <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM abarrotes where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>

             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM navidad where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>

             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM bebidas_jugos where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM carnes where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM cuidado_personal where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM embutidos where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM hogar where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM lacteos where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM mariscos where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM mascotas where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>
             
             <?php
                    $codigoProducto=$_GET['codigoProducto'];
                    $sql="SELECT * FROM panaderia where codigoProducto='$codigoProducto'";
                    $re=mysqli_query($enlace, $sql);
                    while($f=mysqli_fetch_array($re)){
               ?>
             <div class="detalles">
               <nav class="img-detalles letra-detalles">
                   <img src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                   <h1><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></h1>
                   <p>Descripción: <?php echo $f['descripcionProducto'];?></p>
                   <p>Precio: <?php echo $f['precioProducto'];?> Lps.</p>
                   <center>
                       <a  href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                   </center>
               </nav>
             </div>
             <?php } ?>

        </main>
        <footer>
            <p> © 2019 Universidad Tecnológica de Honduras © SuperHouse</p>
        </footer>
    </body>
</html>
