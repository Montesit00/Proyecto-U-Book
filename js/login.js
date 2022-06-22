localStorage.clear()
localStorage.setItem('intentos', '0')
let intentos = Number(localStorage.getItem('intentos'));
 console.log(intentos)

let usuarioslist=[]
usuarioslist.push([uuid.v4(), "monteLLano", "moontesito@gmail.com",CryptoJS.SHA256('montesitoo123').toString(), " ", " "])
usuarioslist.push([uuid.v4(), "carlosmacno", "carlosmacno33@gmail.com",CryptoJS.SHA256('carlitos77').toString(), " ", " "])

function loginUsuario(){
    let usuario= document.getElementById("usuario").value;
    let password= document.getElementById("password").value;
    let divAlert= document.querySelector( '[name="alertLogin"] ');
    let encriptado= CryptoJS.SHA256(password).toString();
     
    if (!validarUsuario(usuario, encriptado) && intentos<3){
      
        showAlert('error', 'usuario invalido', divAlert);
        localStorage.setItem('intentos', intentos++);
        console.log(intentos);
        return;

    } else if (intentos<3){
        cambiafechahora(usuario)
        showAlert('valido', ' puede inciar sesion', divAlert);
      return;
    }else{
        showAlert ('error', 'Has excedido el numero de intentos', divAlert);
    }
    
   
}
function validarUsuario(usuario, contrasenia){

    for (let index=0; index<usuarioslist.length; index++){
        if (usuarioslist[index]  [1]===usuario){
            let usuarioEncontrado=usuarioslist[index];
        
            if(usuarioEncontrado[2]==contrasenia){
                return true
            }
        
            
        }
    } 
        return false  
}

function cambiafechahora(usuario){
for(let index=0; index<usuarioslist.length; index++){
    if(usuarioslist[index]  [1]===usuario){
        usuarioslist[index] [5] = obtenerFechaHoraActual() 
        return true;
    }
}


}
