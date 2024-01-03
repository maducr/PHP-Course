<?php
// checkdate
$isValidDate = checkdate(12, 31, 2022);
echo "É uma data válida? " . ($isValidDate ? "Sim" : "Não") . "\n\n";

// strftime
$currentTime = time();
$formattedDate = strftime("%A, %B %d, %Y %H:%M:%S", $currentTime);
echo "Data formatada usando strftime: $formattedDate\n\n";

// date_parse e date_parse_from_format
$dateString = "2022-01-03 15:30:45";
$parsedDate = date_parse($dateString);
echo "String de data: $dateString\n";
echo "Data analisada usando date_parse:\n" . print_r($parsedDate, true) . "\n\n";

// Definição de configurações regionais com setlocale
setlocale(LC_TIME, 'pt_BR.UTF-8');
$localizedDate = strftime("%A, %d de %B de %Y", $currentTime);
echo "Data localizada em português: $localizedDate\n\n";

// strtotime
$futureDate = strtotime("+1 week");
echo "Data atual: " . date("Y-m-d H:i:s", $currentTime) . "\n";
echo "Data daqui a uma semana: " . date("Y-m-d H:i:s", $futureDate) . "\n";