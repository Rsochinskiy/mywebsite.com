<?php
// HomeController.php

class ShopController extends Controller
{
    protected $title;
  
    public function index()
    {  
        $title = 'Our <b>Store</b>';
        $posts = [];
        $this->_view->render('home/shop', ['title'=>$title, 'posts'=>$posts]);
    }

    public function title($title)
    {  
        $this->title = $title || '<b>Shop Page</b>';
        return $this->title;
    }
}
