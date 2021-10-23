<?php

namespace Database;

use PDO;
use PDOException;

class Database
{

  private $dbHost;
  private $dbName;
  private $dbUser;
  private $dbPass;
  private $pdo;

  public function __construct(string $dbHost = "localhost", string $dbName = "stineline", string $dbUser = "root", string $dbPass = "")
  {
    $this->dbHost = $dbHost;
    $this->dbName = $dbName;
    $this->dbUser = $dbUser;
    $this->dbPass = $dbPass;
  }

  public function connectToDB()
  {
    try {
      $dsn = "mysql:host={$this->dbHost};dbname={$this->dbName};charset=utf8";
      $this->pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
      $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function insertIntoDb($sql, $args)
  {
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($args);

      echo "Insert Successful";
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
