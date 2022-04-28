@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avto-po-rossii/" itemprop="url item"><span itemprop="name" class='current'>Аренда авто по России</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда автомобиля по России</h1>
        <p>Взять в аренду автомобиль для дальней поездки по России в другой город &ndash; это отличный способ избежать привязки к расписанию поездов и автобусов, сэкономить деньги и получить полную свободу перемещений. Эта услуга востребована для командировок, деловых поездок, для семей, которые решили выехать на юг или просто попутешествовать по стране, навестить родных и отдохнуть от однообразия.</p>
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
        <h2>Куда можно съездить на арендованной машине?</h2>
        <p>Аренда машины для поездки в другой город или регион России актуален для всех, кто умеет водить, но не располагает личным автотранспортом (временно или принципиально). Можно не только выбрать комфортную машину под требования семьи или для целой группы (минивэн, седан, микроавтобус &ndash; что угодно), но и полностью контролировать ситуацию. Аренда машины на дальние расстояния для путешествия&nbsp; по России позволяет:</p>
        <ul>
            <li>Обеспечить достаточно места для всех участников поездки и багажа;</li>
            <li>Не зависеть от расписания, водителей, даже погодных условий;</li>
            <li>Съездить в любую точку страны, хоть на юг, хоть в Карелию, хоть за Урал.</li>
            <li>Забыть о турфирмах, экскурсоводах и такси.</li>
            <li>Одинаково свободно чувствовать себя в городе и на трассе.</li>
        </ul>
        <p>Из Санкт-Петербурга на взятом для путешествия по России автомобиле можно съездить:</p>
        <ul>
            <li>В Карелию (на рыбалку, на отдых и просто полюбоваться красивой природой);</li>
            <li>В Москву (по делам и просто так);</li>
            <li>По Золотому Кольцу (и не слушать крикливых экскурсоводов, не бежать, а спокойно полюбоваться церквями, поесть в ресторанчике и уехать, когда захочется);</li>
            <li>На Урал и в Сибирь, а также через всю Россию на Дальний Восток (это лучше, чем поезд, можно успеть завернуть на озера, послушать оперу в Новосибирске, заглянуть в краеведческие музей и на стоянки древних людей);</li>
            <li>На юг (Новороссийск, Анапа, Сочи, горные серпантины, заливы, леса &ndash; и никаких проблем с тем, чтобы добраться куда-то).</li>
        </ul>
        <p>Причем взять в прокат авто для поездок по России без водителя довольно просто, требуется только наличие водительского удостоверения и трехлетнего стажа вождения, причем можно оформить машину не только на себя, но и на друга или супруга, если предполагается, что вести будут по очереди. Также аренда и прокат автомобиля &laquo;межгород&raquo; бывает весьма актуальна для командировок, где проще самому объехать все объекты, чем ждать водителя.</p>
        <h2>Как взять машину в аренду?</h2>
        <p>Аренда машины межгород или для поездки на юг осуществляется очень просто. Нужно забронировать приглянувшуюся модель на сайте и подписать документы в офисе. Наши специалисты проконсультируют по всем тонкостям и правилам, помогут разобраться в документах, ответят на все вопросы. Стоимость аренды автомобиля на дальние расстояния по России без водителя зависит от итогового срока аренды.</p>
    </article>

@endsection

