function clearThumbnails() {
  const thumbnailContainer = document.getElementById('thumbnail-container');
  thumbnailContainer.innerHTML = '';
}

function getImages(query, count) {
  const apiUrl = `https://api.unsplash.com/search/photos?query=${query}&per_page=${count}&client_id=${api_key_2}`;

  return fetch(apiUrl)
    .then(function (response) {
      if (!response.ok) {
        throw new Error('Error al obtener las imágenes');
      }
      return response.json();
    })
    .then(function (data) {
      return data.results;
    })
}

function displayThumbnails(images, container) {
  images.forEach(function (image) {
    const thumbnail = createThumbnail(image);
    container.appendChild(thumbnail);
  });
}

function createThumbnail(image) {
  const thumbnail = document.createElement('div');
  thumbnail.classList.add('thumbnail');

  const imageLink = document.createElement('a');
  imageLink.href = image.links.html;
  imageLink.target = '_blank';

  const img = document.createElement('img');
  img.src = image.urls.thumb;
  img.alt = image.alt_description;

  imageLink.appendChild(img);
  thumbnail.appendChild(imageLink);

  const resolutionLinks = createResolutionLinks(image);
  resolutionLinks.forEach(function (link) {
    thumbnail.appendChild(link);
  });

  return thumbnail;
}

function createResolutionLinks(image) {
  const links = [];
  const resolutions = ['pequeña ', 'mediana ', 'full'];

  resolutions.forEach(function (resolution) {
    const link = document.createElement('a');
    link.href = image.urls[resolution];
    link.target = '_blank';
    link.textContent = resolution;
    links.push(link);
  });

  return links;
}


function searchImages() {
  const searchInput = document.getElementById('search-input').value;
  const numberSelect = document.getElementById('number-select').value;
  const thumbnailContainer = document.getElementById('thumbnail-container');

  clearThumbnails();

  getImages(searchInput, numberSelect)
    .then(function (images) {
      displayThumbnails(images, thumbnailContainer);
    })
    .catch(function (error) {
      console.error(error);
    });
}
