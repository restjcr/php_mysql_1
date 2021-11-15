<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>LogIn</title>
</head>
<body>
    <?php include("components/header.php") ?>
    
    <main>
        
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <h2>Log In</h2>
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="submit" name="enviar" value="Enviar">
        </form>

    </main>
        
    <?php include("components/footer.php") ?>
        

</body>
</html>