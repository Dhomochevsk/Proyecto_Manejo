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
                <li><a href="index.php?action=nosotros"> Fiestas</a></li>
                <li><a href="index.php?action=servicios"> Ubicaciones</a></li>
                <li><a href="index.php?action=contactanos"> Gastronomia</a></li>
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