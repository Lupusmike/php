<?php
$text = "Dies ist ein Beispieltext, in dem wir die Anzahl der Vorkommnisse eines Wortes zählen wollen. Ein Beispielwort könnte 'Beispiel' sein.";
$search_word = "Beispiel";
$count = substr_count($text, $search_word);
echo "Das Wort '" . $search_word . "' kommt " . $count . " mal im Text vor.";
?>