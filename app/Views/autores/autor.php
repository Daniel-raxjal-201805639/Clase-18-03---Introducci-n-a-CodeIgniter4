<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">
    <!--ICONOS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Autores</title>
</head>
<body>
    <div class="container">
        <h1>Autores</h1>
        <a href="<?= base_url('Nuevoautor') ?>">
            <span class="material-icons">person_add</span>
        </a>
        <table>
            <thead>
                <tr class="encabezado_tabla">
                    <th>Codigo_autor</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Nacionalidad</th>
                    <th>Acciónes</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                     $no_fila = 0;

                     foreach ($misautores as $datos):
                         $no_fila = $no_fila + 1;
                             if ($no_fila % 2 == 0){
                                 echo "<tr class='fila_par'>";
                             }else{
                                 echo "<tr class='fila_impar'>";
                             }
                ?>
               <!-- <tr>-->
                    <td><?= $datos['codigo_autor'];?></td>
                    <td><?= $datos['apellido']; ?></td>
                    <td><?= $datos['nombre']; ?></td>
                    <td><?= $datos['nacionalidad']; ?></td>
                    <td>
                        <a href="<?= base_url('Modificar_autor/'.$datos['codigo_autor']) ?>">
                        <span class="material-icons">edit</span>Actualizar
                        </a>
                        <a href="<?= base_url('Eliminar/'.$datos['codigo_autor']) ?>">
                        <span class="material-icons">delete</span>Eliminar
                        </a>
                    </td>
                    
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>


</body>
</html>