<?php

namespace Database;

class Database
{
    private $password;
    private $driver;
    private $host;
    private $dbname;
    private $username;

    private $con;

    public function __construct()
    {
        $this->driver = 'mysql';
        $this->host = 'localhost';
        $this->dbname = 'ecomerce';
        $this->username = 'root';
        $this->password = 'paulo29';

        try {
            $this->con = new \PDO(
                "$this->driver:host=$this->host;dbname=$this->dbname;charset=utf8",
                $this->username,
                $this->password
            );

            $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "<p style='color: red;'>❌ Erro na conexão: " . $e->getMessage() . "</p>";
        }
    }



    public function getConnection()
    {
        return $this->con;
    }

// Método para exibir a mensagem de sucesso de conexão, quando necessário
    public function showConnectionStatus()
    {
        if ($this->con) {
            echo "<p style='color: green;'>✅ Conexão com o banco de dados estabelecida com sucesso!</p>";
        }
    }
}

// include 'database.php';

// $db = new database();

// if ($db->getConnection()) {
//     echo "Conexão bem-sucedida!";
// } else {
//     echo "Falha na conexão!";
// }
