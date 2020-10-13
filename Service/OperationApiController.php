<?php
//il joue l'intermediaire entre view et model!!

use model\Operation;
use model\SoldeCompte_Model;

require_once "../vendor/autoload.php";
require_once '../config/autoloader.php';
require_once '../model/Operation.php';
require_once '../model/SoldeCompte_Model.php';



$array = [];

if (isset($_GET['numero'])) {
    $compteDb = new Operation();
    $compte = new SoldeCompte_Model();

    // $operation = $compteDb->getOperationCompte($_GET['numero']);
    $operation = $compte->getSoldeCompte($_GET['numero']);

    if ($operation != null) {
        $array[] = 'Ce compte n\'existe pas dans la base de donnees';
    } else{
        $array[] = 'vous n\'avez pas d\'opération';
    }

    
$array = [];
$i = 0;
foreach($operation->getOperation() as $numero)
{
    $arr = [
        'type Operation' => $numero->getTypeOperation(),
        'montant' => $numero->getMontant(),
        'date operation' => $numero->getDateOperation()
    ];
    $array[$i] = $arr;

}
 
    // $i++;






echo json_encode($array);

}
?>





