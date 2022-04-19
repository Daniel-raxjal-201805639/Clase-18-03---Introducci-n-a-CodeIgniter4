<?php 
namespace App\Models;

use CodeIgniter\Model;

class Prestamo extends Model{
    protected $table      = 'prestamos';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'numero_prestamo';
     protected $allowedFields = ['numero_prestamo', 'cogigo_libro', 'carne_alumno', 'fecha_prestamo', 'fecha_devolucion', 'codigo_empleado'];

}