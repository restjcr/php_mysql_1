<?php

    require("db/connection.php");

    $mensaje = "";

    if(!empty($_POST["nombres"]) && !empty($_POST["apellidos"]) && !empty($_POST["edad"]) && !empty($_POST["email"])
    && !empty($_POST["password"])){

         $stmt = $conexion->prepare("INSERT INTO usuarios (NOMBRES,APELLIDOS,EDAD,EMAIL,PASSWORD) VALUES
        (:nombres,:apellidos,:edad,:email,:password)");

        $stmt->bindParam(":nombres",$_POST["nombres"]);
        $stmt->bindParam(":apellidos",$_POST["apellidos"]);
        $stmt->bindParam(":edad",$_POST["edad"]);
        $stmt->bindParam(":email",$_POST["email"]);
        $stmt->bindParam(":password",$_POST["password"]);

        if ($stmt->execute()) {
            $mensaje = "Usuario registrado con exito.";
        }else{
            $mensaje = "Error al registrar usuario.";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>SignUp</title>
</head>
<body>
    <?php include('components/header.php'); ?>

    <main>

        <?php if(!empty($mensaje)): ?>
            <p> <?php echo $mensaje ?> </p>
        <?php endif; ?>


        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <h2>Sign Up</h2>
            <input type="text" name="nombres" placeholder="Nombres">
            <input type="text" name="apellidos" placeholder="Apellidos">
            <input type="number" name="edad" placeholder="Edad">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="password" name="verificar_password" placeholder="Verificar contraseña">
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </main>
    <?php include('components/footer.php'); ?>
</body>
</html>