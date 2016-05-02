<?php


class UserFactory extends User{
    protected static $table = 'user';
    protected static $users;


    //статические методы для работы с таблицей


    public function whoUser($email, $hash){

        self::$users = self::getUsers();
        foreach(self::$users as $k){
            if($k->email == 'max-vvvv@yandex.ru' and $k->hash == $hash) return new AdminUser('max-vvvv@yandex.ru');
            if($k->email == $email and $k->hash == $hash) return new CustomerUser($email);
        }

        return new guestUser('Guest');
    }



}

/*function boolToStr($b){
    if($b == true){
        return "Да\n";
    }else{
        return "Нет\n";
    }
}
function displayPermissions(User $obj){
    print "Права доступа пользователя " . $obj->getName() . ":\n";
    print "Чтение: " . boolToStr($obj->hasReadPermission());
    print "Изменение: " . boolToStr($obj->hasModifyPermission());
    print "Удаление: " . boolToStr($obj->hasDeletePermission());
}
function displayRequirements(User $obj){
    if ($obj->wantsFlashInterface()) {
        print "Для пользователя ".$obj->getName()." требуется Flash-интерфейс\n";
    }
}
$logins = array("John", "Mike", "Vasya");
foreach($logins as $login){
    displayPermissions(UserFactory::Create($login));
    displayRequirements(UserFactory::Create($login));
}*/
