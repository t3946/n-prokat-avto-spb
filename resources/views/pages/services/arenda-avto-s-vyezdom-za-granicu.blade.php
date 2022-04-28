@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avto-s-vyezdom-za-granicu/" itemprop="url item"><span itemprop="name" class='current'>Аренда авто с выездом за границу</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда авто с выездом за границу</h1>
        <p>Из Санкт-Петербурга за границу ездят многие, поэтому нередко возникает вопрос, можно ли это сделать на прокатной машине &ndash; или нужно с кем-то договариваться, пользоваться общественным транспортом? Нет, не нужно. Аренда автомобиля с выездом за границу вполне возможна!</p>
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
        <h2>Особенности аренды авто для поездок за границу</h2>
        <p>Чтобы на таможне не возникло вопросов, машина должна быть правильно оформлена и соответствовать требованиям страны въезда. Наши машины имеют весь пакет документов, а договор аренды вполне заменяет документы о владении автомобилем. Как следствие, у таможни не будет претензий и вопросов (в Европе такой способ путешествий очень популярен, там никто не удивится семье в арендованном автомобиле).</p>
        <p>От водителя потребуют только &laquo;зеленую карту&raquo; и обычный пакет въездных документов для этой страны. Для самой аренды машины для поездки за границу документов требуется еще меньше: российский паспорт, водительское удостоверение и стаж от трех лет (для некоторых машин от пяти лет). Можно оформить договор на нескольких человек (тоже удобно, можно вести машину вдвоем с супругом или другом), требования будут те же самые.</p>
        <p>В остальном прокат автомобиля для поездки на границу не отличается от проката для внутреннего туризма. Вы выбираете машину на сайте или в автопарке, смотрите комплектацию и требования к ней, стоимость аренды за сутки (она различается в зависимости от величины пробега и длительности срока аренды), механик при Вас проверяет техническое состояние машины. После этого Вы оставляете залог, подписываете договор и забираете машину. Залог возвращается после того как машина опять окажется на стоянке.</p>
    </article>


@endsection

