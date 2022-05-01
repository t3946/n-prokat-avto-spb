@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/prokat-dorogih-avto/" itemprop="url item"><span itemprop="name" class='current'>Прокат дорогих авто</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда автомобиля премиум класса</h1>
        <p>Хотите почувствовать себя VIP-персоной? Или чтобы поездка, торжественное событие, трансфер важного гостя навсегда запомнились? Возьмите в аренду без водителя элитное авто премиум-класса. Его кожаный салон, мягкий ход, идеальные формы, совершенная акустическая система &ndash; мечта любого автолюбителя.</p>
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
        <h2>Прокат элитных авто в Офис «Казанский»</h2>
        <p>Инфинити, Мерседес, БМВ, Генезис из автопарка компании Офис «Казанский» &ndash; легендарные марки машин последних лет выпуска. Можно взять в аренду люксовое вип-авто без водителя на любой срок &ndash; от нескольких часов до нескольких месяцев.</p>
        <p>Мы гарантируем их идеальное состоянии, т.к. проводим регулярное ТО в специализированном сервисном центре, тщательно ухаживаем и бережем их.&nbsp;</p>
        <p>Прокат дорогого бизнес-авто без водителя, это:</p>
        <ul>
            <li>безупречный современный дизайн;</li>
            <li>обработанный антисептиком салон без пятен и посторонних запахов;</li>
            <li>исправная система климат-контроля;</li>
            <li>система навигации и беспроводной связи с диспетчером;</li>
            <li>дополнительная комплектация необходимым оборудованием.</li>
        </ul>
        <p>Пусть никто и ничто не нарушает ваш комфорт.</p>
        <h2>Как взять в аренду дорогое авто: 3 простых шага</h2>
        <ol>
            <li><strong> Заказ</strong></li>
        </ol>
        <p>Мы ценим время и удобство наших клиентов, поэтому разработали мобильное приложение Офис «Казанский».</p>
        <p>С его помощью можно:</p>
        <ul>
            <li>за 2 минуты выбрать и бесплатно забронировать для аренды премиальное авто бизнес-класса без водителя;</li>
            <li>за 15 минут оформить аренду;</li>
            <li>указать место на карте Санкт-Петербурга, куда нужно доставить авто.</li>
        </ul>
        <p>Для обеспечения большей свободы и удобства поездки мы предлагаем арендовать&nbsp;автомобиль премиум-класса без водителя.</p>
        <ol start="2">
            <li><strong> Оплата аренды</strong></li>
        </ol>
        <p>100% предоплата любым удобным способом при получении автомобиля:</p>
        <ul>
            <li>наличными;</li>
            <li>картой VISA,&nbsp;MasterCard;</li>
            <li>банковским переводом;</li>
            <li>безналичная оплата от юридических лиц.</li>
        </ul>
        <ol start="3">
            <li><strong> Документы</strong></li>
        </ol>
        <ul>
            <li>паспорт РФ с постоянной регистрацией;</li>
            <li>водительские права&nbsp;РФ категории &laquo;В&raquo;. Стаж &ndash; не менее 5 лет;</li>
            <li>банковская именная карта.</li>
        </ul>
        <p>И это все!</p>
        <p>Мы на связи с нашими клиентами в режиме 24/7 и оперативно решаем все их проблемы. Применяем в работе прозрачные схемы и не требуем с арендаторов при финальном расчете внеплановых, необоснованных сборов и платежей.</p>
        <p>Премиум-авто без водителя в прокат попадают только после полной страховки КАСКО, ОСАГО. По желанию клиента оформляем дополнительные страховки.</p>
        <p>Предлагаем только то, что нужно клиенту &ndash; без дополнительных опций, без водителя.</p>
        <p>Позвольте себе автомобиль мечты. Хотя бы на короткое время. Арендуйте машину&nbsp;бизнес-класса в Офис «Казанский»! Вы этого достойны.</p>
    </article>

@endsection

