<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>

    <?php
        $dsn = 'mysql:host=db;dbname=db_symfony;port=3306;charset=utf8mb4';
        $pdo =new PDO($dsn,'user','1234');
        var_dump($pdo)
    ?>

</body>
</html>