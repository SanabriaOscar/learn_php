<?php
include("db.php");
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $query ="SELECT * FROM  task WHERE  id = $id";
$result =mysqli_query($conn, $query);
if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_array($result);
    $title =$row ['title'];
    $description =$row ['description'];
}
if(isset($_POST['update'])){
   $id = $_GET ['id'];
   $title =$_POST ['title'];
   $description = $_POST['description'];
   $query= "UPDATE task set title='$title', description= '$description' WHERE id=$id";
   mysqli_query($conn, $query);
   $_SESSION['message']= 'task update successfully';
   $_SESSION['message_type']='warning';
   header("location: index.php");
}

}
    

?>
<?php include("../crud/includes/header.php") ?>
<div class="container p-4">
    <div class="row">
<div class="col-md-4 mx-auto">
    <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="$_POST">

        <div class="form-grup"></div>
        <input type="text" name="title" value="<?php  echo $title;?>" class="form-control" placeholder="update title">
    <div class="form grup">
        <textarea name="description"  rows="2" class="form-contol" placeholder="update description"> <?php  echo $description;?></textarea>
    </div>    
    <button class="btn btn-success" name="update">

    </button>
    </form>
    </div>



</div>
    </div>
</div>