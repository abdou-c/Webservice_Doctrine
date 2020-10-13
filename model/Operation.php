<?php 
namespace model;
use entities\OperationApi;

// require_once 'dbConnect.php';
    // require_once '../entities/ClassCompteCourant.php';

    class Operation extends dbConnect{
        private $connexion;

        public function __construct()
        {
            parent:: __construct();
        }

        public function insertOperationCompte(OperationApi $Operation){

            $this->base->persist($Operation);
            $this->base->flush();
            
             return $Operation->getId();
           
    }

        /**
         * Afficher un compte par rapport a son numero
         *
         * @param  $numero
         */
        public function getOperationCompte($numero)
        {
            $query = $this->base->createQuery("SELECT c FROM SoldeCompte c where c.numero=$numero");
            return $query->getOneOrNullResult();
        }

}



 // var_dump($clientSimple->getId());
            // die;
          

            // $numeroCompte = $compteCourant->getNumero();
            // $solde = $compteCourant->getSolde();
            // $agios = $compteCourant->getAgios();
            // $dateOuv = $compteCourant->getDateOuvert();

            // $sql = "INSERT INTO courant(numero, solde, agios, dateOuvert)
            //              VALUES('$numeroCompte', '$solde', '$agios', '$dateOuv') ";
            //             //  var_dump($sql);

            //     if($this->base != null){
            //         return $this->base->exec($sql); 
            //     }else{
            //         return null;
            //     }
            //             }
?>


