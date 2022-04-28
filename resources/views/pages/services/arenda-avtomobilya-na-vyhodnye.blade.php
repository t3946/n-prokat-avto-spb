@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avtomobilya-na-vyhodnye/" itemprop="url item"><span itemprop="name" class='current'>Аренда автомобиля на выходные</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда автомобиля на выходные</h1>
        <p>Взять в аренду автомобиль на выходные и махнуть куда-нибудь подальше от города, с семьей или в одиночку, чтобы отвлечься от бесконечной и беспросветной суеты города &ndash; чем не сценарий для уставшего жителя Санкт-Петербурга? Тем более, что арендовать машину очень просто!</p>
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
        <h2>Как арендовать машину на выходные</h2>
        <p>Компания &laquo;Альмак Прокат&raquo; работает на рынке проката машин уже не первый год и за это время достигла почти полного совершенства в своей деятельности! У нас можно взять в аренду на выходные машину бизнес- и эконом-класса (для представительских целей и просто для прогулок по городу), легковые, внедорожники и минивэны (для гладких дорог, бездорожья, поездок в Карелию или на дачу, в одиночку или с большой семьей). Очень важно, что все машины:</p>
        <ul>
            <li>Чистые (мы проводим полную дезинфекцию салона после каждого арендатора и следим за чистотой кузова).</li>
            <li>Ухоженные (проходят регулярное техническое обслуживание, замену фильтров, отладку функционала).</li>
            <li>Застрахованные (КАСКО, ОСАГО &ndash; все, что требуется для автомобиля того или иного типа).</li>
            <li>Разных марок (так что любителям BMW не придется садиться за руль Citroen и наоборот).</li>
        </ul>
        <p>На наших автомобилях можно выезжать за границу и махнуть в Европу на выходные (при условии оформления Зеленой карты на Вас), покататься по городу и окрестностям, заехать в соседний город, съездить по делам в Москву &ndash; в общем, все, что угодно, как будто у Вас свой личный автомобиль, но при этом Вам не нужно думать о страховках и других мелочах!</p>
        <p>Прокат автомобилей на выходные осуществляется для лиц, достигших 23 лет, имеющих стаж вождения от 3 лет и водительское удостоверение. Также мы работаем с юридическими лицами, в этом случае нужно предоставить копии Устава, разрешения от директора, ИНН и ОГРН.</p>
        <p>Чтобы забронировать машину, достаточно оставить заявку на сайте или по телефону, а потом подъехать к нам в офис с документами. Машину можно будет забрать сразу после внесения залога, также можно застраховаться от рисков. По всем вопросам касательно аренды авто на выходные обращайтесь к нашим специалистам по телефону и через форму онлайн-консультанта.</p>
    </article>

@endsection

