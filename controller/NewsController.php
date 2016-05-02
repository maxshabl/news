<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 09.02.16
 * Time: 18:53
 */

class NewsController
{
    protected $view;


    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../views/news/');
        $reg = new Registration();
    }


    public function actionNewsToday()
    {
        //echo '<br>'.'It is actionNewsToday'.'<br>';
        //$this->view->newsTd = News::getAll();

        echo $this->view->render('NewsToday');

    }

    public function actionIndex()
    {


        /*$email = 'user3';
        $pass = 1234;
        $reg1 = new Registration();
        $reg1->addUser($email, $pass);
        $a = new News();
        $id = 1;
        $this->view->newsTd  = News::getAll();
        print_r($this->view->newsTd);*/


        echo $this->view->render('news');

    }


    public function actionTest(){

        echo 'Это actionTest'.'<br>';
    }

    public function actionArticles(){

        echo $this->view->render('articles');
    }

    public function actionRegistration(){



        echo $this->view->render('registration');
    }

    public function actionSignIn(){

        echo 'action registration'.'<br>';
        echo $this->view->render('signIn');
    }


}

