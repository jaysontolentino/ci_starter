
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
         <a class="navbar-brand" href="#"><?=app_name()?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('/') ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('about') ?>">About</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <?= auth()->name  ?>
        </a>
        <div class="dropdown-menu">

          <?= form_open('signout') ?>
          <button type="submit" class="dropdown-item" >Sign Out</a>
          <?= form_close() ?>

        </div>
      </li>
    </ul>

      </div>
    </div>
</nav>