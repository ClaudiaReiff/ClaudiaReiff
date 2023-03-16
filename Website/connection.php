<?php
class DatabaseConnection {
  protected $host = "localhost";
  protected $username = "root";
  protected $password = "";
  protected $database = "holzlehen";
  protected $pdo;

  public function __construct(){
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    );

    try {
      $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
    } catch (PDOException $e) {
      die("Database connection failed: " . $e->getMessage());
    }
  }

  public function getConnection() {
    return $this->pdo;
  }
}
