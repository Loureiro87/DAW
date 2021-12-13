"use strict";

// Se considera un número “curioso”aquel que coincide con la suma de los cubos de sus dígitos.

function esCurioso(num) {
  var numero = num.toString();
  numero = numero.split("");
  var sumando = 0;

  for (let i = 0; i < numero.length; i++) {
    sumando += Math.pow(numero[i], 3);
    console.log(sumando + " Typeof " + typeof sumando);
  }

  if (sumando == num) {
    return true;
  } else {
    return false;
  }
  console.log(" sumando : " + sumando);
}
