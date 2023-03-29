<?php
namespace App\Controllers;
use App\App;
use App\DB\Json;

class ClientsController {

    public function index()
    {
        $clients = (new Json)->showAll();
        return App::views('clients/index', [
            'title' => 'Clients List',
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return App::views('clients/create', [
            'title' => 'New account'
        ]);
    }

    public function store()
    {
        $data = [];
        $data['name'] = $_POST['name'];
        $user['surname'] = $_POST['surname'];
        (new Json)->create($data); 
        return App::redirect('clients');
    }



}