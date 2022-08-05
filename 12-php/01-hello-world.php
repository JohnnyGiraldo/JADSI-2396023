<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Hello World </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Hello World</h1>"; ?>
                <hr>
                <?php
                print('<p class="text-start text-muted lh-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus dignissimos porro aliquid, asperiores dolor voluptas saepe totam laborum in, consequuntur consequatur enim quaerat tenetur, beatae magni nam corrupti nostrum eligendi.
                Consequuntur magnam molestiae temporibus laudantium cum omnis dolorum mollitia tempore, aut, cumque vero pariatur praesentium ut. Eos, consequatur, saepe, illum blanditiis alias ea quos corrupti natus beatae maxime voluptates. Temporibus?
                Nemo alias consequuntur eveniet cum. Obcaecati veniam ullam corporis suscipit harum aut totam quaerat, libero eos vel fugit laudantium et, eius quod mollitia autem, placeat cumque possimus maiores voluptas iste?
                Nobis rem doloremque ab possimus doloribus debitis laboriosam facere voluptatum suscipit quo sed soluta consectetur ipsam, consequuntur dolor reiciendis adipisci voluptas inventore corrupti ut veritatis corporis. Est provident voluptatem quia.
                Eos mollitia similique, aut nulla blanditiis at adipisci, suscipit esse error aliquid deserunt dicta laborum ducimus tempora vitae rem repellat corporis non totam saepe provident voluptatum? Nam neque rem libero!
                Quisquam, quaerat! Laudantium accusamus perferendis, enim mollitia dolorem doloremque eligendi, expedita iusto necessitatibus, recusandae excepturi fugiat molestias eum voluptatum dignissimos sed atque. Reiciendis hic saepe itaque praesentium fuga est delectus!
                Harum nesciunt, magnam amet maiores sequi itaque, aut quo accusamus dolorum explicabo quia molestias deleniti perferendis, doloremque rerum? Inventore quibusdam molestias aliquid! Laudantium error illo accusantium unde aperiam praesentium quas.
                Nobis porro doloribus debitis officiis, nostrum assumenda eaque perspiciatis alias cupiditate unde ratione adipisci provident aliquam repudiandae. Labore commodi debitis iusto delectus ipsam natus sunt excepturi nam, voluptates, sint eaque?
                Iste iure molestiae perspiciatis eaque quos repudiandae, maxime delectus, ullam consequuntur corrupti eum adipisci obcaecati excepturi vitae recusandae natus iusto pariatur impedit repellendus autem in tempore velit numquam asperiores. Quidem.
                ')
                ?>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>