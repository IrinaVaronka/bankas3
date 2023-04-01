<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1 class="text-center">Add Funds</h1>
                </div>
                <div class="card-body">
                    <form class="form-create" action="<?= URL ?>clients/edit/<?= $client['id'] ?>" method="post">
                        <label>Client`s name: </label>
                        <input type="text" name="name" class="form-control" readonly value="<?= $client['name'] ?>">
                        <label>Client`s surname: </label>
                        <input type="text" name="surname" class="form-control" readonly value="<?= $client['surname'] ?>">
                        <label>Add funds, EUR: </label>
                        <input type="text" name="amount" class="form-control"  value="<?= $client['amount'] ?>">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        
          
   
