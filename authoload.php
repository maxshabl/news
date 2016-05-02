<?php
 function __autoload($class)
 {
   // echo $class.'<br>';

if(file_exists(__DIR__.'./controller/'.$class.'.php')){
         require_once (__DIR__.'./controller/'.$class.'.php');
     }
     if(file_exists(__DIR__.'./model/'.$class.'.php')){
         require_once (__DIR__.'./model/'.$class.'.php');
     }
     if(file_exists(__DIR__.'./classes/'.$class.'.php')){
         require_once (__DIR__.'./classes/'.$class.'.php');
     }
     if(file_exists(__DIR__.'./classes/authorization/'.$class.'.php')){
         require_once (__DIR__.'./classes/authorization/'.$class.'.php');
     }
     if(file_exists(__DIR__.'./classes/abstract/'.$class.'.php')){
         require_once (__DIR__.'./classes/abstract/'.$class.'.php');
     }



    // if(file_exists(__DIR__.'./views/news/news.php'))
     {
     //    require_once (__DIR__.'./views/news/news.php');
     }


}

/*function __autoload($class) {
    $dirs = array(
//C:\OpenServer\domains\news\views\news\news.php
        __DIR__ . '/model/',
        __DIR__ . '/controller/',
        __DIR__ . '/classes/',

    );
    foreach ($dirs as $dir) {
        if (file_exists($dir . $class . '.php')) {
            require_once($dir . $class . '.php');
        }
    }
}*/







