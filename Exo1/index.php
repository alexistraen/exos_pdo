<?php

require "Controllers/indexController.php";

// Exo 1 - Afficher tous les clients
//var_dump($clients->getAllClients());

// Exo 2 - Afficher tous les types de spectacles possibles
// Affichage en var_dump
//var_dump($showtypes->getAllShowTypes());

//Affichage plus propre dans un paragraphe à l'aide d'une boucle
/*
foreach ($getShowTypes as $key => $value) {
?>
    <p><?= $value["type"] ?></p>
<?php
}
*/

// Exo 3 - Afficher les 20 premiers clients
//var_dump($clients->getTwentyClients());

// Exo 4 - N'afficher que les clients possédant une carte de fidélité

//var_dump($clients->getClientsWithFidelityCard());

// Exo 5 - Afficher le nom et prénom des clients ayant un nom commencant par M

/*
foreach ($getClientsNamesByLetterM as $key => $value) {
    ?>
    <p><?= 'Prénom : ' . $value["firstName"] ?></p>
    <p><?= 'Nom : ' . $value["lastName"] ?></p>
<?php
}
*/

// Exo 6 - Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique
// Afficher les résultats comme ceci : 'Spectacle' par 'Artiste', le 'Date' à 'Heure'


foreach ($getDisplayShow as $key => $value) {
?>

    <p><?= 'Spectacle ' . $value['title'] . ' par ' . $value['performer'] . ' le ' . $value['date'] . ' à ' . $value['startTime'] ?></p>

<?php
}


// Exo 7 - Afficher tous les clients comme ceci
// 
// Nom
// Prénom
// Date de naissance
// Carte de fidélité : Oui (si il en possède une) ou Non
// Numéro de carte

//var_dump($getAllClients);

/*
foreach ($getAllClients as $key => $value) {
?>
    <p>Nom : <?= $value['lastName'] ?></p>
    <p>Prénom : <?= $value['firstName'] ?></p>
    <p>Date de naissance : <?= $value['birthDate'] ?></p>
    <p>Carte de fidélité : <?= $value['card'] == 1 ? 'Oui' : 'Non' ?></p>
    <p><?= $value['cardNumber'] == !null ? 'Numéro de carte : ' . $value['cardNumber'] : '' ?></p>
    <p>*</p>
<?php
}
*/

?>