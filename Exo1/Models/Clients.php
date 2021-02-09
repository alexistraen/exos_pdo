<?php

class Clients extends Database
{

    private $id;
    private $lastName;
    private $firstName;
    private $birthDate;
    private $card;
    private $cardNumber;

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
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get the value of cardNumber
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllClients()
    {
        // On défini $query qui contient notre requête SQL
        $query = "SELECT * FROM `clients`";
        // On prépare la requête a être executée par la méthode PDOStatement::execute() à la ligne suivante
        // Juste avant on récupère la connexion à la db via le parent::getDb()
        $queryGetAllClients = parent::getDb()->prepare($query);
        // On exécute la requête
        $queryGetAllClients->execute();
        // Retourne tout le contenu de la table sous forme de tableau associatif
        $resultsQuery = $queryGetAllClients->fetchAll(PDO::FETCH_ASSOC);

        // Si notre $resultsQuery n'est pas vide, on return sa propre valeur, sinon on return false
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    public function getTwentyClients()
    {
        $query = "SELECT * FROM `clients` LIMIT 20";
        $queryGetTwentyClients = parent::getDb()->prepare($query);
        $queryGetTwentyClients->execute();
        $resultsQuery = $queryGetTwentyClients->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    public function getClientsWithFidelityCard()
    {
        $query = "SELECT clients.`lastName`, clients.`firstName` FROM clients 
                    INNER JOIN cards ON clients.`cardNumber` = cards.`cardNumber`
                    INNER JOIN `cardTypes` on cards.`cardTypesID` = `cardTypes`.id 
                    WHERE type = 'Fidélité'";
        $queryGetClientsWithFidelityCard = parent::getDb()->prepare($query);
        $queryGetClientsWithFidelityCard->execute();
        $resultsQuery = $queryGetClientsWithFidelityCard->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    public function GetClientsNamesByLetterM()
    {
        $query = "SELECT * FROM `clients` WHERE `lastName` LIKE 'M%' ORDER BY `lastName`";
        $queryGetClientsNamesByLetterM = parent::getDb()->prepare($query);
        $queryGetClientsNamesByLetterM->execute();
        $resultsQuery = $queryGetClientsNamesByLetterM->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
}
