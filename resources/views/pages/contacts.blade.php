@extends("layouts.base.template")

@section("content")
    <h1 class="page_title">Контакты</h1>
    <div class="contacts">
        <div class="map">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae5aac3efb11d1d5db2b1676b24f4488bd66af0a5dc037851126cefe43ef83a5f&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="contact">
            <h3>Штаб ВКО ВВД</h3>
            <p><b>Адрес: </b> Правление городского казачьего общества "Ростовское", 344006<br>
                Г.Ростов-на-Дону ул. Суворова 28
             </p>
            <p><b>Телефон:</b> <a href="tel:263-16-33">263-16-33</a></p>
            <p><b>E-mail:</b><a href="mailto:gkorostovskoe@yandex.ru">gkorostovskoe@yandex.ru</a></p>
        </div>
       
    </div>
@endsection

