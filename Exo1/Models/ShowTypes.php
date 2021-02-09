<?php

class ShowTypes extends Database {

    private $id;
    private $type;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllShowTypes()
    {
        $query = "SELECT `type` FROM `showtypes`";
        $queryGetAllShowTypes = parent::getDb()->prepare($query);
        $queryGetAllShowTypes->execute();
        $resultsQuery = $queryGetAllShowTypes->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
}