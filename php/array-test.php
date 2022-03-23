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
        $people = array("Petra", "Felicitas", "Dolores", "Robert");

    // Einzelne Werte abrufen
    $name = $people[2]; // Dolores
    echo "An dritter Position ist $name.";

        $i= 0;
        $name1 = $people[$i];
        echo "an erster stelle ist $name1.<br>";

        // Array in Seite ausgeben 
        echo "<pre>";
        print_r($people);
        echo "</pre>";

        // Alle Werte im Array auflisten
    for ($i = 0; $i < count($people); $i++) {
        $name= $people[$i];
        echo "An $i -ten Position ist $name.<br>";
    }

        ?>

<!--END OF CONTENT-->
    </div>
</div>


</body>
</html>



