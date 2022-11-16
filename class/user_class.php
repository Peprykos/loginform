<?php
class user  {
    private int $id;
    private string $login;
    private string $haslo;
    private string $imie;
    private string $nazwisko;

    public function __construct(string $login, string $haslo)
    {
        $this->login = $login;
        $this->password_hash = $haslo;
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

    }
    public function logout()    {    

    }
    public function register()  {

    }
}
?>