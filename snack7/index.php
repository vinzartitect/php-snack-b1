<!-- ## Snack 7

Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
    
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>
<body>

<h2>Snack 7</h2>

<?php

// creo un array multidimensionale contenente alunni di una classe molto particolare
$students = [
    [
        'name' => 'Riccardino',
        'lastName' => 'Fuffolo',
        'grades' => [6, 7, 6, 6, 7]
    ],
    [
        'name' => 'Anna',
        'lastName' => 'Pannocchia',
        'grades' => [7, 6, 8, 7, 6]
    ],
    [
        'name' => 'Elbert',
        'lastName' => 'Ballerina',
        'grades' => [6, 6, 5, 6, 6]
    ],
    [
        'name' => 'Ivo',
        'lastName' => 'Avido',
        'grades' => [8, 8, 7, 6, 7]
    ],
    [
        'name' => 'Salvo',
        'lastName' => 'Errori',
        'grades' => [8, 9, 7, 7, 6]
    ],
];

// uso var dump per mettere a schermo le info dell array
var_dump($students);

// metto a schermo il titolo della lista dei voti
echo "<h3>" . "Media dei voti della classe" . "</h3>";

// uso ciclo for per ciclare le info dell array students
for ( $i=0; $i < count($students); $i++ ) {

    // imposto una variabile per la media dei voti a zero
    $media = 0;

    // uso ciclo for per ciclare le info dei voti degli studenti
    for ($a=0; $a < count($students[$i]['grades']); $a++ ) {
        // calcolo della media dei voti
        $media = array_sum($students[$i]['grades']) / count($students[$i]['grades']);
    };

    // metto a schermo le info degli alunni
    echo "<p>" . $students[$i]['name'] . " " . $students[$i]['lastName'] . ", media: " . $media . "</p>";

};

?>

</body>
</html>