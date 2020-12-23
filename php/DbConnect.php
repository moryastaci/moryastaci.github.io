<?php
class DbConnect {
    private $host = '192.168.0.102';
    private $dbName ='docker_database';
    private $user = 'root';
    private $pass = '12345';

    public function connect() {
        try {
            $conn = new PDO('mysql:host=' . $this->host . '; dbname =' . $this->dbName, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    }
}
?>