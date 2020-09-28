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
