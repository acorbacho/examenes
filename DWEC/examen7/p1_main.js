function main(jsonData) {
  let urlJokeText = jsonData.urlJokeText;
  let urlCategories = jsonData.urlCategories;

  // Evento para mostrar chiste aleatorio al enviar el formulario de búsqueda
  document.getElementById('search-form').addEventListener('submit', function (evt) {
    evt.preventDefault();
    var searchText = document.getElementById('search-text').value;
    searchJoke(searchText, urlJokeText);
  });

  // Obtener un chiste aleatorio
  fetch('https://api.chucknorris.io/jokes/random')
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      displayJoke(data);
    });

  // Obtener todas las categorías y mostrarlas
  fetch('https://api.chucknorris.io/jokes/categories')
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      displayCategories(data, urlCategories);
    });
}

main({
  "urlJokeText": "https://api.chucknorris.io/jokes/search?query=",
  "urlCategories": "https://api.chucknorris.io/jokes/random?category="
});