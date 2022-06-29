<!-- Manual de PHP de WebEstilo.com -->
<html>
<head>
	<title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de funciones en php</H1>
    <?php
   function report_error ($archivo,$linea,$mensaje) {
       echo "Un error ocurrio en $archivo en la linea $linea
       : $mensaje";
    }
        report_error ("FILE","12","Algo esta mal!");
    
   ?>
</body>
</html>

