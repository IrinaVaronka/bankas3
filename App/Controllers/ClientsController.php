<?php
namespace App\Controllers;
use App\App;
use App\DB\Json;
use App\Services\Auth;
use App\Services\Messages;

class ClientsController {

    public function __construct()
    {
        if (!Auth::get()->isAuth()) {
            App::redirect('login');
            die;
        }
    }
    
    
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
            'title' => 'New Client'
        ]);
    }

    public function store()
    {
        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['account'] = $_POST['account'];
        $data['idPerson'] = $_POST['idPerson'];
        $data['amount'] = $_POST['amount'];

        $clients = (new Json)->showAll();
        foreach($clients as $client) {
            if (strlen($_POST['name']) < 3 || strlen($_POST['surname']) < 3) {
                Messages::msg()->addMessage('Name or surname is too short.', 'warning');
                return App::redirect('clients/create');
            }
            if(!preg_match ("/^[a-zA-z]*$/", $_POST['name'] )) {  
                Messages::msg()->addMessage('Only letters are allowed in name.', 'warning' );  
                return App::redirect('clients/create');
            }
            if(!preg_match ("/^[a-zA-z]*$/", $_POST['surname'] )) {  
                Messages::msg()->addMessage('Only letters are allowed in name.', 'warning' );  
                return App::redirect('clients/create');
            }
            if (strlen($_POST['idPerson']) < 11) {
                Messages::msg()->addMessage('Personal ID should have 11 digits.', 'warning');
                return App::redirect('clients/create');
            }
            if ($client['idPerson'] == (int) $_POST['idPerson']) {
                Messages::msg()->addMessage('Such personal ID already exist.', 'warning');
                return App::redirect('clients/create');
            }
    }

        (new Json)->create($data);
        Messages::msg()->addMessage('New client was created', 'success');
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
            'title' => 'Edit Amount',
            'client' => $client
        ]);
    }

    public function update($id)
    {
        $client = (new Json)->show($id);
        $currentBalance = $client['amount'];
        $newBalancePlus = $currentBalance + $_POST['amount'];
        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['account'] = $client['account'];
        $data['idPerson'] = $client['idPerson'];
        $data['amount'] = $newBalancePlus;
        (new Json)->update($id, $data); 
        Messages::msg()->addMessage('Amount was added', 'warning');
        return App::redirect('clients');
    }

    public function editDeduct($id)
    {
        $client = (new Json)->show($id);

        return App::views('clients/editDeduct', [
            'title' => 'Deduct Amount',
            'client' => $client
        ]);
    }

    public function updateDeduct($id)
    {
        $client = (new Json)->show($id);
        if ($client['amount'] < $_POST['amount']) {
            Messages::msg()->addMessage('You want to deduct too much!', 'warning');
            return App::redirect('clients');
        }

        
        $currentBalance = $client['amount'];
        $newBalanceMinus = $currentBalance - $_POST['amount'];
        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['account'] = $client['account'];
        $data['idPerson'] = $client['idPerson'];
        $data['amount'] = $newBalanceMinus;

        
        (new Json)->update($id, $data); 
        Messages::msg()->addMessage('Amount was deducted', 'warning');
        return App::redirect('clients');
    }

    public function delete($id) //neveikia valodacija!
    {
        $client = (new Json)->show($id);
        if ($client['amount'] > 0) {
            Messages::msg()->addMessage('Client account not empty!', 'warning');
            return App::redirect('clients');
        }
        (new Json)->delete($id);
        Messages::msg()->addMessage('The client was deleted!', 'success');
        return App::redirect('clients');
    }
}


