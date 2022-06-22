//Registro
function registroUsuario(){
    let email= document.getElementById("email").value;
    let usuario= document.getElementById("usuario").value;
    let password= document.getElementById("password").value;
    let passwordConfirm= document.getElementById("confirPassword").value;
    let divAlert=document.querySelector( '[name="alertregis"] ');  
     
   
    
    if(!validarPassword (password, passwordConfirm)){
        showAlert("error", "revise su contraseña", divAlert);
        return;
    }

    if(!validarUserName (usuario)){
        showAlert("error", "usuario incorrecto", divAlert);
        return;
    }
    

    if(!validarEmail (email)){
       showAlert("error", "email incorrecto", divAlert);  
    }

    if(!existeUserName(usuario)){
        showAlert("error", "usted ya esta registrado", divAlert);
        return;
    }
   
   
        showAlert("valido", "se pudo registrar correctamente", divAlert );

        
    }


    function datosUsuario(){

        let email= document.getElementById("email").value;
        let usuario= document.getElementById("usuario").value;
        let password= document.getElementById("password").value;
        let passwordConfirm= document.getElementById("confirPassword").value;
       
         
    
               let  usuarioguardado=[];
                let array=uuid.v4();
       
                
                 existeUserName(usuario);
                
                 validarUserName(usuario);
              
                 validarEmail(email);

                 validarPassword(password, passwordConfirm);
                
                 let encriptado=CryptoJS.SHA256(password).toString();
       
                 usuarioguardado.push(array)
                 usuarioguardado.push(usuario)
                 usuarioguardado.push(email)
                 usuarioguardado.push(encriptado)

                 console.log(usuarioguardado)
                 usuarioslist.push(usuarioguardado) 


    }

    //Validaciones (usuario,password,email)
    function validarPassword(password, passwordConfirm){

        PATRON= /(\w){6,}$/;
      
       if(!PATRON.test(password) || !PATRON.test(passwordConfirm)){
              
              return false;
         }
          if(password != passwordConfirm){
                return false;
          }
               return true;   
            
           }
      
          
      
          function validarUserName(usuario){
      
              PATRON= /^(\w+(0-9)?){6,}$/;
              if(!PATRON.test(usuario)){
                  
                     return false
                     
                }
                  
                      return true;   
      
          }
          function validarEmail (email){
      
              PATRON= /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3,4})+$/;
    
              if(!PATRON.test(email)){
                  
                   return false;
                }
                    
                 
                  return true;
                }
                
               function existeUserName(usuario){
               for (let index=0; index<usuarioslist.length; index++){
                  let usuarioregis=usuarioslist[index][1];
                  if(usuario===usuarioregis){
                      
                       return false; 
               }
              }
              
                 return true;
               
             } 

 //Alertas
    function showAlert(tipo, mensaje, divElemento){
        divElemento.innerHTML=mensaje;
        switch(tipo){
            case "error":
                divElemento.className= "alert alert-danger";
                break;
            case "valido":
                divElemento.className= "alert alert-success";
                break;  
    
        }
        divElemento.hidden=false;
        setTimeout(function(){
         divElemento.hidden=true;
        }, 3000 );
        
    }
    
   
