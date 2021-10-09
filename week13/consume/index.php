<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consuming API</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@400;500;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: 'Noto Sans Display', sans-serif;
    }
  </style>
</head>

<body>
  <div class="header">My Weather App - 19IT035 Krutik Gadhiya</div>
  <form class="location">
    <input required type="text" name="city" class="input">
    <button type="submit" name="getWeather" class="button">GO!</button>
  </form>
  <?php
  if (isset($_GET['getWeather'])) {
    $city = $_GET['city'];
    $weatherUrl = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=248249feaaf37fd426460b1713b85c47&units=metric";
    // $res = file_get_contents($weatherUrl);    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $weatherUrl);
    $res = curl_exec($ch);
    $res = json_decode($res, true);
    // echo "<pre>";
    // print_r($res);
    // echo "</pre>";
    $iconUrl = "http://openweathermap.org/img/wn/" . $res['weather'][0]['icon'] . "@2x.png";
    $seaLevel = @$res['main']['sea_level'] ? $res['main']['sea_level'] : "&#x268A;";
    $grndLevel = @$res['main']['grnd_level'] ? $res['main']['grnd_level'] : "&#x268A;";
    $gust = @$res['wind']['gust'] ? $res['wind']['gust'] . " knots" : "&#x268A;";
  ?>
    <main class="main-container">
      <div class="main-weather">
        <div class="icon"><img src=<?php echo $iconUrl ?> alt=""></div>
        <h1 class="temperature"><?php echo $res['main']['temp']; ?>°C</h1>
        <h2 class="h2"><?php echo $res['weather'][0]['main']; ?></h2>
        <h3 class="h3"><?php echo $res['weather'][0]['description']; ?></h3>
        <div class="other-details">
          <p class="property">Feels Like: <span class="value"><?php echo $res['main']['feels_like']; ?> °C</span></p>
          <p class="property">MAX Temperature: <span class="value"><?php echo $res['main']['temp_max']; ?> °C</span></p>
          <p class="property">MIN Temperature: <span class="value"><?php echo $res['main']['temp_min']; ?> °C</span></p>
          <p class="property">Pressure: <span class="value"><?php echo $res['main']['pressure']; ?> hPa</span></p>
          <p class="property">Humidity: <span class="value"><?php echo $res['main']['humidity']; ?> %</span></p>
          <p class="property">Sea Level: <span class="value"><?php echo $seaLevel; ?></span></p>
          <p class="property">Ground Level: <span class="value"><?php echo $grndLevel; ?></span></p>
          <p class="property">Visiblity: <span class="value"><?php echo $res['visibility']; ?> m</span></p>
        </div>
      </div>
      <div class="details">
        <div class="wind-container">
          <div class="other-details">
            <p class="property">Speed: <span class="value"><?php echo $res['wind']['speed']; ?> m/s</span></p>
            <p class="property">Deg: <span class="value"><?php echo $res['wind']['deg']; ?> °</span></p>
            <p class="property">Gust: <span class="value"><?php echo $gust; ?></span></p>
          </div>
        </div>
        <div class="city-info">
          <div class="other-details">
            <p class="property">Country: <span class="value"><?php echo $res['sys']['country']; ?></span></p>
            <p class="property">City: <span class="value"><?php echo $res['name']; ?></span></p>
            <p class="property">Timezone: <span class="value"><?php echo $res['timezone']; ?></span></p>
          </div>
        </div>
      </div>
    </main>
  <?php

  }
  ?>
</body>

</html>