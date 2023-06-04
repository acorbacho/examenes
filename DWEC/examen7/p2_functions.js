// Obtener un chiste aleatorio al cargar la página
function getJoke(url) {
  fetch(url)
    .then(function (response) {
      // Mostrar información de respuesta
      document.getElementById('response-status').textContent = 'Estado de respuesta: ' + response.status + ' ' + response.statusText;

      return response.json();
    })
    .then(function (data) {
      document.getElementById('response-date').textContent = 'Fecha de respuesta: ' + data.updated_at;
      document.getElementById('joke').innerHTML = data.value;
    });
}

// Obtener información del clima
function getWeather(url, key) {
  fetch(url + key)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      var weatherInfo = 'Ciudad: ' + data.name + ', Clima: ' + data.weather[0].description;
      document.getElementById('weather-info').textContent = weatherInfo;
      document.getElementById('last-update').textContent = 'Última actualización: ' + new Date().toLocaleString();
    });
}