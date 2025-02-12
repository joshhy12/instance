//toggle search bar
const searchToggle =
document.getElementById("search-toggle");
const searchBar =
document.getElementById("search-bar");
const searchInput =
document.getElementById("search-input");
const searchBtn =
document.getElementById("search-btn");

searchToggle.addEventListener("click", ()=>{
    searchBar.classList.toggle("visible");
    searchInput.focus()
});

searchBtn.addEventListener("click", ()=>{
    const query = searchInput.ariaValueMax.trim();
    if(query){
        alert('you searched for: "${query}"');
        searchInput.value = "";// clear input
    }
});

window.addEventListener("scroll", () =>{
if (window.scrollY > 300){


scrollTopBtn.addEventListener("click", () =>{
    window.scrollTo({top: 0, behaviour: "smooth"})
});

//Newsletter popup
window.addEventListener("load", () =>{
    setTimeout(() =>{
        if(confirm("subscribe to our newsletter for updates!")){
            alert("Thankyou for subscribing!");
        }
}, 5000); //show popup after 5 seconds
});