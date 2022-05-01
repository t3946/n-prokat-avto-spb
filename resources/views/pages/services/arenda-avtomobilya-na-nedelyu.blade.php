@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avtomobilya-na-nedelyu/" itemprop="url item"><span itemprop="name" class='current'>Аренда автомобиля на неделю</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда авто на неделю</h1>
        <p>Личный автомобиль обеспечивает человеку максимальную мобильность. Но возникают обстоятельства, когда своим транспортным средством пользоваться невозможно или нерационально, так что взять автомобиль недорого в аренду в Санкт-Петербурге &ndash; лучший выход. Офис «Казанский» уже 7 лет оказывает услуги по сдаче авто в прокат на неделю и любой другой срок!</p>
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
        <h2>7 особенностей подхода к аренде автомобилей&nbsp;в нашей&nbsp;компании&nbsp;</h2>
        <ol>
            <li>Собственный автопарк машин 30 различных типов не старше 5&nbsp;лет. Среди них модели класса эконом, стандарт, бизнес, комфорт, премиум. Клиенты могут также взять в аренду на неделю машины не только легковые, но и кроссоверы или минивэны.</li>
            <li>Особое внимание безопасности и надежности техники: все автомобили проходят регулярное техническое обслуживание и профилактические осмотры.</li>
            <li>Компания несет все страховые риски, связанные с эксплуатацией транспортных средств.</li>
            <li>Работает круглосуточная служба технической поддержки.</li>
            <li>Ни одно авто&nbsp;не отдается в прокат без тщательной очистки и дезинфекции салона, устранения посторонних запахов.</li>
            <li>Цена аренды авто на неделю, зафиксированная в договоре, не меняется. Оплата неустойки происходит по согласованным тарифам.</li>
            <li>Клиент может воспользоваться любым из множества тарифов, разработанных в компании.</li>
        </ol>
        <h2>Чем выгодна недельная аренда автомобиля?</h2>
        <p>У проката&nbsp;автомашин свои особенности. Чем больше срок аренды, тем выгоднее тариф. Оформление этой услуги на неделю &ndash; ежесуточная экономия в 16-17% по сравнению с посуточной оплатой. Выгодна аренда машины на неделю для поездки по Ленобласти, России и в ближнее зарубежье.</p>
        <p>Кроме того, есть возможность продлить аренду до 2-х недель и более. И тогда экономия будет еще существеннее.</p>
        <h2>Оформление аренды машины в Офис «Казанский»</h2>
        <p>Выбрать и забронировать автомобиль удобнее всего с помощью бесплатного мобильного приложения, разработанного компанией. Это займет всего 1-2 минуты.</p>
        <p>За 15 минут, с минимальным пакетом документов, можно оформить аренду &ndash; через приложение или в ближайшем офисе компании. По желанию клиента машину доставят в любое место Санкт-Петербурга.</p>
        <p>Оплата &ndash; любым способом при получении автомобиля.</p>
        <p>Арендуйте автомашины на неделю по своему вкусу и предпочтениям в Офис «Казанский» &ndash; это выгодно, надежно и удобно!</p>
    </article>
@endsection

