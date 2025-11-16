<?php

/**
 * Database Connection Class using PDO
 * 
 * @author Bumil-Siaga Team
 * @version 2.0
 * @description Modern database connection using PDO with prepared statements
 */

class Database {
    private $host = "localhost";
    private $db_name = "bumilsiaga_db";
    private $username = "root";
    private $password = "";
    private $pdo;

    /**
     * Constructor - Connect to database
     */
    public function __construct() {
        $this->connect();
    }

    /**
     * Connect to database using PDO
     * 
     * @return void
     */
    private function connect() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
            $this->pdo->exec("SET CHARACTER SET utf8mb4");
            
        } catch(PDOException $e) {
            die('Database Connection Error: ' . $e->getMessage());
        }
    }

    /**
     * Get PDO connection
     * 
     * @return PDO
     */
    public function getConnection() {
        return $this->pdo;
    }

    /**
     * Execute SELECT query with prepared statement
     * 
     * @param string $query SQL query with placeholders
     * @param array $params Parameters for prepared statement
     * @return array Query results
     */
    public function fetchAll($query, $params = []) {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            return [];
        }
    }

    /**
     * Execute SELECT query and return single row
     * 
     * @param string $query SQL query with placeholders
     * @param array $params Parameters for prepared statement
     * @return array Single row or empty array
     */
    public function fetch($query, $params = []) {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch(PDOException $e) {
            return [];
        }
    }

    /**
     * Execute INSERT, UPDATE, DELETE queries
     * 
     * @param string $query SQL query with placeholders
     * @param array $params Parameters for prepared statement
     * @return bool Success status
     */
    public function execute($query, $params = []) {
        try {
            $stmt = $this->pdo->prepare($query);
            return $stmt->execute($params);
        } catch(PDOException $e) {
            return false;
        }
    }

    /**
     * Get last inserted ID
     * 
     * @return string Last insert ID
     */
    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }

    /**
     * Get row count from last execute
     * 
     * @param string $query SQL query
     * @param array $params Parameters
     * @return int Number of affected rows
     */
    public function rowCount($query, $params = []) {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch(PDOException $e) {
            return 0;
        }
    }

    /**
     * Begin a transaction
     * 
     * @return void
     */
    public function beginTransaction() {
        $this->pdo->beginTransaction();
    }

    /**
     * Commit a transaction
     * 
     * @return void
     */
    public function commit() {
        $this->pdo->commit();
    }

    /**
     * Rollback a transaction
     * 
     * @return void
     */
    public function rollback() {
        $this->pdo->rollback();
    }
}

?>
