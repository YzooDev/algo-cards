<?php 
include_once "./header.php";

//------------------------------------------------------
// 3) Dans index.php, faire un require once de data.php

require "./data.php";

//------------------------------------------------------
// 4) Créer une variable $tabData et lui assigner un tableau vide

$tabData = [];

//------------------------------------------------------
// 5) Ajouter à $tabData les constantes $USERS_HUMAN, $USERS_PET et $USERS_XENO
array_push($tabData, $USERS_HUMAN, $USERS_PET, $USERS_XENO);
// print_r($tabData);

//------------------------------------------------------
// 6) Créer la fonction afficherHumain() qui prendra un tableau associatif en paramètre
function afficherHumain($tableau) {
    for ($i=0 ; $i < sizeof($tableau); $i++) { 
        echo "<article style= 'border-bottom : 3px solid black '>
            <h2>nom : ".$tableau[$i]["name"]."</h2>
            <p>email : ".$tableau[$i]["email"]."</p>
            <p>age : ".$tableau[$i]["age"]." ans</p>
        </article>";
    };
};

?>
    <main>
        <?php afficherHumain($USERS_HUMAN) ?>
    </main>
<?php include_once "./header.php" ;?>