<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estudiante;
class Estudiantes extends Controller{
    public function cargarEstudiantes(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $estudiante = new Estudiante();
        //recibir el resultado del select en un array
        $datos['Estudiantes']=$estudiante->orderBy('carne_alumno','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('estudiantes/estudiante', $datos);
    }
}