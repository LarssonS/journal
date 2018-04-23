<?php

require_once(__DIR__ . '/../partials/session-start.php');

class Remove
{
    private $db;
    //Dependency Injection
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }
    public function removePost($entryID)
    {

        $statement = $this->db->prepare("DELETE FROM entries WHERE entryID = :entryID");

        $statement->execute([
            ":entryID" => $entryID
        ]);
    }
}

