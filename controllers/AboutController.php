<?php

class AboutController
{
    public function __construct()
    {
        render('home/about', 
        [
            'title' => "About PAGE",
            'subtitle' => "information about page",
            ]);
    }
}
// require_once VIEWS.'home/about.php';