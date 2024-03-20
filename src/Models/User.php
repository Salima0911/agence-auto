<?php

namespace App\Models;


use PDO;
use Config\Db;



class User
{
    private ?int $id = null;
    private string $name ;
    private string $email;
    private string $password;


    public function __construct(?int $id, string $name, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    


    public function save(): void
    {
        $pdo = Db::getConnection();
        $sql = "INSERT INTO user (id,name,email,password) VALUES (?,?,?,?) ";
        $statement = $pdo->prepare($sql);
        $statement->execute([$this->id, $this->name, $this->email, $this->password]);
    }
    public function update(): void
    {
        $pdo = Db::getConnection();
        $sql = 'UPDATE user SET name= ?,email = ? ,password = ? WHERE id = ?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$this->name, $this->email, $this->password, $this->id]);
    }

    static function delete($id): void
    {
        $pdo = Db::getConnection();
        $sql = 'DELETE FROM user WHERE id = ?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
    }
    static function getById($id): object
    {
        $pdo = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE id = ?';
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new User($row['id'], $row['name'], $row['email'], $row['password']);
        } else {
            return null;
        }
    }
    static function getAll(): array
    {
        $pdo = Db::getConnection();
        $sql = 'SELECT * FROM user';
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $dbusers = $statement->fetchAll(PDO::FETCH_ASSOC);
        $users=[];

        foreach ($dbusers as $row) {
            $user = new User($row['id'], $row['name'], $row['email'], $row['password']);
            $users[] = $user;
        }

        return $users;
    }


    

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get the value of password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


    /**
     * Set the value of password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    }

