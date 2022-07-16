<html>
    <head>
        <title>UTA</title>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        </head>

    <body>
        <header>
    
        </header>
        <nav> 
            <ul>
                <li><a href="index.php?action=inicio"> Inicio</a></li>
                <li><a href="index.php?action=nosotros"> Nosotros</a></li>
                <li><a href="index.php?action=servicios"> Servicios</a></li>
                <li><a href="index.php?action=contactanos"> Contactanos</a></li>
            </ul> 
        </nav>
        <section>
        <?php
           $mvc= new MvController(); 
           $mvc -> enlacesPaginasController();
        ?>  
        </section> 
  
        <footer>
            Creditos

        </footer>
    </body>
</html>