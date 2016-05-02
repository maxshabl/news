<?php
// включаем автозапуск
require_once(__DIR__ . './authoload.php');

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$partPath = explode( '/', $path);
//в зависимости от GET обращаемся к контроллеру и методам
$contr = $partPath[1]?$partPath[1].'Controller': 'NewsController';
$act = $partPath[2]?'action'.$partPath[2] : 'actionIndex';


//echo $contr.'<br>'.$act.'<br>';

//вызываем соответствующий контроллер и действие
$a = new $contr();
$a->$act();

?>
