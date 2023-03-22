<?php

namespace Base;

use \PDO;

class Database
{
    private $_pdo = null;

    const DB_HOST = "localhost";
    const DB_NAME = "messagerie";
    const DB_USER = "root";
    const DB_PASS = "root";

    public function getPdo()
    {
        if ($this->_pdo === null) {
            $pdo = new PDO("mysql:host=" . $this->getHost() . ";dbname=" . $this->getName(), $this->getUser(), $this->getPass());
            $this->_pdo = $pdo;
        }
        return $pdo;
    }

    private function getHost()
    {
        return self::DB_HOST;
    }
    private function getName()
    {
        return self::DB_NAME;
    }
    private function getUser()
    {
        return self::DB_USER;
    }
    private function getPass()
    {
        return self::DB_PASS;
    }
}
