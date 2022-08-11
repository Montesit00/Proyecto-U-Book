const registroForm = document.getElementById("registroForm");
let ID = uuid.v4();
const usuariosList = [
  [ID, "Tilin", "Sexoo1", "tilin@hotmail.com"],
  [ID, "memi", "Sexoo1", "memi@hotmail.com"],
];

const expresiones = {
  usuario: /^[a-zA-Z0-9_-]{4,16}$/, // Letras, numeros, guion y guionbajo
  nombre: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, // Letras y espacios, pueden llevar acentos.
  apellido: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, // Letras y espacios, pueden llevar acentos.
  passwordMayus: /[A-Z]/, // mayusculas
  passwordMin: /[a-z]/, //Minusculas
  passwordNumeros: /[0-9]/, //Numeros
  correo: /^[a-zA-Z0-9.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/,
};
login.addEventListener("submit", (e) => {
  const userLogin = document.getElementById("userLogin").value;
  const passLogin = document.getElementById("passLogin").value;
  const correoLogin = document.getElementById("correoLogin").value;
  e.preventDefault()
  function iniciarSesion(userLogin, correoLogin, passLogin) {
    let error = [];
    for (usuario of usuariosList) {
      if (usuario[3] == correoLogin || usuario[1] == userLogin) {
        if (usuario[2] == passLogin) {
          console.log("Sesion Iniciada");
        } else {
          error.push("contraseña incorrecta");
        }
      } else {
        error.push("email o username incorrectos");
      }
    }
  }
  iniciarSesion(userLogin, correoLogin, passLogin);
});

registroForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const nombreRegistro = document.getElementById("nombreRegistro").value;
  const apellidoRegistro = document.getElementById("apellidoRegistro").value;
  const correoRegistro = document.getElementById("correoRegistro").value;
  const usuarioRegistro = document.getElementById("usuarioRegistro").value;
  const passRegistro = document.getElementById("passRegistro").value;
  const pass2Registro = document.getElementById("pass2Registro").value;
  const validNombre = document.getElementById("validacionNombreRegistro");
  const validApellido = document.getElementById("validacionApellidoRegistro");
  const validUser = document.getElementById("validacionUserRegistro");
  const validCorreo = document.getElementById("validacionCorreoRegistro");
  const validPass = document.getElementById("validacionPassRegistro");
  const validPass2 = document.getElementById("validacionPass2Registro");

  function registrarUsuario(
    correoRegistro,
    usuarioRegistro,
    passRegistro,
    pass2Registro
  ) {
    if (
      validarPassword(passRegistro, pass2Registro) &&
      existeUsername(usuarioRegistro) &&
      validarEmail(correoRegistro)
    ) {
      usuarioNuevo = [ID, usuarioRegistro, passRegistro, correoRegistro];
      usuariosList.push(usuarioNuevo);
    }
    console.log(usuariosList);
  }

  function validarEmail(correoRegistro) {
    let error = [];
    for (correo of usuariosList) {
      if (correo[3] == correoRegistro) {
        error.push("Correo_existente");
      }
    }
    if (!expresiones.correo.test(correoRegistro)) {
      error.push("Correo Invalido");
    }    
    for (mensaje of error) {
      console.log('errores', mensaje);
      if (mensaje == "Correo_existente") {
        validCorreo.innerText = "Correo existente";
        console.log('sexo', mensaje);
      } else {
        validCorreo.innerText = "";
      }
      if (mensaje == "Correo invalido") {
        validCorreo.innerText = "Correo invalido";
      } else {
        validCorreo.innerText = "";
      }
    }
    console.log(error);
    if (error.length == 0) {
      return true; //La contraseña esta bien
    } else {
      return false; //La contraseña esta mal xd
    }
  }

  function existeUsername(usuarioRegistro) {
    let error = [];
    for (user of usuariosList) {
      //recorro la lista de usuarios
      if (user[1] == usuarioRegistro) {
        error.push("Usuario existente");
      }
    }
    for (mensaje of error) {
      if (mensaje == "Usuario existente") {
        validUser.innerText = "Usuario existente";
      } else {
        validUser.innerText = "";
      }
    }
    console.log(error);
    if (error.length == 0) {
      return true; //La contraseña esta bien
    } else {
      return false; //La contraseña esta mal xd
    }
  }

  function validarPassword(passRegistro, pass2Registro) {
    let error = [];
    if (passRegistro != pass2Registro) {
      error.push("Las contraseñas no coinciden");
    }
    if (passRegistro.length < 6) {
      error.push("La contraseña es muy corta");
    }
    if (!expresiones.passwordMayus.test(passRegistro)) {
      error.push("Faltan mayusculas");
    }
    if (!expresiones.passwordMin.test(passRegistro)) {
      error.push("Faltan minusculas");
    }
    if (!expresiones.passwordNumeros.test(passRegistro)) {
      error.push("Faltan números");
    }
    for (mensaje of error) {
      if (mensaje == "Las contraseñas no coinciden") {
        validPass2.innerText = "Las contraseñas no coinciden";
      } else {
        validPass2.innerText = "";
      }
      if (mensaje == "La contraseña es muy corta") {
        validPass.innerText = "La contraseña es muy corta";
      } else {
        validPass.innerText = "";
      }
      if (mensaje == "Faltan mayusculas") {
        validPass.innerText = "Faltan mayusculas";
      } else {
        validPass.innerText = "";
      }
      if (mensaje == "Faltan minusculas") {
        validPass.innerText = "Faltan minusculas";
      } else {
        validPass.innerText = "";
      }
      if (mensaje == "Faltan números") {
        validPass.innerText = "Faltan números";
      } else {
        validPass.innerText = "";
      }
    }
    console.log(error);
    if (error.length == 0) {
      return true; //La contraseña esta bien
    } else {
      return false; //La contraseña esta mal xd
    }
  }
  registrarUsuario(
    correoRegistro,
    usuarioRegistro,
    passRegistro,
    pass2Registro
  );
});
