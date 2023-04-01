<form class="mt-4">
<h1 class="text-center">Clients List</h1>
    <ul>
        <?php foreach($clients as $client) : ?>
            <table class="table table-sm table-success table-striped table-bordered">
            <thead>
            <tr>
             <th scope="col">Name</th>
             <th scope="col">Surname</th>
             <th scope="col">Account number</th>
             <th scope="col">Personal ID</th>
             <th scope="col">Account`s amount</th>
             <th colspan="3" class="table-active">
             <form action="<?= URL ?>clients/delete/<?= $client['id'] ?>" method="post">
                <button type="submit" class="btn btn-danger">Delete Account</button>
            </form>
            </th>
            </tr>
            </thead>
            <tbody>
                    <tr>
                    <td><?= $client['name'] ?></td>
                    <td><?= $client['surname'] ?></td>
                    <td><?= $client['account'] ?></td>
                    <td><?= $client['idPerson'] ?></td>
                    <td><?= $client['amount'] ?></td>
                    <th scope="col"><a class="btn btn-success" href="<?= URL ?>clients/show/<?= $client['id'] ?>" class="btn btn-info">Show info</a></th>
                    <th scope="col"><a class="btn btn-success" href="<?= URL ?>clients/edit/<?= $client['id'] ?>" class="btn btn-success">Add funds</a></th>
                    <th scope="col"><a class="btn btn-success" href="<?= URL ?>clients/edit/<?= $client['id'] ?>" class="btn btn-success">Deduct funds</a></th>
                    </tr>
            </tbody>
            </table>
        <?php endforeach ?>
    </ul>


