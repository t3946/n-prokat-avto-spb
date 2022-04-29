@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/uslugi/">Услуги</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/arenda-minivena-posutochno/" itemprop="url item"><span itemprop="name" class='current'>Аренда минивэна посуточно</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <h1>Аренда минивэна на сутки</h1>
        <p>Посуточная аренда минивэна без водителя прекрасно подходит для выезда всей семьей на природу, свадьбы, маленького корпоративного праздника, поездки с друзьями на плэнер или рыбалку. Не нужно думать о страховке, обслуживании и прочих мелочах, можно просто взять &ndash; и пользоваться.</p>
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
        <span class="vka">Аренда минивэна посуточно</span>
        <div class="priceFilter">
            <a class="pfitem allcl" href="/katalog/"><span class="title">Все классы</span></a>
            <a class="pfitem" href="/katalog/klass-promo/">Класс промо</a><a class="pfitem" href="/katalog/arenda_avtomobilej_klassa_standart/">Класс стандарт</a><a class="pfitem" href="/katalog/arenda_avtomobilej_klassa_komfort/">Класс комфорт</a><a class="pfitem" href="/katalog/arenda_avtomobilej_klassa_krossover/">Класс кроссоверы</a><a class="pfitem" href="/katalog/arenda_minivenov/">Класс минивены</a><a class="pfitem" href="/katalog/arenda_avtomobilej_klassa_ljuks/">Класс бизнес</a><a class="pfitem" href="/katalog/arenda_avtomobilej_tesla/">Класс электромобили</a><a class="pfitem" href="/katalog/arenda_avtomobilej_klassa_sommercial/">Класс коммерческий</a>
        </div>
        <div class="allcat"><a href="/katalog/">Показать все варианты</a></div>
        <div>
            <div class="catalog 4">
                <a class="ob_1131" href="/katalog/arenda_avtomobilej_klassa_sommercial/citroen_berlingo1/">

                    <span class="title">Citroen Berlingo MT</span>
                    <span class="class">Класс коммерческий</span>
                    <span class="mprice">от 2070 руб.<span>за сутки</span></span>
                    <!--%system makeThumbnail('.%img%',270,'auto',img)%-->
                    <img src="/images/parser/Banner_Kiosk000034122000000019.jpeg?v=2" alt="" />
                    <span class="params">
		<span><img src="/images/templates/almac/img/seats@3x.png" alt="" /> 2 </span>
		<span><img src="/images/templates/almac/img/suitcase@3x.png" alt="" /> 10 </span>
		<span><img src="/images/templates/almac/img/doors@3x.png" alt="" /> 2 </span>
		<span><img src="/images/templates/almac/img/gear@3x.png" alt="" /> MT </span>
		<span><img src="/images/templates/almac/img/conditioners@3x.png" alt="" />A/C</span>
	</span>
                    <span class="bottom dbottom">
		<span class="price">от 2070 руб.</span>
		<span class="more">Подробнее</span>
	</span>
                    <ul class="pricesmob"><li><span>1-3 дня</span><span>2470 руб.</span></li><li><span>4-6 дней</span><span>2300 руб.</span></li><li><span>7-14 дней</span><span>2100 руб.</span></li><li><span>от 15 дней</span><span>2070 руб.</span></li></ul>
                    <span class="bottom mbottom">
		<span class="btarifs">Показать тарифы</span>
		<span class="more pushow d-none" data-title="Заявка на бронирование" data-descr="Citroen Berlingo MT" data-butts="Отправить заявку" data-id="000000019">Отправить заявку</span>
	</span>
                </a><a class="ob_1533" href="/marki/hyundai/hyundai-creta-2-0-at-promo/">

                    <span class="title">Hyundai Creta 2.0 AT Promo</span>
                    <span class="class">Hyundai</span>
                    <span class="mprice">от 2370 руб.<span>за сутки</span></span>
                    <!--%system makeThumbnail('.%img%',270,'auto',img)%-->
                    <img src="/images/parser/Banner_Kiosk000042668000000115.jpeg?v=2" alt="" />
                    <span class="params">
		<span><img src="/images/templates/almac/img/seats@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/suitcase@3x.png" alt="" /> 2 </span>
		<span><img src="/images/templates/almac/img/doors@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/gear@3x.png" alt="" /> AT </span>
		<span><img src="/images/templates/almac/img/conditioners@3x.png" alt="" />A/C</span>
	</span>
                    <span class="bottom dbottom">
		<span class="price">от 2370 руб.</span>
		<span class="more">Подробнее</span>
	</span>
                    <ul class="pricesmob"><li><span>1-3 дня</span><span>2970 руб.</span></li><li><span>4-6 дней</span><span>2770 руб.</span></li><li><span>7-14 дней</span><span>2500 руб.</span></li><li><span>от 15 дней</span><span>2370 руб.</span></li></ul>
                    <span class="bottom mbottom">
		<span class="btarifs">Показать тарифы</span>
		<span class="more pushow d-none" data-title="Заявка на бронирование" data-descr="Hyundai Creta 2.0 AT Promo" data-butts="Отправить заявку" data-id="000000115">Отправить заявку</span>
	</span>
                </a><a class="ob_209" href="/katalog/arenda_avtomobilej_klassa_ljuks/bmw_3_f30/">

                    <span class="title">BMW 3-er AT (F30)</span>
                    <span class="class">Класс бизнес</span>
                    <span class="mprice">от 3100 руб.<span>за сутки</span></span>
                    <!--%system makeThumbnail('.%img%',270,'auto',img)%-->
                    <img src="/images/parser/Banner_Kiosk000034136000000036.jpeg?v=2" alt="" />
                    <span class="params">
		<span><img src="/images/templates/almac/img/seats@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/suitcase@3x.png" alt="" /> 2 </span>
		<span><img src="/images/templates/almac/img/doors@3x.png" alt="" /> 4 </span>
		<span><img src="/images/templates/almac/img/gear@3x.png" alt="" /> AT </span>
		<span><img src="/images/templates/almac/img/conditioners@3x.png" alt="" />A/C</span>
	</span>
                    <span class="bottom dbottom">
		<span class="price">от 3100 руб.</span>
		<span class="more">Подробнее</span>
	</span>
                    <ul class="pricesmob"><li><span>1-3 дня</span><span>3970 руб.</span></li><li><span>4-6 дней</span><span>3600 руб.</span></li><li><span>7-14 дней</span><span>3300 руб.</span></li><li><span>от 15 дней</span><span>3100 руб.</span></li></ul>
                    <span class="bottom mbottom">
		<span class="btarifs">Показать тарифы</span>
		<span class="more pushow d-none" data-title="Заявка на бронирование" data-descr="BMW 3-er AT (F30)" data-butts="Отправить заявку" data-id="000000036">Отправить заявку</span>
	</span>
                </a><a class="ob_1338" href="/katalog/arenda_avtomobilej_klassa_krossover/bmw-x2-at-f39/">

                    <span class="title">BMW X2 AT (F39)</span>
                    <span class="class">Класс кроссоверы</span>
                    <span class="mprice">от 3970 руб.<span>за сутки</span></span>
                    <!--%system makeThumbnail('.%img%',270,'auto',img)%-->
                    <img src="/images/parser/Banner_Kiosk000036722000000094.jpeg?v=2" alt="" />
                    <span class="params">
		<span><img src="/images/templates/almac/img/seats@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/suitcase@3x.png" alt="" /> 2 </span>
		<span><img src="/images/templates/almac/img/doors@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/gear@3x.png" alt="" /> AT </span>
		<span><img src="/images/templates/almac/img/conditioners@3x.png" alt="" />A/C</span>
	</span>
                    <span class="bottom dbottom">
		<span class="price">от 3970 руб.</span>
		<span class="more">Подробнее</span>
	</span>
                    <ul class="pricesmob"><li><span>1-3 дня</span><span>4970 руб.</span></li><li><span>4-6 дней</span><span>4600 руб.</span></li><li><span>7-14 дней</span><span>4200 руб.</span></li><li><span>от 15 дней</span><span>3970 руб.</span></li></ul>
                    <span class="bottom mbottom">
		<span class="btarifs">Показать тарифы</span>
		<span class="more pushow d-none" data-title="Заявка на бронирование" data-descr="BMW X2 AT (F39)" data-butts="Отправить заявку" data-id="000000094">Отправить заявку</span>
	</span>
                </a><a class="ob_217" href="/katalog/arenda_avtomobilej_klassa_ljuks/bmw_5_g30/">

                    <span class="title">BMW 5-er AT (G30)</span>
                    <span class="class">Класс бизнес</span>
                    <span class="mprice">от 5770 руб.<span>за сутки</span></span>
                    <!--%system makeThumbnail('.%img%',270,'auto',img)%-->
                    <img src="/images/parser/Banner_Kiosk000034134000000038.jpeg?v=2" alt="" />
                    <span class="params">
		<span><img src="/images/templates/almac/img/seats@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/suitcase@3x.png" alt="" /> 2 </span>
		<span><img src="/images/templates/almac/img/doors@3x.png" alt="" /> 4 </span>
		<span><img src="/images/templates/almac/img/gear@3x.png" alt="" /> AT </span>
		<span><img src="/images/templates/almac/img/conditioners@3x.png" alt="" />A/C</span>
	</span>
                    <span class="bottom dbottom">
		<span class="price">от 5770 руб.</span>
		<span class="more">Подробнее</span>
	</span>
                    <ul class="pricesmob"><li><span>1-3 дня</span><span>7170 руб.</span></li><li><span>4-6 дней</span><span>6670 руб.</span></li><li><span>7-14 дней</span><span>6170 руб.</span></li><li><span>от 15 дней</span><span>5770 руб.</span></li></ul>
                    <span class="bottom mbottom">
		<span class="btarifs">Показать тарифы</span>
		<span class="more pushow d-none" data-title="Заявка на бронирование" data-descr="BMW 5-er AT (G30)" data-butts="Отправить заявку" data-id="000000038">Отправить заявку</span>
	</span>
                </a><a class="ob_1332" href="/katalog/arenda_avtomobilej_klassa_krossover/bmw-x3-iii-at-g1/">

                    <span class="title">BMW X3 III AT (G01)</span>
                    <span class="class">Класс кроссоверы</span>
                    <span class="mprice">от 6070 руб.<span>за сутки</span></span>
                    <!--%system makeThumbnail('.%img%',270,'auto',img)%-->
                    <img src="/images/parser/Banner_Kiosk000035560000000087.jpeg?v=2" alt="" />
                    <span class="params">
		<span><img src="/images/templates/almac/img/seats@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/suitcase@3x.png" alt="" /> 2 </span>
		<span><img src="/images/templates/almac/img/doors@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/gear@3x.png" alt="" /> AT </span>
		<span><img src="/images/templates/almac/img/conditioners@3x.png" alt="" />A/C</span>
	</span>
                    <span class="bottom dbottom">
		<span class="price">от 6070 руб.</span>
		<span class="more">Подробнее</span>
	</span>
                    <ul class="pricesmob"><li><span>1-3 дня</span><span>7570 руб.</span></li><li><span>4-6 дней</span><span>7070 руб.</span></li><li><span>7-14 дней</span><span>6470 руб.</span></li><li><span>от 15 дней</span><span>6070 руб.</span></li></ul>
                    <span class="bottom mbottom">
		<span class="btarifs">Показать тарифы</span>
		<span class="more pushow d-none" data-title="Заявка на бронирование" data-descr="BMW X3 III AT (G01)" data-butts="Отправить заявку" data-id="000000087">Отправить заявку</span>
	</span>
                </a><a class="ob_1228" href="/arenda-s-vykupom/klass-biznes/bmw_f10/">

                    <span class="title">BMW 5-er AT (F10)</span>
                    <span class="class">Класс бизнес</span>
                    <span class="mprice">от 70700 руб.<span>за сутки</span></span>
                    <!--%system makeThumbnail('.%img%',270,'auto',img)%-->
                    <img src="/images/parser/Banner_Kiosk000003216000000031.png?v=2" alt="" />
                    <span class="params">
		<span><img src="/images/templates/almac/img/seats@3x.png" alt="" /> 5 </span>
		<span><img src="/images/templates/almac/img/suitcase@3x.png" alt="" />2</span>
		<span><img src="/images/templates/almac/img/doors@3x.png" alt="" />4</span>
		<span><img src="/images/templates/almac/img/gear@3x.png" alt="" /> AT </span>
		<span><img src="/images/templates/almac/img/conditioners@3x.png" alt="" />A/C</span>
	</span>
                    <span class="bottom dbottom">
		<span class="price">от 70700 руб.</span>
		<span class="more">Подробнее</span>
	</span>
                    <ul class="pricesmob"><li><span>12 мес.</span><span>161300 руб.</span></li><li><span>18 мес.</span><span>120900 руб.</span></li><li><span>24 мес.</span><span>100200 руб.</span></li><li><span>36 мес.</span><span>77900 руб.</span></li></ul>
                    <span class="bottom mbottom">
		<span class="btarifs">Показать тарифы</span>
		<span class="more pushow d-none" data-title="Заявка на бронирование" data-descr="BMW 5-er AT (F10)" data-butts="Отправить заявку" data-id="">Отправить заявку</span>
	</span>
                </a>
            </div>
        </div>
    </div>

    <article class="innerPageContent">
        <h2>Как арендовать минивэн?</h2>
        <p>Снять в аренду на сутки минивэн не сложнее, чем любую другую машину. Нужно выбрать модель на сайте и оставить заявку на бронирование. Стоимость за сутки указана сразу на сайте, так что можно прикинуть бюджет. Обратите внимание, что необходимо внести депозит, он возвращается после сдачи машины обратно и удерживается в том случае, если произошло ДТП по вине арендатора.</p>
        <p>Минивэны в посуточную аренду можно взять при условии:</p>
        <ul>
            <li>Наличия водительского удостоверения;</li>
            <li>Водительского стажа от 5 лет;</li>
            <li>Возраста водителя от 25 лет.</li>
            <li>Для организаций &ndash; наличий копии устава, доверенности, ОГРН и ИНН.</li>
        </ul>
        <p>Все машины из автопарка &laquo;Альмак Прокат&raquo; прошли техническое обслуживание, полностью исправны, застрахованы по КАСКО и ОСАГО, снабжены кондиционером и другим функционалом. В основном используется автоматическая коробка передач, так что водить будет удобно. После каждого арендатора мы проводим тщательную очистку и дезинфекцию салона.</p>
        <p>После того, как Вы оставите заявку, наши специалисты свяжутся с Вами и проконсультируют по вопросам правил эксплуатации и аренды, стоимости, характеристик автомобиля и так далее.</p>
    </article>

@endsection

