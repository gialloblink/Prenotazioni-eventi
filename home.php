<?php require_once 'funzionalità.php'; ?>
<?php 
$prenotazioneRiuscita=false;

if (array_key_exists( 'evento' , $_GET )) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
        
        $evento=$_GET['evento'];
        $partecipanti=$_GET['partecipanti'];
        $prenotazioneRiuscita= salvaPrenotazione($evento,$partecipanti);
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
<h1>INSERISCI UNA PRENOTAZIONE</h1>
<br>
    <form action="home.php"  method="GET" novalidate>
        <div>
            <label for="fname">Nome evento:</label><br>
            <input type="text" name="evento">
        </div>
        <br>
        <br>
        <div>
            <label for="fname">Numero partecipanti:</label><br>
            <input type="number" minlength="1" name="partecipanti"> 
        </div>
        <br> 
        <button type="submit" >INVIA</button>
    </form>
    
    <?php if ($prenotazioneRiuscita===true): ?>       
        prenotazione avvenuta per <?php echo $evento." numero partecipanti ".$partecipanti; 
endif ?>
<?php if ($prenotazioneRiuscita!==true): ?>       
    <p style="color: red"> 
        <?php echo $prenotazioneRiuscita; ?>
    </p>
    <?php endif ?>
    
    <br>
    <a href="Prenotazioni.php">Lista Prenotazioni</a>
</body>
</html>

