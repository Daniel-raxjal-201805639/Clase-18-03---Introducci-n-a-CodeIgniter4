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

    <title>Prestamos</title>
</head>
<body>
    
<div class="container">
        <h1>Prestamos</h1>
        <a href="<?=base_url('ver_formulario_nuevo_empleado')?>">
        <span class="material-icons">person_add</span>
        </a>
        <table>
            <thead>
                <tr class="encabezado_tabla">
                    <th>Carne_alumno</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fecha_Nacimiento</th>
                    <th>Codigo_grado</th>
                    <th>Acciónes</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                     $no_fila = 0;

                     foreach ($Estudiantes as $datos):
                         $no_fila = $no_fila + 1;
                             if ($no_fila % 2 == 0){
                                 echo "<tr class='fila_par'>";
                             }else{
                                 echo "<tr class='fila_impar'>";
                             }
                ?>
               <!-- <tr>-->
                    <td><?= $datos['carne_alumno'];?></td>
                    <td><?= $datos['nombre']; ?></td>
                    <td><?= $datos['apellido']; ?></td>
                    <td><?= $datos['direccion']; ?></td>
                    <td><?= $datos['telefono']; ?></td>
                    <td><?= $datos['email']; ?></td>
                    <td><?= $datos['fechanacimiento']; ?></td>
                    <td><?= $datos['codigo_grado']; ?></td>
                    <td>
                    <a href="">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="">
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