<!-- ## Snack 3

Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>

<h2>Snack 3</h2>

<?php

    // imposto una funzione con dei parametri da assegnare
    function randomArray( $min, $max, $items ) {

        // imposto un array vuoto da andare a riempire con numeri random
        $arrayRandomNumbers = [];

        // imposto ciclo while in cui fino a quando la lunghezza dell array
        // è inferiore a 15, deve continuare a ciclare
        while (count($arrayRandomNumbers) < $items) {
            // creo variabile per prendere numero random con rand
            $num = rand($min, $max);
            // creo condizione if se il numero random non è contenuto
            // nell array, allora viene pushato
            if (!in_array($num, $arrayRandomNumbers)) {
            $arrayRandomNumbers[] = $num;
            }
        }

        // uso var dump per mettere a schermo le info dell array
        var_dump($arrayRandomNumbers);

        // imposto ciclo for per mettere a schermo la lista dei numeri random
        // che sono contenuti nell array di 15 numeri random
        for ($i = 0; $i < count($arrayRandomNumbers); $i++) {
            echo "<p>" . "$arrayRandomNumbers[$i]" . "</p>";
        }

        // return finale della funzione, mi restituisce l'array pieno
        return $arrayRandomNumbers;
    }

    // utilizzo la funzione impostando i parametri
    // numero random min 1 e max 100, 15 che è la lunghezza dell array
    randomArray(1, 100, 15); 

?>

</body>
</html>