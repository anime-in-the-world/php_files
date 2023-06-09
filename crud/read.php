<?php include "functions.php" ?>
<?php connect_db(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container_2">
        <h1>Mass Information Realtime Suvellance Database</h1>
        <div class="seg_21">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Edit</a></li>
                <li><a href="#">Delete</a></li>
            </ul>
        </div>
    </div>
    <div class="data_showcase">
        <h1>Library</h1>
        <hr>
        <div>
            <?php read_from_database(); ?>
        </div>
    </div>
</body>

</html>