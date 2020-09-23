function openSubLinks(event) {
    event.preventDefault();
    var el = event.target
    var sub = document.querySelector(".submenu")
    if (el.classList.contains("opened")) {
        el.classList.remove("opened");
        sub.style.display = "none"
        return
    }
    el.classList.add("opened");
    sub.style.display = "block"
}

let parents = document.getElementsByClassName("parent")
for (var i = 0; i < parents.length; i++) {
    parents[i].addEventListener('click', openSubLinks);
}
