<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/getUsers.php');
?>
<main class="container">
    <h1 class="m-4 text-uppercase">Zoznam uživateľov</h1>
   <ul class="list-group">
       <li class="list-group-item list-group-item-action active d-flex row">
           <span class="col-1"> ID.</span>
           <span class="col-1"> Avatar</span>
           <span class="col-3"> Username</span>
           <span class="col-3"> Surname</span>
           <span class="col-3"> Email</span>
           <span class="col-1"> dfaafsdfs</span>
       </li>
   </ul>
   <?php foreach ($users as $user) : ?>
       
        <li class="list-group-item list-group-item-action d-flex row align-items-center">
            <span class="text-danger col-1"> <?php echo $user["id"] ?></span>
            <div class="col-1">
                <img src="../images/<?php echo $user["avatar"]?>" alt="<?php echo $user["username"]?>" style="width: 30px">
            </div>
            <span class="col-3"> <?php echo $user["username"] ?></span>
            <span class="col-3"> <?php echo $user["surname"] ?></span>
            <span class="col-3"> <?php echo $user["email"] ?></span>
            <div class="col-1 d-flex justufy-content-center">
                <a class="btn btn-danger" href="../scripts/delete_user.php?id=<?php echo $user["id"]?>;" class="btn btn-danger">Delete</a>
                <a href="../pages/profile.php?id=<?php echo $user["id"]?>;" class="btn btn-success">Edit</a>
        </li>
   
   <?php endforeach ?>
   
   
</main>
<?php include('../parts/footer.php'); ?>