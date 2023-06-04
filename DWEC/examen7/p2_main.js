function main(jsonData) {
  const urlChuckNorris = jsonData.urlChuckNorris;
  const urlOpenWeather = jsonData.urlOpenWeather;
  // Actualizar el clima cada 20 segundos
  setInterval(getWeather.bind(null, urlOpenWeather, api_key), 20000);

  // Obtener un chiste y el clima al cargar la página
  getJoke(urlChuckNorris);
  getWeather(urlOpenWeather, api_key);

  // Obtener un nuevo chiste al hacer clic en el botón
  document.getElementById('new-joke-btn').addEventListener('click', getJoke.bind(null, urlChuckNorris));

  // Mostrar/ocultar información de respuesta al hacer clic en el botón
  document.getElementById('ocultar').addEventListener('click', function () {
    document.getElementById('response-info').classList.toggle('hidden');
  });

}
main({
  "urlChuckNorris": "https://api.chucknorris.io/jokes/random",
  "urlOpenWeather": "https://api.openweathermap.org/data/2.5/weather?q=Cambados&appid=",
})