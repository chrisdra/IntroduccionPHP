<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

if($autenticado || $admin) {
    echo "Usuario autentificado correctamente";
} else {
    echo "Usuario no autentificado, inicia sesión";
}

echo "<br>";

//If anidados...
$cliente = [
    'nombre' => 'Christian',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)){
    echo "El arreglo de cliente esta vacio";
    echo "<br>";
    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo disponible";
    } else {
        echo "no hay saldo";
    }
}

echo "<br>";

// else if
if($cliente['saldo'] > 0) {
    echo "El Cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es Premium";
} else {
    echo "No hay definido o no tiene saldo o no es premium";
}

echo "<br>";
//Switch.

$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    
    case 'JavaSript':
        echo "Genial, el lenuaje de la web!";
        break;

    case 'HTML':
        echo "Emmm...!";
        break;
    
    default:
        echo "Algun lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';