const btn = document.querySelector('.open');

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

jQuery(document).ready(function($){
    $.bvi({
            'bvi_target' : '.bvi-open', // Класс ссылки включения плагина
            "bvi_theme" : "white", // Цвет сайта
            "bvi_font" : "arial", // Шрифт
            "bvi_font_size" : 16, // Размер шрифта
            "bvi_letter_spacing" : "normal", // Межбуквенный интервал
            "bvi_line_height" : "normal", // Междустрочный интервал
            "bvi_images" : true, // Изображения
            "bvi_reload" : false, // Перезагрузка страницы при выключении плагина
            "bvi_fixed" : false, // Фиксирование панели для слабовидящих вверху страницы
            "bvi_tts" : true, // Синтез речи
            "bvi_flash_iframe" : true, // Встроенные элементы (видео, карты и тд.)
            "bvi_hide" : false // Скрывает панель для слабовидящих и показывает иконку панели.
    });
});

