// Cual es la UAS (agente de usuario)?
document.getElementById("uas").innerHTML = navigator.userAgent;

// Cual es el sistema operativo del usuario?
document.getElementById("so").innerHTML = navigator.userAgentData.platform;

// Qué versión de navegador está utilizando (o renderizado HTML)?
document.getElementById("version").innerHTML = navigator.appVersion;

// Qué tamaño de memoria tiene el equipo?
document.getElementById("memoria").innerHTML = navigator.deviceMemory + " GB";

// Qué lenguaje es el predeterminado del usuario?
document.getElementById("lenguaje").innerHTML = navigator.language;

// Estás cargando la página online o local (sin conexión)?
document.getElementById("conexion").innerHTML = navigator.onLine ? "Online" : "Offline";

// Se pueden mostrar documentos PDF?
if (navigator.pdfViewerEnabled) {
  document.getElementById("pdf").innerHTML = "Sí";
} else {
  document.getElementById("pdf").innerHTML = "No";
}

// Comprobar si está cargando o no y el porcentaje de la batería. Que no cargue la página, si está por debajo del 25%
navigator.getBattery().then(function (battery) {
  document.getElementById("bateria").innerHTML = (battery.level * 100).toFixed(0) + "%";
  document.getElementById("cargando").innerHTML = `${battery.charging ? "Está conectado a la corriente" : "Está usando la batería"}`
  if (battery.level < 0.25) {
    document.write("La página no se puede cargar porque el nivel de la batería es demasiado bajo.");
  }
});
