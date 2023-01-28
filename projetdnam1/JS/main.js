var logo = document.getElementById("logo");
var mainmenu = document.getElementById("navmenu");
mainmenu.style.display = "none";
logo.addEventListener("click", () => {
if(mainmenu.style.display=="none"){
    mainmenu.style.display="block";
}else{
    mainmenu.style.display="none";
}
})