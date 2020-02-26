<?php
    include ('FORMULARIOS/abrir_conexion.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">        <title>Super House</title>
        <link rel="stylesheet" href="CSS/estilo.css">
        <link rel="stylesheet" href="CSS/estilos2.css">
        <link rel="stylesheet" href="CSS/font-awesome.css">
        <link rel="shortcut icon" type="image/x-icon" href="IMG/icon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/jquery-3.1.0.min.js"></script>
	      <script src="js/script.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1-min.js"></script>
        <script src="JS/jquery.scrollUp.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(function(){
                $.scrollUp();
                scrollImg: true
            });
        </script>
    </head>
    <body>

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

             <div class="wrap">
               <div  style="position: relative; z-index:1" class="slideshow">
                  <ul class="slider">
                    <li><img  style="position: relative" src="img/imgX/slider1.jpg" alt=""></li>
                    <li><img src="img/imgX/slider2.jpg" alt=""></li>
                    <li><img src="img/imgX/slider3.jpg" alt=""></li>
                  </ul>
                  <ol class="pagination"></ol>
                  <div class="left">
                    <span class="fa fa-chevron-left"></span>
                  </div>
                  <div class="right">
                    <span class="fa fa-chevron-right"></span>
                  </div>
                </div>

                 <div class="store-wrapper">
                     <div class="category_list">
                        <a href="#" class="category_item" category="all">Todo</a>
                        <a href="#" class="category_item" category="Navidad">Navidad</a>
                        <a href="#" class="category_item" category="Abarrotes">Abarrotes</a>
                        <a href="#" class="category_item" category="Bebidas_Jugos">Bebidas y Jugos</a>
                        <a href="#" class="category_item" category="Carnes">Carnes</a>
                        <a href="#" class="category_item" category="Cuidado_Personal">Cuidado y Personal</a>
                        <a href="#" class="category_item" category="Embutidos">Embutidos</a>
                        <a href="#" class="category_item" category="Frutas_Verduras">Frutas y Verduras</a>
                        <a href="#" class="category_item" category="Hogar">Hogar</a>
                        <a href="#" class="category_item" category="Lacteos">Lacteos</a>
                        <a href="#" class="category_item" category="Mariscos">Mariscos</a>
                        <a href="#" class="category_item" category="Mascotas">Mascotas</a>
                        <a href="#" class="category_item" category="Panadería">Panadería</a>
			         </div>

                    <section class="products-list">
                        <?php
                            $sql='SELECT * FROM abarrotes';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                              
                         ?>
                            <div class="product-item" category="Abarrotes">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>

                        <?php
                            $sql='SELECT * FROM navidad';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Navidad">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>

                        <?php
                            $sql='SELECT * FROM bebidas_jugos';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Bebidas_Jugos">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>

                        <?php
                            $sql='SELECT * FROM carnes';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Carnes">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM cuidado_personal';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Cuidado_Personal">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM embutidos';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Embutidos">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM frutas_verduras';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Frutas_Verduras">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM hogar';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Hogar">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM lacteos';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Lacteos">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM mariscos';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Mariscos">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM mascotas';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Mascotas">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>
                        
                        <?php
                            $sql='SELECT * FROM panaderia';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                         ?>
                            <div class="product-item" category="Panadería">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                <a style="color:yellow; font-weight: bold;" href="detalles.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Ver Información</a>
                                <a style="color:yellow; font-weight: bold;" href="carrito.php?codigoProducto=<?php echo $f['codigoProducto'];?>">Añadir al Carrito</a>
                             </div>
                        <?php } ?>


                     </section>
                </div>
            </div>
        </main>
        <footer>
            <p> © 2019 Universidad Tecnológica de Honduras © SuperHouse</p>
        </footer>

    </body>
</html>
