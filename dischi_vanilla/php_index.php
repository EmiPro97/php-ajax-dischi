<?php
    require_once __DIR__ . '/./database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- Main css link -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Window title -->
    <title>DischiPHP</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="logo-wrap">
                <a href="#">
                    <img src="../img/logo.png" alt="page-logo">
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <section class="cards container flex-wrap justify-center">
            <?php foreach ($database as $album) { ?>
                <div class="row">
                    <div class="card flex-column align-center">
                        <div class="img-wrap">
                            <img src=<?php echo $album['poster'] ?> alt="album-img">
                        </div>
                        <h2 class="album-title"><?php echo $album['title'] ?></h2>
                        <div class="album-author"><?php echo $album['author'] ?></div>
                        <div class="album-date"><strong><?php echo $album['year'] ?></strong></div>
                        <div class="album-genre"><?php echo $album['genre'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>