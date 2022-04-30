<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="description"
          content="Наши контакты. В автопрокате офис «Васнецовский» всегда широкий выбор автомобилей, подбор по параметрам и круглосуточный сервис для наших клиентов. Оставьте заявку на сайте уже сейчас."/>
    <meta name="keywords" content="Контакты"/>
    <script type="text/javascript" nonce="2421f33a71194e49b034847248a"
            src="//local.adguard.org?ts=1651074249685&amp;type=content-script&amp;dmn=avto-prokat.spb.ru&amp;pth=%2Fkontakty%2F&amp;app=chrome.exe&amp;css=3&amp;js=1&amp;rel=1&amp;rji=1&amp;sbe=1&amp;stealth=1&amp;uag="></script>
    <script type="text/javascript" nonce="2421f33a71194e49b034847248a"
            src="//local.adguard.org?ts=1651074249685&amp;name=AdGuard%20Extra&amp;name=AdGuard%20Popup%20Blocker&amp;type=user-script"></script>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="yandex-verification" content="c3e1bbe44f6d8653"/>


    <link rel="canonical" href="https://avto-prokat.spb.ru/kontakty/"/>
    <meta name="resourceId" content="8"/>


    <style>
        form#formVideos,
        form#formFiles {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 20px;
        }

        form input[type="file"] {
            margin: 10px 0 20px;
        }

        .faq button[type="submit"] {
            margin: 0;
        }

        .bankImg img {
            height: auto;
            max-width: 60px;
            margin-left: 10px;
        }

        .bankImg {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        @media (max-width: 980px) {
            .infoAutoWrapper span.mPriceTitle {
                text-align: center;
                margin-bottom: 15px;
            }
        }
    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.formstyler.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/alla.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>

</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')
</body>
</html>
