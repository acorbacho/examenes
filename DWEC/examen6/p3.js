// Historial de posiciones
let historial = [];

// Función para estimar la posición
function estimarPosicion() {
  if (navigator.geolocation) {
    // Obtener la posición actual del usuario
    navigator.geolocation.getCurrentPosition(function (posicion) {
      // Mostrar la posición en la página
      let coordenadas = "Latitud: " + posicion.coords.latitude + ", Longitud: " + posicion.coords.longitude;
      let altitud = "Altitud: " + posicion.coords.altitude;
      let precision = "Precisión: " + posicion.coords.accuracy + " metros";
      document.getElementById("coordenadas").textContent = coordenadas;
      document.getElementById("altitud").textContent = altitud;
      document.getElementById("precision").textContent = precision;

      // Crear un enlace al mapa
      let mapaUrl = "https://www.google.com/maps?q=" + posicion.coords.latitude + "," + posicion.coords.longitude;
      let enlaceMapa = document.getElementById("enlace-mapa");
      enlaceMapa.href = mapaUrl;
      enlaceMapa.textContent = "Ver en Google Maps";

      // Agregar la posición al historial
      let fecha = new Date().toLocaleString();
      let posicionHistorial = {
        fecha: fecha,
        coordenadas: coordenadas,
        altitud: altitud,
        precision: precision
      };
      historial.push(posicionHistorial);
    });
  } else {
    alert("Lo siento, tu navegador no admite geolocalización");
  }
}

// Función para seguir la posición del usuario
function seguirPosicion() {
  if (navigator.geolocation) {
    // Obtener la posición actual del usuario y mostrarla en la página
    navigator.geolocation.getCurrentPosition(function (posicion) {
      let coordenadas = "Latitud: " + posicion.coords.latitude + ", Longitud: " + posicion.coords.longitude;
      let altitud = "Altitud: " + posicion.coords.altitude;
      let precision = "Precisión: " + posicion.coords.accuracy + " metros";
      let fecha = new Date().toLocaleString();
      let posicionActual = {
        fecha: fecha,
        coordenadas: coordenadas,
        altitud: altitud,
        precision: precision
      };
      document.getElementById("coordenadas").textContent = coordenadas;
      document.getElementById("altitud").textContent = altitud;
      document.getElementById("precision").textContent = precision;

      // Agregar la posición al historial
      historial.push(posicionActual);
      let listaHistorial = document.getElementById("historico");
      let itemHistorial = document.createElement("li");
      itemHistorial.textContent = fecha + ": " + coordenadas + ", " + altitud + ", " + precision;
      listaHistorial.appendChild(itemHistorial);
    });
    // Establecer un intervalo de 10 segundos para seguir la posición
    setInterval(seguirPosicion, 10000);
  } else {
    alert("Lo siento, tu navegador no admite geolocalización");
  }
}

// Función para iniciar la aplicación
function iniciarApp() {
  // Verificar si hay un historial guardado en localStorage
  if (localStorage.getItem("historial")) {
    historial = JSON.parse(localStorage.getItem("historial"));
    let listaHistorial = document.getElementById("historico");
    for (let i = 0; i < historial.length; i++) {
      let itemHistorial = document.createElement("li");
      itemHistorial.textContent = historial[i].fecha + ": " + historial[i].coordenadas + ", " + historial[i].altitud + ", " + historial[i].precision;
      listaHistorial.appendChild(itemHistorial);
    }
  }
  // Asignar eventos a los botones
  document.getElementById("btn-estimar").addEventListener("click", estimarPosicion);
  document.getElementById("btn-seguir").addEventListener("click", seguirPosicion);

  // Mostrar el historial en la página
  let listaHistorial = document.getElementById("historico");
  for (let i = 0; i < historial.length; i++) {
    let itemHistorial = document.createElement("li");
    itemHistorial.textContent = historial[i].fecha + ": " + historial[i].coordenadas + ", " + historial[i].altitud + ", " + historial[i].precision;
    listaHistorial.appendChild(itemHistorial);
  }
}

// Función para guardar el historial en localStorage al cerrar la página
window.addEventListener("beforeunload", function () {
  localStorage.setItem("historial", JSON.stringify(historial));
});

// Iniciar la aplicación al cargar la página
window.addEventListener("load", iniciarApp);