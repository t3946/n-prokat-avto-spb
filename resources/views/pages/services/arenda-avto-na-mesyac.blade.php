@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avto-na-mesyac/" itemprop="url item"><span itemprop="name" class='current'>Аренда авто на месяц</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Помесячная аренда автомобиля</h1>
        <p>Отсутствие собственного транспорта даже на короткий срок, не говоря о месяцах,&nbsp;ограничивает мобильность людей, поэтому многие стараются взять машину на месяц в аренду.</p>
        <p>Прокат выручает в&nbsp;командировках, при повреждении личного ТС, после продажи старого автомобиля и до покупки нового. Подменный транспорт из прокатного сервиса &ndash;&nbsp;способ решить все проблемы.</p>
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
        <h2>Почему помесячная аренда автомобилей выгодна?</h2>
        <p>Посуточные тарифы зависят от продолжительности проката. Чем больше срок, тем меньше суточная оплата. Так что во многих случаях аренда легкового автомобиля на месяц &ndash; по цене оптимальный вариант:</p>
        <ul>
            <li>за месяц решаются проблемы с личным транспортом;</li>
            <li>заканчиваются командировки и путешествия;</li>
            <li>формируется максимальная скидка на аренду.</li>
        </ul>
        <p>При необходимости можно продлить срок &ndash; на 3 месяца или на год. Или приобрести понравившийся транспорт в собственность.</p>
        <h2>Как происходит оформление аренды в Офис «Казанский»</h2>
        <p>За 7 лет работы в Санкт-Петербурге мы:</p>
        <ul>
            <li>создали и постоянно обновляем собственный автопарк;</li>
            <li>сформировали штат квалифицированных сотрудников;</li>
            <li>приобрели ценный опыт.</li>
        </ul>
        <p>У нас взять в прокат на месяц автомобили более чем 30 моделей &ndash; от бюджетных до бизнес-класса, минивэны и кроссоверы. Все они в отличном состоянии, регулярно проходят ТО в специализированном сервисном центре, имеют действующие страховые полисы КАСКО, ОСАГО.</p>
        <p>Клиенты могут воспользоваться любым из множества тарифов, которые действуют в нашей компании. Но менеджеры рекомендуют как оптимальное соотношение удобства и стоимости аренду автомобиля на месяц без водителя.</p>
        <p>Выбор и бронирование машины для помесячной аренды можно сделать за 2 минуты через бесплатное мобильное приложение Офис «Казанский». Оформление аренды машины на месяц потребует минимального набора документов и 15 минут.</p>
        <p>Предоплату месячной аренды автомобиля можно внести любым способом:</p>
        <ul>
            <li>наличными;</li>
            <li>по карте VISA, MasterCard;</li>
            <li>банковским переводом.</li>
        </ul>
        <p>Мы гарантируем клиентам:</p>
        <ul>
            <li>круглосуточное техническое обслуживание;</li>
            <li>прозрачные схем работы без скрытых платежей и сборов свыше зафиксированных в договоре;</li>
            <li>отсутствие бюрократических проволочек.</li>
        </ul>
        <p>Услуги Офис «Казанский» - это выгодно, надежно и удобно.</p>
    </article>

@endsection

