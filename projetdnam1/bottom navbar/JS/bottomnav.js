const btn=document.getElementById("btn");
const list=document.getElementById("list");
list.style.display="block";
btn.addEventListener("click",(event)=>{
    console.log(event)
    if(list.style.display=="none"){
        list.style.display="block";

    }else{
        list.style.display="none";
    }
})