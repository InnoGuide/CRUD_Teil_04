<?php
   include_once "head.php";
?>
<div class="row">
    <div class="col">
       <?php new App\classes\product_mvc_class\Control(); ?>
    </div>
    <div class="col">
       <?php new App\classes\user_mvc_class\Control(); ?> 
    </div>
</div>
<?php
     include_once "foot.php";
?>

