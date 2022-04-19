<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Grado;
class Grados extends Controller{
    public function cargarGrados(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $grado = new Grado();
        //recibir el resultado del select en un array
        $datos['Grados']=$grado->orderBy('codigo_grado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('grados/grado', $datos);
    }
}