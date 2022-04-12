<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
</head>
<body>
    <?php
    include "nav-var.php"

    ?>

<main class="container py-5">

            <h2 class="h3 text-muted">USER LIST</h2>

            <div class="table table-responsive-lg">
               <table class="table table-hover mt4">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>USERNAME</th>
                            <th style="width: 95px;"></th> <!--for action button-->
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                         include "../classes/user.php";
                         $user = new User;
                           $user_result = $user->getAllUser();
                           while($user_row = $user_result->fetch_assoc()){
                            //    print_r($user_row);
                        ?>
                                <tr>
                                   <td><?= $user_row['id']  ?></td>
                                   <td><?= $user_row['first_name']  ?></td>
                                   <td><?= $user_row['last_name']  ?></td>
                                   <td><?= $user_row['username'] ?></td>
                                   <td>
                                       <!-- ?user_id = variable -->
                                       <a href="edit.php?user_id=<?= $user_row['id']?>" class="btn btn-outline-secondary btn-sm">
                                           <i class="fas fa-pencil-alt"></i>
                                       </a>

                                       <a href="delete.php?user_id=<?= $user_row['id']?>" class="btn btn-outline-danger btn-sm">
                                           <i class="fas fa-trash"></i>
                                       </a>
                                   </td>
                               </tr>




                             <?php }?>
                    </tbody>
               </table>
            </div>
        </main>


<script src="https://kit.fontawesome.com/d8f00ce03d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdeli4r.ne3/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmt42MlQ4ikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
</body>
</html>