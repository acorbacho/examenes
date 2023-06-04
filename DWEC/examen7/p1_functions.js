
// Función para buscar un chiste por texto
function searchJoke(searchText, url) {
  var searchUrl = url + searchText;
  fetch(searchUrl)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      document.getElementById('search-joke').textContent = data.result[0].value;
    });
}

// Función para mostrar todas las categorías
function displayCategories(categories, url) {
  var categoriesList = document.getElementById('categories');
  categories.forEach(function (category) {
    var listItem = document.createElement('li');
    var link = document.createElement('a');
    link.textContent = category;
    var categoryUrl = url + category;
    link.href = categoryUrl;
    listItem.appendChild(link);
    categoriesList.appendChild(listItem);
  });
}

// Función para mostrar un chiste aleatorio
function displayJoke(joke) {
  document.getElementById('joke').textContent = joke.value;
  document.getElementById('last-update').textContent = 'Última actualización: ' + new Date(joke.updated_at);
  document.getElementById('category').textContent = 'Categoría: ' + (joke.categories != '' ? joke.categories : 'Ninguna');
}

