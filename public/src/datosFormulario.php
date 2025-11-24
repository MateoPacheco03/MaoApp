<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <?php
    $varNombre = ['nombreUsuario'];
    $varApellido = ['apellidoUsuario'];
    $varMensaje = ['sugerenciaUsuario'];

    echo "Muchas gracias por su mensaje sr $varNombre $varApellido $varMensaje";

    echo "<script>alert('Gracias por su mensaje')</script>";
    ?>
</body>

</html>