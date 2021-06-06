<?php include 'includes/header.php';

//While
$i = 0;

while($i < 10):
    echo $i . "<br>";

    $i++; //Incremento
endwhile;

echo "<br>";
// Do While
$i = 0;

do {
    echo $i . "<br>";

    $i++; //Incremento
} while($i < 10);

echo "<br>";
//For Loop
// for ($i = 0; $i < 1000; $i++ ) {
//     if($i % 3 === 0 && $i % 5 === 0){
//         echo $i . "- FIZZ BUZZ <br/>";
//     } else if( $i % 3 === 0) {
//         echo $i . "- Fizz <br/>";
//     } else if($i % 5 === 0) {
//         echo $i . "- Buzz <br/>";
//     }
// }

echo "<br>";
//For Each
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente) {
    echo $cliente . "<br/>";
}

$cliente = [
    'nombre' => 'Christian',
    'saldo' => 200,
    'tipo' => 'premium'
];
foreach($cliente as $key => $valor):
    echo $key . " - " . $valor . '<br/>';
endforeach;

include 'includes/footer.php';