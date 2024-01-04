<?php 
    class Database{ 
        private PDO $pdo; 
        public function __construct(string $host, string $dbname, string $user, string $password) 
        {
            $this->pdo = new PDO("mysql:hist=$host;dbname=$dbname",$user,$password); 
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,POD::ERRMODE_EXCEPTION);
        } 
        public function __destruct() 
        { 
            $this->pdo = null;
        }
    }
?>