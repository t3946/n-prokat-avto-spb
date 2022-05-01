@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avtomobilya-na-2-nedeli/" itemprop="url item"><span itemprop="name" class='current'>Аренда автомобиля на 2 недели</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда автомобиля на 2 недели</h1>
        <p>Аренда автомобиля на 2 недели очень популярна в Санкт-Петербурге в период каникул и отпусков, когда хочется бросить все и уехать из города или, наоборот, покататься вдоволь по городу и окрестностям, не ограничивая себя движением общественного транспорта. Также двухнедельная аренда актуальна для деловых встреч и командировок.</p>
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
        <h2>Как взять машину на 2 недели?</h2>
        <p>Компания Офис «Казанский» уже много лет работает в сфере проката и располагает собственным автопарком из машин бизнес-класса, премиум, люкс, эконом, а также коммерческим транспортом, минивэнами и внедорожниками. Весь автотраеспорт:</p>
        <ul>
            <li>Проходит регулярное техническое обслуживание.</li>
            <li>Застрахован (КАСКО, ОСАГО).</li>
            <li>Оснащен кондиционированием, электростеклоподъемниками и другими функциями, делающими поездку комфортной.</li>
            <li>Чистый, ухоженный.</li>
        </ul>
        <p>Именно поэтому взять у нас в аренду машину на 14 дней не просто выгодно, но и удобно. Вам не придется думать о документах, обслуживании им других раздражающих мелочах. Вы сможете проверить автомобиль в деле, если хотите приобрести машину той же марки и модели, съездить на природу или в дом отдыха, не заботиться о вызове такси во время командировок и деловых встреч и не потерять привычного уровня комфорта, если Ваш личный автомобиль временно в ремонте.</p>
        <p>Чтобы взять в аренду машину на 2 недели, необходимы:</p>
        <ul>
            <li>Возраст от 23 лет.</li>
            <li>Стаж вождения от 3 лет (от 5 для аренды машины премиального сектора).</li>
            <li>Водительское удостоверение.</li>
        </ul>
        <p>Машину можно взять в тот же день, внеся предоплату. Бронь осуществляется как на сайте, так и по телефону.</p>
    </article>

@endsection

