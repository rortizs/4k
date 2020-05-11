function validarup() {
  var Nombre_Usuario,
    Dpi,
    Direccion,
    Telefono,
    Email,
    Cargo,
    User_Name,
    Password,
    Imagen,
    expresion;
  Nombre_Usuario = document.getElementById("Nombre_Usuario").value;
  Dpi = document.getElementById("Dpi").value;
  Direccion = document.getElementById("Direccion").value;
  Telefono = document.getElementById("Telefono").value;
  Email = document.getElementById("Email").value;
  Cargo = document.getElementById("Cargo").value;
  User_Name = document.getElementById("User_Name").value;
  Password = document.getElementById("Password").value;
  contraseña = document.getElementById("contraseña").value;
  Imagen = document.getElementById("Imagen").value;

  //expresion = /\w+@\w+\.+[a-z]/;
  expresion = "/^([a-zA-Z0-9])+([a-zA-Z0-p_-]+([a-zA-Z0-9.-]+)+$/";

  if (
    Nombre_Usuario === "" ||
    Dpi === "" ||
    Direccion === "" ||
    Telefono === "" ||
    Email === "" ||
    Cargo === "" ||
    User_Name === "" ||
    Password === "" ||
    contraseña === ""
  ) {
    alert("Todos los campos son obligatorios");
    return false;
  } else if (Nombre_Usuario.length > 100) {
    alert("El nombre es muy largo");
    return false;
  } else if (Direccion.length > 70) {
    alert("La direccion es muy larga");
    return false;
  } else if (Telefono.length > 10) {
    alert("El telefono es muy largo");
    return false;
  } else if (!expresion.test(Email)) {
    alert("El email no es valido");
    return false;
  } else if (Cargo.length > 20) {
    alert("El Cargo es muy largo");
    return false;
  } else if (User_Name.length > 20) {
    alert("El Usuario es muy corto");
    return false;
  }
}
