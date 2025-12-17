<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }


    public function load_section($page='home'){

    
    $page = preg_replace('/[^a-z0-9_\-]/', '', $page);
    if ($page == 'home') {
    }
    $allowed_pages = [

        'home'=> 'pages/home',
        'about'=> 'pages/about',
        'services'=> 'pages/services',
    ];

    if (!array_key_exists($page, $allowed_pages)) {
        $page = 'home';
    }
        return view($allowed_pages[$page]);

    }
}
