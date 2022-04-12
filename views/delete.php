<?php
session_start();
include "../classes/user.php";
$user     = new User;
$user_row = $user->getUser($_GET['user_id']);
$full_name = $user_row['first_name'] . " ". $user_row['last_name'];
if(isset($_POST['btn_delete'])){
    $user->deleteUser($user_id);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
</head>
<body>
    <?php
    include "nav-var.php";

    ?>

<main class="card w-25 mx-auto border-0 my-5">
            <div class="card-header bg-white border-0">
                <h2 class="card-title text-center text-danger h4 mb-0">Delete User</h2>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                <p class="fw-bold mb-0">Are you sure you want to delete "<?= $full_name ?>"</p>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                    </div>
                    <div class="col">
                        <form action="../actions/delete.php" method="post">
                            <input type="hidden" name="user_id" value="<?= $_GET['user_id']?>">
                            <button type="submit" class="btn btn-outline-danger w-100" name="btn_delete" >Delete</button>
                        </form>
                    </div>
                </div>
            </div>
</main>

<script src="https://kit.fontawesome.com/d8f00ce03d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdeli4r.ne3/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmt42MlQ4ikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
</body>
</html>