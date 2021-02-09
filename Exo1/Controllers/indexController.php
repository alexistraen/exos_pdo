<?php

require "Models/Database.php";
require "Models/Clients.php";
require "Models/ShowTypes.php";
require "Models/Show.php";

$database= new Database();
$clients = new Clients();
$showtypes = new ShowTypes();
$displayShow = new Show();

$getShowTypes = $showtypes->getAllShowTypes();
$getClientsNamesByLetterM = $clients->GetClientsNamesByLetterM();
$getDisplayShow = $displayShow->displayShow();
$getAllClients = $clients->getAllClients();