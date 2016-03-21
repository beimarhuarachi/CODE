function validar() {
  var dfsReal, dfs, bfsReal, bfs;
  dfsReal = document.getElementById("dfsReal").value;
  dfs = document.getElementById("dfs").value;
  bfsReal = document.getElementById("bfsReal").value;
  bfs = document.getElementById("bfs").value;
  if(dfs == dfsReal && bfs == bfsReal) {
    alert("Correcto!!");
  } else {
    alert("Incorrecto, vuelve a intentar");
  }
}

var myVar;
var recorridoBFS = [];
function animacionRecorridoDFS() {
  actual = 0;
  auxiliar = 0;
  myVar = setInterval(myTimer ,500);
}

function animacionRecorridoBFS() {
  actual = 0;
  auxiliar = 0;
  recorridoBFS = [];
  for(var i = 0; i < coordenadasX.length; i++) {
    recorridoBFS.push(i);
  }
  myVar = setInterval(myTimer2, 500);
}

var nodosXNivel = [0,1,0,0,0,0];
var niveles = 0;
var numeros = [1];
var coordenadasX = [];
var coordenadasY = [];
for(i = 1; i <=75; i=i+1) {
  numeros.push(0);
}
function arregloPadres(cadenaArbol) {
  var padre = [-1];
  for(i = 1; i <=77; i=i+1) {
    padre.push(-1);
  }
  var aristas = arbol.split(", ");
  for(i=0; i < aristas.length; i=i+1) {
    var arista = aristas[i];
    var nodos = arista.split("-");
    var nodo1 = nodos[0];
    var nodo2 = nodos[1];
    nodo1 = parseInt(nodo1);
    nodo2 = parseInt(nodo2);
    if(padre[nodo2] == -1) {
      padre[nodo2] = nodo1;
    }
    if(numeros[nodo2] == 0) {
      numeros[nodo2] = numeros[nodo1] + 1;
      nodosXNivel[numeros[nodo2]]++;
    }
    if(numeros[nodo2] > niveles) {
      niveles =  numeros[nodo2]
    }
  }
  return padre;
}

function contarNodos(padres) {
var nodos = 1;
  for(i = 1; i < padres.length; i++) {
    var padre = padres[i];
    if(padre != -1) {
      nodos++;
    }
  }
  return nodos;
}

function crearArbol(padres, nodos) {
  var arbol3 = [];
  for(i = 0; i <= nodos; i++ ) {
    arbol3.push([]);
  }
  for(i = 1; i < padres.length; i++) {
    var padre = padres[i];
    if(padre > -1){
      arbol3[padre].push(i);
    } 
  }
  return arbol3;
}

function drawcircle(x, y, radio, color, nodo) {
  var c = document.getElementById("myCanvas");
  var ctx = c.getContext("2d");
  ctx.beginPath();
  ctx.arc(x, y, radio, 0, 2 * Math.PI);
  ctx.fillStyle = color;
  ctx.fill();
  ctx.font = "10px Arial";
  ctx.fillStyle = "white";
  ctx.fillText(nodo,x-2,y+2);
  ctx.stroke();
}

function prepararNodos() {
  for(i = 1; i < nodosXNivel.length; i++) {
    var cantidadNodos = nodosXNivel[i];
    if(cantidadNodos > 0) {
      var factor = 732 / (cantidadNodos+1);
      for(j = 1; j <= cantidadNodos; j++) {
        coordenadasX.push(j*factor);
        coordenadasY.push((i-1)*100 + 50);
      }
    }
  }
}

function dibujarNodos() {
  var nodo = 0;
  for(i = 1; i < nodosXNivel.length; i++) {
    var cantidadNodos = nodosXNivel[i];
    if(cantidadNodos > 0) {
      var factor = 732 / (cantidadNodos+1);
      for(j = 1; j <= cantidadNodos; j++) {
        var x, y;
        x = coordenadasX[nodo];
        y = coordenadasY[nodo];
        drawcircle(x, y, 15, 'green', nodo);
        drawcircle(j*factor, (i-1)*100 + 50, 15, 'green', nodo);
              nodo++;
      }
    }
  }
}

function dibujarLinea(xo, yo, xd, yd) {
  var c=document.getElementById("myCanvas");
  var ctx=c.getContext("2d");
  ctx.beginPath();
  ctx.moveTo(xo,yo);
  ctx.lineTo(xd,yd);
  ctx.stroke();
}

function dibujarAristas(arbol) {
  for(i = 0; i < arbol.length; i++) {
    for(j = 0; j < arbol[i].length; j++) {
      d = arbol[i][j];
      dibujarLinea(coordenadasX[i], coordenadasY[i], coordenadasX[d], coordenadasY[d]);
    }
  }
}




var arbol = document.getElementById("consola").value;
var padres = arregloPadres(arbol);
var numeroNodos = contarNodos(padres);
var arbol2 = crearArbol(padres, numeroNodos);
prepararNodos();
dibujarArbol();

function dibujarArbol() {
  dibujarAristas(arbol2);
  dibujarNodos();  
}

var visitados = [];
var nodos = 14;
var recorridoDFS = [];
for(i=0; i <= nodos; i++) {
  visitados.push(false);
}

function dfs(origen) {
  if(arbol.length > origen) {
    var hijos = arbol2[origen];
    for(var j = 0; j < hijos.length; j++) {
      var hijo = hijos[j];
      if(!visitados[hijo]) {
        visitados[hijo] = true;
        dfs(hijo);
        recorridoDFS.push(hijo);
      }
    } 
  }
}

visitados[0] = true;
dfs(0);
recorridoDFS.push(0);
//alert(recorridoDFS);

var actual = 0;
var auxiliar = 0;
//var myVar = setInterval(myTimer ,500);

function myTimer() {
    if(auxiliar == 0) {
      nodo = recorridoDFS[actual];
        drawcircle(coordenadasX[nodo], coordenadasY[nodo], 15, 'blue', nodo);
    } else  {
        drawcircle(coordenadasX[nodo], coordenadasY[nodo], 15, 'red', nodo);
    } 
    if(auxiliar == 1) {
       auxiliar = 0;
       actual++;
    } else {
       auxiliar = 1;
    }

    if(actual == recorridoDFS.length) {
        clearInterval(myVar);
        var c=document.getElementById("myCanvas");
        var ctx=c.getContext("2d");
        ctx.clearRect(0, 0, 720, 600);
        dibujarArbol();
    }
}

function myTimer2() {
    if(auxiliar == 0) {
      nodo = recorridoBFS[actual];
        drawcircle(coordenadasX[nodo], coordenadasY[nodo], 15, 'blue', nodo);
    } else  {
        drawcircle(coordenadasX[nodo], coordenadasY[nodo], 15, 'red', nodo);
    } 
    if(auxiliar == 1) {
       auxiliar = 0;
       actual++;
    } else {
       auxiliar = 1;
    }

    if(actual == recorridoBFS.length) {
        clearInterval(myVar);
        var c=document.getElementById("myCanvas");
        var ctx=c.getContext("2d");
        ctx.clearRect(0, 0, 720, 600);
        dibujarArbol();
    }
}

/*
nodo = 0;
function BFS() {
    if(auxiliar == 0) {
      nodo = numeros[actual];
        drawcircle(coordenadasX[nodo], coordenadasY[nodo], 15, 'blue', nodo);
    } else  {
        drawcircle(coordenadasX[nodo], coordenadasY[nodo], 15, 'red', nodo);
    } 
    if(auxiliar == 1) {
       auxiliar = 0;
       actual++;
    } else {
       auxiliar = 1;
    }

    if(actual == numeros.length) {
        clearInterval(myVar);
    }
}*/
