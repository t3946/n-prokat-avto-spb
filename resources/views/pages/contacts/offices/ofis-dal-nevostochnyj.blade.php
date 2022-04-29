@extends('layout.page')

@section('title')
    Контакты
@endsection

@section('content')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/kontakty/">Контакты</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/kontakty/ofis-dal-nevostochnyj/" itemprop="url item"><span itemprop="name" class='current'>Офис «Васнецовский»</span><meta itemprop="position" content="2"></span></div>
    <div class="toph1"><h1>Офис «Васнецовский»</h1></div>
    <div class="contInfoPage">
        <div class="sliderMap d-none">
            <div class="owl-carousel">
                <img class="imgloader" src="/images/contacts/icons/car_tr.png" data-src="/images/contacts/Priceimageextra0000393561_550_auto_jpeg.jpeg" alt="" title="" decoding="async" />
                <img class="imgloader" src="/images/contacts/icons/car_tr.png" data-src="/images/contacts/Priceimageextra0000393592_550_auto_jpeg.jpeg" alt="" title="" decoding="async" />
            </div>
        </div>
        <div class="mainInfoCont">
            <h2>Контактная информация</h2>
            <ul class="ulcont">
                <li><span class="icoimg"><img src="/images/contacts/icons/map@3x.png" alt="" /></span><span>С-Пб., пр. Дальневосточный 20к2</span></li>
                <li><span class="icoimg"><img src="/images/contacts/icons/phoneico@3x.png" alt="" /></span><span>Режим работы контактного центра - круглосуточно<br/><a class="telcp" href="tel:+79816866335">+7 (981) 686-63-35</a></span></li>
                <li><span class="icoimg"><img src="/images/contacts/icons/mailico@3x.png" alt="" /></span><span>Эл-почта: <a href="mailto:Qwerty123df.spb@yandex.ru">Qwerty123df.spb@yandex.ru</a></span></li>
                <li><span class="icoimg"><img src="/images/contacts/icons/clock@3x.png" alt="" /></span><span>Часы работы офиса обслуживания:<br/>Пн - Вс с 09:00 до 21:00</span></li>
            </ul>
        </div>
    </div>
    <div class="wrmap wrmapinn d-none"><div id="map" class="map mapInnerContPage" style="width: 100%; height: 400px; margin-bottom: 40px;"></div></div>
    <script>
        ymaps.ready(function () {


            var map = new ymaps.Map('map', {
                center: [59.905873,30.453303],
                zoom: 14,
                controls: ['zoomControl', 'typeSelector',  'fullscreenControl', 'routeButtonControl']
            }, {
                //searchControlProvider: 'yandex#search'
            });
            map.behaviors.disable('scrollZoom');


            myPlacemark = new ymaps.Placemark([59.905873,30.453303], {
                balloonContentHeader: '',
                balloonContentBody: '',
                balloonContentFooter: '',
                hintContent: ''
            },{
                iconLayout: "default#image",
                iconImageHref: "/images/templates/almac/img/mapmark.png",
                iconImageSize: [48, 48],
                iconImageOffset: [-24, -48]
            });
            map.geoObjects.add(myPlacemark);

        });
    </script>
    <div class="contPageText">

    </div>
@endsection

