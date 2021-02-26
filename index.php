<?php
/*const FAMILY = 'Jordan';
$hello_world = 'Hello world!';
$hello = 'Hello';
$name = '<b>Vlad</b>';
$name = "$hello <b>Vlad</b>";
$hello_to_name = $hello . ', ' . $name;
$num = 10;
$num_2 = 2;

$arr = [10, 'hello world', 50, 'apple'];

echo '<pre>';
print_r($arr);
echo '</pre>';

$arr[1] = 2;

echo '<pre>';
print_r($arr);
echo '</pre>';

$arr2 = [
    'item1' => 10,
    'item2' => 'hello world',
    'item3' => 50,
    'item4' => 'apple',
];

echo $arr2['item2'];

*/
require('posts.php');
//echo $posts[2]['description'];
// $hello = 'Hello';
// if (10 > 2 && $hello == 'hello') {
//     echo 'Yesss';
// } else {
//     echo 'Nooo';
// }

function helloWorld($num1 = 1)
{
    echo 'hello world ' . $num1;
}

helloWorld(3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Blog</h1>
        <form action="form.php" method="post">
            <input type="text" name="email">
            <button type="submit">Send</button>
        </form>
        <?php
        for ($i = 0; $i < 3; $i++) :
        ?>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><?= $posts[$i]['title'] ?></h5>
                    <p class="card-text"><?= $posts[$i]['description'] ?></p>
                    <a href="post.php?id=<?= $i ?>" class="btn btn-primary">Read more</a>
                </div>
            </div>
        <?php
        endfor;
        ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>