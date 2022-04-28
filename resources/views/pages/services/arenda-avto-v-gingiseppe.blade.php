@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-minivena/" itemprop="url item"><span itemprop="name" class='current'>Аренда минивена</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page h-auto">
        <h1>Аренда минивэна без водителя</h1>
        <p>Вы заметили, что на улицах Санкт-Петербурга в туристический сезон стало меньше машин с иногородними номерами? Гости нашего города поняли: недорого взять в аренду автомобиль-минивэн без водителя на месте выгоднее и удобнее. Особенно, если есть выбор в тарифах, марках авто, сроках проката.</p>
        <!--<p style="text-align: center;"><img title="Аренда минивена" src="/images/images/3102/20.jpg" alt="Аренда минивена" width="700" height="auto" /></p>-->
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
        <h2>&laquo;Альмак-Прокат&raquo;: аренда современных минивэнов на любой срок</h2>
        <p>Вы путешествуете большой семьей или группой в 8-9 человек? Снимите в аренду минивэн без водителя &ndash; в нем удобно и комфортно. В большой багажник поместятся чемоданы, сумки, крупногабаритные покупки. Минивэны представительского класса доставят гостей и сотрудников вашей организации к месту проведения мероприятия. У нас вы сможете арендовать такую машину, к которой привыкли. Или хотели&nbsp;купить.</p>
        <p>Наши минивэны:</p>
        <ul>
            <li>проходят регулярное ТО в специализированных сервисных организациях;</li>
            <li>имеют страховку КАСКО, ОСАГО;</li>
            <li>оснащены системой климат-контроля, подогреваемыми сидениями, современной&nbsp; акустической системой.</li>
        </ul>
        <p>Мы следим за чистотой и внешним видом нашего автопарка. Всегда чистые, без неприятного запаха, обработанные после каждого арендатора эффективным антисептиком, автомобили из &laquo;Альмак-Прокат&raquo; &nbsp;безопасны, комфортны и просто красивы.</p>
        <p>Наши клиенты садятся за руль самых современных машин &ndash; мы регулярно обновляем парк авто. Может, прокат автомобиля минивэна без водителя будет тест-драйвом для машины вашей мечты?</p>
        <p>Вы получаете:</p>
        <ul>
            <li>полную свободу передвижений без ограничения на длину рабочего дня;</li>
            <li>дополнительное место;</li>
            <li>возможность не менять своих привычек в присутствии постороннего человека.</li>
        </ul>
        <h2>Концепция сервиса &laquo;Альмак-Прокат&raquo;: каждый клиент- уникален</h2>
        <p>Дешевой арендой минивэна без водителя &nbsp;в нашей компании воспользовались несколько сотен жителей и гостей СПб. Нас выбирают, рекомендуют своим знакомым, наши контакты передают компаниям - партнерам.</p>
        <p>Мы достигли этого за счет повышения комфортности, доступности, разнообразия наших услуг.</p>
        <p>Наши клиенты экономят:</p>
        <ul>
            <li>время за счет мобильного приложения &laquo;Альмак-Прокат&raquo;;</li>
            <li>бюджет благодаря разнообразным тарифам;</li>
            <li>нервы за счет круглосуточной технической поддержки.</li>
        </ul>
        <p>&nbsp;За 2 минуты вы бесплатно забронируете нужный автомобиль, за 15 &ndash; оформите аренду. Хотите дешевле &ndash; рассчитайте аренду автомобиля без экипажа с помощью онлайн-калькулятора и выберите недорогой тариф.</p>
        <p>Арендуйте минивэн без водителя в &laquo;Альмак-Прокат&raquo; на сутки, неделю, месяц &ndash; мы сделаем все, чтобы вы остались довольны!</p>
    </article>

@endsection

