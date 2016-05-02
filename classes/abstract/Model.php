<?php

/**
 * Created by PhpStorm.
 * User: Octopulus
 * Date: 21.02.16
 * Time: 19:10
 */

abstract class Model{

    protected static $table = 'article';
    //статические методы для работы с таблицей
    public static function getTable(){
    return static::$table;
    }

    public static function getAll(){

        $sql = 'SELECT * FROM '. static::getTable();
        $class = static::class;
        $dbc = new DB;
        return $dbc->getAll($class,$sql);
    }

    public static function getOne($id){

        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE  id=:id';
        $class = static::class;
        $dbc = new DB;
        $arr = [':id'=>$id];
        return $dbc->getOne($class,$sql,$arr);

    }



    public function insert(){
    // производим вставку из свойств объекта
        $obj_prop = get_object_vars($this);

        $sql = 'INSERT INTO ' . static::getTable() . ' (title, content, user_id ) VALUES (:title, :content, :user_id)';
        $dbc = new DB;
        $arr = [':title' => $obj_prop['title'],':content' => $obj_prop['content'], ':user_id' => $obj_prop['user_id'] ];
        if($obj_prop['title'] and $obj_prop['content']){
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

        $sql = 'UPDATE ' . static::getTable() . ' SET  title = :title, content = :content WHERE id = :id';
        $obj_prop = get_object_vars($this);
        $dbc = new DB;
        $arr = [':id' => $obj_prop['id'], ':title' => $obj_prop['title'], ':content' => $obj_prop['content']];
        if($obj_prop['title'] and $obj_prop['content'] and $obj_prop['id']){
            $dbc->execute($sql,$arr);
        }else {echo 'obj propety NULL' ;}

    }
    public function select($email){

        return static::getOne($email);
    }


}

