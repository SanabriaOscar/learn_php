<?php
include("db.php")
?>
<?php
include("../crud/includes/header.php")
?>
<?php
include("../crud/includes/footer.php")
?>
<div class="container p-4">
    <div class="col-md-4">
    <?php

    if(isset($_SESSION["message"])){?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?=$_SESSION["message"]?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 <?php session_unset() }
    ?>
    
    <div class="card card-body">

<form action="save.php" method="POST">
    <div class="form-grup">
        <input type="text" name="title" class="form-control"
        placeholder="título de la tarea" autofocus>

    </div>
    <div class="form-grup">
        <textarea name="description"  rows="2" class="form-control"
         placeholder="Descripción de la tarea"></textarea>
    </div>
    <input type="submit" class="btn btn-success btn-block"
    name="Guardar_tarea" value="Guardar tarea">
</form>
     
    </div>
    </div>




    <div class="col-md-8">
        
    </div>

</div>

