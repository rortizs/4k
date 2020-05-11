<?php
session_start();
session_destroy();

header('localition:index.php');

echo "<br/>¡Felicidades!   Cerraste tu sesion, ahora puedes cerrar la pestaña o el navegador";
