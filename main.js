function validar() {
//Vector de Datos
  var data = [];
  data.push(user = document.getElementById("user").value );
  data.push(name = document.getElementById("name").value);
  data.push(lname = document.getElementById("lname").value);
  data.push(cedu = document.getElementById("cedu").value);
  data.push(pass = document.getElementById("pass").value);
  data.push(mail = document.getElementById("mail").value);
  var expresion = /\w+@\w+\.+[a-z]/;
  //Verificacion de Campos Llenos
    for (var i of data) {
      if (i ==="") {
        alert("Uno de los campos esta vacio");
        return false;
        console.log(data);
      }
    }
//Verificacion de Maximo de caracteres
    if (user.length > 15) {
      alert("el Usuario es muy Largo");
      return false;
    }else if (name.length >15) {
      alert("El Nombre no puede tener mas de 15 Caracteres");
      return false;
    }else if (lname.length >15) {
      alert("El Apelldo no puede tener mas de 15 Caracteres");
      return false;
    }else if (cedu.length !=10 ) {
      alert("La cedula de Identidad Tiene 10 caracteres");
      return false;
    }else if (!(pass.length >5 && pass.length <= 12)) {
      alert("La Contrasena debe tener minimo 5 Caracteres y maximo 12");
      return false;
    }else if (mail.length >100) {
      alert("El Correo es muy largo");
      return false;
    }else if (!(expresion.test(data[5]))) {
      alert("El correo no es valido");
      return false;
    }
}
