<!-- ## Snack 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>

<h2>Snack 2</h2>

<!-- inserisco un form in cui mettere manualmente i valori dei 3 parametri -->
<div>
    <p>Inserisci le informazioni:</p>
    <form method="GET">
        <input type="text" name="name" placeholder="nome">
        <input type="text" name="mail" placeholder="mail">
        <input type="text" name="age" placeholder="età">
        <button type="submit">Invia</button>
    </form>
</div>

    <?php
        // utilizzo un ternario per non far uscire l errore iniziale
        // metodo get con isset per recepire le info dall url
        $name = isset( $_GET['name'] ) ? $_GET['name'] : '';
        $mail = isset( $_GET['mail'] ) ? $_GET['mail'] : '';
        $age = isset( $_GET['age'] ) ? $_GET['age'] : '';

        // metodo if per creare condizione sulla lunghezza del nome
        // usando strlen per vedere se la lunghezza è superiore ai 3 caratteri
        // usando il metodo booleano true e false
        $nameOk = false;
        if (strlen($name) > 3) {
            $nameOk = true;
        };

        // metodo if per creare condizione sulla presenza di @ e . nella mail
        // usando strpos per cercare la posizione di un elemento in una stringa
        // usando il metodo booleano true e false
        $mailOk = false;
        if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
            $mailOk = true;
        };

        // sempre metodo if per creare condizione per vedere se è un numero o stringa
        // usando is numeric vediamo se una variabile è un numero o una stringa numerica
        // usando il metodo booleano true e false
        $ageOk = false;
        if (is_numeric($age)) {
            $ageOk = true;
        };

        // uso un ultimo metodo if per confutare le condizioni
        // se le 3 info sono true, allora l'accesso è riuscito
        // altrimenti l'accesso è negato
        if ($nameOk === true && $mailOk === true && $ageOk === true) {
            echo "<p>Accesso Riuscito</p>";
        } else {
            echo "<p>Accesso Negato</p>";
        }        
    ?>
    
</body>
</html>