<?php

define('__ROOT__', dirname(dirname(__FILE__)));


include_once(__ROOT__ . "/Layout/Loader.php");


if (isset($_POST['competenceBTN'])) {

    $competenceBLO = new CompetenceBLO();
    $id = $_POST['competenceID'];


    $competenceBLO->DeleteCompetence($id);

    header('Location: index.php?succsses=deleteSuccess');
    exit;
}

