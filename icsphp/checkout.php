<?php include_once('includes/header.php');?>
<?php print_r($_POST); ?>
<div class="container">
    <div class="row">
      <?php  
      $aaaa = $_POST['AdmissionNo'];  
      echo $aaaa; 
      ?>
      <?php print_r($_POST); ?>
    </div>
</div>

<?php include_once('includes/footer.php');?>