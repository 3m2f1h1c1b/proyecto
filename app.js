function ocultarFormadores(){
  let elecciones = document.getElementsByClassName("form-check");
  let combo = document.getElementById("inputCurso");
  var Sselecionado = combo.options[combo.selectedIndex].value;

  for (let i = 0; i < elecciones.length; i++) {
    let clase = "f"+Sselecionado;
    //console.log(clase);
    //console.log(elecciones[i].classList[1]);
      if(elecciones[i].classList[1] ==clase ){
        elecciones[i].style.display = "block";
      }else{
        elecciones[i].style.display = "none";
      } 
  }
}
function cambiarFormadores(){

}





/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace()

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  
})();
