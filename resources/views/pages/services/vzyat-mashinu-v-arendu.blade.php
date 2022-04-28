@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/vzyat-mashinu-v-arendu/" itemprop="url item"><span itemprop="name" class='current'>Взять машину в аренду</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Взять машину в аренду</h1>
        <p>Хороший автопрокат &ndash; это выгодные условия, современный автопарк, быстрое оформление документов. Все это вы найдете в нашей компании! Вам необходимо взять машину в аренду в СПб? Мы работаем для комфорта и удобства наших клиентов.</p>
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
        <h2>Почему нас выбирают?</h2>
        <p>Все автомашины имеют 100% надежность и обязательно проходят своевременный техосмотр. Мы подаем клиенту только исправный, чистый и ухоженный транспорт.</p>
        <p>Обращайтесь к нам, если автомобиль нужен лично вам или предприятию для своих сотрудников и руководства.</p>
        <p>Пришло время починить вашу собственную автомашину? Возможно, вы продали свой автотранспорт, а новенький еще не успели приобрести.</p>
        <p>Обращаясь в нашу компанию, вы получаете удобный, чистый и исправный автомобиль. Мы всегда готовы вам помочь и учесть ваши предпочтения.</p>
        <h2>Где взять машину в прокат определенного класса?</h2>
        <p>Если речь идет о легковом транспорте, в нашем парке всегда есть модели разного уровня.</p>
        <ol>
            <li>Стандарт класс. Хороший уровень удобства передвижения и низкий ценовой диапазон.</li>
            <li>Комфорт класс. Широкий выбор моделей по мощность двигателя и маркам. Автоматическая коробка и передний привод доставят удовольствие при вождении.</li>
            <li>Бизнес класс. Взять авто в аренду в этом сегменте значит быть уверенным, что статус модели соответствует его владельцу. Бизнес-партнеры, друзья, любимая которых вы встречаете в аэропорту обязательно оценят преимущества бизнес-класса.</li>
            <li>Минивэны. Организуете важную встречу, где приглашено большое количество гостей? Наши вместительные минивэны будут актуальны и максимально удобны.</li>
        </ol>
        <p>Для удобства навигации по нашему сайту мы создали разделы: тарифы, вопросы и условия с полными правила оказания услуг, а также необходимым перечнем документов для физических и юридических лиц.</p>
        <h2>Где можно взять машину в аренду?</h2>
        <p>Срочно ищу машину в аренду для себя. Такие объявления часто встречаются в сети. Экономьте свое время. Обращайтесь к нашим специалистам. Мы давно занимаемся оказанием подобных услуг и учли все нюансы.</p>
        <p>Оформление происходит просто, быстро и без лишней бюрократии:</p>
        <ul>
            <li>вы обращайтесь по телефону, который указан на сайте, или оставляете заявку;</li>
            <li>консультант поможет подобрать вариант с учетом ваших требований и пожеланий (механика или автомат, уровень класса, дополнительные опции)</li>
            <li>вы предоставляете документы на право управлять транспортным средством и паспорт;</li>
            <li>оформление договора происходит в течение 10-15 минут (минимальной срок пользования 24 часа);</li>
            <li>далее мы подаем автомашину по адресу или вы забираете транспортное средство в нашем офисе.</li>
        </ul>
        <p>Все теперь можно садиться за руль и отправляться в путь.</p>
        <p>У вас нет времени ожидать оформления бумаг, и вы хотите максимально быстро забрать выбранный вариант? Отправьте свои документы нам по электронной почте, и мы заранее все подготовим.</p>
        <p>Прежде чем набирать в поисковике запрос о том, что ищу аренду авто, позвоните в нашу компанию.</p>
    </article>

@endsection

