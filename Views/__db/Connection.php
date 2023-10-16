<?php

class DatabaseConnection {
    private $serverName;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($serverName, $username, $password, $dbname) {
        $this->serverName = $serverName;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();
    }

    private function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";  // You can remove this line in production
        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            echo "Oops! Something went wrong. Please try again later.";
            exit();
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
