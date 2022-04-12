

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body class="bg-light">
   <div style="height: 100vh">
   <div class="row h-100 m-0">
       <div class="card w-25 my-auto mx-auto">
           <div class="card-header bg-white border-0">
               <h1 class="text-center">REDISTER</h1>
           </div>
           <div class="card-body">
               <form action="../actions/register.php" method="post">
                   <label for="first-name" class="form-label">First Name</label>
                   <input type="text" name="first_name" id="first-name" class="form-control mb-2" required autofocus>

                   <label for="last-name" class="form-label">Last Name</label>
                   <input type="text" name="last_name" id="last-name" class="form-control mb-2" required autofocus>

                   <label for="username" class="form-label">Username</label>
                   <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" required>

                   <label for="password" class="form-label">Password</label>
                   <input type="password" name="password" id="password" class="form-control" maxlength="8" required aria-descibedby="password-info" required>
                   <div id="password-info" class="form-text mb-5">Password must be at least 8 characters long.</div>

                   <button type="submit" class="btn btn-success w-100">REGISTER</button>
               </form>

               <p class="text-center mt-3 small">Registered already? <a href="../views/">Log in.</a></p>
           </div>
       </div>
   </div>
</div>

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