var nodosArbol = "";
var relationsArbol = "";
function addRelation(){
  var nivelAB = document.getElementById("nivelAB").value;
  var nodoA = document.getElementById("nodoA").value;
  var nodoB = document.getElementById("nodoB").value;
  if(relationsArbol != ""){
      relationsArbol=relationsArbol.concat("+");
  }
  relationsArbol = relationsArbol.concat(nivelAB+","+nodoA+","+nodoB);
  alert(relationsArbol);
}
function addNodo() {
    var nodos = document.getElementById("consola").value;
    if(nodosArbol != ""){
      nodosArbol=nodosArbol.concat("\n");
    }    
    nodosArbol=nodosArbol.concat(nodos);
    document.getElementById("consola").value = "";
    alert(nodosArbol);
}
