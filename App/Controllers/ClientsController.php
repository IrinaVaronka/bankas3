<?php
namespace App\Controllers;
use App\App;

class ClientsController {

    public function index()
    {
        return App::views('home/index', [
            'title' => 'Home'
        ]);
    }

}