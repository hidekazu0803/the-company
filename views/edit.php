<?php
session_start();

include "../classes/user.php";

$user     = new User;
$user_row = $user->getUser($_GET['user_id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit User</title>
  </head>
  <body>
     <?php include "nav-var.php"?>
    <main class="container" style="padding-top: 80px">
        <div class="card w-50 mx-auto border-0">
            <h2 class="text-center">EDIT USER</h2>

        <div class="card-body">
            <form action="../actions/edit.php" method="post">
                   <input type="hidden" name="user_id" value="<?= $_GET['user_id'] ?>">
                   <label for="first-name" class="form-label">First Name</label>
                   <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="<?= $user_row['first_name'] ?>" required autofocus>

                   <label for="last-name" class="form-label">Last Name</label>
                   <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="<?= $user_row['last_name'] ?>" required autofocus>

                   <label for="username" class="form-label">Username</label>
                   <input type="text" name="username" id="username" class="form-control mb-5 fw-bold" maxlength="15" value="<?= $user_row['username'] ?>" required>

                   <div class="text-end">
                       <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                       <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                   </div>
            </form>
        </div>
    </div>

    </main>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>