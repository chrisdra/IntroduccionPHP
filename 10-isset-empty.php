<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('christian T' , 'maria', 'christian A');
$cliente = [
    'nombre' => 'Christian',
    'saldo' => 200
];

//Empty - Revis si un arreglo esta vacio
var_dump( empty($clientes));
var_dump( empty($clientes3));
var_dump( empty($clientes2));

//Isset - Revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump( isset($clientes4));
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));

//Isset - Permite revisar si una propiedad de un arreglo asociativo, existe
var_dump( isset($cliente['nombre']));
var_dump( isset($cliente['codigo']));

include 'includes/footer.php';