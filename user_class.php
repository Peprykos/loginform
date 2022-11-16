<?php
class user  {
    private $db
    private int $id;
    private string $login;
    private string $haslo;
    private string $imie;
    private string $nazwisko;

    
    public function __construct(string $login, string $haslo)
    {
        $this->login = $login;
        $this->password = $haslo;

        global $db;
        $this-> = &$db
    }
    public function isAuth() : bool {   

        if(isset($this->id) && $this->id != null)
            return true;
        else
            return false;
    }
    public function login() {   
        $query = "SELECT * FROM user WHERE login = ? LIMIT 1";
        $preparedQuery = $this->db->prepare($query)
        $preparedQuery->bind_param('s', $this->login);
        $preparedQuery->execute();
        $result = $preparedQuery->get_result();
        if($result->num_rows == 1)  {
            $row = $result->fetch_assoc();
            if(password_verify($this->haslo, $row['haslo']))    {
            $this->id = $row['id'];
            $this->imie = $row['imie'];
            $this->nazwisko = $row['nazwisko'];
        }
    }
    
    }
    public function logout()    {    

    }
    public function register()  {
        $query = "INSERT INTO user VALUES (NULL, ?, ?, ?. ?)";
        $preparedQuery = $this->db->prepare($query);
        $passwordhash = password_hash($this->password, PASSWORD_ARGON2I);
        if(!isset($this->imie))
            $this->imie = "";
        if(!isset($this->nazwisko))
            $this->nazwisko = "",
        $preparedQuery->bind_param('ssss', $this->login,
                                            $passwordhash
                                            $this->imie
                                            $this->naziwsko);
        $preparedQuery->execute()
    }
}
?>