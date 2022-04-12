<nav class="navbar navbar-expand-lg text-white bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-icon"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbar-main">
                <a href="dashboard.php" class="nav-link fw-bold text-white">
                <h2>The Company</h2>
                </a>
                <ul class="navbar-nav ms-5">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                      </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="register.php" class="nav-link fw-bold text-secondary"><?=$_SESSION['username']?></a>
                    </li>
                    <li class="nav-item">
                        <a href="../actions/logout.php" class="btn btn-sm nav-link text-danger">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
