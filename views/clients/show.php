</form>
<h1 class="text-center">Client information: <?= $client['name'] ?> </h1>
    <ul>
        
            <table class="table table-sm table-success table-striped table-bordered">
            <thead>
            <tr>
             <th scope="col">Name</th>
             <th scope="col">Surname</th>
             <th scope="col">Account number</th>
             <th scope="col">Personal ID</th>
             <th scope="col">Account`s amount</th>
           
            
            </tr>
            </thead>
            <tbody>
                    <tr>
                    <td scope="row"><?= $client['name'] ?></th>
                    <td><?= $client['surname'] ?></td>
                    <td><?= $client['account'] ?></td>
                    <td><?= $client['idPerson'] ?></td>
                    <td><?= $client['amount'] ?></td>
                    </tr>
            </tbody>
            </table>
       
    </ul>


