<?php
   include_once "head.php";
?>
<div class="row">
    <div class="col-3 mt-5 bg-white">
        <h1>User</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, natus odit dolorum aspernatur, facilis minus corporis veniam sed optio praesentium blanditiis incidunt autem voluptatem? Eveniet recusandae maiores quae ea doloremque!
        </p>    
    </div>
    <div class="col-9">
        <?php new App\classes\user_mvc_class\Control(); ?>
    </div>
</div>
<?php
     include_once "foot.php";
?>