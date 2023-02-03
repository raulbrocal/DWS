<?php
require("../Negocio/usuarioReglasNegocio.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioBL = new UsuarioReglasNegocio();
    $perfil =  $usuarioBL->verificar($_POST['usuario'], $_POST['clave']);
    // TODO si es una contraseña menor de 8 caracteres, no te deja acceder.
    if (strlen($_POST['clave']) >= 8) {

        if ($perfil === "administrador") {
            session_start(); //inicia o reinicia una sesión
            $_SESSION['usuario'] = $_POST['usuario'];
            header("Location: listaTorneosVistaAdministrador.php");
        } elseif ($perfil === "jugador") {
            session_start(); //inicia o reinicia una sesión
            $_SESSION['usuario'] = $_POST['usuario'];
            header("Location: listaTorneosVistaJugador.php");
        } else {
            $error = true;
        }
    } else {
        $requerimientoClave = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/loginVista.css">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario"> Usuario: </label>
        <input id="usuario" name="usuario" type="text">
        <label for="usuario"> Contraseña: </label>
        <input id="clave" name="clave" type="password">
        <button>Iniciar sesión</button>
    </form>

</body>

</html>

<?php
if (isset($error)) {
    print("<div> No tienes acceso </div>");
} elseif (isset($requerimientoClave)) {
    print("<div> La contraseña debe tener 8 o más carácteres. </div>");
}
