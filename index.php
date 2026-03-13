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

//------------------------------------------------------
// 6) Créer la fonction afficherHumain() qui prendra un tableau associatif en paramètre
function afficherHumain($array) { 
        echo "<article style= 'border-bottom : 3px solid black '>
            <h2>nom : ".$array["name"]."</h2>
            <p>email : ".$array["email"]."</p>
            <p>age : ".$array["age"]." ans</p>
        </article>";
};

//------------------------------------------------------
// 8) Créer la fonction afficherAnimal() qui prendra un tableau associatif en paramètre.

function afficherAnimal($array) {
        echo "<article style= 'border-bottom : 3px solid black '>
            <h2>nom : ".$array["name"]."</h2>
            <p>espece : ".$array["espece"]."</p>
            <p>age : ".$array["age"]." ans</p>
            <p>propriétaire : ".$array["propriétaire"]."</p>
        </article>";
};

//------------------------------------------------------
// 10) Créer la fonction afficherXeno() qui prendra un tableau associatif en paramètre.

function afficherXeno($array) {
        echo "<article style= 'border-bottom : 3px solid black '>
            <h2>nom : ".$array["name"]."</h2>
            <p>espece : ".$array["espece"]."</p>
            <p>age : ".$array["age"]." ans</p>
            <p>niveau de menace: ".$array["menace"]."</p>
        </article>";
};

//------------------------------------------------------
// 12) Créer une fonction profil() qui prend en paramètre un tableau.

function profil($array) {
    // 13) Faire en sorte que la fonction profil() parcourt chaque tableau associatif du tableau en paramètre.
    $display = 0;
    for ($i=0; $i < sizeof($array); $i++) { 
        if ($array[$i]["type"] == "humain") {
            $display = afficherHumain($array[$i]);
        } else if ($array[$i]["type"] == "animal de compagnie") {
            $display = afficherAnimal($array[$i]);
        } else if ($array[$i]["type"] == "Xeno") {
            $display = afficherXeno($array[$i]);
        } else {
            $display = "<article style= 'border-bottom : 3px solid black '><p>Type de Profil non Existant</p></article>";
            echo $display;
        };
    }
    return $display;
}

function profilAll($array) {
    for ($i=0; $i < sizeof($array); $i++) { 
        profil($array[$i]);
    }
}
?>
    <main>
        <?php afficherHumain($USERS_HUMAN[0]) ?>
        <?php afficherAnimal($USERS_PET[0]) ?>
        <?php afficherXeno($USERS_XENO[0]) ?>
        <?php profil($USERS_HUMAN) ?>
        <?php profil($USERS_PET) ?>
        <?php profil($USERS_XENO) ?>
        <?php profilAll($tabData) ?>
    </main>
<?php include_once "./header.php" ;?>