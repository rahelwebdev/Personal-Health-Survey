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

        <h7>Indexed Array</h7>
        <p>&nbsp;</p>

        <?php

        // Array setzen
        $people = array("Julian" => 34, "Nina" => 15, "Jürgen" => 32);
   
        // Person hinzufügen zum Array
        $people["Holger"]= 46;


    // Einzelne Werte abrufen
    $age = $people["Nina"]; // Dolores
    echo "Nina ist $age Jahre jung.<br>";

        // Array in Seite ausgeben 
        echo "<pre>";
        print_r($people);
        echo "</pre>";

        // Alle Werte im Array auflisten: foreach(){}
        // 1. Variable für den Array
        // 2. Variable für einen Schlüssel
        // 3. Variable für einen Wert, der zum SChlüssel gehört ($age)
 
foreach ($people as $name => $age) {

    echo "$name ist $age Jahre jung.<br>";
}

// Liste alle Personen auf, die jünger als 40 Jahr alt sind.
foreach($persons as $name => $age) {
    if ($age < 40) {
        echo "$name ist $age Jahre alt und jünger als 40.<br>";
    }
}


        ?>

<!--END OF CONTENT-->
    </div>
</div>


</body>
</html>
