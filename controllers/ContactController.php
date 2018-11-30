<?php

class Contactcontroller
{
    public function __construct()
    {
        render('home/contact', 
        [
            'title' => "Contact PAGE",
            'subtitle' => "information Contact page",
            ]);
    }
}