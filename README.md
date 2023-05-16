-Censura Parole

Questo progetto consiste in due file PHP, index.php e process.php, che consentono all'utente di inviare un paragrafo di testo e una parola da censurare attraverso un form. Il server poi censurerà la parola specificata nel paragrafo, sostituendola con '***'.

-File index.php
Questo file contiene il form HTML per l'input dell'utente. L'utente può inserire un paragrafo di testo e una parola da censurare. Quando l'utente invia il form, i dati vengono inviati al server utilizzando il metodo POST.

-File process.php
Questo file riceve i dati inviati attraverso il form in index.php. Prima controlla se i dati sono stati inviati tramite il metodo POST. Se è così, prende il paragrafo e la parola da censurare e li assegna alle variabili $paragrafo e $badword.
Quindi stampa a schermo il paragrafo originale e la sua lunghezza.

Dopo di che, utilizza la funzione str_ireplace per sostituire tutte le occorrenze della parola da censurare nel paragrafo con '***', e assegna il risultato alla variabile $paragrafo_censurato. Infine, stampa a schermo il paragrafo censurato e la sua lunghezza.
