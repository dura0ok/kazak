
function accord(event){
    event.preventDefault(); let el = event.target
    let dataID = event.target.getAttribute('data-id')
    let content = document.querySelector(`.content[data-id="${dataID}"]`)
    let state = document.querySelector(`.state[data-id="${dataID}"]`)
    if (el.classList.contains("opened")) {
        content.style.display = "none"
        el.querySelector('span').style.transform = 'rotate(0deg)'
        state.style.marginBottom = "0"
        el.classList.remove("opened")
        return
    }
    el.querySelector('span').style.transform = 'rotate(90deg)'
    el.classList.add("opened")
    content.style.display = "block"
    state.style.marginBottom = "5%"
}

document.querySelectorAll(".btn").forEach(btn => {
        btn.addEventListener("click", accord)
});
