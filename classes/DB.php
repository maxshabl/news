<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 09.02.16
 * Time: 22:21
 */



class DB {

    public $connect;
    public $user = 'root';
    public $pass = '';




    public function __construct(){

        if(empty($this->connect)){
            $this->connect = new PDO('mysql:host=localhost;dbname=news2', $this->user, $this->pass);
            echo 'connect exist'.'<br>';

        }


    }

    public function execute($sql, $param = []){

        $stmt = $this->connect->prepare($sql);

        $stmt->execute($param);
         /* запрос с псевдопеременными Ex:  ->prepare('SELECT name, colour, calories
         FROM fruit
         WHERE calories < :calories AND colour = :colour');
         $param[] задается в виде: array(':calories' => $calories, ':colour' => $colour)
          */

    }


    public function getId(){

        return $this->connect->lastInsertId();
    }

    public function getAll($class, $sql, $param = []){

        $sth = $this->connect->prepare($sql);
        $sth->execute($param);
        $result = $sth->fetchAll(PDO::FETCH_CLASS, $class);
        return $result;
        //print_r($result);
        //echo '<br>';
    }

    public function getOne($class, $sql, $param = []){

        return $this->getAll($class, $sql, $param)[0];
    }
}

//$sql = 'SELECT * FROM  News';


    //print_r($obg);

