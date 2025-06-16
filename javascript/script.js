const sidebarToggleBtns = document.querySelectorAll(".sidebar-toggle")
const sidebar = document.querySelector(".sidebar")
const searchForm = document.querySelector(".search-form")
const themeToggleBtn = document.querySelector(".theme-toggle")
const themeIcon = themeToggleBtn.querySelector(".theme-icon")
const enlaces = document.querySelectorAll(".menu-link")
// Actualizamos el tema del icono acorde al tema actual y al estado de la barra lateral
const updateThemeIcon = () => {
  const isDark = document.body.classList.contains("dark-theme")
  themeIcon.textContent = sidebar.classList.contains("collapsed") ? (isDark ? "light_mode" : "dark_mode") : "dark_mode"
}
// Aplicamos el tema oscuro y actualizamos el icono
const savedTheme = localStorage.getItem("theme")
const systemPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
const shouldUseDarkTheme = savedTheme === "dark" || (!savedTheme && systemPrefersDark)
document.body.classList.toggle("dark-theme", shouldUseDarkTheme)
updateThemeIcon()
// Alternar temas con el evento click del switch
themeToggleBtn.addEventListener("click", () => {
  const isDark = document.body.classList.toggle("dark-theme")
  localStorage.setItem("theme", isDark ? "dark" : "light")
  updateThemeIcon()
})
// Alternamos la barra en estado oculto al hacer click en el botón
sidebarToggleBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed")
    updateThemeIcon()
  })
})
// Expandemos la barra lateral al hacer click en el formulario de búsqueda
searchForm.addEventListener("click", () => {
  if (sidebar.classList.contains("collapsed")) {
    sidebar.classList.remove("collapsed");
    searchForm.querySelector("input").focus();
  }
})

enlaces.forEach(function(enlace) {
 enlace.addEventListener('click', () => {
  if (enlace.classList.contains("active")) {
    enlace.classList.remove("active");
   } else {
   enlace.classList.add("active");
  }
 })
})
// Expandemos la barra lateral de forma predeterminada en pantallas grandes
if (window.innerWidth > 768) sidebar.classList.remove("collapsed")