@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')
    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/podpiska_na_avtomobil/">Подписка</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/podpiska_na_avtomobil/volkswagen_polo_2020_podpiska/" itemprop="url item"><span itemprop="name" class='current'>Volkswagen Polo AT</span><meta itemprop="position" content="2"></span></div>

    <div>
        <div class="infoAutoWrapper">
            <div class="infoAuto">
                <h1 class="h1">Volkswagen Polo AT по подписке</h1>
                <div>
                    <div class="left">
                        <div class="owl-carousel  owl-theme">
                            <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/9ed3ac8f031ea9a889524668e76b71ebd6ebabad/volkswagen_polo_vi_at_s_550_auto_jpg.jpg" alt="" title="" decoding="async" />

                        </div>
                    </div>
                    <div class="right">
                        <div class="htitle">Характеристики</div>
                        <ul class="hinfo">
                            <li><span>Коробка передач:</span>АКПП</li>
                            <li><span>Тип двигателя:</span>Бензиновый</li>
                            <li><span>Год выпуска:</span>2020</li>
                            <li><span>Тип привода:</span>Передний</li>
                            <li><span>Кондиционер:</span>Есть</li>
                            <li><span>Депозит:</span>7&nbsp;000 руб.</li>
                            <li><span>Стаж водителя:</span>мин 3 года</li>
                            <li><span>Возраст водителя:</span>мин 23 года</li>
                        </ul>
                        <div class="prices">
                            <div class="subPrice flex-column flex-md-row">

                                <select name='p_months'><option>3 месяца</option><option>6 месяцев</option></select>
                                <select name='p_probeg'><option>1500 км в месяц</option><option>3000 км в месяц</option></select>
                                <div class='sumPrice'>42 990 р.</div>
                                <script>
                                    var jsonPospiska = {
                                        "3 месяца": {
                                            "1500 км в месяц": "42 990 р.",
                                            "3000 км в месяц": "47 990 р."
                                        },
                                        "6 месяцев": {
                                            "1500 км в месяц": "39 990 р.",
                                            "3000 км в месяц": "43 990 р."
                                        }
                                    };
                                </script>

                            </div>
                            <span class="button pushow d-none" data-title="Заявка на бронирование" data-descr="Volkswagen Polo AT по подписке" data-butts="Отправить заявку" data-id="000000073">Оставить заявку</sapn>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <article>
        <h2>Аренда нового Volkswagen Polo</h2>
        <p>Арендовать новый Volkswagen Polo по подписке &ndash; это возможность получить новый автомобиль в отличной комплектации и без забот о сопутствующем техническом обслуживании, страховках, налогах. Все это берет на себя компания Офис «Васнецовский»!</p>
        <p>Подписка &ndash; это вид долгосрочной аренды на 3 или 6 месяцев. Автомобиль предоставляется готовым к эксплуатации, Вы оплачиваете только бензин и ежемесячные взносы. Размер взноса зависит от длительности аренды и планируемого ежемесячного пробега, он указан на сайте. Впоследствии машину можно выкупить или взять взамен другую.</p>
        <p>Чтобы взять в аренду автомобиль Volkswagen Polo, нужно предоставить следующие документы:</p>
        <ul>
            <li>Паспорт гражданина РФ;</li>
            <li>Водительское удостоверение.</li>
        </ul>
        <p>Оформить аренду можно как для физического, так и для юридического лица, а также на нескольких человек (например, на супруга или коллегу). Машина предоставляется исключительно в частное пользование! Документы для рассмотрения можно предоставить в электронном виде.</p>
        <p>Условия аренды Volkswagen Polo по подписке смотрите на сайте или уточняйте непосредственно у наших менеджеров по телефону и в офисе.</p>

    </article>
    <div class="brands-carousel">
        <div class="brands-carousel-container">
            <ul class="owl-carousel  owl-theme">
                <li>
                    <a href="/marki/genesis/" title="Genesis">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/genesis_logo_icon_145824_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/mitsubishi/" title="Mitsubishi">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/mitsubishi_logo_icon_145793_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/skoda/" title="Skoda">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/skoda_logo_icon_145773_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/infiniti/" title="Infiniti">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/infiniti_logo_icon_145818_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/haval/" title="Haval">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/haval02_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/renault/" title="Renault">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/renault_logo_icon_145781_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/mercedes/" title="Mercedes">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/mercedes_benz_logo_icon_145797_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/audi/" title="Audi">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/audi_logo_icon_145842_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/chevrolet/" title="Chevrolet">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/chevrolet_logo_icon_145836_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/kia/" title="KIA">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/kia_logo_icon_181338_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/citroen/" title="Citroen">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/citroen_logo_icon_145834_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/hyundai/" title="Hyundai">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/hyundai_logo_icon_145819_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/lada/" title="Lada">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/lada_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/bmw/" title="BMW">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/bmw_logo_icon_145840_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>
                <li>
                    <a href="/marki/volkswagen/" title="Volkswagen">
                        <img class="imgloader" src="/images/templates/almac/img/car_tr.png" data-src="/images/cms/thumbs/f7e51cf15ae5ef78312293815b1b7da087a9cd25/volkswagen_logo_icon_145764_100_100_png.png" alt="" title="" decoding="async" />
                    </a>
                </li>

            </ul>
        </div>
    </div>
@endsection

