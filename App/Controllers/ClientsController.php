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
        $data['surname'] = $_POST['surname'];
        (new Json)->create($data); 
        return App::redirect('clients');
    }

    public function show($id)
    {
        $client = (new Json)->show($id);

        return App::views('clients/show', [
            'title' => 'Client Page',
            'client' => $client
        ]);
    }

    public function edit($id)
    {
        $client = (new Json)->show($id);

        return App::views('clients/edit', [
            'title' => 'Edit Client',
            'client' => $client
        ]);
    }

    public function update($id)
    {
        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        
        (new Json)->update($id, $data); 
       
        return App::redirect('clients');
    }

}