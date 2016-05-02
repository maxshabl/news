<?php
abstract class User {

    protected static $table = 'user';
    protected static $users;
    protected $email;
    protected $password;
    protected $salt = 'salt';
    protected $hash;
    protected $id;





    // Методы определения прав доступа
    function hasReadPermission(){
        return true;
    }
    function hasCreatePermission(){
        return false;
    }
    function hasModifyPermission(){
        return false;
    }
    function hasDeletePermission(){
        return false;
    }
    // Дополнительные настройки интерфейса
    function wantsFlashInterface(){
        return true;
    }



//установка свойств
    public static function getUsers(){
        static::$users=static::getAll();
        return static::$users;
    }

    public static function getTable(){
        return static::$table;
    }

//статические методы для работы с таблицей
    public static function getAll(){

        $sql = 'SELECT * FROM '. static::getTable();
        $class = static::class;
        $dbc = new DB;
        return $dbc->getAll($class,$sql);
    }

    public static function getOne($email){

        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE  email=:email';
        $class = static::class;
        $dbc = new DB;
        $arr = [':email'=>$email];
        return $dbc->getOne($class,$sql,$arr);

    }
    /*public static function getUser($email, $pass){

        $sql = 'SELECT email, password FROM ' . static::getTable() . ' WHERE  email=:email, password=:pass';
        $class = static::class;
        $dbc = new DB;
        $arr = [':email'=>$email, ':pass'=>$pass];
        return $dbc->getOne($class,$sql,$arr);

    }*/

//динамические методы для работы с записями в таблицу User


    public function insert(){
        // производим вставку из свойств объекта
        $obj_prop = get_object_vars($this);

        $sql = 'INSERT INTO ' . static::getTable() . ' (email, password, salt, hash ) VALUES (:email, :password, :salt, :hash)';
        $dbc = new DB;
        $arr = [':email' => $obj_prop['email'],':salt' => $obj_prop['salt'], ':hash' => $obj_prop['hash'] ];
        if($obj_prop['email'] and $obj_prop['password'] and $obj_prop['salt'] and $obj_prop['hash']){
            $dbc->execute($sql,$arr);

        }else {echo 'obj propety NULL' ;}

    }
    public function delete(){
        //удаление по id свойства объекта
        $sql = 'DELETE FROM ' . static::getTable() . ' WHERE id = :id';
        $obj_prop = get_object_vars($this);
        $dbc = new DB;
        $arr = [':id' => $obj_prop['id']];
        if($obj_prop['id']){
            $dbc->execute($sql,$arr); //or die ('String not exist');
            // echo 'String exist';
        }else {
            echo 'obj property NULL';
        }

    }

    public function update(){

        $sql = 'UPDATE ' . static::getTable() . ' SET  email = :email, password = :password, salt = :salt, hash = :hash WHERE id = :id';
        $obj_prop = get_object_vars($this);
        $dbc = new DB;
        $arr = ['email' => $obj_prop['email'], ':password' => $obj_prop['password'], ':salt' => $obj_prop['salt'], ':hash' => $obj_prop['hash']];
        if($obj_prop['email'] and $obj_prop['password'] and $obj_prop['salt']and $obj_prop['hash']){
            $dbc->execute($sql,$arr);
        }else {echo 'obj propety NULL' ;}

    }
    public function select($email){ //выборка по email

        return static::getOne($email);
    }






}