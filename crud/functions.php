<?php require "abstraction.php" ?>
<?php
// Database connection establishment
function connect_db()
{
    global $connection;
    $hostname = 'localhost';
    $username = 'root';
    $passward = '';
    $database = 'surveillance_mass_database';

    $connection = mysqli_connect($hostname, $username, $passward, $database);
    if (!$connection) {
        die('Connection Failed!' . mysqli_error($connection));
    } else {
        // echo 'Successfully Connected';
    }

}
connect_db();



// Write to the Database
function write_to_database()
{
    if (isset($_POST['enter'])) {

        global $connection;
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $birthdate = mysqli_real_escape_string($connection, $_POST['birthdate']);
        $gender_sex = mysqli_real_escape_string($connection, $_POST['gender_sex']);
        $gender_fuidity = mysqli_real_escape_string($connection, $_POST['gender_fuidity']);
        $qualification = mysqli_real_escape_string($connection, $_POST['qualification']);
        $social_points = mysqli_real_escape_string($connection, $_POST['social_points']);
        $courage = mysqli_real_escape_string($connection, $_POST['courage']);
        $knowledge = mysqli_real_escape_string($connection, $_POST['knowledge']);
        $diligence = mysqli_real_escape_string($connection, $_POST['diligence']);
        $expression = mysqli_real_escape_string($connection, $_POST['expression']);
        $understanding = mysqli_real_escape_string($connection, $_POST['understanding']);
        $height = mysqli_real_escape_string($connection, $_POST['height']);
        $weight = mysqli_real_escape_string($connection, $_POST['weight']);
        $social_links = mysqli_real_escape_string($connection, $_POST['social_links']);
        $skin_color = mysqli_real_escape_string($connection, $_POST['skin_color']);
        $race = mysqli_real_escape_string($connection, $_POST['race']);
        $image = mysqli_real_escape_string($connection, $_POST['image']);
        $IQ = mysqli_real_escape_string($connection, $_POST['IQ']);

        if (($name && $birthdate && $gender_sex && $gender_fuidity && $qualification && $social_points && $courage && $knowledge && $diligence && $expression && $understanding && $height && $weight && $social_links && $skin_color && $race && $image && $IQ)) {


            $query = "INSERT INTO citizens (name, birthdate, gender_sex, gender_fuidity, qualification, social_points, courage, knowledge, diligence, expression, understanding, height, weight, social_links, skin_color, race, image, IQ) ";

            $query .= "VALUES ('$name', '$birthdate', '$gender_sex', '$gender_fuidity', '$qualification', '$social_points', '$courage', '$knowledge', '$diligence', '$expression', '$understanding', '$height', '$weight', '$social_links', '$skin_color', '$race', '$image', '$IQ')";


            $result = mysqli_query($connection, $query);
            if (!$result) {
                die('Query Failed!' . mysqli_error($connection));
            } else {
                echo '<h1 id="notify">Query Successful</h1>';
            }


        } else {
            echo '<h1 id="notify">Empty fields</h1>';
        }
    }
}



// Variable initizlizer 



// $moon = ['name', 'birthdate', 'gender_sex', 'gender_fuidity', 'qualification', 'social_points', 'courage', 'knowledge', 'diligence', 'expression', 'understanding', 'height', 'weight', 'social_links', 'skin_color', 'race', 'image', 'IQ'];


// Read from the Database 

function read_from_database()
{
    global $connection;

    $query = "SELECT * FROM citizens";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
        echo '<br>';
        echo '<br>';

        // foreach ($row as $data) {
        //     echo $data;
        //     echo '<br>';
        // }
    }
    echo '<h1 id="notify">Query Successful</h1>';

}









?>