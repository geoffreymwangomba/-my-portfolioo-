

// selecting gallery
const gallery =document.querySelector(".gallery");
// select itembox
const itemboxes = document.querySelectorAll(".itembox");
gallery.addEventListener("click", (e)=>{
  if(e.target.classList.contains("filter")){
 gallery.querySelector(".active").classList.remove("active");
    e.target.classList.add("active");
  
  const filterValue = e.target.getAttribute("data-filter");

   itemboxes.forEach(item =>{

    if(item.classList.contains(filterValue) || filterValue === "all")

    {
      item.classList.add("show");

      item.classList.remove("hide");
    }
    else{
      item.classList.add("hide");
    }
   })

   
  }
})
