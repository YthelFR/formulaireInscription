<?php

class User
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_mail;
    private $_password;

    public function __construct(string $nom, string $prenom, string $mail, string $password, int|string $id = "à créer")
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail);
        $this->setPassword($password);
    }

    public function getId(): int
    {
        return $this->_id;
    }

    public function setId(int|string $id): void
    {
        if (is_string($id) && $id == "à créer") {
            $this->_id = $this->idAleatoire();
        } else {
            $this->_id = $id;
        }
    }

    public function getNom(): string
    {
        return $this->_nom;
    }

    public function setNom(string $nom): void
    {
        $this->_nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->_prenom = $prenom;
    }

    public function getMail(): string
    {
        return $this->_mail;
    }

    public function setMail(string $mail): void
    {
        $this->_mail = $mail;
    }

    public function getPassword(): string
    {
        return $this->_password;
    }

    public function setPassword(string $password): void
    {
        $this->_password = $password;
    }

    public function passwordVerify(string $password): bool
    {
        return password_verify($password, $this->getPassword());
    }

    public function idAleatoire(): int
    {
        return random_int(0, 1000000);
    }

    // private function creerNouvelId(): int{
    //     $Database = new Database();
    //     $utilisateurs = $Database->getAllUtilisateurs();
    //     $IDs = [];
    //     foreach ($utilisateurs as $utilisateur){
    //         $IDs[] = $utilisateur->getId();
    //     }
    //     $i = 1;
        // $unique = false;
        // while($unique === false){}
        // in_array($, $IDs);
    // }

    public function getObjectToArray(): array
    {
        return [
            'id' => $this->getId(),
            'nom' => $this->getNom(),
            'prenom' => $this->getPrenom(),
            'mail' => $this->getMail(),
            'password' => $this->getPassword(),
        ];
    }
}
