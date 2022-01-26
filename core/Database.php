<?php

use Kreait\Firebase\Factory;

class Database
{
    public $factory;
    public $db;
    public $ref;
    public $snapshot;

    /**
     * Controller
     */
    public function __construct()
    {
        $this->factory;
        $this->db;
        $this->ref;
        $this->snapshot;
        $this->connectDB();
    }

    /**
     * Connexion à la DB
     *
     * @return void
     */
    private function connectDB()
    {
        $this->factory = (new Factory)
            ->withServiceAccount('adminsdkFirebase.json')
            ->withDatabaseUri('https://koffi-place-default-rtdb.europe-west1.firebasedatabase.app/');
        $this->database = $this->factory->createDatabase();
    }

    /**
     * Obtenir une data depuis la DB
     *
     * @param string $ref
     * @return void
     */
    private function getData($ref)
    {
        $this->ref = $this->database->getReference($ref);
        $this->snapshot = $this->ref->getSnapshot();
        return $this->snapshot->getValue();
    }
    /**
     * Obtenir les couleurs depuis la DB
     *
     * @return void
     */
    public function getColors()
    {
        return $this->getData("colors");
    }
    /**
     * Obtenir les users depuis la DB
     *
     * @return void
     */
    public function getUsers()
    {
        return $this->getData("users");
    }
}
$db = new Database();
