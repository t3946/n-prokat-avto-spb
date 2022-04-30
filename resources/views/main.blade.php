@extends('layout.page')

@section('title')
    Аренда авто недорого в СПб — взять автомобиль на прокат без водителя
@endsection

@section('content')

    <div class="slider">
        <div class="owl-carousel owl-loaded owl-drag">

            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-2320px, 0px, 0px); transition: all 0s ease 0s; width: 9280px;">
                    <div class="owl-item cloned" style="width: 1160px;">
                        <div class="item">
                            <div class="linkslider">
                                <img class="img_d" data-src="/images/parser/slider/1.jpg" alt="" src="/images/parser/slider/1.jpg">
                                <img class="img_m" data-src="/images/parser/slider/1.jpg" alt="" src="/images/parser/slider/1.jpg">
                                <div class="info">
                                    <span class="title"></span>
                                    <span class="descr"></span>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="owl-item cloned" style="width: 1160px;">--}}
{{--                        <div class="item">--}}
{{--                            <div class="linkslider">--}}
{{--                                <img class="img_d" data-src="/images/parser/slider/Logodesktop0000502434.jpeg" alt="" src="./images/main/Logodesktop0000502434.jpeg">--}}
{{--                                <img class="img_m" data-src="/images/parser/slider/Logomobile0000502554.jpeg" alt="" src="./images/main/Logomobile0000502554.jpeg">--}}
{{--                                <div class="info">--}}
{{--                                    <span class="title"></span>--}}
{{--                                    <span class="descr"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="owl-item active" style="width: 1160px;">--}}
{{--                        <div class="item">--}}
{{--                            <div class="linkslider">--}}
{{--                                <img class="img_d" src="./images/main/Logodesktop0000502311.jpeg" alt="">--}}
{{--                                <img class="img_m" src="./images/main/Logomobile0000502491.jpeg" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <span class="title"></span>--}}
{{--                                    <span class="descr"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="owl-item" style="width: 1160px;">--}}
{{--                        <div class="item">--}}
{{--                            <div class="linkslider">--}}
{{--                                <img class="img_d" src="./images/main/Logodesktop0000507162.jpeg" alt="">--}}
{{--                                <img class="img_m" src="./images/main/Logomobile0000502502.jpeg" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <span class="title"></span>--}}
{{--                                    <span class="descr"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="owl-item" style="width: 1160px;">--}}
{{--                        <div class="item">--}}
{{--                            <div class="linkslider">--}}
{{--                                <img class="img_d" data-src="/images/parser/slider/Logodesktop0000502473.jpeg" alt="" src="./images/main/Logodesktop0000502473.jpeg">--}}
{{--                                <img class="img_m" data-src="/images/parser/slider/Logomobile0000502533.jpeg" alt="" src="./images/main/Logomobile0000502533.jpeg">--}}
{{--                                <div class="info">--}}
{{--                                    <span class="title"></span>--}}
{{--                                    <span class="descr"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="owl-item" style="width: 1160px;">--}}
{{--                        <div class="item">--}}
{{--                            <div class="linkslider">--}}
{{--                                <img class="img_d" data-src="/images/parser/slider/Logodesktop0000502434.jpeg" alt="" src="./images/main/Logodesktop0000502434.jpeg">--}}
{{--                                <img class="img_m" data-src="/images/parser/slider/Logomobile0000502554.jpeg" alt="" src="./images/main/Logomobile0000502554.jpeg">--}}
{{--                                <div class="info">--}}
{{--                                    <span class="title"></span>--}}
{{--                                    <span class="descr">--}}

{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="owl-item cloned" style="width: 1160px;">--}}
{{--                        <div class="item">--}}
{{--                            <div class="linkslider">--}}
{{--                                <img class="img_d" src="./images/main/Logodesktop0000502311.jpeg" alt="">--}}
{{--                                <img class="img_m" src="./images/main/Logomobile0000502491.jpeg" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <span class="title"></span>--}}
{{--                                    <span class="descr">--}}

{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="owl-item cloned" style="width: 1160px;">--}}
{{--                        <div class="item">--}}
{{--                            <div class="linkslider">--}}
{{--                                <img class="img_d" src="./images/main/Logodesktop0000507162.jpeg" alt="">--}}
{{--                                <img class="img_m" src="./images/main/Logomobile0000502502.jpeg" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <span class="title"></span>--}}
{{--                                    <span class="descr"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                    <img src="/images/origin/arr_l.svg" alt=""></button><button type="button" role="presentation" class="owl-next"><img src="/images/origin/arr_r.svg" alt=""></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
        <form class="slform d-none" method="post" action="/">
            <div class="jq-selectbox jqselect"><select name="data[Авто]">
                    <option value="">Автомобиль</option>
                    <option value="000000144">Tesla Model S 100D</option><option value="000000143">Tesla Model X 100D</option><option value="000000147">Tesla Model S Perfomance</option><option value="000000142">Tesla Model 3 Perfomance</option><option value="000000042">Lada Largus MT</option><option value="000000019">Citroen Berlingo MT</option><option value="000000045">Hyundai Elantra AT</option><option value="000000091">Skoda Octavia A8 AT</option><option value="000000022">Chevrolet Orlando MT</option><option value="000000130">Lada Largus Cross MT</option><option value="000000068">Chevrolet Orlando AT</option><option value="000000122">Peugeot Traveller AT</option><option value="000000123">Hyundai Starex H1 AT</option><option value="000000053">Mercedes Vito AT (W447)</option><option value="000000133">Hyundai H-1 Business AT</option><option value="000000116">Skoda Rapid МT</option><option value="000000044">Volkswagen Polo АТ</option><option value="000000055">Kia Rio IV AT</option><option value="000000009">Hyundai Solaris II AT</option><option value="000000127">Kia Rio X-Line AT</option><option value="000000072">Hyundai Solaris R II AT</option><option value="000000073">Volkswagen Polo VI AT</option><option value="000000099">Volkswagen Polo MT Promo</option><option value="000000140">Renault Logan AT Promo</option><option value="000000069">Volkswagen Polo АТ Promo</option><option value="000000059">Hyundai Solaris II Promo</option><option value="000000058">Hyundai Creta AT Promo</option><option value="000000077">Kia Optima IV AT</option><option value="000000036">BMW 3-er AT (F30)</option><option value="000000079">Audi A3 III (8V)</option><option value="000000054">Mercedes C-class (W205)</option><option value="000000082">Hyundai Sonata AT</option><option value="000000033">Mercedes E-class (W212 R)</option><option value="000000032">Infiniti Q50 AT</option><option value="000000041">Genesis G80 AT</option><option value="000000028">Mercedes E-class (W213)</option><option value="000000038">BMW 5-er AT (G30)</option><option value="000000105">Mercedes E-class 4MATIC (W213)</option><option value="000000131">Renault Duster 4WD AT</option><option value="000000056">Renault Kaptur AT</option><option value="000000035">Hyundai Creta AT</option><option value="000000086">Renault Arkana AT</option><option value="000000137">Hyundai Creta II AT</option><option value="000000132">Haval Jolion AT</option><option value="000000138">Geely Coolray</option><option value="000000085">Volkswagen Tiguan II MT</option><option value="000000089">Haval F7 AT</option><option value="000000084">Haval F7x AT</option><option value="000000057">Kia Sportage AT</option><option value="000000095">Mitsubishi Outlander AT</option><option value="000000128">Chery Tiggo 8 PRO AT</option><option value="000000062">Audi Q3 AT</option><option value="000000094">BMW X2 AT (F39)</option><option value="000000081">Mercedes GLA</option><option value="000000146">Mazda CX-5 AT</option><option value="000000090">Skoda Kodiaq AT</option><option value="000000136">Toyota RAV4 AT</option><option value="000000093">BMW X4 AT (F26)</option><option value="000000088">Volkswagen Touareg II</option><option value="000000087">BMW X3 III AT (G01)</option><option value="000000135">Mercedes GLC (X253)</option><option value="000000071">Mercedes GLC Coupe (C253)</option><option value="000000139">Volvo XC90 II</option><option value="000000065">BMW X5 III AT (F15)</option><option value="000000070">BMW X6 II AT (F16)</option><option value="000000121">Volkswagen Touareg III</option><option value="000000126">Audi Q7 II</option><option value="000000120">BMW X5 IV AT (G05)</option><option value="000000119">BMW X6 III AT (G06)</option>
                </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text">Автомобиль</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li class="selected sel" style="">Автомобиль</li><li style="">Tesla Model S 100D</li><li style="">Tesla Model X 100D</li><li style="">Tesla Model S Perfomance</li><li style="">Tesla Model 3 Perfomance</li><li style="">Lada Largus MT</li><li style="">Citroen Berlingo MT</li><li style="">Hyundai Elantra AT</li><li style="">Skoda Octavia A8 AT</li><li style="">Chevrolet Orlando MT</li><li style="">Lada Largus Cross MT</li><li style="">Chevrolet Orlando AT</li><li style="">Peugeot Traveller AT</li><li style="">Hyundai Starex H1 AT</li><li style="">Mercedes Vito AT (W447)</li><li style="">Hyundai H-1 Business AT</li><li style="">Skoda Rapid МT</li><li style="">Volkswagen Polo АТ</li><li style="">Kia Rio IV AT</li><li style="">Hyundai Solaris II AT</li><li style="">Kia Rio X-Line AT</li><li style="">Hyundai Solaris R II AT</li><li style="">Volkswagen Polo VI AT</li><li style="">Volkswagen Polo MT Promo</li><li style="">Renault Logan AT Promo</li><li style="">Volkswagen Polo АТ Promo</li><li style="">Hyundai Solaris II Promo</li><li style="">Hyundai Creta AT Promo</li><li style="">Kia Optima IV AT</li><li style="">BMW 3-er AT (F30)</li><li style="">Audi A3 III (8V)</li><li style="">Mercedes C-class (W205)</li><li style="">Hyundai Sonata AT</li><li style="">Mercedes E-class (W212 R)</li><li style="">Infiniti Q50 AT</li><li style="">Genesis G80 AT</li><li style="">Mercedes E-class (W213)</li><li style="">BMW 5-er AT (G30)</li><li style="">Mercedes E-class 4MATIC (W213)</li><li style="">Renault Duster 4WD AT</li><li style="">Renault Kaptur AT</li><li style="">Hyundai Creta AT</li><li style="">Renault Arkana AT</li><li style="">Hyundai Creta II AT</li><li style="">Haval Jolion AT</li><li style="">Geely Coolray</li><li style="">Volkswagen Tiguan II MT</li><li style="">Haval F7 AT</li><li style="">Haval F7x AT</li><li style="">Kia Sportage AT</li><li style="">Mitsubishi Outlander AT</li><li style="">Chery Tiggo 8 PRO AT</li><li style="">Audi Q3 AT</li><li style="">BMW X2 AT (F39)</li><li style="">Mercedes GLA</li><li style="">Mazda CX-5 AT</li><li style="">Skoda Kodiaq AT</li><li style="">Toyota RAV4 AT</li><li style="">BMW X4 AT (F26)</li><li style="">Volkswagen Touareg II</li><li style="">BMW X3 III AT (G01)</li><li style="">Mercedes GLC (X253)</li><li style="">Mercedes GLC Coupe (C253)</li><li style="">Volvo XC90 II</li><li style="">BMW X5 III AT (F15)</li><li style="">BMW X6 II AT (F16)</li><li style="">Volkswagen Touareg III</li><li style="">Audi Q7 II</li><li style="">BMW X5 IV AT (G05)</li><li style="">BMW X6 III AT (G06)</li></ul></div></div>
            <input type="text" name="data[Имя]" placeholder="Имя">
            <input type="tel" name="data[Телефон]" placeholder="Телефон" data-mask="+7 (000) 000-00-00">
            <input type="hidden" name="type" value="1">
            <input type="submit" value="Оставить заявку">
            <p class="politics-link" style="max-width: 280px; font-size: 10px;">
                Нажимая кнопку "Отправить" вы соглашаетесь с
                <a href="/privacy_policy/" target="_blank">пользовательским соглашением</a>
            </p>
        </form>
    </div>
    <!--
        <input type="tel" name="telephone" placeholder="+7 (___)___-__-__" data-mask="+7 (000) 000-00-00" data-validation-required-message="* Это поле обязательно для заполнения" required="" autocomplete="off" aria-invalid="false">
    -->
    <span class="mtitle">Выбрать автомобиль</span>
    <div class="filters d-none">
        <div class="mbutfilter">Фильтры</div>
        <div class="sort">
            <div class="jq-selectbox jqselect"><select>
                    <option value="min">По цене ↓</option>
                    <option value="max">По цене ↑</option>
                </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text">По цене ↓</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li class="selected sel" style="">По цене ↓</li><li style="">По цене ↑</li></ul></div></div>
        </div>
        <form class="filter" method="post" action="/">
            <div class="jq-selectbox jqselect"><select name="catalog">
                    <option value="">Категория</option>
                    <option value="/katalog/klass-promo/">Класс промо</option><option value="/katalog/arenda_avtomobilej_klassa_standart/">Класс стандарт</option><option value="/katalog/arenda_avtomobilej_klassa_komfort/">Класс комфорт</option><option value="/katalog/arenda_avtomobilej_klassa_krossover/">Класс кроссоверы</option><option value="/katalog/arenda_minivenov/">Класс минивены</option><option value="/katalog/arenda_avtomobilej_klassa_ljuks/">Класс бизнес</option><option value="/katalog/arenda_avtomobilej_tesla/">Класс электромобили</option><option value="/katalog/arenda_avtomobilej_klassa_sommercial/">Класс коммерческий</option>
                </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text">Категория</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="width: 176px; display: none;"><ul><li class="selected sel" style="">Категория</li><li style="">Класс промо</li><li style="">Класс стандарт</li><li style="">Класс комфорт</li><li style="">Класс кроссоверы</li><li style="">Класс минивены</li><li style="">Класс бизнес</li><li style="">Класс электромобили</li><li style="">Класс коммерческий</li></ul></div></div>
            <div class="jq-selectbox jqselect"><select name="filter[gear_box_type][]">
                    <option value="">Коробка передач</option>
                    <option value="AT">AT</option><option value="MT">MT</option>
                </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text">Коробка передач</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li class="selected sel" style="">Коробка передач</li><li style="">AT</li><li style="">MT</li></ul></div></div>
            <div class="jq-selectbox jqselect"><select name="filter[num_of_person][]">
                    <option value="">Кол-во пассажиров</option>
                    <option value="0">0</option><option value="2">2</option><option value="5">5</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="19">19</option>
                </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text">Кол-во пассажиров</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li class="selected sel" style="">Кол-во пассажиров</li><li style="">0</li><li style="">2</li><li style="">5</li><li style="">7</li><li style="">8</li><li style="">9</li><li style="">19</li></ul></div></div>
        </form>
    </div>

    <div class="pluses">
        <span class="title">Почему мы?</span>
        <span class="descr">Причин много</span>
        <div class="owl-carousel owl-loaded owl-drag">






            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2440px, 0px, 0px); transition: all 0.5s ease 0s; width: 4881px;"><div class="owl-item cloned" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Ценим ваше время!<br>Оформим за 15 минут.</span><img src="./images/main/plus1.png" alt=""></span><span class="txt">Ценим ваше время!<br>Мы оформляем машины в прокат всего за 15 минут!</span></div></div><div class="owl-item cloned" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>С доставкой на удобный вам адрес</span><img src="./images/main/plus2.png" alt=""></span><span class="txt">У нас есть автомобиль практически любой марки и класса.<br>Доставим его вам в течении часа!</span></div></div><div class="owl-item cloned" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Без ограничений по территории</span><img src="./images/main/plus3.png" alt=""></span><span class="txt">Путешествуй по России!<br>Добавь всего 200 руб/сутки к стоимости аренды.</span></div></div><div class="owl-item" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Ценим ваше время!<br>Оформим за 15 минут.</span><img src="./images/main/plus1.png" alt=""></span><span class="txt">Ценим ваше время!<br>Мы оформляем машины в прокат всего за 15 минут!</span></div></div><div class="owl-item" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>С доставкой на удобный вам адрес</span><img src="./images/main/plus2.png" alt=""></span><span class="txt">У нас есть автомобиль практически любой марки и класса.<br>Доставим его вам в течении часа!</span></div></div><div class="owl-item" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Без ограничений по территории</span><img src="./images/main/plus3.png" alt=""></span><span class="txt">Путешествуй по России!<br>Добавь всего 200 руб/сутки к стоимости аренды.</span></div></div><div class="owl-item active" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Ценим ваше время!<br>Оформим за 15 минут.</span><img src="./images/main/plus1.png" alt=""></span><span class="txt">Ценим ваше время!<br>Мы оформляем машины в прокат всего за 15 минут!</span></div></div><div class="owl-item active" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>С доставкой на удобный вам адрес</span><img src="./images/main/plus2.png" alt=""></span><span class="txt">У нас есть автомобиль практически любой марки и класса.<br>Доставим его вам в течении часа!</span></div></div><div class="owl-item active" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Без ограничений по территории</span><img src="./images/main/plus3.png" alt=""></span><span class="txt">Путешествуй по России!<br>Добавь всего 200 руб/сутки к стоимости аренды.</span></div></div><div class="owl-item cloned" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Ценим ваше время!<br>Оформим за 15 минут.</span><img src="./images/main/plus1.png" alt=""></span><span class="txt">Ценим ваше время!<br>Мы оформляем машины в прокат всего за 15 минут!</span></div></div><div class="owl-item cloned" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>С доставкой на удобный вам адрес</span><img src="./images/main/plus2.png" alt=""></span><span class="txt">У нас есть автомобиль практически любой марки и класса.<br>Доставим его вам в течении часа!</span></div></div><div class="owl-item cloned" style="width: 386.667px; margin-right: 20px;"><div class="item">
                            <span class="name"><span>Без ограничений по территории</span><img src="./images/main/plus3.png" alt=""></span><span class="txt">Путешествуй по России!<br>Добавь всего 200 руб/сутки к стоимости аренды.</span></div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><img src="/images/origin/arr_l.svg" alt=""></button><button type="button" role="presentation" class="owl-next"><img src="/images/origin/arr_r.svg" alt=""></button></div><div class="owl-dots d-none"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
    </div>
    <!--
    <div class="app">
        <span class="title">Прокат авто в вашем телефоне</span>
        <span class="descr">Установите наше приложение в AppStore или Play Market</span>
        <div>
            <img class="appimg" src="/templates/almac/img/app.jpg" alt="" />
            <div>
                <ul>
                    <li><span><img src="/templates/almac/img/clock@3x.png" alt="" /></span>Мы оформляем машины в прокат всего за 15 минут!</li>
                    <li><span><img src="/templates/almac/img/map@3x.png" alt="" /></span>Можно заказать машину в прокат без посещения офиса.</li>
                    <li><span><img src="/templates/almac/img/support@3x.png" alt="" /></span>Поддержка 24/7 готова ответить на все интересующие вас вопросы.</li>
                </ul>
                <div class="imgs">
                    <img src="/templates/almac/img/qr-code.png" alt="" />
                    <div>
                        <a class="ios" href="https://trk.mail.ru/c/nczwt4?mt_idfa={mt_idfa}"><img src="/templates/almac/img/appleapp.svg" alt="" /></a>
                        <a class="android" href="https://trk.mail.ru/c/yd9sq5?mt_gaid={mt_gaid}"><img src="/templates/almac/img/googleapp.svg" alt="" /></a>
                        <span class="device">Доступно для iOS и Android</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <article>
        <h1>Прокат автомобилей в Санкт-Петербурге</h1>
        <p>Специализация нашей компании – дешевая аренда и прокат автомобилей без водителя в Санкт-Петербурге на выгодных условиях для каждого клиента. На сегодняшний день мы сделали все возможное, чтобы завоевать безупречную репутацию в сфере транспортных услуг и получить множество положительных отзывов от благодарных клиентов.</p>
        <p>Широкий модельный ряд, индивидуальный подход и больший выбор дополнительных услуг способствовали тому, что недорого взять напрокат машину без водителя именно у нас – это выгодно, удобно и надежно. Среди конкурентных преимуществ нашей компании можно выделить:</p>
        <ul>
            <li>Оперативность. Теперь вы можете не переживать, что куда-то не успеете. Мы оформляем аренду автомобиля для личных целей всего за 15 минут!</li>
            <li>Безопасность. Каждое авто застраховано (КАСКО, ОСАГО) и регулярно проходит ТО в специализированных сервисных центрах.</li>
            <li>Качество. Мы предлагаем недорого взять напрокат автомобили эконом- и бизнес-класса, которые имеют комфортабельный салон и просторное багажное отделение.</li>
        </ul>
        <p>Доступная аренда автомобилей от нашей компании – это возможность для каждого в Санкт-Петербурге недорого взять напрокат надежное средство передвижения для поездок по любимому городу и за его пределами.</p>
        <h3>Офис «Васнецовский» – это самые выгодные условия!</h3>
        <p>Вы цените максимальный комфорт и безопасность на дороге? Наша компания готова предложить вам широкий выбор транспорта эконом- и бизнес-класса для передвижения по городу и загородных поездок.</p>
        <p>Офис «Васнецовский» обладает следующими преимуществами:</p>
        <ul>
            <li><em>большой выбор моделей.</em>&nbsp;У нас вы можете взять застрахованный и полностью укомплектованный транспорт практически любой марки;</li>
            <li><em>любая форма оплаты.</em>&nbsp;К оплате принимаются наличные средства, кредитные карты Visa, Visa Electron, Maestro, MasterCard, банковские переводы;</li>
        </ul>
        <p>Благодаря услугам, предоставляемым нашей компанией, вы будете чувствовать себя комфортно на дороге в любое время! Встречайте своих друзей в аэропорту, выезжайте с семьей за пределы города, отправляйтесь за покупками со своей второй половинкой, не переплачивая за услуги такси. Стоимость аренды автомобиля невысока и быстро окупается свободой передвижения, полной независимостью от водителя и возможностью наслаждаться вождением.</p>
        <h2>Условия аренды авто</h2>
        <p>Надоело постоянно переплачивать за услуги водителя, на которого нельзя положиться? Мы предлагаем вам недорого снять в аренду автомобиль без водителя, что позволяет самостоятельно решать, когда и куда ехать и не зависеть от постороннего человека.</p>
        <p>Условия просты и доступны:</p>
        <ul>
            <li>наличие водительского удостоверения. Вполне логичное условие, ведь никто не позволит вам управлять автомобилем без наличия водительского удостоверения;</li>
            <li>возраст от 23 лет. В нашей компании аренда автомобиля без водителя доступна лицам достигшим 23 лет;</li>
            <li>стаж вождения от 3 лет. Принимая во внимание важность опыта при вождении, прокат оформляется при условии стажа вождения не менее 3 лет.</li>
        </ul>
        <p>Несмотря на то, что услуга предлагается не так давно — она уже стала весьма востребованной среди населения. Туристам, бизнесменам и простым горожанам дешевле снять для личного пользования в аренду машину без водителя, чем постоянно пользоваться услугами такси, особенно если они планируют ездить целый день.</p>
        <p>Мы гарантируем надежность и комфорт как транспорта, так и сервиса обслуживания. Наши менеджеры с радостью помогут вам выбрать красивую и надежную машину, учитывая все ваши пожелания. Стоимость проката машины зависит от класса авто и длительности поездки.</p>
        <p>Вы можете недорого взять в аренду машину без водителя по телефону или через Интернет. Наши менеджеры с удовольствием вас проконсультируют о предоставляемых авто, а также какие машины свободны в выбранную дату.</p>
        <p>Порядок оформления заказа следующий:</p>
        <ul>
            <li>Выбрав подходящую модель, приходите к нам в офис или позвоните по телефону (для брони).</li>
            <li>Подписав договор, вы оплачивайте услугу и получаете расписку о принятии залога и квитанцию об оплате.</li>
            <li>Мы выдаем ключи и документы от авто, доверенность на управление ТС.</li>
        </ul>
        <p>Все! Взять автомобиль в аренду – это дешево, удобно и практично!</p>
        <p>Когда оформление закончено, вы можете сразу наслаждаться поездкой. Желаем приятного пути!</p>
    </article>
    <div class="brands-carousel">
        <div class="brands-carousel-container">
            <ul class="owl-carousel owl-theme owl-loaded owl-drag">
















                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1440px, 0px, 0px); transition: all 0.5s ease 0s; width: 5580px;"><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Audi">
                                    <img class="" src="./images/main/audi_logo_icon_145842_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/audi_logo_icon_145842_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Chevrolet">
                                    <img class="" src="./images/main/chevrolet_logo_icon_145836_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/chevrolet_logo_icon_145836_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="KIA">
                                    <img class="" src="./images/main/kia_logo_icon_181338_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/kia_logo_icon_181338_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Citroen">
                                    <img class="" src="./images/main/citroen_logo_icon_145834_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/citroen_logo_icon_145834_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Hyundai">
                                    <img class="" src="./images/main/hyundai_logo_icon_145819_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/hyundai_logo_icon_145819_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Lada">
                                    <img class="" src="./images/main/lada_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/lada_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="BMW">
                                    <img class="" src="./images/main/bmw_logo_icon_145840_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/bmw_logo_icon_145840_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Volkswagen">
                                    <img class="" src="./images/main/volkswagen_logo_icon_145764_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/volkswagen_logo_icon_145764_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item active" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Genesis">
                                    <img class="" src="./images/main/genesis_logo_icon_145824_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/genesis_logo_icon_145824_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item active" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Mitsubishi">
                                    <img class="" src="./images/main/mitsubishi_logo_icon_145793_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/mitsubishi_logo_icon_145793_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item active" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Skoda">
                                    <img class="" src="./images/main/skoda_logo_icon_145773_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/skoda_logo_icon_145773_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item active" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Infiniti">
                                    <img class="" src="./images/main/infiniti_logo_icon_145818_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/infiniti_logo_icon_145818_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item active" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Haval">
                                    <img class="" src="./images/main/haval02_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/haval02_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item active" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Renault">
                                    <img class="" src="./images/main/renault_logo_icon_145781_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/renault_logo_icon_145781_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Mercedes">
                                    <img class="" src="./images/main/mercedes_benz_logo_icon_145797_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/mercedes_benz_logo_icon_145797_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Audi">
                                    <img class="" src="./images/main/audi_logo_icon_145842_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/audi_logo_icon_145842_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Chevrolet">
                                    <img class="" src="./images/main/chevrolet_logo_icon_145836_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/chevrolet_logo_icon_145836_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="KIA">
                                    <img class="" src="./images/main/kia_logo_icon_181338_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/kia_logo_icon_181338_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Citroen">
                                    <img class="" src="./images/main/citroen_logo_icon_145834_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/citroen_logo_icon_145834_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Hyundai">
                                    <img class="" src="./images/main/hyundai_logo_icon_145819_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/hyundai_logo_icon_145819_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Lada">
                                    <img class="" src="./images/main/lada_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/lada_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="BMW">
                                    <img class="" src="./images/main/bmw_logo_icon_145840_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/bmw_logo_icon_145840_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Volkswagen">
                                    <img class="" src="./images/main/volkswagen_logo_icon_145764_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/volkswagen_logo_icon_145764_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Genesis">
                                    <img class="" src="./images/main/genesis_logo_icon_145824_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/genesis_logo_icon_145824_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Mitsubishi">
                                    <img class="" src="./images/main/mitsubishi_logo_icon_145793_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/mitsubishi_logo_icon_145793_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span title="Skoda">
                                    <img class="" src="./images/main/skoda_logo_icon_145773_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/skoda_logo_icon_145773_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span  title="Infiniti">
                                    <img class="" src="./images/main/infiniti_logo_icon_145818_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/infiniti_logo_icon_145818_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span  title="Haval">
                                    <img class="" src="./images/main/haval02_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/haval02_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span  title="Renault">
                                    <img class="" src="./images/main/renault_logo_icon_145781_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/renault_logo_icon_145781_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span  title="Mercedes">
                                    <img class="" src="./images/main/mercedes_benz_logo_icon_145797_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/mercedes_benz_logo_icon_145797_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div><div class="owl-item cloned" style="width: 160px; margin-right: 20px;"><li>
                                <span  title="Audi">
                                    <img class="" src="./images/main/audi_logo_icon_145842_100_100_png.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/audi_logo_icon_145842_100_100_png.png" alt="" title="" decoding="async">
                                </span>
                            </li></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><img src="/images/origin/arr_l.svg" alt=""></button><button type="button" role="presentation" class="owl-next"><img src="/images/origin/arr_r.svg" alt=""></button></div><div class="owl-dots disabled"></div></ul>
        </div>
    </div>

@endsection

