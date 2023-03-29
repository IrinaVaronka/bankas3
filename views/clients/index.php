<table class="table table-sm table-success table-striped table-bordered">
            <thead>
                <h1>Clients List</h1>
            <tr>
                <?php foreach($clients as $client) : ?>
             <th scope="col">Name</th>
             <th scope="col">Surname</th>
            </tr>
            </thead>
            <tbody>
                    <tr>
                    <td>
                        <?= $client['name'] ?>
                        <?= $client['surname'] ?>
                    </td>
                    <?php endforeach ?>
                    </tr>
            
            </tbody>
            
             
            
           
            </table>