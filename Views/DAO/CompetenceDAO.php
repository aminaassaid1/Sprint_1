<?php
require_once 'C:\Solicoders\Sprint_1\Views\__db\Connection.php';
class CompetencesDAO
{
    private $pdo = null;

    public function __construct()
    {
        $databaseConnection = new DatabaseConnection("localhost", "root", "", "sprint1");
        $this->pdo = $databaseConnection->getConnection();
    }



    public function AddCompetence(Competence $competence)
    {
        $sql = "INSERT INTO `Competences` (`REFERENCE`, `CODE`, `NOM`, `DESCRIPTION`) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $competence->getREFERENCE(),
            $competence->getCODE(),
            $competence->getNOM(),
            $competence->getDESCRIPTION()
        ]);

        header('Location: ../Admin/index.php?succsses=AddSuccess');
    }

    public function GetAllCompetences()
    {
        $sql = 'SELECT ID, REFERENCE, CODE, NOM, DESCRIPTION FROM Competences';
        $stmt = $this->pdo->query($sql);
        $competences_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $competences = [];

        foreach ($competences_data as $competence_data) {
            $competence = new Competence();
            $competence->setID($competence_data['ID']);
            $competence->setREFERENCE($competence_data['REFERENCE']);
            $competence->setCODE($competence_data['CODE']);
            $competence->setNOM($competence_data['NOM']);
            $competence->setDESCRIPTION($competence_data['DESCRIPTION']);
            $competences[] = $competence;
        }

        return $competences;
    }

    public function GetCompetence($competenceID)
    {
        $sql = "SELECT * FROM Competences WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competenceID]);
        $competence_data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($competence_data) {
            $competence = new Competence();
            $competence->setID($competence_data['ID']);
            $competence->setREFERENCE($competence_data['REFERENCE']);
            $competence->setCODE($competence_data['CODE']);
            $competence->setNOM($competence_data['NOM']);
            $competence->setDESCRIPTION($competence_data['DESCRIPTION']);
            return $competence;
        }

        return null;
    }

    public function DeleteCompetence($competenceID)
    {
        $sql = "DELETE FROM Competences WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$competenceID]);
    }

    public function UpdateCompetence(Competence $competence)
    {
        $sql = "UPDATE Competences SET REFERENCE = ?, CODE = ?, NOM = ?, DESCRIPTION = ? WHERE ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $competence->getREFERENCE(),
            $competence->getCODE(),
            $competence->getNOM(),
            $competence->getDESCRIPTION(),
            $competence->getID()
        ]);
    }
}








?>