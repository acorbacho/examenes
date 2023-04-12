function suma(n, m) {
  return n + m;
}
// f1(3,4) = 7
let f1 = function (n, m) {
  return n + m;
}
// f2(8,7) = 15
let f2 = function (n, m) {
  return n + m;
}

let resta = function (n, m) {
  return n - m;
}

let multi = function (n, m) {
  return n * m;
}

let calculadora = (param1, param2, operacion) => {
  return operacion(param1, param2);
}