<?php
define('Root', dirname(__FILE__));
error_reporting(E_ALL);

require_once
    Root . "../../../__db/Connection.php";
require_once
    Root .'../../../DAO/CompetenceDAO.php';
require_once
    Root .'../../../BLL/CompetenceBLL.php';
require_once
    Root .'../../../Entities/Competence.php';

