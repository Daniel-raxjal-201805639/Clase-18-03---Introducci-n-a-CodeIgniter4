<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estado;
class Estados extends Controller{
    public function cargarEstados(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $estado = new Estado();
        //recibir el resultado del select en un array
        $datos['Estados']=$estado->orderBy('codigo_estado','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estados/estado', $datos);
    }
}