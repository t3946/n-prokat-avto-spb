@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-avto-na-7-mest/" itemprop="url item"><span itemprop="name" class='current'>Аренда авто на 7 мест</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда авто на 7 мест</h1>
        <p>Выезд большой компанией? Семьей? Аренда семиместного автомобиля без водителя решит вопрос, где всем разместиться! Мы предлагаем машины нескольких марок, чтобы Вы смогли подобрать самую подходящую модель, которая будет и удобна, и красива, и понравится в вождении.</p>
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
        <h2>Как арендовать семиместную машину</h2>
        <p>Аренда автомобиля на 7 мест без водителя обычно актуальна для больших компаний или семейного выезда с детьми на юга, к родственникам, за границу. На таком можно чувствовать себя свободно в перемещениях, нет нужды покупать билеты и следить за расписанием, можно остановиться в любом месте на пикник или купание. Чтобы было удобнее, обычно документы оформляют сразу на двух-трех взрослых, тогда вести машину можно по очереди, и каждый сможет зайти в бар или просто отоспаться.</p>
        <p>Стоимость проката 7-местного автомобиля без водителя зависит от конкретной модели, длительности аренды и предполагаемого автопробега. Для путешествий лучше выбирать сразу тариф с неограниченным пробегом, можно будет не думать о том, не слишком ли много проехали за день, и сосредоточиться на дороге.</p>
        <p>Оформление документов не займет много времени. Машину можно забронировать, чтобы ее никто не забрал, взять на день, неделю, месяц, год и даже выкупить в личное пользование, если она понравилась. Мы работаем как с физическими, так и с юридическими лицами и предоставляем полный пакет документов на автомобиль, в том числле документы о страховке, прохождении технического обслуживания. После каждого арендатора салон подвергается тщательной чистке и дезинфекции, так что пользоваться машиной безопасно и для детей.</p>
    </article>


@endsection

