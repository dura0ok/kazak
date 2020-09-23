let elements = document.getElementsByClassName("btn")

function accord(event) {
    event.preventDefault();
    const el = event.target
    const content = document.querySelector(".content")
    const span = el.firstChild
    if (el.classList.contains("opened")) {
        content.style.display = "none"
        span.style.transform = 'rotate(0deg)'
        el.classList.remove("opened");
        return
    }
    span.style.transform = 'rotate(90deg)'
    el.classList.add("opened");

}

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', accord);
}
