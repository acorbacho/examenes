// Función que devuelve un dado aleatorio entre 1 y 6
const lanzarDado = () => Math.floor(Math.random() * 6) + 1;
// Función que devuelve la suma de dos dados
const jugarRonda = () => {
  const dado1 = lanzarDado();
  const dado2 = lanzarDado();
  return dado1 + dado2
};
// Función que devuelve el número de la tirada con el número más bajo, en caso de empate devuelve el primero
const jugarJuego = (numRondas) => {
  const tiradas = Array.from({ length: numRondas }, jugarRonda);
  const min = Math.min(...tiradas)
  const posMin = tiradas.indexOf(min) + 1
  return posMin
};
// Simulación de 5 jugadores
const numJugadores = 5;
const ganador = jugarJuego(numJugadores);
// Mostrar resultado por consola
console.log(`La tirada con el número más bajo ha sido la número ${ganador}`)