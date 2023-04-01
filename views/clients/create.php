<div class="container col-5 mt-4">
        <form action="<?=URL ?>clients/create" class="form-create" method="post">
            <h2 class="text-center">Create new account</h2>
            <input type="text" name="name" class="form-control" placeholder="Name (from 3 characters)" required>
            <input type="text" name="surname" class="form-control" placeholder="Surname" required>
            <input type="text" name="account" class="form-control" readonly placeholder="Account number" 
            value="<?= 'LT' . '60' . rand(0, 9)  . rand(0, 9)  . rand(0, 9)  . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)  . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)  . rand(0, 9) . rand(0, 9) . rand(0, 9)  . rand(0, 9) . rand(0, 9) ?>">
            <input type="text" name="idPerson" class="form-control" placeholder="Personal identification number" required>
            <input type="text" name="amount" class="form-control" readonly placeholder="Amount" value="0">
            <button type="submit" class="btn btn-lg btn-primary btn-block">Add new account</button>
        </form>
</div>