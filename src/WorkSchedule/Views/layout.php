<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Schedule</title>
    <link rel="stylesheet" href="./assets/stylesheet.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo">WorkSchedule</a>
        <nav>
            <a href="/">Home</a>
            <a href="/">Schedule</a>
            <a href="/">Service Sheet</a>
            <a href="/">Settings</a>
        </nav>

        <nav>
            <a href="/">{{username}}</a>
        </nav>
    </header>
    <?php echo $content; ?>
</body>
</html>