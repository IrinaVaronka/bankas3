<div class="container col-5">
        <form action="<?=URL ?>clients/create" class="form-create" method="post">
            <h2>Create new account</h2>
            <input type="text" name="name" class="form-control" placeholder="Name (from 3 characters)" required>
            <input type="text" name="surname" class="form-control" placeholder="Surname" required>
            <button type="submit" class="btn btn-lg btn-primary btn-block">Add new account</button>
        </form>
</div>