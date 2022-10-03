<?php
session_start();

function salvaPrenotazione(string $evento, float $partecipanti)
{
    if (strlen($partecipanti) > 3) {
        return 'Numero partecipanti troppo alto';
    }
    if (strlen($evento) > 20) {
        return 'superato il numero massimo di caratteri per il Nome evento ';
    }
    
    $prenotazioni=caricaPrenotazioniFromJson();

    foreach ($prenotazioni as $key => $prenotazione ) {
        if ($prenotazione['evento'] === $evento) {
            $totale=($prenotazione['partecipanti'])+$partecipanti;
            $prenotazioni[$key]['partecipanti']=$totale;
            
            
                file_put_contents('prenotazioni.json', json_encode($prenotazioni));
                
                return "sono stati aggiunti $partecipanti partecipanti all'evento $evento.";        
        }
    }

    $prenotazioni[] = [
        'evento' => $evento,
        'partecipanti' => $partecipanti,
    ];
    file_put_contents('prenotazioni.json', json_encode($prenotazioni));
    
    return true;
}




function caricaPrenotazioniFromJson(): array
{
    $content = file_get_contents('prenotazioni.json');
    $prenotazioni = json_decode($content, true);
    if ($prenotazioni === null) {
        echo 'Impossibile leggere il file degli utenti: ' . json_last_error_msg();
        die;
    }
    return $prenotazioni;
}


?>