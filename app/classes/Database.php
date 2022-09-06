<?php


namespace App\classes;


class Database
{
  public $user;
  public $hostName;
  public $password;
  public $databaseName;
  public $dbResult;



  public function __construct()
  {
      $this->user = 'root';
      $this->hostName = 'localhost';
      $this->password = '';
      $this->databaseName= 'news';
  }
  public function dbConnect()
  {
      $this->dbResult = mysqli_connect($this->hostName, $this->user,$this->password,$this->databaseName);

      return $this->dbResult;

  }

}