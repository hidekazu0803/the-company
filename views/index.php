

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body class="bg-light">

<div class="container mx-auto w-50 border border-1 border-dark">
        <div class="display-2 text-center my-4"><h1>LOGIN</h1></div>
        <div class="mx-auto mt-3">
            <form action="../actions/login.php" method="post">
                <input type="text" name="username" class="form-control border border-3 border-top-0 border-end-0 border-start-0 border-primary rounded-0 mt-3" placeholder="USERNAME"
                required autofocus>
                <input type="text" name="password" class="form-control border border-3 border-top-0 border-end-0 border-start-0 border-dark rounded-0 mt-3" maxlength="8" placeholder="PASSWORD"
                required>

                <button type="submit" name="login" class="form-cotrol btn btn-success w-100 mt-5">LOG IN</button>

                <div class="row text-center mt-3">
                    <div class><p class="text-decoration-underline"><a href="register.php">Create an Account</a> </p></div>
                </div>

            </form>

        </div>
    </div>
</body>
</html>