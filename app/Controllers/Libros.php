<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{
    public function cargarLibros(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $libro = new Libro();
        //recibir el resultado del select en un array
        $datos['Libros']=$libro->orderBy('codigo_libro','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('libros/libro', $datos);
    }
}