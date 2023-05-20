// Función que devuelve una promesa que resuelve con un dado aleatorio entre 1 y 6 después de un retraso aleatorio
const lanzarDado = () => new Promise((resolve, reject) => {
  const retraso = Math.random() * 5000; // retraso aleatorio de hasta 5 segundos
  setTimeout(() => {
    const dado = Math.floor(Math.random() * 6) + 1;
    dado <= 6 ? resolve(dado) : reject('Error');
  }, retraso);
});

// Función que devuelve una promesa que resuelve con la suma de dos dados después de un retraso aleatorio
const jugarRonda = () => Promise.all([lanzarDado(), lanzarDado()])
  .then(([dado1, dado2]) => {
    const resultado = dado1 + dado2;
    const retraso = Math.random() * 1000; // retraso aleatorio de hasta 1 segundo
    return new Promise(resolve => {
      setTimeout(() => {
        resolve(resultado);
      }, retraso);
    });
  })
  .catch(error => console.log(error)); // Si hay un error, se vuelve a jugar la ronda

// Función que devuelve una promesa que resuelve con el número de la tirada con el número más bajo, en caso de empate devuelve el primero
const jugarJuego = (numRondas) => {
  const tiradasPromises = Array.from({ length: numRondas }, jugarRonda);
  const tiempoTotal = tiradasPromises.reduce((tiempo, tiradaPromesa) => {
    return tiempo.then((tiradas) => {
      return tiradaPromesa.then(tirada => [...tiradas, tirada]);
    });
  }, Promise.resolve([]));
  return tiempoTotal.then((tiradas) => {
    const min = Math.min(...tiradas);
    const posMin = tiradas.indexOf(min) + 1;
    return posMin;
  });
};

// Simulación de 5 jugadores
const numJugadores = 5;
const ganadorPromise = jugarJuego(numJugadores);

// Mostrar resultado por consola
ganadorPromise.then((ganador) => {
  console.log(`La tirada con el número más bajo ha sido la número ${ganador}`);
});