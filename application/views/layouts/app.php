<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=app_name()?></title>

    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/lumen.css')?>">

  </head>

<body>

  <?php if(authenticated()): ?>
  <?php include_once APPPATH . 'views/partials/navbar.php';?>
  <?php endif; ?>

  <div class="container mt-4">
  <?php include_once APPPATH . $content_view;?>
  </div>

  <script src="<?=base_url('assets/bootstrap/js/jquery.min.js')?>"></script>
  <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

</body>
</html>