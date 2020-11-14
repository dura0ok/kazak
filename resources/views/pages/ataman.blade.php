@extends("layouts.base.template")

@section("content")
    <h1 class="page_title">Атаман</h1>
    <!-- Start ataman -->
    <!-- Start ataman wrapper -->
    <div class="ataman_wrapper">
        <!-- Start ataman info -->
        <div class="ataman_info">
            <h1>Имя Атамана</h1>
            <img src="{{ asset("images/ataman.jpg") }}"
                 alt="">
            <p> 23 ноября состоялся XXV Большой отчетно-выборный круг войскового казачьего общества
                «Всевеликое войско Донское», на котором был избран новый атаман. Им стал Бобыльченко
                Виталий Александрович, казачий полковник, директор Шахтинского Якова Бакланова казачьего
                кадетского корпуса. Сложивший с себя атаманские полномочия Виктор Георгиевич Гончаров
                передал В.А. Бобыльченко символы атаманской власти – пернач и насеку.

                Согласно Уставу Всевеликого войска Донского, Войсковой атаман вступает в должность после
                утверждения Президентом Российской Федерации. До этого момента исполнять обязанности
                Войскового атамана будет казачий полковник первый заместитель (товарищ) Войскового
                атамана М.А. Беспалов. В соответствии с Уставом накануне Совет атаманов Всевеликого
                войска Донского рекомендовал его кандидатуру. </p>
        </div>
        <!-- End ataman info -->
        <h1 id="questionTitle">Вопросы</h1>
        <!-- Start questions -->
        <div class="questions">
            <!-- Start question -->
            <div class="question">
                <div class="user_info">
                    <span class="date">3.08.2020</span>
                    <h1>Приказной Голиков Аркадий Леонидович</h1>
                </div>
                <p class="content">
                    Уважаемый Виктор Георгиевич, обращаюсь к вам из Волгоградского казачьего округа.
                    Прошу вас рассмотреть присвоение мне старшему лейтенанту запаса, ветерану боевых
                    действий, соответствующего казачьего звания сотника. Темболее это присвоение не
                    влияет не на должность не на зарплату. В казаках я полтора года и уже имею награду
                    от губернатора за проведение ЧМ, а вот от казачества ничего даже звания не
                    присваивают и не восстанавливают. Воинское звание было мне присвоено президентом и
                    Россией.
                </p>
                <div class="answer">
                    <div class="arrow">&darr;</div>
                    <h1 class="greeting">Уважаемый Аркадий Леонидович!</h1>
                    <p class="answer_content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, odit
                        repudiandae. Tempora ipsam at, quam ex totam commodi obcaecati magni fugiat sed
                        doloremque unde, enim voluptatem consequuntur voluptatibus ducimus? Cumque sint
                        illum qui nobis dolorum voluptatibus minima natus labore nihil praesentium,
                        vitae dolorem enim distinctio voluptatem est earum odio quasi quaerat culpa
                        aperiam libero ea aliquid error omnis! Necessitatibus optio, autem quia laborum
                        qui neque vel pariatur provident. Cumque a eius accusantium id eveniet magni
                        corrupti, esse quis ducimus. Quaerat officiis vitae deserunt similique! Voluptas
                        eum, corporis ab repellat quis debitis aspernatur eaque aliquid, distinctio
                        quidem eligendi, quas aliquam numquam.
                    </p>
                    <h1 class="blockTitle">Вложения</h1>
                    <div class="attachments">
                        <div class="attachment">
                            <img src="{{ asset('images/attachTest.jpg') }}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End question -->
            <!-- Start question -->
            <div class="question">
                <div class="user_info">
                    <span class="date">3.08.2020</span>
                    <h1>Приказной Голиков Аркадий Леонидович</h1>
                </div>
                <p class="content">
                    Уважаемый Виктор Георгиевич, обращаюсь к вам из Волгоградского казачьего округа.
                    Прошу вас рассмотреть присвоение мне старшему лейтенанту запаса, ветерану боевых
                    действий, соответствующего казачьего звания сотника. Темболее это присвоение не
                    влияет не на должность не на зарплату. В казаках я полтора года и уже имею награду
                    от губернатора за проведение ЧМ, а вот от казачества ничего даже звания не
                    присваивают и не восстанавливают. Воинское звание было мне присвоено президентом и
                    Россией.
                </p>
                <div class="answer">
                    <div class="arrow">&darr;</div>
                    <h1 class="greeting">Уважаемый Аркадий Леонидович!</h1>
                    <p class="answer_content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, odit
                        repudiandae. Tempora ipsam at, quam ex totam commodi obcaecati magni fugiat sed
                        doloremque unde, enim voluptatem consequuntur voluptatibus ducimus? Cumque sint
                        illum qui nobis dolorum voluptatibus minima natus labore nihil praesentium,
                        vitae dolorem enim distinctio voluptatem est earum odio quasi quaerat culpa
                        aperiam libero ea aliquid error omnis! Necessitatibus optio, autem quia laborum
                        qui neque vel pariatur provident. Cumque a eius accusantium id eveniet magni
                        corrupti, esse quis ducimus. Quaerat officiis vitae deserunt similique! Voluptas
                        eum, corporis ab repellat quis debitis aspernatur eaque aliquid, distinctio
                        quidem eligendi, quas aliquam numquam.
                    </p>
                    <h1 class="blockTitle">Вложения</h1>
                    <div class="attachments">
                        <div class="attachment">
                            <img src="{{ asset('images/attachTest.jpg') }}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End question -->
        </div>
        <!-- End questions -->
    </div>
    <!-- End ataman wrapper -->
    <!-- End ataman -->
@endsection

