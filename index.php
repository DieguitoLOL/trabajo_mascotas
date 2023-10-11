<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Veterineria</title>
</head>
<body>
<h1>hola a todos</h1>
    <?php
        require_once __DIR__ . "/vendor/autoload.php";
        use Dotenv\Dotenv; 
        
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        echo $_ENV["USER"];
    ?>
</body>
</html>