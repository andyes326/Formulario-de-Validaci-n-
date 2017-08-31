//Documento para animacion de formulario 1
var inputs =  document.getElementsByClassName('form__input');
for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('keyup',function(){
    if (this.value.length >= 1) {
      this.nextElementSibling.classList.add('fijar');
    }else {
      this.nextElementSibling.classList.remove('fijar');
    }
  });
}
