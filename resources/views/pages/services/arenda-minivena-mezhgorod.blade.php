@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-minivena-mezhgorod/" itemprop="url item"><span itemprop="name" class='current'>Аренда минивэна межгород</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда минивэна межгород</h1>
        <p>Для семейных путешествий по России аренда минивэна &ndash; едва ли не лучший вариант. Будет достаточно места для багажа, машина надежная и просторная, проедет и по гладкой трассе, и по городу, и по проселочным грунтовкам, можно даже лечь спать прямо в ней.</p>
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
        <h2>Зачем брать минивэн в аренду?</h2>
        <p>Минивэны рассчитаны на 8 человек, включая водителя, так что многим семьям такая большая машина не нужна. Но и уезжать надолго в седане, особенно с детьми, неудобно, не влезут как следует детские кресла, некуда положить весь багаж. Так что проще взять для поездки в аренду минивэн без водителя на определенный срок (от суток), спокойно проехать на юг, в соседние города или за рубеж, а потом вернуть машину и больше не думать о ее содержании.</p>
        <p>Компания &laquo;Альмак Прокат&raquo; предлагает в межгород-аренду минивэны различных марок, так что водитель сможет подобрать тот вариант, который ему наиболее привычен. Важно, что в договор аренды можно вписать не только себя, но и супруга/супругу или друзей, если предполагается, что вести машину будут по очереди. На наших машинах можно выезжать за границу при условии оформленной гринкарты.</p>
        <p>Все наши минивэны:</p>
        <ul>
            <li>Прошли техническое обслуживание и чистку-дезинфекцию салона, так что они безопасны в том числе для детей;</li>
            <li>Застрахованы по ОСАГО и КАСКО, можно оформить дополнительную страховку от рисков;</li>
            <li>Оснащены кондиционером, АКПП, вместительным багажником.</li>
        </ul>
        <p>По всем вопросам касательно аренды минивэна для поездок по России обращайтесь к нашим специалистам через сайт, по телефону и при личной встрече в офисе!</p>
    </article>


@endsection

