
console.log("EJERCICIO 1"); //primer ejercicio tabla de un solo no
console.log("_________________________________________");
var tabla=[5];
console.log("La tabla a multiplicar es: "+tabla);
for(var i=1; i<11; i++){
console.log("5x"+i+"="+tabla*i);
}

console.log("_________________________________________");


console.log("EJERCICIO 2"); //segundo ejercicio tablas de un numero hasta otro
dosnumeros(1,9);
function dosnumeros(inicio, fin){
var j=0;
if (inicio>fin) {
console.warn("El primer valor no puede ser mayor que el segundo")
}
else{
for (var i = inicio; i<=fin; i++){
console.log("_________________________________________");
console.log("Imprimiendo la tabla del "+inicio);
for ( j = 1; j < 11; j++) {
console.log(inicio+"x"+j+"="+inicio*j);
}
j=1
inicio++; 

        }
    }
}
