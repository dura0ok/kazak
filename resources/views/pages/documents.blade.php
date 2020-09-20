@extends("layouts.base")

@section("content")
    <h1 class="page_title" style="text-decoration: none;">Документы</h1>
    <div class="documents">
        <div class="state">
            <div class="btn-wrapper">
                <a href="#" class="btn"><span>›</span> № 4 (236) ноябрь 2018</a>
            </div>
            <div class="content">
                <a
                    href="http://www.don-kazak.ru/upload/iblock/935/%D0%94%D0%BE%D0%BD%D1%81%D0%BA%D0%B8%D0%B5%20%D0%B2%D0%BE%D0%B9%D1%81%D0%BA%D0%BE%D0%B2%D1%8B%D0%B5%20%D0%B2%D0%B5%D0%B4%D0%BE%D0%BC%D0%BE%D1%81%D1%82%D0%B8%20%E2%84%96%204.pdf">Lorem</a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In itaque repellendus
                    labore libero fugiat qui esse incidunt? Quasi, voluptas nemo fugit nihil
                    repellendus, tempore culpa voluptatibus at maxime quia consequuntur cum ratione,
                    adipisci nam cupiditate! Tempora alias officiis sunt, possimus in vel eius
                    temporibus necessitatibus ab neque velit perferendis at animi assumenda culpa id.
                    Vitae modi perferendis illum ad, eos suscipit iste aspernatur ab neque, quaerat
                    ducimus saepe, iure accusantium tempora dignissimos blanditiis magni eveniet eum
                    quae sint maiores similique quos. Odit similique cum facilis tempora accusamus,
                    neque sequi vel? Consequatur maxime dolor necessitatibus perspiciatis aliquid in
                    quas dicta tempora?</p>
            </div>
        </div>
    </div>
@endsection

@push("scripts")
    <script>
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
            content.style.display = "block"

        }
        for (let i = 0; i < elements.length; i++) {
            elements[i].addEventListener('click', accord);
        }
    </script>
@endpush
