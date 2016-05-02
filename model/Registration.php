<?php

class Registration extends User{

    protected $email;
    protected $password;

    public function create(){       // создание юзера
        self::$users = self::getUsers();
        foreach(self::$users as $k){
            if(($k->email == $this->email))return false;

        }

        $obj_prop = get_object_vars($this);
        $sql = 'INSERT INTO ' . static::getTable() . ' (email, password, salt, hash ) VALUES (:email, :password, :salt, :hash)';
        $dbc = new DB;
        $arr = [':email' => $obj_prop['email'], ':password' => $obj_prop['password'], ':salt' => $obj_prop['salt'], ':hash' => $obj_prop['hash'] ];
        $dbc->execute($sql,$arr);
        return false;



    }

    function addUser($email, $password, $repassword){       //добавление юзера
        if(isset($email) and isset($password) and isset($repassword) and $password == $repassword){
            $this->email = trim($email);
            $this->password = trim($password);
            $this->hash = $this->setHash();
            $this->create();
            }
        return false;

    }
    public function setHash(){ //хеширование пароля
        return $this->hash = password_hash($this->password, PASSWORD_DEFAULT);
    }
    function autoSignIn(){   //если есть куки, то вход автоматом всегда, если нет, то над ввестипароль

        if((isset($_COOKIE['email']) and isset($_COOKIE['hash'])) or (isset($_SESSION['email']) and isset($_SESSION['hash']))){
            $sgIn = new UserFactory();
            $userType = $sgIn->whoUser($_SESSION['email'], $_SESSION['hash']);
            return $userType;
        }
        return false;


    }

    function signIn($email, $password, $remember=null){ //если ввел пароль, то создается сессия и, возможно cookie, если $remember отлична от NULL
        if (isset($email) and isset($password)){
        $users = self::getAll();
                 foreach ($users as $user){
                    if ($user->email == $email and $user->password == $password){
                        $_SESSION['email'] = $email;
                        $_SESSION['hash'] = $user->hash;
                        if(isset($remember)){
                            setcookie('email', $email, time()+3600);
                            setcookie('hash', $user->hash, time()+3600);
                        }
                        return $user->email;
                    }
                }
            }

    return false;

    }
    function signOut($signOut){
        if(!is_null($signOut)){
            setcookie('email');
            setcookie('hash');
            unset($_SESSION['email']);
            unset($_SESSION['hash']);
        }
    }
}
