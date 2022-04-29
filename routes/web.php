<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

//from navigation
Route::get('/katalog', function () {
    return view('main');
});

Route::get('/podpiska_na_avtomobil', function () {
    return view('pages.podpiska_na_avtomobil');
});

Route::get('/arenda-s-vykupom', function () {
    return view('pages.arenda-s-vykupom');
});

Route::get('/uslugi', function () {
    return view('pages.services');
});

Route::prefix('uslugi')->group(function () {
    Route::get('/', function () {
        return view('pages.services');
    });
    Route::get('/arenda-avto-v-gingiseppe', function () {
        return view('pages.services.arenda-avto-v-gingiseppe');
    });
    Route::get('/arenda-mashiny-yuridicheskim-licom', function () {
        return view('pages.services.arenda-mashiny-yuridicheskim-licom');
    });
    Route::get('/arenda-avto-na-7-mest', function () {
        return view('pages.services.arenda-avto-na-7-mest');
    });
    Route::get("/arenda-avto-s-vyezdom-za-granicu", function() {
        return view("pages.services.arenda-avto-s-vyezdom-za-granicu");
    });
    Route::get("/arenda-legkovyh-avto-s-vykupom", function() {
        return view("pages.services.arenda-legkovyh-avto-s-vykupom");
    });
    Route::get("/arenda-minivena-mezhgorod", function() {
        return view("pages.services.arenda-minivena-mezhgorod");
    });
    Route::get("/arenda-minivena-posutochno", function() {
        return view("pages.services.arenda-minivena-posutochno");
    });
    Route::get("/arenda-avto-po-rossii", function() {
        return view("pages.services.arenda-avto-po-rossii");
    });
    Route::get("/arenda-legkovyh-avtomobilej", function() {
        return view("pages.services.arenda-legkovyh-avtomobilej");
    });
    Route::get("/arenda-avtomobilya-na-vyhodnye", function() {
        return view("pages.services.arenda-avtomobilya-na-vyhodnye");
    });
    Route::get("/arenda-avtomobilya-na-2-nedeli", function() {
        return view("pages.services.arenda-avtomobilya-na-2-nedeli");
    });
    Route::get("/dlitelnaya-arenda-avtomobilya", function() {
        return view("pages.services.dlitelnaya-arenda-avtomobilya");
    });
    Route::get("/arenda-minivena", function() {
        return view("pages.services.arenda-minivena");
    });
    Route::get("/prokat-dorogih-avto", function() {
        return view("pages.services.prokat-dorogih-avto");
    });
    Route::get("/prokat-avto-bez-voditelya", function() {
        return view("pages.services.prokat-avto-bez-voditelya");
    });
    Route::get("/arenda-avtomobilya-na-svadbu", function() {
        return view("pages.services.arenda-avtomobilya-na-svadbu");
    });
    Route::get("/arenda-avto-na-god", function() {
        return view("pages.services.arenda-avto-na-god");
    });
    Route::get("/arenda-avtomobilya-na-nedelyu", function() {
        return view("pages.services.arenda-avtomobilya-na-nedelyu");
    });
    Route::get("/arenda-avto-na-mesyac", function() {
        return view("pages.services.arenda-avto-na-mesyac");
    });
    Route::get("/vzyat-mashinu-v-arendu", function() {
        return view("pages.services.vzyat-mashinu-v-arendu");
    });
});

Route::get('/tarify', function () {
    return view('pages.offers');
});

Route::get('/voprosy', function () {
    return view('pages.questions');
});

Route::prefix('kontakty')->group(function () {
    Route::get('/', function () {
        return view('pages.contacts');
    });

    Route::get('/arenda-avto-vsevolozhsk', function () {
        return view('pages.contacts.arenda-avto-vsevolozhsk');
    });

    Route::get('/arenda-avto-kolpino', function () {
        return view('pages.contacts.arenda-avto-kolpino');
    });

    Route::get('/arenda-avto-murino', function () {
        return view('pages.contacts.arenda-avto-murino');
    });

    Route::get('/ofis-dal-nevostochnyj', function () {
        return view('pages.contacts.offices.ofis-dal-nevostochnyj');
    });
});

//from footer
Route::get('/partnery', function () {
    return view('main');
});

Route::get('/obzory_avtomobilej', function () {
    return view('main');
});

Route::get('/stati', function () {
    return view('main');
});

Route::get('/programma', function () {
    return view('main');
});

Route::get('/konkurs', function () {
    return view('main');
});

Route::get('/otzyvy', function () {
    return view('main');
});

Route::get('/katalog/{category}/{car}', function ($category, $car) {
    return view("pages.catalog.$category.$car");
});
