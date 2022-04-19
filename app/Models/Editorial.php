<?php 
namespace App\Models;

use CodeIgniter\Model;

class Editorial extends Model{
    protected $table      = 'editoriales';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'cogigo_editorial';
        protected $allowedFields = ['cogigo_editorial', 'nombre', 'direccion', 'telefono', 'email'];
}