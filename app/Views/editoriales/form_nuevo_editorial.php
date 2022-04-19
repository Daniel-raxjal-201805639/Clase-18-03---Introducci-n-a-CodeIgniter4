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
    <h1>Nuevo Editoriales</h1>
    <form action="<?=base_url('nuevo_editoriales')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Código">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        <br>
        <label for="txtDireccion">Dirección:</label>
        <input type="text" name="txtDireccion" placeholder="Ingrese Dirección">
        <br>
        <label for="txtTelefono">Telefono:</label>
        <input type="text" name="txtTelefono" placeholder="Ingrese Telefono">
        <br>
        <label for="txtEmail">Correo Electrónico:</label>
        <input type="text" name="txtEmail" placeholder="Ingrese Correo Electrónico">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>