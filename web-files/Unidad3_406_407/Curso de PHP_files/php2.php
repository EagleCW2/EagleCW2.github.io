<html>
<head>
	<title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de constantes en php</H1>
    <?php
        //Definimos primero la constante 
        define ("COLOR_ROJO"," #FF0000"); 
        //Y ahora escribimos en pantalla su resultado 
        echo COLOR_ROJO; 
        //Hay que destacar que el signo de $ no hace falta ponerlo 
        //Existe otra función que nos permite averiguar el valor de la 
        constante 
        echo constant (" C0L0R_R0JO") ; 
    ?>
</body>
</html>