<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma Demo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once __DIR__ . '/classes/Shape.php';

    $shape = new Shape(100, 100, 'red');
    echo $shape->render();
    ?>
</body>
</html>