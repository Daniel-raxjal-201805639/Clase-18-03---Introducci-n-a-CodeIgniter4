<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilos_form.css')?>">
    
    <title>Document</title>
</head>
<body>
    <h1>Actualizar Empleado</h1>

    <form action="<?=base_url('Guarda_autores')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo"  >
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" >
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre">
        <br>
        <label for="txtNacionalidad">Nacionalidad:</label>
        <input type="text" name="txtNacionalidad" >
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>