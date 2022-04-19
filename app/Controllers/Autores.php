<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Autor;
use App\Models\Editorial;

class Autores extends Controller{
    public function cargarAutor(){
        $autor = new Autor();
        //recibir el resultado del select en un array
        $datos['misautores'] =$autor -> orderBY('codigo_autor', 'ASC') ->findAll();
            //enviando a la vista de los datos de la busqueda
            return view('autores/autor', $datos);
    }
    public function eliminarEditorial($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $autor = new Autor();
        $autor->delete($codigo);
       
        $datos['misautores']=$autor->orderBy('codigo_autor','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('autores/autor', $datos);
        
    }
    public function verFormularioNuevoAutores(){
        return view('autores/nuevoautores');
    }
    public function guardarAutores(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $autor = new Autor();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtNacionalidad = $this->request->getVar('txtNacionalidad');
        //trasladar esos valores a la base de datos
        $datos=[
            'codigo_autor'=>$txtCodigo,
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'nacionalidad'=>$txtNacionalidad
        ];
        $autor->insert($datos);

        //cargar la lista
        $datos['misautores']=$autor->orderBy('codigo_autor','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('autores/autor', $datos);
    }
    public function actualizarAutores($codigo = null){
        $autor = new Autor();

        $datos['misautores']=$autor->where('codigo_autor', $codigo)->first();
        return view('autores/editarautores',$datos);
    }
    public function modificarAutores(){
        $autor = new Autor();

        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtNacionalidad = $this->request->getVar('txtNacionalidad');

        $datos= [
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'nacionalidad'=>$txtNacionalidad
        ];
        $autor->update($txtCodigo , $datos);

        $datos['misautores'] = $autor->orderBy('codigo_autor', 'ASC')->findAll();
            return view('autores/autor', $datos);
    }

}