@extends('layout.page')

@section('title')
    Услуги
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/uslugi/" itemprop="url item"><span itemprop="name" class='current'>Услуги</span><meta itemprop="position" content="2"></span></div>

    <article class="innerPageContent blog-page">
        <div class="tariff tariff_d mt-1" style="margin:20px 0 25px; display: block;">
            <div class="ttabscont">
                <h2 style="text-align: center;"><strong>Дополнительные опции и оборудование</strong></h2>
                <table>
                    <tbody>
                    <tr>
                        <th style="width: 367px;" width="367">
                            <p>Наименование</p>
                        </th>
                        <th style="width: 368px;" width="368">
                            <p>Стоимость</p>
                        </th>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="367">
                            <p>Аренда детского кресла</p>
                        </td>
                        <td style="padding: 0 20px;" width="368">
                            <p>200 руб. в сутки, но не более 2000 за период</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="367">
                            <p>Аренда транспондера**</p>
                        </td>
                        <td style="padding: 0 20px;" width="368">
                            <p>100 руб. в сутки, но не более 1000 за период</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="367">
                            <p>Выезд за пределы СПб и ЛО</p>
                        </td>
                        <td style="padding: 0 20px;" width="368">
                            <p>200 руб. в сутки</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="367">
                            <p>Дополнительный водитель</p>
                        </td>
                        <td style="padding: 0 20px;" width="368">
                            <p>150 руб. в сутки</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h3 style="text-align: center;"><strong>Дополнительные услуги</strong></h3>
                <table width="737">
                    <tbody>
                    <tr>
                        <th style="width: 369px;" width="369">
                            <p>Наименование</p>
                        </th>
                        <th style="width: 369px;" width="369">
                            <p>Стоимость</p>
                        </th>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>Дополнительное страхование</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>От 150 руб. в сутки</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>Техпомощь на дороге*</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>От 400 руб. в сутки</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h3 style="text-align: center;"><strong>Подача и возврат автомобиля</strong></h3>
                <table width="737">
                    <tbody>
                    <tr>
                        <th style="width: 369px;" width="369">
                            <p>Наименовние</p>
                        </th>
                        <th style="width: 369px;" width="369">
                            <p>Стоимость</p>
                        </th>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>Подача/возврат автомобиля в аэропорту Пулково</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>1200</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>Подача/возврат автомобиля по адресу (в пределах КАД)</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>1000</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>Подача/возврат автомобиля от метро</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>800</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>Подача/возврат в нерабочее время</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>По запросу</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h3 style="text-align: center;"><strong>Мойка/химчистка</strong></h3>
                <table width="737">
                    <tbody>
                    <tr>
                        <th style="width: 369px;" width="369">
                            <p>Наименование</p>
                        </th>
                        <th style="width: 369px;" width="369">
                            <p>Стоимость</p>
                        </th>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>Мойка кузова</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>500 руб.&nbsp; при бронировании / 700 руб. при возврате а/м</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;" width="369">
                            <p>&nbsp;Химчистка</p>
                        </td>
                        <td style="padding: 0 20px;" width="369">
                            <p>3500 руб.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>*Тех.помощь</p>
                <p>В дополнение к базовой опции она включает в себя:</p>
                <ul style="list-style-type: disc;">
                    <li>подвоз топлива</li>
                    <li>бесплатный вызов эвакуатора при ДТП</li>
                    <li>закрытые ключи: если Вы забыли ключи внутри закрытого автомобиля, мы поможем открыть двери</li>
                    <li>разряженный аккумулятор: если аккумулятор полностью разрядился, мы поможем завести автомобиль</li>
                    <li>прокол шин: мы заменим поврежденную покрышку или доставим автомобиль в ближайший сервисный центр (стоимость запасной покрышки оплачивается отдельно)</li>
                </ul>
                <p>Услуга распространяется на территории СПб и ЛО.</p>
                <p>** Транспондер</p>
                <p>Оплата проезда в сумму не включена, оплачивается отдельно при возврате а/м.</p>
            </div>
        </div>
        <h1>Услуги</h1>
        <div class="blog">
            <a href="/uslugi/arenda-avto-v-gingiseppe/">
                <img src="/images/kingisepp.jpg" alt="" />
                <span>
		<span class="title">Аренда авто в Кингисеппе — посуточно | без водителя</span>
		<p>Аренда авто в Кингисеппе посуточно. Новые автомобили 2021-2022 г.в., в наличии более 60 моделей от эконом до бизнес класса. Прокат машин без водителя в Кингисеппе. Работаем по всей России. Круглосуточная поддержка.</p>
	</span>
            </a><a href="/uslugi/arenda-mashiny-yuridicheskim-licom/">
                <img src="/images/images/02.11.2015/arenda_avto_dlya_yur_lic.jpg" alt="" />
                <span>
		<span class="title">Аренда машины юридическим лицом в Санкт-Петербурге</span>
		<p>Аренда авто для организации. Корпоративный транспорт для юридических лиц</p>
	</span>
            </a><a href="/uslugi/arenda-avto-na-7-mest/">
                <img src="/images/images/3102/2584654249.png" alt="" />
                <span>
		<span class="title">Аренда 7 местного авто без водителя | Прокат семиместного автомобиля в СПб</span>
		<p>Прокат семиместного автомобиля в&nbsp;Санкт-Петербурге</p>
	</span>
            </a><a href="/uslugi/arenda-avto-s-vyezdom-za-granicu/">
                <img src="/images/images/3102/84322185597654.png" alt="" />
                <span>
		<span class="title">Аренда авто с выездом за границу | Прокат автомобиля для поездки за границу</span>
		<p>Прокат автомобиля для поездки за границу</p>
	</span>
            </a><a href="/uslugi/arenda-legkovyh-avto-s-vykupom/">
                <img src="/images/images/3102/4556465468798.png" alt="" />
                <span>
		<span class="title">Аренда легковых автомобилей с правом выкупа в СПб</span>

	</span>
            </a><a href="/uslugi/arenda-minivena-mezhgorod/">
                <img src="/images/images/3102/644641549879797.png" alt="" />
                <span>
		<span class="title">Аренда минивэна для путешествий по России без водителя в СПб</span>
		<p>Аренда минивэна для путешествий по России</p>
	</span>
            </a><a href="/uslugi/arenda-minivena-posutochno/">
                <img src="/images/images/3102/658754548768784.png" alt="" />
                <span>
		<span class="title">Аренда минивэна посуточно в СПб без водителя | Снять минивэн на сутки</span>
		<p>Снять минивэн на сутки&nbsp;в Санкт-Петербурге</p>
	</span>
            </a><a href="/uslugi/arenda-avto-po-rossii/">
                <img src="/images/images/3102/654641328557845.png" alt="" />
                <span>
		<span class="title">Аренда авто для поездки по России в СПб | Прокат машины на дальние расстояния</span>
		<p>Аренда автомобилей для поездки по России</p>
	</span>
            </a><a href="/uslugi/arenda-legkovyh-avtomobilej/">
                <img src="/images/images/3102/depositphotos_26928661_original-3.jpg" alt="" />
                <span>
		<span class="title">Аренда легкового автомобиля в СПб | Взять легковушку на прокат в «Альмак Прокат»</span>
		<p>Легковой автомобиль в аренду в Санкт-Петербурге.</p>
	</span>
            </a><a href="/uslugi/arenda-avtomobilya-na-vyhodnye/">
                <img src="/images/images/3102/38f56cc16f13b2675e4a51e4f9eab4a4.jpg" alt="" />
                <span>
		<span class="title">Аренда авто на выходные в СПб | Прокат машин в «Альмак Прокат»</span>
		<p>Аренда автомобиля на выходные. Выбор комплектации авто. Возможность забронировать.</p>
	</span>
            </a><a href="/uslugi/arenda-avtomobilya-na-2-nedeli/">
                <img src="/images/images/3102/4210973.jpeg" alt="" />
                <span>
		<span class="title">Аренда авто на 2 недели | Прокат машины на 14 дней в СПб | «Альмак Прокат»</span>
		<p>Взять автомобиль на 2 недели. Прокат машин на 14 дней в Санкт-Петербурге. Выбор комплектации авто.</p>
	</span>
            </a><a href="/uslugi/dlitelnaya-arenda-avtomobilya/">
                <img src="/images/images/3102/dfslkgjhsgrhg87546.png" alt="" />
                <span>
		<span class="title">Сервис долгосрочной аренды авто в СПб | Снять в прокат автомобиль на длительный срок в «Альмак Прокат»</span>
		<p>Аренда автомобилей на длительный срок. Выгодные цены. Бронирование. Различные комплектации.</p>
	</span>
            </a><a href="/uslugi/arenda-minivena/">
                <img src="/images/images/3102/20.jpg" alt="" />
                <span>
		<span class="title">Аренда минивэна без водителя в СПб | Снять авто минивэн на прокат в «Альмак Прокат»</span>
		<p>Аренда минивена на 7, 8 и более человек. Без скрытых платежей. Удобное бронирование на сайте. Взять напрокат минивен в СПб. Застрахованный автомобиль, оперативная подача.</p>
	</span>
            </a><a href="/uslugi/prokat-dorogih-avto/">
                <img src="/images/images/3102/19.jpg" alt="" />
                <span>
		<span class="title">Аренда авто бизнес класса | Взять в прокат элитный автомобиль авто в Санкт-Петербурге</span>
		<p>Прокат дорогих авто в СПб. Мерседес, Инфинити, Ауди и другие. Экслюзивные варианты. Быстрая подача и оформление. VIP премиум аренда дорогих машин для торжества и личного пользования.</p>
	</span>
            </a><a href="/uslugi/prokat-avto-bez-voditelya/">
                <img src="/images/images/3102/18.jpg" alt="" />
                <span>
		<span class="title">Прокат/аренда авто без водителя в Санкт-Петербурге</span>
		<p>Прокат авто в СПб без водителя. Для жителей России. Audi, Hyundai, Infiniti, Volkswagen, KIA, Renault и другие модели. Прокат автомобиля без водителя &ndash; это быстро, выгодно и удобно!</p>
	</span>
            </a><a href="/uslugi/arenda-avtomobilya-na-svadbu/">
                <img src="/images/images/3102/17.jpg" alt="" />
                <span>
		<span class="title">Аренда автомобиля на свадьбу Санкт-Петербурге</span>
		<p>Аренда автомобиля на свадьбу. Большой каталог. Свадебный кортеж. Бизнес класс. Чистые, не прокуренные салоны. Автомобили для дня бракосочетания. Закажите прокат машин на свадьбу!</p>
	</span>
            </a><a href="/uslugi/arenda-avto-na-god/">
                <img src="/images/images/3102/16.jpg" alt="" />
                <span>
		<span class="title">Аренда авто на год — цены в Санкт-Петербурге | Годовая аренда автомобиля</span>
		<p>Аренда авто на год на оптимальных условиях. В наличии автомашины известных марок разного класса. Современная машина в аренду на год. Работаем все дни недели. Круглосуточная поддержка.</p>
	</span>
            </a><a href="/uslugi/arenda-avtomobilya-na-nedelyu/">
                <img src="/images/images/3102/15.jpg" alt="" />
                <span>
		<span class="title">Аренда автомобиля на неделю в Санкт-Петербурге | «Альмак Прокат»</span>
		<p>Аренда авто на неделю в СПб. Подбор по параметрам. Бронирование. автомашины всех классов, включая бизнес и комфорт. Оформление заявки прямо на сайте. Круглосуточный сервис.</p>
	</span>
            </a><a href="/uslugi/arenda-avto-na-mesyac/">
                <img src="/images/images/3102/14.jpg" alt="" />
                <span>
		<span class="title">Аренда авто на месяц — цена в СПб | Прокат машин помесячно</span>
		<p>Аренда авто на месяц. Широкий модельный ряд и лояльный условия на прокат авто на месяц. Стандарт, комфорт, бизнес и другие модели. Для юридических лиц и частников.</p>
	</span>
            </a><a href="/uslugi/vzyat-mashinu-v-arendu/">
                <img src="/images/images/3102/13.jpg" alt="" />
                <span>
		<span class="title">Взять машину в аренду в Санкт-Петербурге</span>
		<p>Как взять машину в аренду на лучших условиях? Позвоните по телефону 8(812)241-10-48. Привлекательные цены и первоклассный сервис. Спешите взять авто в аренду в Санкт-Петербурге.</p>
	</span>
            </a>
        </div>
        <div class="pagination">
            <span>1</span><a href="?p=1">2</a><a href="?p=1">></a>
        </div>
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

    </article>

@endsection
