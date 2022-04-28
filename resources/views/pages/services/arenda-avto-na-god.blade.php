@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avto-na-god/" itemprop="url item"><span itemprop="name" class='current'>Аренда авто на год</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда авто на год</h1>
        <p>В Европе и&nbsp;США годовая аренда автомобиля&nbsp;&ndash; основной способ использования автотранспорта юридическими лицами, востребован он и обычными гражданами. Арендаторы избавлены от затрат по обслуживанию, ремонту, сезонной смене и хранению покрышек,&nbsp;страхованию. Они оплачивают только парковку, мойку,&nbsp;заправку.</p>
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
        <h2>Годовая аренда в &laquo;Альмак Прокат&raquo;</h2>
        <p>В отличие от каршеринга, годовая аренда автомобиля &ndash; это:</p>
        <ul>
            <li>свобода перемещения, вплоть до заграничных поездок;</li>
            <li>возможность найти машину там, где она была припаркована арендатором;</li>
            <li>&laquo;почти личный&raquo; авто, в котором можно оставлять вещи, багаж.</li>
        </ul>
        <p>Компания &laquo;Альмак Прокат&raquo; 7 лет успешно занимается прокатом автомобилей. Одними из первых мы стали предоставлять авто&nbsp;на длительный срок.</p>
        <p>Клиенты могут оформить в аренду на год новый автомобиль эконом, среднего, бизнес,&nbsp;представительского класса. Все авто прошли ТО в специализированных сервисных центрах, имеют страховые полисы КАСКО, ОСАГО. Выбрать и&nbsp;забронировать транспорт можно через бесплатное мобильное приложение &laquo;Альмак Прокат&raquo;.</p>
        <p>Для получения машины необходимо предоставить документы:</p>
        <ul>
            <li>физическому лицу: паспорт с регистрацией РФ, водительское удостоверение (стаж не менее 5 лет для машин бизнес-класса и не менее 3 лет &ndash; для остальных);</li>
            <li>юридическому лицу: копию Устава организации, данные о постановке на учет, доверенность на управление ТС от лица организации.</li>
        </ul>
        <p>Процедура оформления занимает 15 минут.</p>
        <p>&laquo;Альмак Прокат&raquo; предоставляет клиентам:</p>
        <ul>
            <li>круглосуточную техническую поддержку;</li>
            <li>замену ТС, если оно по каким-либо причинам не подошло;</li>
            <li>скидки, возрастающие при увеличении периода проката.</li>
        </ul>
        <p>Заказчик получает машину после ТО, со страховкой, а также детальный договор с зафиксированными условиями возврата и выплаты неустойки.</p>
        <p>Гарантируем, что цена аренды автомобиля на год фиксированная, никаких дополнительных платежей,&nbsp;сборов, кроме оговоренных договором, не будет взиматься.</p>
        <p>Мы &ndash; честная компания и работаем по прозрачным схемам. Ищете долгосрочного партнера, который не подводит и &laquo;делает, как надо&raquo;? Давайте работать вместе!</p>
    </article>

@endsection

