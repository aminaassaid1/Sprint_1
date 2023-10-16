<?php
class CompetenceBLO {
    private $competencesDao;
    public $errorMessage;

    public function __construct() {
        $this->competencesDao = new CompetencesDAO();
        $this->errorMessage = '';
    }

    public function GetAllCompetences() {
        return $this->competencesDao->GetAllCompetences();
    }

    public function GetCompetence($competenceID) {
        return $this->competencesDao->GetCompetence($competenceID);
    }

    public function AddCompetence(Competence $competence) {
        $insertedId = 0;

        if (empty($competence->getREFERENCE()) || empty($competence->getCODE()) || empty($competence->getNOM())) {
            $this->errorMessage = 'Please fill in all required fileds .';
        } else {
            $insertedId = (int) $this->competencesDao->AddCompetence($competence);
        }

        return $insertedId;
    }

    public function UpdateCompetence(Competence $competence) {
        $affectedRows = 0;

        if (empty($competence->getREFERENCE()) || empty($competence->getCODE()) || empty($competence->getNOM())) {
            $this->errorMessage = 'Please fill in all required fields.';
        } else {
            $affectedRows = (int) $this->competencesDao->UpdateCompetence($competence);
        }

        return $affectedRows;
    }



    public function DeleteCompetence($competenceID) {
        $affectedRows = 0;

        $affectedRows = (int) $this->competencesDao->DeleteCompetence($competenceID);
        return $affectedRows;
    }
}

