@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope=""
                                                                                            itemprop="itemListElement"
                                                                                            class="B_firstCrumb"
                                                                                            itemtype="http://schema.org/ListItem"><a
                itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position"
                                                                                   content="1"></a></span><span class="sep">»</span><span
            itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/kontakty/"
                                                                                                itemprop="url item"><span
                itemprop="name" class='current'>Контакты</span><meta itemprop="position" content="2"></span></div>
    <div class="toph1"><h1>Контакты</h1></div>
    <span class="ttitle taleft">Офисы обслуживания клиентов в г. Санкт-Петербург</span>

    <div class="faqtabs">
        <span class="butMobTabs">Офисы</span>
        <div>
            <span class="active">Офисы</span>
            <span>Пункты выдачи</span>
        </div>
    </div>

    <div class="tariff contMiniD contTab contTab_0">
        <div>
            <table>
                <tr>
                    <th>Офисы</th>
                    <th>Месторасположение</th>
                    <th>Режим работы</th>
                    <th>Подробнее</th>
                </tr>
                <tr>
                    <td>Офис «Дальневосточный»</td>
                    <td> Санкт-Петербург, ПР-КТ Васнецовский д.18, стр 1.</td>
                    <td>с 09:00 до 21:00</td>
                    <td><a class="button" href="#">Подробнее</a></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="tariff contMiniD contTab contTab_1" style="display: none;">
        <div>
            <table>
                <tr>
                    <th>Пункт выдачи</th>
                    <!--<th>Время подачи</th>-->
                    <th>Стоимость доставки</th>
                    <th>Подробнее</th>
                </tr>
                <tr>
                    <td>Всеволожск</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - бесплатно<br/>от 7 дней - бесплатно</td>
                    <td><a class="button" href="/kontakty/arenda-avto-vsevolozhsk/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Колпино</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - бесплатно<br/>от 7 дней - бесплатно</td>
                    <td><a class="button" href="/kontakty/arenda-avto-kolpino/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Мурино</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - бесплатно<br/>от 7 дней - бесплатно</td>
                    <td><a class="button" href="/kontakty/arenda-avto-murino/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Петергоф</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - бесплатно<br/>от 7 дней - бесплатно</td>
                    <td><a class="button" href="/kontakty/arenda-avto-petergof/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Пушкин</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - бесплатно<br/>от 7 дней - бесплатно</td>
                    <td><a class="button" href="/kontakty/arenda-avto-pushkin/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Красное Село</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - бесплатно<br/>от 7 дней - бесплатно</td>
                    <td><a class="button" href="/kontakty/arenda-avto-krasnoe-selo/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Гатчина</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - 2500 руб.<br/>от 7 дней - 1500 руб.</td>
                    <td><a class="button" href="/kontakty/arenda-avto-gatchina/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Сосновый Бор</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - 3000 руб.<br/>от 7 дней - 1500 руб.</td>
                    <td><a class="button" href="/kontakty/arenda-avto-sosnovyi-bor/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Кингисепп</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - 4000 руб.<br/>от 7 дней - 2500 руб.</td>
                    <td><a class="button" href="/kontakty/arenda-avto-kingisepp/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Выборг</td>
                    <!--<td>с 09:00 до 20:30</td>-->
                    <td>от 5 дней - 2500 руб.<br/>от 7 дней - 1500 руб.</td>
                    <td><a class="button" href="/kontakty/arenda-avto-vyborg/">Подробнее</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="contMiniM m_contTab m_contTab_1" style="display: none;">
        <div>
            <span class="title">Выборг</span>
            <!--<span class="infoline"><span>Время подачи:</span>с 09:00 до 20:30</span>-->
            <span class="infoline"><span>Стоимость доставки:</span>от 5 дней - 2500 руб.<br/>от 7 дней - 1500 руб.</span>
            <a class="button" href="/kontakty/arenda-avto-vyborg/">Подробнее</a>
        </div>
    </div>


    <div class="contMiniM m_contTab m_contTab_0">
        <div>
            <span class="title">Офис «Дальневосточный»</span>
            <span class="infoline"><span>Месторасположение:</span>С-Пб., пр. Дальневосточный 20к2</span>
            <span class="infoline"><span>Режим работы:</span>с 09:00 до 21:00</span>
            <a class="button" href="/kontakty/ofis-dal-nevostochnyj/">Подробнее</a>
        </div>
        <div>
            <span class="title">Офис «Гагарина»</span>
            <span class="infoline"><span>Месторасположение:</span>С-Пб., пр. Юрия Гагарина д.32, корп. 6Б</span>
            <span class="infoline"><span>Режим работы:</span>с 09:00 до 21:00</span>
            <a class="button" href="/kontakty/ofis-gagarina/">Подробнее</a>
        </div>
        <div>
            <span class="title">Офис «Блюхера»</span>
            <span class="infoline"><span>Месторасположение:</span>С-Пб., пр. Маршала Блюхера д.12 корп.7</span>
            <span class="infoline"><span>Режим работы:</span>с 09:00 до 21:00</span>
            <a class="button" href="/kontakty/ofis-blyuhera1/">Подробнее</a>
        </div>
    </div>
    <style>
        .faq > div.active .title {
            margin: 0 0 30px 0;
        }
    </style>
    <div class="urinfo" style="margin-bottom: 25px;">
        <div class="faq faq0 show" style="    background: #ecf1f9;">
            <div>
                <span class="title">Юридическая информация</span>
                <div class="urinfotxt">
                    <h1 class="mb-3">Контакты</h1>
                    <h3 class="mb-3">Кулешов Никита Алексеевич (ИП)</h3>
                    <ul class="list-unstyled m-0 fw-bold mb-3">
                        <li><strong>ИНН:</strong> 780454166575</li>
                    </ul>

                    <ul class="list-unstyled m-0 fw-bold mb-3">
                        <li><strong>Расчетный счет:</strong> 40802810132330002879</li>
                        <li><strong>Корр. счет:</strong> 30101810600000000786</li>
                        <li><strong>Банк:</strong> Филиал «Санкт-Петербургский» АО «Альфа Банк»</li>
                        <li><strong>БИК:</strong> 044030786</li>
                    </ul>

                    <ul class="list-unstyled m-0 fw-bold mb-3">
                        <li><strong>Юридический адрес компании:</strong> Проспект Васнецовский, д. 18, корп./стр.1, кв./оф.кв. 144. г. Санкт-Петербург</li>
                    </ul>

                    <h4>ОКВЭД:</h4>
                    <p>77.11 "Аренда и лизинг легковых автомобилей и легких автотранспортных средств"</p>
                </div>
            </div>
        </div>
    </div>
@endsection

