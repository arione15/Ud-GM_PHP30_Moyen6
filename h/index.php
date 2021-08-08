<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 6 : attribut statique"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require 'Maison.php';

$maison1 = new Maison(2018, 3, 98);
$maison2 = new Maison(2019, 4, 120);
$maison3 = new Maison(2017, 4, 130);

$maisons=[$maison1, $maison2, $maison3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maisons</title>
</head>
<body>
    
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Nombre de chambres</th>
            <th scope="col">Surface</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($maisons as $maison) :?>
        <tr>
            <th scope="row"><?= $maison->getId() ?></th>
            <td><?= $maison->getDateCreation() ?></td>
            <td><?= $maison->getNombreChambres() ?></td>
            <td><?= $maison->getSurface() ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>






















</body>
</html>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../../global/common/template.php";
?>
