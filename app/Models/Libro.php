<?php 
namespace App\Models;

use CodeIgniter\Model;

class Libro extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'codigo_libro';
     protected $allowedFields = ['cogigo_libro', 'cogigo_autor', 'cogigo_editorial', 'titulo', 'numero_pagina', 'tamanio', 'precio', 'estado', 'edicion'];
}