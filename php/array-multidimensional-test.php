<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class = "row">
    <div class= "col-sm-8">
        <!--CONTENT-->

        <h7>Multidimensionale Arrays</h7>
        <p>&nbsp;</p>

        <?php
// Array setzen
$people = array(
    array(
        "firstName" => "Pablito", 
        "lastName" => "Lopez", 
        "age" => 67),
    array(
        "firstName" => "Miguelito", 
        "lastName" => "Bardón", 
        "age" => 59),
    array(
        "firstName" => "Paloma", 
        "lastName" => "Pérez", 
        "age" => 42)
);

// Einzelne Werte abrufen
// Was ist der 'lastName' vom 2. Personen-Datensatz?
// Vorgehen in zwei Schritten:
$personData = $people[1];
echo "Als 2. Personen-Datensatz git es:<br>";
print_r($personData);
echo "<br>";

$lastName = $personData['lastName'];
echo "Als zweiter Stelle kommt Herr/Frau $lastName.<br>";

// Vorgehen in einem Schritt:
$personData = $people[1]['lastName'];
echo "Als zweiter Stelle kommt Herr/Frau $lastName.<br>";

// Achtung! Prüfen, ob ein Schlüssel überhaupt existiert: isset()
$x = 0;
$y = 'lastName';

if (isset($people[$x]) && isset($people[$x][$y])) {
    $lastName = $people[$x][$y];
    echo "'lastName' aus x und y ist $lastName.<br>";

}
else {
// Schlüssel $x oder $y ist nicht $people.
}



// echo "An dritter Position ist $name.<br>";



// Array in Seite ausgeben
echo "<pre>";
print_r($people);
echo "</pre>";

// Alle Werte im Array auflisten
for ($i = 0; $i < count($people); $i++) {
    $personData = $people[$i];
    $firstName  = $personData['firstName'];
    $lastName = $personData['lastName'];
    $age = $personData['age'];

    echo "$firstName $lastName ist $age Jahre alt.<br>";
}

// Finde heraus , ob sich "... in der Personenliste befindet.

?>        

<!--END OF CONTENT-->
    </div>
</div>

</body>
</html>
