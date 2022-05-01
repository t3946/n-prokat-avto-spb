@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-legkovyh-avto-s-vykupom/" itemprop="url item"><span itemprop="name" class='current'>Аренда легковых авто с выкупом</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда легковых авто с выкупом</h1>
        <p>Аренда легковых автомобилей с правом выкупа &ndash; один из хороших способов получить машину с минимальными затратами и потерями и максимальным контролем над ситуацией. Машину в любой момент можно вернуть назад, можно протестировать заранее, можно использовать по своему усмотрению.</p>
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
        <h2>Как выкупить машину из аренды</h2>
        <p>Выкуп арендованного легкового автомобиля значительно проще покупки аналогичного автомобиля с пробегом. Во-первых, в платеж сразу включены налоги, страховка, ремонт. Во-вторых, можно как следует испытать и обкатать машину, и владелец не будет торопить и подгонять. Во-третьих, машину никто не &laquo;перехватит&raquo;.</p>
        <p>Автоцентр Офис «Казанский» объединяет в себе салон, банк и автосервис, то есть:</p>
        <ul>
            <li>Предоставляет на выбор десятки моделей автомобилей, оформляет страховку;</li>
            <li>Делает расчеты кредитования;</li>
            <li>Устраняет неполадки, проводит техническое обслуживание.</li>
        </ul>
        <p>Первый месяц аренды с последующим выкупом &ndash; тестовый. Если Вы найдете недостатки в автомобиле, мы устраним их за свой счет, что заметно отличает нас от частного продавца, который после продажи уже не имеет никакого отношения к машине и далеко не всегда согласен что-то чинить. В платеж входит страховка, налог, ТО, об этом также не нужно думать. На время ремонта мы предоставляем подменный автомобиль.</p>
        <p>Еще одно важное преимущество обращения в Офис «Казанский» - возможность вернуть машину в любой момент без обязательств по погашению оставшейся задолженности. Вам не нужно будет самостоятельно выставлять машину на торги и встречаться с потенциальными покупателями.</p>
    </article>


@endsection

