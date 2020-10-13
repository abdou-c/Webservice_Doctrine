<?php
//il joue l'intermediaire entre view et model!!
use model\SoldeCompte_Model;

require_once "../vendor/autoload.php";
require_once '../config/autoloader.php';
require_once '../model/SoldeCompte_Model.php';
require_once '../entities/SoldeCompte.php';



$array = [];

if (isset($_GET['numero'])) {
    $compteDb = new SoldeCompte_Model();

    $compte = $compteDb->getSoldeCompte($_GET['numero']);


    if ($compte != null) {
        $array[] = ['solde' => $compte->getSolde()];
    } else {
        $array[] = 'Ce compte n\'existe pas dans la base de donnees';
    }
} else {
    $array[] = 'vous n\'avez pas donner le numero du compte';
}

echo json_encode($array);
?>



















// $compte = new compteEpargne;

// $solde = $compte->SoldeCompte();
// $array = [];
// $i = 0;
// foreach($solde as $compte)
// {
//     $arr = [
//         'numero' => $compte->getSolde()
//     ];
//     $array[$i] = $arr;
//     $i++;
// }

