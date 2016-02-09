<!DOCTYPE Html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="script.js"></script>


  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>

<body>

<?php include("header.php");?>
<?php require("sidebar.php");?>

<section class="container">
    <h1>My favorite table</h1>
  <div class="row">
    <div class="col-md-6">
      <?php include("table/jeanne.php");?>
    </div>
    <div class="col-md-6">
      <?php include("table/yannic.php");?>
    </div>
    <div class="col-md-6">
      <?php include("table/jerome.php");?>
    </div>
    <div class="col-md-6">
      <?php include("table/karine.php");?>
    </div>
  </div>
</section>

<?php include("footer.php");?>


</body>

</html>
