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

//------------------------------------------------------
// 8) Créer la fonction afficherAnimal() qui prendra un tableau associatif en paramètre.

function afficherAnimal($tableau) {
    for ($i=0 ; $i < sizeof($tableau); $i++) { 
        echo "<article style= 'border-bottom : 3px solid black '>
            <h2>nom : ".$tableau[$i]["name"]."</h2>
            <p>espece : ".$tableau[$i]["espece"]."</p>
            <p>age : ".$tableau[$i]["age"]." ans</p>
            <p>propriétaire : ".$tableau[$i]["propriétaire"]."</p>
        </article>";
    };
};

//------------------------------------------------------
// 10) Créer la fonction afficherXeno() qui prendra un tableau associatif en paramètre.

function afficherXeno($tableau) {
    for ($i=0 ; $i < sizeof($tableau); $i++) { 
        echo "<article style= 'border-bottom : 3px solid black '>
            <h2>nom : ".$tableau[$i]["name"]."</h2>
            <p>espece : ".$tableau[$i]["espece"]."</p>
            <p>age : ".$tableau[$i]["age"]." ans</p>
            <p>niveau de menace: ".$tableau[$i]["menace"]."</p>
        </article>";
    };
};

?>
    <main>
        <?php afficherHumain($USERS_HUMAN) ?>
        <?php afficherAnimal($USERS_PET) ?>
        <?php afficherXeno($USERS_XENO) ?>
    </main>
<?php include_once "./header.php" ;?>