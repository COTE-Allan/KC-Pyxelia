<?php

use Kreait\Firebase\Factory;

class Database
{
    public $factory;
    public $db;
    public $ref;
    public $snapshot;

    public function __construct()
    {
        $this->factory;
        $this->db;
        $this->ref;
        $this->snapshot;
        $this->connectDB();
    }

    private function connectDB()
    {
        $this->factory = (new Factory)
            ->withServiceAccount('adminsdkFirebase.json')
            ->withDatabaseUri('https://koffi-place-default-rtdb.europe-west1.firebasedatabase.app/');
        $this->database = $this->factory->createDatabase();
    }

    public function getData($ref)
    {
        $this->ref = $this->database->getReference('colors');
        $this->snapshot = $this->ref->getSnapshot();
        return $this->snapshot->getValue();
    }
    /**
     * Universal getter
     *
     * @return  self
     */
    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * Get the value of DB
     */
    public function getDB()
    {
        return $this->pdo;
    }
}
$db = new Database();
