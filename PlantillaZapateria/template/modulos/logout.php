<?php
session_start();
session_destroy();

header('localition:index.php');


echo "<br/>¡Felicidades!   Cerraste tu sesion, ahora puedes cerrar la ventana o retroceder si deseas iniciar tu sesion nuevamente...";


?>

