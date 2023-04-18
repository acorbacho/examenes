let lista = [];

document.getElementById("btnAgregar").addEventListener("click", agregarTarea);

function agregarTarea() {
  let nuevaTarea = document.getElementById("nuevaTarea").value;
  if (nuevaTarea.length > 0 && nuevaTarea.length <= 100 && /^[a-zA-Z0-9\s.,;:¡!¿?'-]+$/.test(nuevaTarea)) {
    if (lista.length < 10) {
      lista.push({ texto: nuevaTarea, terminada: false });
      actualizarLista();
    } else {
      alert("Ya tienes 10 tareas en la lista.");
    }
  } else {
    alert("La tarea debe tener entre 1 y 100 caracteres y sólo puede contener letras, números o símbolos básicos.");
  }
  document.getElementById("nuevaTarea").value = "";
}

function actualizarLista() {
  let listaTareas = document.getElementById("listaTareas");
  listaTareas.innerHTML = "";
  for (let tarea of lista) {
    let tareaHTML = document.createElement("div");
    tareaHTML.innerHTML = "<span" + (tarea.terminada ? " style='text-decoration: line-through;'" : "") + ">" + tarea.texto + "</span>";
    if (!tarea.terminada) {
      let btnTerminar = document.createElement("button");
      btnTerminar.innerText = "Terminado";
      btnTerminar.addEventListener("click", function () {
        tarea.terminada = true;
        actualizarLista();
      });
      tareaHTML.appendChild(btnTerminar);
    }
    listaTareas.appendChild(tareaHTML);
  }
}
