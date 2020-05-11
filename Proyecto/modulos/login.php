<?php

//echo "<br/>hola soy login en modulos";

if (isset($_POST["btnLogin"])) {

    include "global/conexion.php";

    $txtEmail    = ($_POST['txtEmail']);
    $txtPassword = ($_POST['txtPassword']);

    $sentenciaSQL = $pdo->prepare("SELECT * FROM usuario
        WHERE Email=:Email
        AND contra=:contra");

    $sentenciaSQL->bindParam("Email", $txtEmail, PDO::PARAM_STR);
    $sentenciaSQL->bindParam("contra", $txtPassword, PDO::PARAM_STR);
    $sentenciaSQL->execute();

    $registro = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    print_r($registro);

    $numeroRegistros = $sentenciaSQL->rowCount();

    if ($numeroRegistros >= 1) {

        session_start();
        $_SESSION['usuario'] = $registro;

        //echo "<br/>Bienvenido...";
        header('Location:perfil.php');
    } else {
        echo '<script>
                alert ("No Hay Registros");
                window.history.go(-1);
                </script>';
        exit;
    }
}
