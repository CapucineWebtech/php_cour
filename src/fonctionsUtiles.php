<?php
    function connectBdd(array $infoBdd): ?PDO
    {
        try {
            var_dump($infoBdd);
            $dsn = $infoBdd['type'] . ':host=' . $infoBdd['host'] . ';dbname=' . $infoBdd['dbname'];
            var_dump($dsn);
            $dbh = new PDO($dsn, $infoBdd['user'], $infoBdd['pass']);
        } catch (PDOException $ex) {
            die(json_encode(['outcome' => false, 'message' => 'Unable to connect']));
        }
        return $dbh;
    }