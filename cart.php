<?php session_start(); ?>
<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php       if(empty($_SESSION['user_name'])){
  
  if ($_SERVER['REQUEST_URI'] !== "/" || $_SERVER['REQUEST_URI'] !== "/login.php") {
          echo 'Unauthorized access without connexion';
          header('HTTP/1.1 401 Unauthorized');
          exit();}}
?>



<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here. <br>
        <?php if (!empty($_SESSION['panier'])) : ?>
        <strong> <?php foreach ($_SESSION['panier']['libelleProduit'] as $nameProduct) {
            echo $nameProduct . "<br>";
            }; ?>
        </strong>
        <?php endif ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

