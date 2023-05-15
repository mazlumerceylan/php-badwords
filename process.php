<?php

// Controlla se la richiesta è stata inviata tramite il metodo POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Assegna i dati inviati tramite il form alle variabili $paragrafo e $badword.
  $paragrafo = $_POST["paragrafo"];
  $badword = $_POST["badword"];


   // Stampa il paragrafo e la sua lunghezza.
  echo "Paragrafo: " . $paragrafo . "<br>";
  echo "Lunghezza: " . strlen($paragrafo) . "<br>";
    
}

?>