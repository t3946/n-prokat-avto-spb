@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avtomobilya-na-svadbu/" itemprop="url item"><span itemprop="name" class='current'>Аренда автомобиля на свадьбу</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда автомобиля на свадьбу</h1>
        <p>Планируете торжество, но не можете решить проблему с транспортом? Это знакомо многим людям, ведь свадебная церемония &ndash; это большое мероприятие, в котором каждая мелочь играет большую роль. Передвижение гостей, молодоженов, должно проходить максимально комфортно, быстро и самое главное, безопасно. Неудивительно, что аренда автомобиля на свадьбу в СПб пользуется большой популярностью. Ведь это возможность выбрать самые разные марки, модели, виды транспорта, которые будут удовлетворять ваши требования.</p>
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
        <h2>Чем выгодна аренда машины на свадьбу?</h2>
        <p>Первый вопрос, который возникает у наших клиентов, в чем же выгода? Все просто, вам не нужно будет тратить время и денежные средства на приобретение дополнительных средств передвижения, когда все необходимое можно выбрать у нас. Наша компания владеет своим собственным автопарком, что помогает нам предлагать своим клиентам огромный ассортимент возможных вариантов. Наши преимущества:</p>
        <ul>
            <li>всегда привлекательные цены;</li>
            <li>большой выбор разных моделей от эконом- до бизнес-класса;</li>
            <li>отличное оснащение и состояние каждого автомашины;</li>
            <li>исполнение всех пунктов договора о сотрудничестве;</li>
            <li>помощь и индивидуальный подход;</li>
            <li>чистота и порядок в салоне выбранного транспорта.</li>
        </ul>
        <h2>Почему нас выбирают</h2>
        <p>За нашими плечами долгие годы работы в данной сфере. Мы порадовали большое количество молодожен, которые смогли оформить свое торжество так, как им хотелось, благодаря нашим услугам. Наши специалисты с радостью рассказывают и показывают возможности нашей компании, помогают с выбором, подыскивают наиболее выгодные варианты. Поэтому аренда авто на свадьбу от нашей компании &ndash; это вложение в репутацию и будущее молодой семьи.</p>
        <p>Помните, что внешний вид свободной церемонии и ее оформление всегда играет большую роль, наш прокат машин на свадьбу поможет сделать торжество запоминающимся и красивым. Мы всегда можем помочь с выбором украшений на автомашины, чтобы сэкономить время клиента.</p>
        <p>Именно поэтому прокат авто на свадьбу от нашей компании поможет вам сделать церемонию бракосочетания действительно роскошной. Если уже известна дата мероприятия, самое время обратиться к нам. Наши специалисты расскажут о свободных вариантах именно на этот день. Гибкая ценовая политика поможет сэкономить семейный бюджет, а постоянные акции и скидки сделают наше сотрудничество еще более привлекательным.</p>
    </article>

@endsection

