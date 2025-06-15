const form = document.querySelector(".signup form") 
const continueBtn = form.querySelector(".button input")
const errorText = form.querySelector(".error-text")

form.onsubmit = (e)=> {
 e.preventDefault() //Evita el envío inmediato del formulario

}
continueBtn.onclick = ()=> {
 //Implementación de Ajax
 let xhr = new XMLHttpRequest() //Creamos objeto XML
 xhr.open("POST", "php/signup.php", true)
 xhr.onload = ()=>{
  if(xhr.readyState === XMLHttpRequest.DONE){
   if(xhr.status === 200){
    let data = xhr.response
    if(data == "exito"){
     location.href = "index.php"
    } else {
     errorText.textContent = data
     errorText.style.display = "block"
    }
   }
  }
 }
 //Enviar formulario por medio de Ajax
 let formData = new FormData(form); //objeto con la info del formulario
 xhr.send(formData); //Enviar objeto
}