<?php 
namespace App\Models;

use CodeIgniter\Model;

class Autor extends Model{
    protected $table      = 'autores';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'codigo_autor';
        //campos permitidos de la base de datos
        protected $allowedFields = ['codigo_autor','apellido','nombre','nacionalidad'];
}