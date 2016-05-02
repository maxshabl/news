<?php
/**
 * Created by PhpStorm.
 * User: Octopulus
 * Date: 14.03.16
 * Time: 0:27
 */
class GuestUser extends User {

    function __construct(){

       // echo 'Я гость';
        print_r($this->select('user'));
    }

}