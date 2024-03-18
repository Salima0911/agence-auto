<?php

namespace App\Models;

use PDO;
use Config\Db;


class Vehicule
{
    private ?int $id = null;
    private string $marque;
    private string $modele;
    private int $annee;


    public function __construct(?int $id, string $marque, string $modele, int $annee)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }


    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of marque
     *
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Get the value of modele
     *
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * Get the value of annee
     *
     * @return int
     */
    public function getAnnee(): int
    {
        return $this->annee;
    }


    /**
     * Set the value of marque
     *
     * @param string $marque
     *
     * @return self
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }


    /**
     * Set the value of modele
     *
     * @param string $modele
     *
     * @return self
     */
    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Set the value of annee
     *
     * @param int $annee
     *
     * @return self
     */
    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }


    public function save() : void
    {
        $pdo = Db::getConnection();
        $sql = "INSERT INTO vehicule (id,marque,modele,annee) VALUES (?,?,?,?) ";
        $statement = $pdo->prepare($sql);
        $statement->execute([$this->id, $this->marque, $this->modele, $this->annee]);
    }


    public function update(): void

    {
        $pdo = Db::getConnection();
        $sql = 'UPDATE vehicule SET marque =?, modele=?, annee =? WHERE id=?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$this->id, $this->marque, $this->modele, $this->annee, $this->id]);
    }
    public function delete($id) :void
    {
        $pdo = Db::getConnection();
        $sql = 'DELETE FROM vehicule WHERE id=?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
    }
    public function getById($id) :object
    {
        $pdo = Db::getConnection();
        $sql = 'SELECT *FROM  vehicule WHERE id=?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if($row){
            return new Vehicule($row['id'],$row['marque'],$row['modele'], $row['annee']);
        }else{
            return null;

        }
    }
    public function getAll():array
    {
        $pdo = Db::getConnection();
        $sql = 'SELECT FROM  vehicule ';
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $vehicules = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($vehicules as $row){
            $vehicule =new Vehicule($row['id'],$row['marque'],$row['modele'], $row['annee']);
            $vehicules[] = $vehicule;
        }
       
            return $vehicules;

        }
    
}
