<?php
/* DIeses SKript ist für Testzwecke. */

echo "Good Morning";

//Syntax-Errors
$cookie = "hello";

echo $cookie;

echo "hallo";

$cars = ['Bentley', 'Volvo', 'VW'];

// Nicht existierende Variablen

if ($car === 'Volvo') {
    echo 'I like Volvo!';
}

if ($flower > 10) {
    echo $flower;
}

// Nicht existierende Array-Schlüssel (Keys)
$persons = [
'Peter' => "Peter Muster", // key and value
'Fritz' => "FRitz Müller"

]; 

echo $persons['Petra'];

// Logische Fehler ergeben keine Fehlermeldung.
$p = 'Affe';

echo "$p" . $p . " = " . $p . "<br>";
echo "\$p = $p<br>";

if ($p > 100) {
    echo "Ja";
}
else {
    echo "Nein.";
}


?> 

