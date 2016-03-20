
function addArbol() {  
  var auxArbol = document.getElementById("consola").value;
  if(auxArbol != ""){
    arbol = auxArbol;
    redibujarArbol();
  }  
}
var nodos2 = 1;
var nivel2 = 2;
var arbol = "";

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

drawcircle(366, 90, 15, 'green', 0);

function crearNodo() {
    nodoPadre = document.getElementById("nodoPadre").value;
    if(arbol.length) {
      arbol = arbol.concat(", ");
    }
    arbol = arbol.concat(nodoPadre.toString());
    arbol = arbol.concat("-");
    arbol = arbol.concat(nodos2.toString());
  nodos2++;
  document.getElementById("consola").value = arbol;
  redibujarArbol();
}
var nodosXNivel = [0,1,0,0,0,0];
var niveles = 0;
var numeros = [1];
var coordenadasX = [];
var coordenadasY = [];

var visitados = [];
var recorridoDFS = [];

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

function generar(){
  for(i=0; i <= coordenadasX.length; i++) {
    visitados.push(false);
  }
  visitados[0] = true;
  dfs(0);
  recorridoDFS.push(0);
  bfs();
  alert(recorridoDFS);
  document.getElementById("dfs").value = recorridoDFS;
  document.getElementById("arbol").value = document.getElementById("consola").value;
}

function bfs(){
  var tam = recorridoDFS.length;
  var res = "";
  for (var i = 0; i < tam; i++) {
    if(res.length > 0){
      res = res + "," + i;
    } else {
      res = res + i;
    }
  }
  document.getElementById("bfs").value = res;
}

function addArbol2(arbol) {  
  if(arbol != ""){
    redibujarArbol();
  }  
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
  for(i = 0; i < nodosXNivel.length; i++) {
    var cantidadNodos = nodosXNivel[i];
    if(cantidadNodos > 0) {
      var factor = 732 / (cantidadNodos+1);
      for(j = 1; j <= cantidadNodos; j++) {
        coordenadasX.push(j*factor);
        coordenadasY.push(i*90);
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
        drawcircle(j*factor, i*90, 15, 'green', nodo);
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

var padres;
var arbol2;
function redibujarArbol() {
  var c = document.getElementById("myCanvas");
  var ctx = c.getContext("2d");
  ctx.clearRect(0, 0, 732, 600);
  nodosXNivel = [0,1,0,0,0,0];
  niveles = 0;
  numeros = [1];
  coordenadasX = [];
  coordenadasY = [];
  for(i = 1; i <=75; i=i+1) {
    numeros.push(0);
  }
  padres = arregloPadres(arbol);
  
  var numeroNodos = contarNodos(padres);
  arbol2 = crearArbol(padres, numeroNodos);
  prepararNodos();
  dibujarAristas(arbol2);
  dibujarNodos();
}
$(function() {
    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
});


