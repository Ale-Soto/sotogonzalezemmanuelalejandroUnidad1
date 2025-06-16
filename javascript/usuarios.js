const usersList = document.querySelector(".user-content"),
      searchBar = document.querySelector(".sidebar-content .search-form input"),
      searchBtn = document.querySelector(".sidebar-content .search-form button")

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/buscar.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(() => {
 //Implementación de Ajax
 let xhr = new XMLHttpRequest() //Creamos objeto XML
 xhr.open("GET", "../php/usuarios.php", true)
 xhr.onload = ()=>{
  if(xhr.readyState === XMLHttpRequest.DONE){
   if(xhr.status === 200){
    let data = xhr.response
    if(!searchBar.classList.contains("active")){
     usersList.innerHTML = data
    }
   }
  }
 }
 xhr.send()
}, 500) //Funcion que se ejecuta cada 500ms