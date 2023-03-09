<?php

// Mi riporto nelle variabili i valori inseriti dall'utente com il metodo "POST"
$user_paragraph = $_POST["paragraph"];
$user_badword = $_POST["badword"];

// Trasformo i valori ricevuti in lowercase per individuare sempre la parola da sostiuire
$lower_paragraph = strtolower($user_paragraph);
$lower_badword = strtolower($user_badword);

// Ritorno il paragrafo modificato con la badword "censurata"
$censured_paragraph = str_replace($lower_badword,"***",$lower_paragraph);

// var_dump($lower_paragraph);

// Stampa a schermo il paragrafo e la lunghezza 
echo "-Tuo paragrafo:- ". $user_paragraph ."-Lunghezza:-". strlen($user_paragraph);

// Vai a capo
echo nl2br("\n");

// Stampa a schermo il paragrafo con caratteri sostituiti "***" e la lunghezza 
echo " -Paragrafo censurato:- ". $censured_paragraph ."-Lunghezza:-". strlen($censured_paragraph);


?>


