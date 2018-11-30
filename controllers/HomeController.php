<?php
// HomeController.php

class HomeController extends Controller
{
    protected $title;
  
    public function index()
    {  
        $title = 'Our <b>Alcohol shop</b>';
        $posts = [];
        $this->_view->render('home/index', ['title'=>$title, 'posts'=>$posts]);
    }

    public function title($title)
    {  
        $this->title = $title || '<b>Home Page</b>';
        return $this->title;
    }
}






// <?php
// class HomeController
// {
//     public function __construct()
//     {
//         render('home/index', 
//         [
//             'title' => "Home PAGE",
//             'subtitle' => "information home page",
//             ]);
//     }
// }








//require_once VIEWS.'home/index.php';

