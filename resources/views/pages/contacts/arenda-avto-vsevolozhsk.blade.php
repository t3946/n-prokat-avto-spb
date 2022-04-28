@extends('layout.page')

@section('title')
    Аренда авто во Всеволожске
@endsection

@section('content')
    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs"><span itemscope="" itemprop="itemListElement" class="B_firstCrumb" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></span><span class="sep">»</span><a href="/kontakty/">Контакты</a><span class='sep'>»</span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><link href="/kontakty/arenda-avto-vsevolozhsk/" itemprop="url item"><span itemprop="name" class='current'>Всеволожск</span><meta itemprop="position" content="2"></span></div>
    <div class="toph1"><h1>Аренда авто во Всеволожске</h1></div>
    <div class="contInfoPage">
        <div class="sliderMap">
            <div class="owl-carousel">
                <img class="imgloader" src="/images/contacts/car_tr.png" data-src="/images/contacts/vsevolozhsk_550_auto_jpg.jpg" alt="" title="" decoding="async" />
            </div>
        </div>
        <div class="mainInfoCont">
            <h2>Контактная информация</h2>
            <ul class="ulcont">
                <li><span class="icoimg"><img src="/images/contacts/icons/map@3x.png" alt="" /></span><span>Всеволожск</span></li>
                <li><span class="icoimg"><img src="/images/contacts/icons/phoneico@3x.png" alt="" /></span><span>Режим работы контактного центра - круглосуточно<br/><a class="telcp" href="tel:+78122411070">+7 (981) 686-63-35</a></span></li>
                <li><span class="icoimg"><img src="/images/contacts/icons/mailico@3x.png" alt="" /></span><span>Эл-почта: <a href="mailto:Qwerty123df.spb@yandex.ru">Qwerty123df.spb@yandex.ru</a></span></li>
                <li><span class="icoimg"><img src="/images/contacts/icons/clock@3x.png" alt="" /></span><span>Часы работы офиса обслуживания:<br/>Пн - Вс с 09:00 до 20:30</span></li>
            </ul>
        </div>
    </div>
    <div class="wrmap wrmapinn d-none"><div id="map" class="map mapInnerContPage" style="width: 100%; height: 400px; margin-bottom: 40px;"></div></div>
    <script>
        ymaps.ready(function () {


            var map = new ymaps.Map('map', {
                center: [60.0148749,30.6494107,19],
                zoom: 14,
                controls: ['zoomControl', 'typeSelector',  'fullscreenControl', 'routeButtonControl']
            }, {
                //searchControlProvider: 'yandex#search'
            });
            map.behaviors.disable('scrollZoom');

            /*
            ymaps.geocode([60.0148749,30.6494107,19], { kind: 'metro' }).then(function (res) {
                var nearest = res.geoObjects.get(0);
                //var name = nearest.properties.get('name');
                var m = nearest.geometry.getCoordinates();

                ymaps.route([
                    [60.0148749,30.6494107,19],
                    m
                ], {
                    //multiRoute: true,
                    routingMode: 'pedestrian',
                    mapStateAutoApply: true
                }).then(function (route) {


                    route.getPaths().options.set({
                        strokeWidth: 3,
                        hasBalloon: false,
                        strokeColor: '4277ca',

                        opacity: 0.8
                    });

                    map.geoObjects.add(route.getPaths());
                });

                myPlacemark = new ymaps.Placemark([60.0148749,30.6494107,19], {
                    balloonContentHeader: '',
                    balloonContentBody: '',
                    balloonContentFooter: '',
                    hintContent: ''
                },{
                    iconLayout: "default#image",
                    iconImageHref: "/templates/almac/img/mapmark.png",
                    iconImageSize: [48, 48],
                    iconImageOffset: [-24, -48]
                });
                map.geoObjects.add(myPlacemark);

            });

            */


            myPlacemark = new ymaps.Placemark([60.0148749,30.6494107,19], {
                balloonContentHeader: '',
                balloonContentBody: '',
                balloonContentFooter: '',
                hintContent: ''
            },{
                iconLayout: "default#image",
                iconImageHref: "/templates/almac/img/mapmark.png",
                iconImageSize: [48, 48],
                iconImageOffset: [-24, -48]
            });
            map.geoObjects.add(myPlacemark);

        });
    </script>
    <div class="contPageText">

    </div>
@endsection

