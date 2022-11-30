<?php
class user  {
    private int $id;
    private mysqli $db;
    private string $login;
    private string $haslo;
    private string $imie;
    private string $nazwisko;

    public function __construct(string $login, string $haslo)   {
        $this->login = $login;
        $this->password = $haslo;
        $this->imie = "";
        $this->nazwisko = "";
        global $db;
        $this-> = &$db;
    }
    
    public function register() : bool   {
        $passwordHash = password_hash($this->password, PASSWORD_ARGON2I);
        $query = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?)";
        $preparedQuery = $this->db->prepare($query); 
        $preparedQuery->bind_param('ssss', $this->login, $passwordHash, 
                                            $this->firstName, $this->lastName);
        $result = $preparedQuery->execute();
        return $result;
    }

    public function login() : bool {   
        $query = "SELECT * FROM user WHERE login = ? LIMIT 1";
        $preparedQuery = $this->db->prepare($query); 
        $preparedQuery->bind_param('s', $this->login);
        $preparedQuery->execute();
        $result = $preparedQuery->get_result();
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $passwordHash = $row['password'];
            if(password_verify($this->password, $passwordHash)) {
                $this->id = $row['id'];
                $this->imie = $row['firstName'];
                $this->nazwisko = $row['lastName'];
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function setImie(string $imie)   {
        $this->firstname = $imie;
    }
    public function setnazwisko(string $nazwisko)   {
        $this->lastname = $nazwisko;
    }
    public function getname() : string  {
        return $this->firstname . " " . $this->lastname;
        }
}
?>