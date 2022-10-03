# Prenoptazioni eventi
 servizio Web per la gestione della prenotazione di un insieme di eventi da parte di un utente

1- un form in cui l’utente può inserire il nome dell’evento (una stringa) e il numero di persone per cui effettua la prenotazione. Il form permette l’inserimento di una prenotazione per volta e l’inserimento di più prenotazioni avviene inviando più volte il form.

2- una pagina di raccolta delle prenotazioni che memorizza sul server le prenotazioni fatte col form del punto 1. Si assume che se l’utente invia più di una volta il numero di prenotazioni per lo stesso evento nella stessa sessione, il numero di persone viene cumulato.

3- una pagina di riepilogo che stampa la lista delle prenotazioni, il totale del numero di persone e l’evento per cui è previsto il massimo numero di prenotazioni. Nel caso ci siano più eventi a cui corrisponde il valore massimo di prenotazioni si stampa il primo nella lista.
