<?php
use App\Services\Auth;
?>
<?php if (isset($hideNav)) return ?>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?=URL ?>">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=URL ?>clients/create">Create new account</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=URL ?>clients">Clients List</a>
  </li>
  <li class="nav-item nav justify-content-end">
  <?php if (Auth::get()->isAuth()) : ?>
      <a class="nav-link log"><?= Auth::get()->getName() ?></a>
        <form class="nav-link" action="<?= URL ?>logout" method="post">
            <button type="submit" class="btn btn-light">Logout</button>
        </form>
        <?php else : ?>
            <a class="nav-link" href="<?= URL ?>login">Login</a>
        <?php endif ?>
  </li>
</ul>