function openSubLinks(event) {
    event.preventDefault()
    let el = event.target
    let sub = el.nextElementSibling

    if (el.classList.contains("opened")) {
        el.classList.remove("opened");
        sub.style.display = "none"
        return
    }
    el.classList.add("opened")
    sub.style.display = "block"
}

let parents = document.getElementsByClassName("parent")
for (let i = 0; i < parents.length; i++) {
    parents[i].addEventListener('click', openSubLinks)
}

const hamburger = document.querySelector("#hamburger")
const menu = document.querySelector("#sidebar")
hamburger.addEventListener("click", () => {
    if(menu.classList.contains("active")){
        menu.classList.remove("active")
        return
    }
    menu.classList.add("active")
});