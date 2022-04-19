<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('ver_autores', 'Autores::cargarAutor');
$routes->get('Eliminar/(:num)', 'Autores::eliminarEditorial/$1');
$routes->get('Nuevoautor', 'Autores::verFormularioNuevoAutores');
$routes->get('Guarda_autores', 'Autores::guardarAutores');
$routes->get('Modificar_autor/(:num)', 'Autores::actualizarAutores/$1');
$routes->get('Aguardar_autores', 'Autores::modificarAutores');

$routes->get('ver_empleados', 'Empleados::cargarEmpleados');
$routes->get('eliminar_empleado/(:num)', 'Empleados::eliminarEmpleado/$1');
//GUARDAR EMPLEADO
$routes->get('ver_formulario_nuevo_empleado','Empleados::verFormularioNuevoEmpleado');
$routes->get('guardarEmpleado','Empleados::guardarEmpleados');
//MODIFICAR EMPLEADO
$routes->get('frm_modificar_empleado/(:num)','Empleados::frmModificarEmpleado/$1');
$routes->get('modificarEmpleado','Empleados::ModificarEmpleado');

$routes->get('ver_editoriales', 'Editoriales::cargarEditoriales');
$routes->get('ver_formulario_editoriales', 'Editoriales::verFormularioNuevoEditorial');
$routes->get('nuevo_editoriales', 'Editoriales::guardarEditoriales');
$routes->get('elmiminar_editorial/(:num)', 'Editoriales::eliminarEditorial/$1');
$routes->get('modificar_editorial', 'Editoriales::frmModificarEditorial');
$routes->get('editar_editorial', 'Editoriales::modificarEditorial(){');

$routes->get('ver_estado', 'Estados::cargarEstados');

$routes->get('ver_libros', 'Libros::cargarLibros');

$routes->get('ver_prestamos', 'Prestamos::cargarPrestamos');

$routes->get('ver_estudiantes', 'Estudiantes::cargarEstudiantes');

$routes->get('ver_grado', 'Grados::cargarGrados');