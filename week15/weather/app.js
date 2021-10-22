const URI = weatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=$city&appid=248249feaaf37fd426460b1713b85c47&units=metric`
// const icon = `http://openweathermap.org/img/wn/${icon}@2x.png`

const urlWithCity = (cty = 'Halol') => `https://api.openweathermap.org/data/2.5/weather?q=${cty}&appid=248249feaaf37fd426460b1713b85c47&units=metric`
const getIcon = (icon = '01d') => `http://openweathermap.org/img/wn/${icon}@2x.png`

$(document).ready(() => {
  $('#form').submit(function (event) {
    event.preventDefault();
    let city = $('#input').val()
    console.log(city)
    $.ajax({
      url: urlWithCity(city),
      type: 'get',
      dataType: 'json',
      beforeSend: () => {
        console.log("loading start")
        $(".loading").show('slow')
      },
      success: (res) => {
        $(".loading").hide('slow')
        console.log(res)
        $("#img").attr("src", getIcon(res.weather[0].icon))
        $("#temp").text(res.main.temp + "°C")
        $("#main").text(res.weather[0].main)
        $("#desc").text(res.weather[0].description)
        $("#feelslike").text(res.main.feels_like + "°C")
        $("#tempMax").text(res.main.temp_max + "°C")
        $("#tempMin").text(res.main.temp_min + "°C")
        $("#pressure").text(res.main.pressure + " hPa")
        $("#humidity").text(res.main.humidity + " %")
        $("#seaLevel").text(res.main.sea_level)
        $("#grndLevel").text(res.main.grnd_level)
        $("#vis").text(res.visibility)
        $("#speed").text(res.wind.speed + ' m/s')
        $("#deg").text(res.wind.deg + ' °')
        $("#gust").text(res.wind.gust + ' °')
        $("#cntry").text(res.sys.country)
        $("#cityName").text(res.name)
        $("#timezone").text(res.timezone)
      }
    })
  })
})