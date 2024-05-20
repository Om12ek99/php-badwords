<?php
$text= $_GET["parag"];          //variabile text con il testo inserito dall'utente
$replace = "***";               //simboli che sostituiscono la parola da rimpiazzare
$search = $_GET["banned"] ;      //parola da rimpiazzare

$new_text = str_replace($search, $replace, $text);   //testo bannato
echo $new_text;                                      //display del testo bannato
?>
