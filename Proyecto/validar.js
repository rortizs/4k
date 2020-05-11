function validar() {
  var nombre,
    dpi,
    direccion,
    telefono,
    email,
    cargo,
    username,
    password,
    expreison;

  nombre = document.getElementById("nombre").value;
  dpi = document.getElementById("dpi").value;
  direccion = document.getElementById("direccion").value;
  telefono = document.getElementById("telefono").value;
  email = document.getElementById("email").value;
  cargo = document.getElementById("cargo").value;
  username = document.getElementById("username").value;
  password = document.getElementById("password").value;

  if (nombre === " ") {
    alert("el campo nombre esta vacio");
  }
}
