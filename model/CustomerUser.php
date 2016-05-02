<?php
/**
 * Created by PhpStorm.
 * User: Octopulus
 * Date: 14.03.16
 * Time: 0:26
 */
class CustomerUser extends GuestUser {

    function __construct(){

        echo 'Я зарегистрирован';

    }
    function hasCreatePermission($user, $hash){
        return true;


    }
    function hasModifyPermission($id){

        return true;
    }
    // Методы определения прав доступа
    function hasReadPermission(){
        return true;
    }

    function hasDeletePermission(){
        return true;
    }
    // Дополнительные настройки интерфейса
    function wantsFlashInterface(){
        return true;
    }

    function getUserId($user,$hash){
        $this->select($user)->hash;

          $userId = $this->select($user)->id;
          $userHash = $this->select($user)->hash;
           if($userHash == $hash) return $userId; else return false;


    }
}