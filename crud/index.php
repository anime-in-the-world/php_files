<?php include "functions.php" ?>
<?php connect_db(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container_1">
        <h1>Mass Information Realtime Suvellance Database</h1>
        <div class="container_11">
            <form action="index.php" method="POST">
                <div class="queen_seg">
                    <div class="seg_1">
                        <label for="name">Name</label>
                        <input name="name" type="text" id="">
                        <label for="birthdate">Birth Date</label>
                        <input name="birthdate" type="text">
                        <label for="gender_sex">Gender/Sex</label>
                        <input name="gender_sex" type="text">
                        <label for="gender_fuidity">Identify As</label>
                        <input name="gender_fuidity" type="text">
                        <label for="qualification">Qualification</label>
                        <input name="qualification" type="text">
                        <label for="social_points">Social Points</label>
                        <input name="social_points" type="text">
                        <label for="courage">Courage</label>
                        <input name="courage" type="text">
                        <label for="knowledge">Knowledge</label>
                        <input name="knowledge" type="text">
                        <label for="diligence">Diligence</label>
                        <input name="diligence" type="text">
                    </div>
                    <div class="seg_2">
                        <label for="expression">Expression</label>
                        <input name="expression" type="text">
                        <label for="understanding">Understanding</label>
                        <input name="understanding" type="text">
                        <label for="height">Height</label>
                        <input name="height" type="text">
                        <label for="social_links">Social Links</label>
                        <input name="social_links" type="text">
                        <label for="weight">Weight</label>
                        <input name="weight" type="text">
                        <label for="skin_color">Skin Color</label>
                        <input name="skin_color" type="text">
                        <label for="race">Race</label>
                        <input name="race" type="text">
                        <label for="image">Image</label>
                        <input name="image" type="text">
                        <label for="IQ">IQ</label>
                        <input name="IQ" type="text">
                    </div>
                </div>
                <input name="enter" type="submit" value="Enter">
            </form>
        </div>
    </div>
    <div class="container_2">
        <h1>Other Pages</h1>
        <div class="seg_21">
            <ul>
                <li><a href="read.php">Library</a></li>
                <li><a href="#">Edit</a></li>
                <li><a href="#">Delete</a></li>
            </ul>
        </div>
    </div>
    <div class="container_3">
        <?php write_to_database(); ?>
    </div>
</body>

</html>