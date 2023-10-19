<?php
class DatabaseConnection {
    private $host = "localhost";
    private $user = 'root';
    private $dbname = 'CompetencesDatabase';
    private $password = '';

    public function connect() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $db = new PDO($dsn, $this->user, $this->password, $options);
            return $db;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();

        }
    }
}
?>
