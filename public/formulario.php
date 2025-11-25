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
    $varNombre = $_POST['nombre'];
    $varEmail = $_POST['email'];
    $varMensaje = $_POST['mensaje'];

    echo "Muchas gracias por su mensaje sr $varNombre $varEmail $varMensaje";

    echo "<script> 
    
    
    <script>";
    ?>

    <!--<input type="button" value="Volver" onclick="<?php echo header('location:../index.html'); ?>">-->
</body>

</html>