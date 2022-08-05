<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Main Menu (PHP)"?></title>
    <link rel="stylesheet" href="js/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Main Menu (PHP)<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
      </div>
    </nav>
    
    <main class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
        
    <?php echo "<h1 class='text-center my-5'>Main Menu (PHP)</h1>"; ?>
    <hr>
    <div class="list-group">
        <a href="01-hello-world.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">01</span> Hello World
        </a>
        <a href="02-info.php" target="_blank" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">02</span> Info PHP
        </a>
        <a href="03-comments.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">03</span> Comments
        </a>
        <a href="04-variables.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">04</span> Variables
        </a>
        <a href="05-strings.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">05</span> Strings
        </a>
        <a href="06-oper-arithmetics.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">06</span> Oper Arithmetics
        </a>
        <a href="07-oper-assignment.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">07</span> Oper Assigment
        </a>
        <a href="08-oper-comparison.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">08</span> Oper Comparison
        </a>
        <a href="09-oper-logics.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">09</span> Oper Logics
        </a>
        <a href="10-conditional-if.php" class="list-group-item list-group-item-action">
            <span class="badge rounded-pill bg-dark">10</span> Conditional If
        </a>
    </div>        
    </div>
    </div>
    </main>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>