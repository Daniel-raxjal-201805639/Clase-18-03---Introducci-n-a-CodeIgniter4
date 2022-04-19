<?php 
namespace App\Models;

use CodeIgniter\Model;

class Grado extends Model{
    protected $table      = 'grados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'codigo_grado';
     protected $allowedFields = ['codigo_grado', 'nombre'];

}