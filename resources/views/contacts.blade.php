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
                    <td>С-Пб., пр. Дальневосточный 20к2</td>
                    <td>с 09:00 до 21:00</td>
                    <td><a class="button" href="/kontakty/ofis-dal-nevostochnyj/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Офис «Гагарина»</td>
                    <td>С-Пб., пр. Юрия Гагарина д.32, корп. 6Б</td>
                    <td>с 09:00 до 21:00</td>
                    <td><a class="button" href="/kontakty/ofis-gagarina/">Подробнее</a></td>
                </tr>
                <tr>
                    <td>Офис «Блюхера»</td>
                    <td>С-Пб., пр. Маршала Блюхера д.12 корп.7</td>
                    <td>с 09:00 до 21:00</td>
                    <td><a class="button" href="/kontakty/ofis-blyuhera1/">Подробнее</a></td>
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
                    <h1>Контакты</h1>
                    <h3>ООО "КРОНОС"</h3>
                    <p><strong>ИНН:</strong><span>&nbsp;</span>7804626873<br/><strong>КПП:</strong><span>&nbsp;</span>780401001<br/><strong>ОГРН:</strong><span>&nbsp;</span>1187847248775<br/><strong>ОКПО:</strong><span>&nbsp;</span>32789443
                    </p>
                    <p><strong>Расчетный
                            счет:</strong><span>&nbsp;</span>40702810632130006688<br/><strong>Банк:</strong><span>&nbsp;</span>ФИЛИАЛ
                        "САНКТ-ПЕТЕРБУРГСКИЙ" АО
                        "АЛЬФА-БАНК"<br/><strong>БИК:</strong><span>&nbsp;</span>044030786<br/><strong>Корр.
                            счет:</strong><span>&nbsp;</span>30101810600000000786</p>
                    <p><strong>Юридический адрес:</strong><span>&nbsp;</span>195197 г. Санкт-Петербург, пр. Маршала Блюхера,
                        д.12, кор.7, лит.Б., помещение № 614/1</p>
                    <p><strong>Генеральный директор:</strong><span>&nbsp;</span>Охрименко Анатолий Александрович</p>
                    <h4>&nbsp;</h4>
                    <h4>ОКВЭД:</h4>
                    <p>77.11 "Аренда и лизинг легковых автомобилей и легких автотранспортных средств"</p>
                    <p>45.11.2 "Торговля розничная легковыми автомобилями и легкими автотранспортными средствами в
                        специализированных магазинах&rdquo;</p>
                    <p>45.11.3 " Торговля розничная легковыми автомобилями и легкими автотранспортными средствами прочая&rdquo;</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div>
            <div class="footer">
                <div class="leftf">
                    <span class="logof"><img src="/images/origin/logof@3x.png" alt=""/></span>
                    <div class="soc">
                        <a href="https://vk.com/almak_prokat" target="_blank"><img
                                src="/images/origin/Priceimageextra0000031391.jpeg" alt=""/></a>
                        <a href="https://www.youtube.com/channel/UCaTSjw3DWHSc2HuqF1dhHwg" target="_blank"><img
                                src="/images/origin/Priceimageextra0000031422.jpeg" alt=""/></a>
                        <a href="https://ok.ru/almakprokat" target="_blank"><img
                                src="/images/origin/Priceimageextra0000031433.jpeg" alt=""/></a>

                    </div>
                </div>
                <div class="centerf">
                    <div class="fmenu">
                        <a href="/partnery/">Партнеры</a><a href="/voprosy/">Вопросы и условия</a>
                    </div>
                    <div class="fmenu">
                        <a href="/obzory_avtomobilej/">Обзоры автомобилей</a><a href="/stati/">Статьи</a>
                    </div>

                    <div class="fmenu">
                        <a href="/programma/">Программа лояльности</a>
                        <a href="/konkurs/">Конкурс</a>
                        <a href="/uslugi/">Услуги</a>
                        <a href="/otzyvy/">Отзывы</a>
                    </div>


                </div>
                <div class="rightf">
                    <span class="titlef">Справочный центр</span>
                    <a class="telf" href="tel:+78122411070">+7 (812) 241-10-70</a>
                    <div class="appf">
                        <a class="ios" href="https://trk.mail.ru/c/nczwt4?mt_idfa={mt_idfa}"><img
                                src="/images/origin/appleapp.svg" alt=""/></a>
                        <a class="android" href="https://trk.mail.ru/c/yd9sq5?mt_gaid={mt_gaid}"><img
                                src="/images/origin/googleapp.svg" alt=""/></a>

                    </div>
                    <div class="bankImg">

                        <img src="/images/origin/MasterCard.jpeg" alt=""/>
                        <img src="/images/origin/VISA.png" alt=""/>
                        <img src="/images/origin/opl.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="linef">Информация на данном сайте носит исключительно ознакомительный характер и не является
                публичной офертой <a href="/uslovija_arendy_avtomobilej/">Прочитайте условия договора.</a></div>
            <div class="linef"><p style="text-align: center;">© 2022</p></div>
        </div>


    </footer>

    <div class="vConts">
        <div class="ico vc_mbut"><img src="/images/origin/v_phone.png" alt=""/></div>
        <a class="ico vc_link" href="https://api.whatsapp.com/send?phone=79052230024" target="_blank"><img
                src="/images/origin/v_w.png" alt=""/></a><a class="ico vc_link" href="https://t.me/almakprokat"
                                                            target="_blank"><img src="/images/origin/v_t.png"
                                                                                 alt=""/></a>
    </div>



    <div class="puw">
        <div class="pubg puclose"></div>
        <div class="pu">
            <div class="pucont pucontMain">
                <img class="puc puclose" src="/images/origin/close.png" alt=""/>
                <span class="title"></span>
                <span class="descr"></span>
                <form class="puform" method="post" action="">
                    <label class="label"><input type="text" name="data[Имя]"/><span class="placeholder"/>Имя</span><span
                            class="txterr">Необходимо указать имя</span></label>
                    <label class="label"><input type="tel" name="data[Телефон]"/><span class="placeholder"
                                                                                       data-mask="+7 (000) 000-00-00"/>Телефон</span>
                        <span class="txterr">Необходимо указать телефон</span></label>
                    <input type="hidden" name="data[Авто]"/>
                    <input type="hidden" name="type" value="1"/>
                    <input type="hidden" name="renttype"/>
                    <div class="politics-block">
                        <input type="submit" value=""/>
                        <span class="politics-link">
            Нажимая кнопку "Отправить" вы соглашаетесь с
            <a href="/privacy_policy/" target="_blank">пользовательским соглашением</a>
          </span>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="puw1">
        <div class="pubg puclose"></div>
        <div class="pu">
            <div class="pucont pucontMain1">
                <img class="puc puclose" src="/images/origin/close.png" alt=""/>
                <span class="title"></span>
                <span class="descr"></span>
                <form class="puform" method="post" action="">
                    <label class="label"><input class="nofocus" disabled value="Контакты" type="text"
                                                name="data[Услуга]"/><span class="placeholder"/>Услуга*</span><span
                            class="txterr">Необходимо указать услугу</span></label>
                    <label class="label"><input type="text" name="data[Имя]"/><span class="placeholder"/>Имя*</span><span
                            class="txterr">Необходимо указать имя</span></label>
                    <label class="label"><input type="tel" name="data[Телефон]"/><span class="placeholder"
                                                                                       data-mask="+7 (000) 000-00-00"/>Телефон*</span>
                        <span class="txterr">Необходимо указать телефон</span></label>
                    <div class="ob-pole">* помечены поля, обязательные для заполнения.</div>
                    <input type="hidden" name="type" value="1"/>
                    <input type="submit" value=""/>
                </form>
            </div>
        </div>
    </div>
@endsection

