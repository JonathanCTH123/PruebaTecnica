<?php

require_once("config.php");
    /**
     * Clase conexion
     */
    class ConectionDB
    {
        protected $dbConect;

        public function ConectionDB()
        {
            try {
                // $this->dbConnect = new PDO("mysql:host=localhost;dbname=AFIS_DB", DB_USER, DB_PASSWORD);
                $this->dbConnect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
                $this->dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->dbConnect->exec("SET CHARACTER SET utf8");
                return $this->dbConnect;

            } catch (Exception $e) {
                print "!Error¡: " . $e->getMessage() . "</br>";
                die();
            }
        }
    }
?>
