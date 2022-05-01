@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-legkovyh-avtomobilej/" itemprop="url item"><span itemprop="name" class='current'>Аренда легковых автомобилей</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда легковых автомобилей</h1>
        <p>Взять в аренду легковой автомобиль без водителя несложно и очень выгодно, особенно когда собственное авто в ремонте или если вы предпочитаете брать машину в самом городе, а не перегонять из города в город. В любом случае, это достаточно просто и требует минимальных усилий и документов.</p>
    </article>

    <span class="mtitle">Выбрать автомобиль</span>

    <div class="filters" style="display:none">
        <div class="mbutfilter">Фильтры</div>
        <div class="sort">
            <select>
                <option value="min">По цене ↓</option>
                <option value="max">По цене ↑</option>
            </select>
        </div>
        <form class="filter" method="post" action="/">
            <select name="catalog">
                <option value="">Категория</option>
                <option value="/katalog/klass-promo/">Класс промо</option><option value="/katalog/arenda_avtomobilej_klassa_standart/">Класс стандарт</option><option value="/katalog/arenda_avtomobilej_klassa_komfort/">Класс комфорт</option><option value="/katalog/arenda_avtomobilej_klassa_krossover/">Класс кроссоверы</option><option value="/katalog/arenda_minivenov/">Класс минивены</option><option value="/katalog/arenda_avtomobilej_klassa_ljuks/">Класс бизнес</option><option value="/katalog/arenda_avtomobilej_tesla/">Класс электромобили</option><option value="/katalog/arenda_avtomobilej_klassa_sommercial/">Класс коммерческий</option>
            </select>
            <select name="filter[gear_box_type][]">
                <option value="">Коробка передач</option>
                <option value="AT">AT</option><option value="MT">MT</option>
            </select>
            <select name="filter[num_of_person][]">
                <option value="">Кол-во пассажиров</option>
                <option value="0">0</option><option value="2">2</option><option value="5">5</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="19">19</option>
            </select>
        </form>
    </div>

    <div class="smart-catalog-by-ids">

    </div>

    <article class="innerPageContent">
        <h2>Зачем и как взять легковушку напрокат?</h2>
        <p>Легковые машины в аренду берут достаточно часто. Чаще, чем крупные минивэны и внедорожники, и это понятно. Легковушки универсальны, достаточно вместительны, для них проще найти парковочное место, в городских условиях они гораздо маневреннее и у них меньше расход бензина. Обычно арендуют машины, когда:</p>
        <ul>
            <li>Нужно куда-то съездить, а такси или попутка неудобны или слишком дороги.</li>
            <li>Хочется личной свободы перемещения по городу, по России или за рубеж.</li>
            <li>Свой автомобиль в ремонте или выставлен на продажу, а новые еще не куплен.</li>
            <li>Хочется испытать в деле выбранную марку или модель автомобиля, а часового тест-драйва явно не хватает.</li>
            <li>Вы перемещаетесь между городами на самолетах или поездах, так что проще взять в прокату легковой автомобиль без водителя прямо от Пулково.</li>
            <li>Нужна машина для представительских целей или на время командировки.</li>
            <li>Есть желание прокатиться с семьей или после свадьбы, не заботясь о направлении.</li>
        </ul>
        <p>Причин может быть множество, и для каждой цели найдется своя машина. У нас можно взять в аренду авто-легковушку бизнес-класса, эконом, разных марок, на разный срок. Стоимость проката автомобиля-легковушки зависит от ее класса и длительности аренды. Важно, что чем длительнее срок, тем ниже стоимость в пересчете на сутки!</p>
        <p>Обратите внимание, что для аренды потребуется предъявить водительское удостоверение и подтвердить стаж вождения. Кроме того, необходимо внести залог. Подробные правила и условия аренды Вы можете посмотреть на сайте или уточнить у наших менеджеров по телефону и при личной встрече. Правила касаются соблюдения ПДД, скоростного режима. Никаких ограничений в парковке (кроме ПДД) нет. Заправка машину осуществляется за счет клиента. Все автомобили застрахованы.</p>
    </article>

    <footer>
        <div>
            <div class="footer">
                <div class="leftf">
                    <span class="logof"><img src="/images/templates/almac/img/logof@3x.png" alt="" /></span>
                    <div class="soc">
                        <a href="https://vk.com/almak_prokat" target="_blank"><img src="/images/parser/social/Priceimageextra0000031391.jpeg" alt="" /></a>
                        <a href="https://www.youtube.com/channel/UCaTSjw3DWHSc2HuqF1dhHwg" target="_blank"><img src="/images/parser/social/Priceimageextra0000031422.jpeg" alt="" /></a>
                        <a href="https://ok.ru/almakprokat" target="_blank"><img src="/images/parser/social/Priceimageextra0000031433.jpeg" alt="" /></a>

                    </div>
                </div>
                <div class="centerf">
                    <div class="fmenu">
                        <a href="/partnery/">Партнеры</a><a href="/voprosy/">Вопросы и условия</a>
                    </div>
                    <div class="fmenu">
                        <a href="/obzory_avtomobilej/">Обзоры автомобилей</a><a href="/stati/">Статьи</a>
                    </div>

                    <div class="fmenu">
                        <a href="/programma/">Программа лояльности</a>
                        <a href="/konkurs/">Конкурс</a>
                        <a href="/uslugi/">Услуги</a>
                        <a href="/otzyvy/">Отзывы</a>
                    </div>


                </div>
                <div class="rightf">
                    <span class="titlef">Справочный центр</span>
                    <a class="telf" href="tel:+79119891694">+7 (911) 989-16-94</a>
                    <div class="appf">
                        <a class="ios" href="https://trk.mail.ru/c/nczwt4?mt_idfa={mt_idfa}"><img src="/images/templates/almac/img/appleapp.svg" alt="" /></a>
                        <a class="android" href="https://trk.mail.ru/c/yd9sq5?mt_gaid={mt_gaid}"><img src="/images/templates/almac/img/googleapp.svg" alt="" /></a>

                    </div>
                    <div class="bankImg">

                        <img src="/images/templates/almac/img/MasterCard.jpeg" alt="" />
                        <img src="/images/templates/almac/img/VISA.png" alt="" />
                        <img src="/images/templates/almac/img/opl.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="linef">Информация на данном сайте носит исключительно ознакомительный характер и не является публичной офертой <a href="/uslovija_arendy_avtomobilej/">Прочитайте условия договора.</a></div>
            <div class="linef"><p style="text-align: center;">© 2022</p></div>
        </div>


@endsection

