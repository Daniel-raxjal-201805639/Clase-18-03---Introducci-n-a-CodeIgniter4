<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Prestamo;
class Prestamos extends Controller{
    public function cargarPrestamos(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $prestamo = new Prestamo();
        //recibir el resultado del select en un array
        $datos['Prestamos']=$prestamo->orderBy('numero_prestamo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('prestamos/prestamo', $datos);
    }
}