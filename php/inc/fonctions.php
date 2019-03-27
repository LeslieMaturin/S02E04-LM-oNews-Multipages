<?php

$monPrenom = "Johnny";

function joliVarDump( $variableADumper ){

    echo '<pre>';
    var_dump($variableADumper);
    echo '</pre>';
}

function getAllArticles(){

    require 'data/data.php';
    return $articlesList;
}

function presentation($prenom, $age, $message=" et j'en suis fier!"){
  return "Salut moi c'est $prenom, j'ai $age ans $message...";
}

$leTableauQueJeVeuxUtiliser = [
    "Salut moi c'est ",
    "Coucou, ",
    "Pffff, dure la fin de journée"
];

$indexDuTableauQUiMinterres = 0;

function choisirPhrase($a, $b){
    return $a[$b];
}

$message = choisirPhrase($leTableauQueJeVeuxUtiliser, $indexDuTableauQUiMinterres);

$message = choisirPhrase([
    "Salut moi c'est ",
    "Coucou, ",
    "Pffff, dure la fin de journée"
], 0);


function verifBasicForm($array){
    if (!empty($array)){
        $firstnameValid = strlen($array['firstname']) >= 2;
        $lastnameValid = strlen($array['lastname']) >= 2;
        // Email -> valide
        $emailValid = filter_var($array['email'], FILTER_VALIDATE_EMAIL);
        // Message -> longueur >= 5
        $messageValid = strlen($array['message']) >= 5;
        // Checkbox -> true
        $checkboxValid = isset($array['infos-ok']);

        // Firstnamevalid ET lastnameValid et ..... checkboxValid
        return $firstnameValid && $lastnameValid && $emailValid && $messageValid && $checkboxValid;
    }
}





?>