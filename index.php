<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple Hola Món en PHP</title>
</head>
<body>
<?php
$persones =[[
    "nom" => "Alex",
    "primerCognom" => "Ruiz",
    "segonCognom" => "Palomas",
    "dataNaix" => "27/07/2003",
    "DNI" => "47974744C"
],
[
    "nom" => "Marc",
    "primerCognom" => "Alonso",
    "segonCognom" => "Martines",
    "dataNaix" => "04/02/1999",
    "DNI" => "47934744C"
]];
?>


<table>
    <thead>
        <tr>
            <th>    Nom   </th>
            <th>    Primer Congom  </th>
            <th>    Segon Congom   </th>
            <th>    Data Naix   </th>
            <th>    DNI    </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($persones as $persona) {?>
        <tr>
            <td><?php echo $persona["nom"]; ?></td>
            <td><?php echo $persona["primerCognom"]; ?></td>
            <td><?php echo $persona["segonCognom"]; ?></td>
            <td><?php echo $persona["dataNaix"]; ?></td>
            <td><?php echo $persona["DNI"]; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>