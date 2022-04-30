@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/dlitelnaya-arenda-avtomobilya/" itemprop="url item"><span itemprop="name" class='current'>Длительная аренда автомобиля</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Длительная аренда автомобиля</h1>
        <p>Аренда машины на длительный срок актуальна для всех, кто ведет активный образ жизни и не желает терять в привычном комфорте (путешественники, владельцы бизнеса, контролирующие объекты, семьи с детьми). Кроме того, чем дольше срок аренды, тем ниже стоимость в перерасчете за сутки.</p>
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
        <h2>Зачем арендовать машину надолго?</h2>
        <p>Долговременной аренда автомобиля считается при сроке аренды от месяца. Причем можно взять машину бизнес- и эконом-класса, минивэн, внедорожник &ndash; в зависимости от пожеланий и потребностей.&nbsp; Например, это могут быть:</p>
        <ul>
            <li>Подросшие дети, которых нужно возить в школу и кружки;</li>
            <li>Поездки по России и за рубеж по делам или в качестве туриста;</li>
            <li>Сезон рыбалки или охоты с частыми выездами;</li>
            <li>Подменная машина на период ремонта;</li>
            <li>Тест-драйв понравившейся марки перед покупкой собственной машины.</li>
        </ul>
        <p>Снять авто в аренду на длительный срок довольно просто. Нужно предоставить водительское удостоверение и подтвердить стаж вождения, а также внести залог. Залог удерживается в случае аварии, которая произошла по вине арендатора. Стоимость долговременной аренды автомобиля зависит от конкретного срока, максимальной скидки можно достичь, если взять машину в долгосрочную аренду на год.</p>
        <p>Мы работаем как с физическими, так и с юридическими лицами, располагаем обширным автопарком и большим количеством тарифов. У нас можно взять в долговременную аренду автомобили различных марок и класса, причем все они будут чистыми, ухоженными, застрахованными и технически исправными.</p>
        <p>Страховка включает в себя КАСКО и ОСАГО, после каждого арендатора мы проводим полную дезинфекцию салона. Машины проходят регулярное техническое обслуживание, что подтверждается документами, так что взять в аренду автомобиль на длительный срок у нас &ndash; это не только выгодно, но и безопасно.</p>
        <p>Подробные правила проката автомобиля на длительный срок уточняйте у наших специалистов по телефону, через сайт и при личной встрече. Также они помогут Вам выбрать лучший вариант по соотношению цены и желаемых характеристик и оформят документы. Сервис долгосрочной аренды авто Офис «Васнецовский» работает уже много лет и потому гарантирует, что Вы получите все, что Вам нужно!</p>
    </article>

@endsection

