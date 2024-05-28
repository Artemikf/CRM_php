<?php

namespace Core;

use PDO;
use PDOStatement;

class DB
{
    private static PDO $pdo;

    private static function getPdo(): PDO {
        if (! isset(self::$pdo)) {
            $connString =
                "mysql:host=" . DB_HOST
                . ";port=" . DB_PORT
                . ";db_name=" . DB_NAME
                . ";charset=" . DB_CHARSET . ";";

            return self::$pdo = new PDO($connString, DB_USERNAME, DB_PASSWORD, DB_PDO_OPTIONS);
        }

        return self::$pdo;
    }

    public static function run(string $sql, array $args = []): PDOStatement {
        $stmt = self::getPdo()->prepare($sql);
        $stmt->execute($args);

        return $stmt;
    }
}