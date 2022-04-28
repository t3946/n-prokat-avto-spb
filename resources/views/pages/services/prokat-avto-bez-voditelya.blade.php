@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')


    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/prokat-avto-bez-voditelya/" itemprop="url item"><span itemprop="name" class='current'>Прокат авто без водителя</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Прокат авто без водителя</h1>
        <p>Если у вас возникла необходимость взять в прокат авто в СПб без водителя, наше предприятие окажет эту услугу. В автопарке есть большой выбор моделей на любой вкус.</p>
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
        <p>Мы оказываем услугу по первому требованию всем желающим. Для оформления заявки стоит выполнить некоторые условия и соответствовать нашим требованиям. Мы оказываем услугу исключительно лицам, достигшим возраста 23 года, а также имеющим стаж вождения от трех лет и больше.</p>
        <p>На каких условиях можно получить транспортное средство во временное пользование:</p>
        <ol>
            <ol>
                <li>Легковое авто арендуется без нашего сотрудника за рулем.</li>
                <li>Клиент получает транспортное средство в нужный срок и в нужном месте.</li>
            </ol>
        </ol>
        <ol>
            <li>Срок эксплуатации составляется минимум на 1 день. Чем дольше эксплуатируется транспортное средство, тем ниже стоимость наших услуг.</li>
        </ol>
        <h2>Чем отличается аренда машины без водителя?</h2>
        <p>Передвижение в транспортном средстве без нашего сотрудника за рулем имеет следующие преимущества:</p>
        <ul>
            <li>можно запланировать любые встречи и не быть привязанным к наемному работнику;</li>
            <li>клиент получает неограниченную свободу передвижения;</li>
            <li>в салоне нет посторонних лиц.</li>
        </ul>
        <p>Часто клиент хочет провести тест-драйв модели, которая ему понравилась. Приобретать автотранспорт, не оценив ее комфорт и ходовые характеристики неразумно. Аренда авто без водителя позволяет протестировать возможности и технические характеристики любой модели мирового автопрома на практике без больших капиталовложений. Достаточно оформить заявку и получить транспортное средство.</p>
        <h2>Аренда автомобиля без водителя от нашей компании</h2>
        <p>Наш сервис позволяет подать заявку в электронном виде. Для этого достаточно заполнить специальную форму на сайте.</p>
        <p>Все нюансы можно обсудить с диспетчером, позвонив по телефону, указанному на сайте. Он даст ответы абсолютно на все вопросы, которые могут возникнуть.</p>
        <p>Стоимость наших услуг довольно демократичная. Цена за сутки зависит от времени эксплуатации транспортного средства. При длительных сроках использования мы предоставляет скидки.</p>
        <p>Если возникли проблемы, касающиеся технического обслуживания, клиент имеет возможность позвонить на горячую линию в любое время суток. Наши специалисты приедут и решат проблему в самые короткие сроки.</p>
        <p>Фирма предоставляет модели любых марок с полной комплектацией и страховкой. Прокат автомобиля без водителя дает возможность управлять элитными моделями и не вкладывать огромные средства на их содержание.</p>
    </article>

@endsection

