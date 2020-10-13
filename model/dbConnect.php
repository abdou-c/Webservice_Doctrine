<?php
namespace model;
         //permet de faire les requetes sql
         //et la connection a la base!!!
require_once "../bootstrap.php";
         
class dbConnect{

    protected $base;

     public function __construct()
    {
        $this->base = getEntityManager();
    }
    
    function dbConnection(){
        $user = "root";
        $host = "localhost";
        $passwd = "";
        $dbName = "mybanque";
   
        $dsn = "mysql:host=$host;dbname=$dbName";
   
        try {
        $connect = new \PDO($dsn, $user, $passwd);
        $connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_SILENT);
        $connect->setAttribute(\PDO::ATTR_ERRMODE ,\PDO::ERRMODE_EXCEPTION);
        $connect->setAttribute(\PDO::ATTR_CASE , \PDO::CASE_NATURAL);
        $connect->setAttribute(\PDO::ATTR_ORACLE_NULLS , \PDO::NULL_EMPTY_STRING);
        } catch (\PDOException $ex) {
        die("erreur:" .$ex->getMessage());
        }
   
            return $connect;
        }
   
}
?> 