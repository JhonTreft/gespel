<?php
    require __DIR__ . '/../../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
    
    $host = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASS'];
    $dbname = $_ENV['DB_NAME'];
    $dbport = $_ENV['DB_PORT'];

    $conn = mysqli_connect($host,$user,$pass,$dbname, $dbport);
    if (!$conn) {
      // Si la conexión falló, imprime un mensaje de error
      die("Conexión fallida: " . mysqli_connect_error());
  }
