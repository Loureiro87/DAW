// Función que devuelve true o false según el parámetro sea palíndromo o no
function Palindromo(cadena){
    // Paso toda la cadena a minúscula
    cadena = cadena.toLowerCase();
    console.log(cadena);
    // Elimino de la cadena todo lo que no sean caracteres alfanuméricos
    cadena = cadena.replace(/[\s,;\.\?¿!¡:]/g,'');
    console.log(cadena);
    // Sustituyo vocales con tildes o diéresis por vocales simples
    cadena = cadena.replace(/á/g,'a').replace(/é/g,'e').replace(/í/g,'i').
                    replace(/ó/g,'o').replace(/ú|ü/g,'u');
    console.log(cadena);
    if (cadena == cadena.split('').reverse().join('')){
        return true;
    }else{
        return false;
    }
}