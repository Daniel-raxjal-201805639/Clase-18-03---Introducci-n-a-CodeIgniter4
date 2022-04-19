<?php 
namespace App\Models;

use CodeIgniter\Model;

class Estado extends Model{
    protected $table      = 'estados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cogigo_estado';
        protected $allowedFields = ['cogigo_estado', 'nombre'];
}