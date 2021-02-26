<?php

require('posts.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $posts[$_GET['id']]['title'] ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center"><?= $posts[$_GET['id']]['title'] ?></h1>
        <a href="/php_course" class="btn btn-outline-primary mb-4">Back</a>
        <article>
            <?= $posts[$_GET['id']]['text'] ?>
        </article>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>