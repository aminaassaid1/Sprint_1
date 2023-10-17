<?php


class Competence
{
    private $ID;
    private $REFERENCE;
    private $CODE;
    private $NOM;
    private $DESCRIPTION;

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function getREFERENCE()
    {
        return $this->REFERENCE;
    }

    public function setREFERENCE($REFERENCE)
    {
        $this->REFERENCE = $REFERENCE;
    }

    public function getCODE()
    {
        return $this->CODE;
    }

    public function setCODE($CODE)
    {
        $this->CODE = $CODE;
    }

    public function getNOM()
    {
        return $this->NOM;
    }

    public function setNOM($NOM)
    {
        $this->NOM = $NOM;
    }

    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }

    public function setDESCRIPTION($DESCRIPTION)
    {
        $this->DESCRIPTION = $DESCRIPTION;
    }
}


