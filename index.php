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
 <?php session_unset();}
    ?>
    
    <div class="card card-body">

<form action="save.php" method="POST">
    <div class="form-grup">
        <input type="text" name="title" class="form-control"
        placeholder="task title" autofocus>

    </div>
    <div class="form-group">
        <textarea name="description"  rows="2" class="form-control"
         placeholder="task description"></textarea>
    </div>
    <input type="submit" class="btn btn-success btn-block"
    name="save_task" value="save task">
</form>
     
    </div>
    </div>




    <div class="col-md-8">
        <table class="table table-bordered">
<thead>
    <tr>
        <th>title</th>
        <th>description</th>
        <th>create_  ad</th>
        <th>acciones</th>
    </tr>
</thead>
<tbody>


<?php
$query = "SELECT * FROM task";
$result_tasks = mysqli_query($conn, $query);

while ($row =mysqli_fetch_array($result_tasks)) {?>
<tr>
    <td> <?php echo $row["title"]?></td>
    <td> <?php echo $row["description"]?></td>
    <td> <?php echo $row["create_ad"]?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
        <i class="fas fa-edit">edit</i>
    </a>
        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn succe">
        <i class="fas fa-trash-alt">delete</i>
    </a>
    </td>
</tr>




<?php } ?>
 


</tbody>

        </table>
    </div>

</div>

