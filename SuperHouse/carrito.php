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
        <script type="text/javascript"  href="./js/scripts.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="IMG/icon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    </head>
    <body>
        <header class="encabezado animated pulse">
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

             <section class="pedir">
                    <center>
                 
                    <section class="products-list">
                       <?php
                            $sql='SELECT * FROM navidad';
                            $re=mysqli_query($enlace, $sql);
                          while($f=mysqli_fetch_array($re)){
                              
                         ?>
                            <div class="product-item" category="Navidad">
                                 <img style="width: 200px; height: 225px" src="PAGPRODUCTOS/<?php echo $f['carpetaProductos']; ?>/<?php echo $f['imagenProducto']; ?>">
                                 <span><?php echo $f['nombreProducto'];?> <?php echo $f['proveedorProducto']; ?></span>
                                 <span>Precio: <?php echo $f['precioProducto'];?> Lps. </span>
                                 <span>Cantidad: 1. </span>

                             </div>
                        <?php } ?>
                        </center>
             </section>

        </main>
        <footer>
            <p> © 2019 Universidad Tecnológica de Honduras © SuperHouse</p>
        </footer>
    </body>
</html>
