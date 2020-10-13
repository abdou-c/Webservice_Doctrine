<?php
namespace entities;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="operation")
*/

    class OperationApi{
        /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
        private $id;
        /** 
        * @ORM\Column(type="string")
        */
        private $typeOperation;
          /** 
        * @ORM\Column(type="string")
        */
        private $montant;
          /** 
        * @ORM\Column(type="string")
        */
        private $dateOperation;

           /**
     * @ORM\ManyToOne(targetEntity="SoldeCompte", inversedBy="operation")
     * @ORM\JoinColumn(name="id_Operation", referencedColumnName="id")
     */

        private $soldeCompte;
        
         
        public function __construct()
        {

        }


        
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of typeOperation
         */ 
        public function getTypeOperation()
        {
                return $this->typeOperation;
        }

       
        public function setTypeOperation($typeOperation)
        {
                $this->typeOperation = $typeOperation;

                return $this;
        }

        /**
         * Get the value of montant
         */ 
        public function getMontant()
        {
                return $this->montant;
        }

      
        public function setMontant($montant)
        {
                $this->montant = $montant;

                return $this;
        }

        /**
         * Get the value of dateOperation
         */ 
        public function getDateOperation()
        {
                return $this->dateOperation;
        }

       
        public function setDateOperation($dateOperation)
        {
                $this->dateOperation = $dateOperation;

                return $this;
        }

        /**
         * Get the value of soldeCompte
         */ 
        public function getSoldeCompte()
        {
                return $this->soldeCompte;
        }

        /**
         * Set the value of soldeCompte
         *
         * @return  self
         */ 
        public function setSoldeCompte($soldeCompte)
        {
                $this->soldeCompte = $soldeCompte;

                return $this;
        }
    }
?>