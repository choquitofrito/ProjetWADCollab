<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bonjour les WADS!</h1>

    <?php
    include "./vendor/autoload.php";

    use Faker\Factory;

    $faker = Factory::create();
    echo $faker->paragraph();

    ?>


</body>

</html>