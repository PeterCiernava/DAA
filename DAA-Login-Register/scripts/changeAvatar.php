<?php
include('/parts/header.php');
include('getUsers.php');

?>

<main class = "container">
    <h1 class = "pt-3">
        Profile uzivatela <?php echo $user["username"] ?>
</h1>

<div class="d-flex">
    <div class="img-container">
        <div class = "d-flex flex-column">
            <img class = "roinded img-profile" src =/images/<?php echo $surname?>>
            <button class="btn btn-danger"> Zmenit titulny obrazok</button>
    </div>
</div>
<div class = "info-zone">
<p>
        <span class = "text-bold" > Username: </span>
        <?php echo $user ['username']?> 
    </p>
    <p>
        <span class = "text-bold" > Email: </span>
        <?php echo $user ['email']?> 
    </p>
    <p>
        <span class = "text-bold" > Zaregistrovany: </span>
        <?php echo $user ['created_at']?> 
    </p>
    <button class="btn btn-secondary">
    