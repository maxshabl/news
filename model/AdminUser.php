<?php
/**
 * Created by PhpStorm.
 * User: Octopulus
 * Date: 14.03.16
 * Time: 0:28
 */
class AdminUser extends CustomerUser {

    function __construct(){

        echo 'Я админ';
    }


    function hasCreatePermission(){

        return true;
    }
    function hasModifyPermission(){
        return true;
    }
    function hasDeletePermission(){
        return true;
    }

}