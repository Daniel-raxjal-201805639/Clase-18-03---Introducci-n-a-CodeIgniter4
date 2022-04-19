<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">
    <!--ICONOS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Empleados</title>
</head>
<body>
    
<div class="container">
        <h1>Empleados</h1>
        <a href="<?=base_url('ver_formulario_nuevo_empleado')?>">
        <span class="material-icons">person_add</span>
        </a>
        <table>
            <thead>
                <tr class="encabezado_tabla">
                    <th>Codigo_empleado</th>
                    <th>Nombre</th>
                    <th>Apelliodo</th>
                    <th>direccion</th>
                    <th>email</th>
                    <th>Acciónes</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                     $no_fila = 0;

                     foreach ($Empleados as $datos):
                         $no_fila = $no_fila + 1;
                             if ($no_fila % 2 == 0){
                                 echo "<tr class='fila_par'>";
                             }else{
                                 echo "<tr class='fila_impar'>";
                             }
                ?>
               <!-- <tr>-->
                    <td><?= $datos['codigo_empleado'];?></td>
                    <td><?= $datos['nombre']; ?></td>
                    <td><?= $datos['apellido']; ?></td>
                    <td><?= $datos['direccion']; ?></td>
                    <td><?= $datos['email']; ?></td>
                    <td>
                    <a href="<?=base_url('frm_modificar_empleado/'.$datos['codigo_empleado'])?>">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="<?=base_url('eliminar_empleado/'.$datos['codigo_empleado'])?>">
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