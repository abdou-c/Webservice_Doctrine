<?php
namespace model;
use entities\SoldeCompte;

// require_once 'dbConnect.php';
    // require_once '../entities/ClassCompteEpargne.php';
    class SoldeCompte_Model extends dbConnect{
            private $connexion;

            public function __construct()
            {
                parent:: __construct();
            }

       public function insertSoldeCompte(SoldeCompte $soldeCompte){

        $this->base->persist($soldeCompte);
            $this->base->flush();
            // var_dump($clientSimple->getId());
            // die;
            return $soldeCompte->getId();
        
        }

        // public function SoldeCompte()
        // {
        //     $query = $this->base->createQuery("SELECT c FROM entities\SoldeCompte c");
        //     return $query->getResult();
        // }

        /**
         * Afficher un compte par rapport a son numero
         *
         * @param int $numero
         * @return Compte
         */
        public function getSoldeCompte($numero)
        {
            $query = $this->base->createQuery("SELECT c FROM entities\SoldeCompte c where c.numero=$numero");
            return $query->getOneOrNullResult();
        }

    }
?>