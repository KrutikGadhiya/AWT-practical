<?php
// this function is for debugging
function r($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

$API_KEY = '0ee877f124ac6b19a8a5f8f76287b0a1';
$msg = '';

// print_r($_POST);
if (isset($_POST['btn-submit'])) {

    if (!empty($_POST['city'])) {

        $city = $_POST['city'];
        $urlforcast = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$API_KEY";

        $json = file_get_contents($urlforcast);

        $json = json_decode($json, true);
        //  r($json);
    } else {
        $msg = 'Please Enter City Name !!!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        if (!empty($msg)) {
            echo $msg;
        }
        ?>
    </div>
    <br />
    <form method="post">
        Enter City Name: <input type="text" name="city">
        <input type="submit" name="btn-submit"><br />

    </form>

    <div>
        <?php
        echo $json['main']['temp'];
        ?>
    </div>
</body>

</html>
<?php
// r($data);
// echo $json->weather[0]->main;