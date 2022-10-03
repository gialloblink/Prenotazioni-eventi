<?php require_once 'funzionalità.php'; ?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazioni</title>
</head>



<body>
    <h1>Lista Prenotazioni</h1>
    <?php $totalePrenotati=0 ?>
    <?php $maxPersone=0 ?>
    <?php $eventoMax = "" ?>

    

    <?php foreach (caricaPrenotazioniFromJson() as $key => $prenotazioni): ?>
        
        <div>
       
        <?php echo($prenotazioni["evento"])?>
            
        <?php echo($prenotazioni["partecipanti"]);

            if ($prenotazioni["partecipanti"] > $maxPersone) {
                $maxPersone = $prenotazioni["partecipanti"];
                $eventoMax = $prenotazioni["evento"];
            }
        $totalePrenotati = $totalePrenotati + $prenotazioni["partecipanti"];
        
        ?>
    </div>
    
    
    <?php endforeach; ?>
    <br>
        <p>evento con il numero di partecipanti maggiore:
        <h3>
         <?php echo(" ".$eventoMax." con ".$maxPersone." partecipanti")?>
        </h3>
        </p>
    <br>
    <h3>
        Totale numero di persone <?php  echo($totalePrenotati) ?>
        
    </h3>

    <a href="home.php">Inserisci una prenotazione</a>
</body>
</html>