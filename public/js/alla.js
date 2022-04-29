$(document).ready(function(){

	$('.vConts .vc_mbut').click(function(){
		$(this).toggleClass('active');
		$('.vConts .vc_link').each(function(i){
			var timer = i * 100;
			var _this = $(this);
			_this.toggleClass('show');
			if (_this.hasClass('show')) {
				var bottom = 50 + (i * 60 + 10);
				_this.delay(timer).animate({'bottom':bottom,'opacity':1},300,'linear');
			} else {
				_this.delay(timer).animate({'bottom':0,'opacity':0},300,'linear');
			}
		});
	});

	function sumPodpiska () {
		var m = $('select[name="p_months"]').val();
		var p = $('select[name="p_probeg"]').val();
		var price = jsonPospiska[m][p];
		$('.sumPrice').text(price);
	}

	function sumPodpiska2 (_this) {
		var m = _this.find('select[name="p_months"]').val();
		var p = _this.find('select[name="p_probeg"]').val();
		var id = _this.attr('data-id');
		var path = '/podpiska_na_avtomobil/?getPricePodpiska='+id+'&m='+m+'&p='+p+'&p2='+p;
		$.get(path, function (data) {
			_this.find('.mprice').html(data+'<span>в месяц</span>');
		});
	}

	$('.infoAuto select[name="p_months"],.infoAuto select[name="p_probeg"]').change(function(){ sumPodpiska(); });
	$('.catalog a select[name="p_months"],.catalog a select[name="p_probeg"]').change(function(){
		sumPodpiska2($(this).parents('a'));
	});

	var rentTypeHref = window.location.href;
	rentTypeHref = rentTypeHref.split('/')[3];


	// $('.tel, .telf, .telcp').click(function(){
	// 	ym(56603671, 'reachGoal', 'zvonok', '', function(){ console.log('ym_zvonok'); });
	// 	gtag('event', 'zvonok', { 'event_category' : 'promo' });
	// });
    //
	// $('.callback').click(function(){
	// 	ym(56603671, 'reachGoal', 'najal_callback', '', function(){ console.log('ym_najal_callback'); });
	// 	gtag('event', 'callback_click', { 'event_category' : 'promo' });
	// });
    //
	// $('.android').click(function(){
	// 	ym(56603671, 'reachGoal', 'android', '', function(){ console.log('ym_android'); });
	// 	gtag('event', 'android', { 'event_category' : 'promo' });
	// });
    //
	// $('.ios').click(function(){
	// 	ym(56603671, 'reachGoal', 'ios', '', function(){ console.log('ym_ios'); });
	// 	gtag('event', 'ios', { 'event_category' : 'promo' });
	// });
    //
	// $('.soc a').click(function(){
	// 	ym(56603671, 'reachGoal', 'social', '', function(){ console.log('ym_social'); });
	// 	gtag('event', 'social', { 'event_category' : 'promo' });
	// });
    //
	// $('.mabut1').click(function(){
	// 	ym(56603671, 'reachGoal', 'appmarket', '', function(){ console.log('ym_appmarket'); });
	// 	gtag('event', 'pereshel', { 'event_category' : 'popup' });
	// });
	// $('.mabut2').click(function(){
	// 	ym(56603671, 'reachGoal', 'ostalsya', '', function(){ console.log('ym_ostalsya'); });
	// 	gtag('event', 'ostalsya', { 'event_category' : 'popup' });
	// });

	$('.mabut').click(function(){
		$('.mobapp').remove();
		$.cookie('mobapp', 1, {
			expires: 90,
			path: "/"
		});
	});



	$('.mmenu, .mmclose span').click(function(){
		$('.menu').toggleClass('show');
	});

	$('.mtel').click(function(){
		$(this).toggleClass('show');
		$('.mhcont').toggleClass('show');
	});

	var slider_length =  $('.slider img').length / 2;
	$('.slider .owl-carousel').owlCarousel({
		animateOut: 'fadeOut',
		items: 1,
		loop: slider_length > 1 ? true : false,
		margin: 0,
		dots: true,
		nav: true,
		navText: ['<img src="/images/templates/almac/img/arr_l.svg" alt="" />','<img src="/images/templates/almac/img/arr_r.svg" alt="" />'],
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed : 500,
		autoplayHoverPause: true
	});

	$('.pluses .owl-carousel').owlCarousel({
		loop: true,
		dots: true,
		nav: true,
		navText: ['<img src="/images/templates/almac/img/arr_l.svg" alt="" />','<img src="/images/templates/almac/img/arr_r.svg" alt="" />'],
		autoplay: true,
		autoplayTimeout: 3000,
		autoplaySpeed : 500,
		autoplayHoverPause: true,
		responsive:{
			0:{
				items: 1,
				margin: 20
			},
			1200:{
				items: 3,
				margin: 20
			}
		}
	});

	$('.brands-carousel .owl-carousel').owlCarousel({
		loop: true,
		dots: false,
		nav: true,
		navText: ['<img src="/images/templates/almac/img/arr_l.svg" alt="" />','<img src="/images/templates/almac/img/arr_r.svg" alt="" />'],
		autoplay: true,
		autoplayTimeout: 3000,
		autoplaySpeed : 500,
		autoplayHoverPause: true,
		responsive:{
			0:{
				items: 2,
				margin: 20
			},
			500: {
				items: 3,
				margin: 20
			},
			760: {
				items: 4,
				margin: 20
			},
			1200:{
				items: 6,
				margin: 20
			}
		}
	});

	var slider_length =  $('.card-carousel .owl-carousel img').length;
	$('.card-carousel .owl-carousel').owlCarousel({
		items: 1,
		loop: slider_length > 1 ? true : false,
		margin: 0,
		dots: true,
		nav: false,
		autoplay: false
	});

	var slider_length =  $('.infoAuto .left img').length;
	$('.infoAuto .owl-carousel').owlCarousel({
		items: 1,
		loop: slider_length > 1 ? true : false,
		margin: 0,
		dots: true,
		nav: true,
		navText: ['<img src="/images/templates/almac/img/arr_l.svg" alt="" />','<img src="/images/templates/almac/img/arr_r.svg" alt="" />'],
		autoplay: true,
		autoplayTimeout: 2000,
		autoplaySpeed : 500,
		autoplayHoverPause: true
	});

	var slider_length =  $('.sliderMap img').length;
	$('.sliderMap .owl-carousel').owlCarousel({
		items: 1,
		loop: slider_length > 1 ? true : false,
		margin: 0,
		dots: false,
		nav: true,
		navText: ['<img src="/images/templates/almac/img/arr_l.svg" alt="" />','<img src="/images/templates/almac/img/arr_r.svg" alt="" />'],
		autoplay: true,
		autoplayTimeout: 3000,
		autoplaySpeed : 500,
		autoplayHoverPause: true
	});

	$('select').styler();

	$('.ttabs span').click(function(){
		var i = $(this).index();
		$('.ttabs span').removeClass('active');
		$(this).addClass('active');
		$('.ttabscont > div').removeClass('active');
		$('.ttabscont > div').hide();
		$('.ttabscont > div:eq('+i+')').show(1000);
	});

	$('.faq > div').click(function(e){
		var _this = $(this);
		setTimeout(function(){
			if ($(_this).attr('class') == 'active'){
				$(_this).removeClass('active');
				$(_this).find('div').hide(300);
			} else {
				$('.faq > div').removeClass('active');
				$('.faq > div > div').hide();
				$(_this).addClass('active');
				$(_this).find('div').show(300);
			}
		},10);
	});

	$('.ptabs span').click(function(){
		$('.ptabs span').removeClass('active');
		$(this).addClass('active');
		$('.ptabscont > div').hide();
		var n = $(this).text();
		if (n == 'Все партнеры') {
			$('.ptabscont > div').show();
		} else {
			$('.ptabscont > div[data-n="'+n+'"]').show();
		}
	});


	$('.faqtabs div span').click(function(){
		$('.faqtabs div span').removeClass('active');
		$(this).addClass('active');
		var i = $(this).index();
		$('.faq').removeClass('show');
		$('.faq'+i).addClass('show');
		$('.faq > div').removeClass('active');
		$('.faq > div > div').hide();

		if (window.innerWidth > 600) {
			$('.contTab').hide();
			$('.contTab_'+i).show();
		} else {
			$('.m_contTab').hide();
			$('.m_contTab_'+i).show();
		}

	});

	$('.faqtabs div span').click(function(){
		$('.faqtabs div span').removeClass('active');
		$(this).addClass('active');
		var i = $(this).index();
		$('.faq').removeClass('show');
		$('.faq'+i).addClass('show');
		$('.faq > div').removeClass('active');
		$('.faq > div > div').hide();
	});

	$('.label input').keyup(function(){
		if ($(this).val() != "") $(this).parent().find('.placeholder').addClass('on'); else $(this).parent().find('.placeholder').removeClass('on');
	});

	$('.pushow').click(function(){
		$('.pucontthx').remove();
		$('.pucontMain').show();
		var title = $(this).attr('data-title');
		var descr = $(this).attr('data-descr');
		var butts = $(this).attr('data-butts');
		var idcar = $(this).attr('data-id');
		$('.puw .title').text(title);
		$('.puw .descr').text(descr);
		$('.puw input[type="submit"]').val(butts);
		$('.puw input[name="data[Авто]"]').val(idcar);
		$('.puw input[name="renttype"]').val(rentTypeHref);
		$('.puw').addClass('show');
		$('.pucontMain').show();
	});
	$('.service').click(function(){
		$('.pucontthx').remove();
		$('.pucontMain1').show();
		var title = $(this).attr('data-title');
		var descr = $(this).attr('data-descr');
		var butts = $(this).attr('data-butts');
		var usl = $("h1").text();
		$('.puw1 .title').text(title);
		$('.puw1 .descr').text(descr);
		$('.puw1 input[type="submit"]').val(butts);
		//$('.puw1 input[name="data[Авто]"]').val(usl);
		$('.puw1').addClass('show');
		$('.pucontMain1').show();
	});



	$('.puclose').click(function(){ $('.puw').removeClass('show'); $('.pucontthx').remove(); });
	$('.puclose').click(function(){ $('.puw1').removeClass('show'); $('.pucontthx').remove(); });

	$('.filters select').change(function(){
		var catalog = $('.filters select[name="catalog"]').val(); if (catalog == "") catalog = '/katalog/';
		var sort = $('.sort select').val();
		var filter = $('.filter').serialize();
		var path = catalog+'?'+filter+'&sort='+sort;
		console.log(path);
		$.get(path, function (data) {
			var content =  $('.catalog', data).html();
			$('.catalog').html(content);

			$('.imgloader').each(function(){
				var src = $(this).attr('data-src');
				$(this).attr('src',src);
				$(this).removeClass('imgloader');
			});

			mdf();

			var slider_length =  $('.card-carousel .owl-carousel img').length;
			$('.card-carousel .owl-carousel').owlCarousel({
				items: 1,
				loop: slider_length > 1 ? true : false,
				margin: 0,
				dots: true,
				nav: false,
				autoplay: false
			});

		});
	});

	$('.vka').click(function(){
		$('.priceFilter').slideToggle();
	});

	$('.catalog a .mbottom').click(function(e){
		e.preventDefault();
	});


	$('.prices .button').click(function(){
		var title = $(this).attr('data-title');
		var href = window.location.href;
		href = href.split('/')[3];
		if (href == 'arenda-s-vykupom' && title == 'Заявка на бронирование') {
			ym(56603671, 'reachGoal', 'vikup_nachal', '', function(){ console.log('ym_vikup_nachal'); });
			gtag('event', 'nachal', { 'event_category' : 'vikup' });
		} else {
			ym(56603671, 'reachGoal', 'tarifi_otkril', '', function(){ console.log('ym_tarifi_otkril'); });
			gtag('event', 'zayvka_nachalo', { 'event_category' : 'promo' });
		}
	});


	function mdf () {

		$('.catalog a .mbottom').click(function(e){
			e.preventDefault();
		});

		$('.catalog a .bottom .more.pushow, .tariff .button, .mtarifs .item .button').click(function(){
			var title = $(this).attr('data-title');
			var href = window.location.href;
			href = href.split('/')[3];
			if (href == 'arenda-s-vykupom' && title == 'Заявка на бронирование') {
				ym(56603671, 'reachGoal', 'vikup_nachal', '', function(){ console.log('ym_vikup_nachal'); });
				gtag('event', 'nachal', { 'event_category' : 'vikup' });
			} else {
				ym(56603671, 'reachGoal', 'tarifi_otkril', '', function(){ console.log('ym_tarifi_otkril'); });
				gtag('event', 'zayvka_nachalo', { 'event_category' : 'promo' });
			}
		});


		if (window.innerWidth > 1200) {

			var testLine = 0;

			$('.mainPage .catalog a').click(function(e){
				e.preventDefault();

				var indexAddInfo = 0;
				var indexActive = 0;
				var index = $(this).index();
				var path = $(this).attr('href');
				var iawIndex = $('.iaw').index();
				var iawCount = $('.iaw').length;
				var innCount = $('.mainPage .catalog a').length;


				if ( (index + 1) % 4 == 0) {
					indexAddInfo = index;
					indexActive = 3;
				} else {
					indexAddInfo = index + 4 - ((index+1) % 4);
					indexActive = index % 4;
				}


				if (iawCount && iawIndex < index) {indexActive--;}
				if (indexAddInfo >= innCount) indexAddInfo = innCount-1;

				$.get(path, function (data) {

					var content =  $('.infoAutoWrapper', data).html();

					if (testLine != indexAddInfo) {
						testLine = indexAddInfo;
						$('.iaw').remove();
						$('.mainPage .catalog a:eq('+indexAddInfo+')').after('<div class="iaw"><img class="iawclose" src="/images/templates/almac/img/close@3x.png" alt="" /><div class="iawlines"><span></span><span></span><span></span><span></span></div>'+content+'</div>');
						var linkPage = '';
						var h2 = $('.iaw h2').text();
						var newH2LinkPage = '<a href="'+path+'">'+h2+'</a>';
						$('.iaw h2').html(newH2LinkPage);
					} else {
						$('.infoAuto').after(content);
						$('.infoAuto:eq(0)').remove();
					}

					var pt = $('.iaw').offset().top.toFixed(0);
					var he = $('.infoAuto').height().toFixed(0);
					var ww = $(window).height().toFixed(0);
					$('html, body').animate({ scrollTop: pt - (ww - he) + 35 }, 300);

					$('.iawlines span').removeClass('active');
					$('.iawlines span:eq('+indexActive+')').addClass('active');
					setTimeout(function(){ $('.iaw').addClass('show');}, 10);
					$('.iawclose').click(function(){ $('.iaw').removeClass('show'); });

					var slider_length =  $('.infoAuto .left img').length;
					$('.infoAuto .owl-carousel').owlCarousel({
						items: 1,
						loop: slider_length > 1 ? true : false,
						margin: 0,
						dots: true,
						nav: true,
						navText: ['<img src="/images/templates/almac/img/arr_l.svg" alt="" />','<img src="/images/templates/almac/img/arr_r.svg" alt="" />'],
						autoplay: true,
						autoplayTimeout: 2000,
						autoplaySpeed : 500,
						autoplayHoverPause: true
					});

					$('.pushow').click(function(){
						$('.pucontthx').remove();
						$('.pucontMain').show();
						var title = $(this).attr('data-title');
						var descr = $(this).attr('data-descr');
						var butts = $(this).attr('data-butts');
						var idcar = $(this).attr('data-id');
						$('.puw .title').text(title);
						$('.puw .descr').text(descr);
						$('.puw input[type="submit"]').val(butts);
						$('.puw input[name="data[Авто]"]').val(idcar);
						$('.puw input[name="renttype"]').val(rentTypeHref);
						$('.puw').addClass('show');
						$('.pucontMain').show();
					});

					$('.prices .button').click(function(){
						ym(56603671, 'reachGoal', 'tarifi_otkril', '', function(){ console.log('ym_tarifi_otkril'); });
						gtag('event', 'zayvka_nachalo', { 'event_category' : 'promo' });
					});

					$('.imgloader').each(function(){
						var src = $(this).attr('data-src');
						$(this).attr('src',src);
						$(this).removeClass('imgloader');
					});

				});

			});
		} else {
			// .mainPage
			$('.catalog a').click(function(e){
				e.preventDefault();
				if ( e.target.className != 'more pushow' && e.target.className != 'mobSubPrice') {

					if ( $(this).hasClass('mcarPod') == false ) {
						$(this).find('.pricesmob').slideToggle();
						var bt = $(this).find('.btarifs');
						if (bt.text() == 'Показать тарифы') {
							bt.text('Скрыть тарифы');
							//$(this).find('.mobSubPrice').show();
						} else {
							bt.text('Показать тарифы');
							//$(this).find('.mobSubPrice').hide();
						}
					}
				}
			});

			$('.btarifs').click(function(){
				$(this).parents('a').find('.mobSubPrice').slideToggle();
				var bt = $(this);
				if (bt.text() == 'Показать тарифы') {
					bt.text('Скрыть тарифы');
					//$(this).find('.mobSubPrice').show();
				} else {
					bt.text('Показать тарифы');
					//$(this).find('.mobSubPrice').hide();
				}
			});

			//$('.catauto .btarifs').click(function(){
			//	$(this).parent().parent().find('.pricesmob').slideToggle();
			//	if ($(this).text() == 'Показать тарифы') { $(this).text('Скрыть тарифы'); } else { $(this).text('Показать тарифы'); }
			//});

			$('.catalog a .mbottom').click(function(e){
				e.preventDefault();
			});

			$('.faqtabs div span').click(function(){
				var txt = $(this).text();
				$('.butMobTabs').text(txt);
				$('.faqtabs div').slideToggle();
			});

			$('.mftabs div span').click(function(){
				var txt = $(this).text();
				var i = $(this).index();
				$('.mftabs div span').removeClass('active');
				$(this).addClass('active');
				$('.butMobTabs').text(txt);
				$('.mtb').removeClass('active');
				$('.mtb').hide();
				$('.mtb[data-id="'+i+'"]').slideToggle();
				$('.mftabs div').slideToggle();
			});

			$('.ptabs span').click(function(){
				var txt = $(this).text();
				$('.butMobTabs').text(txt);
				$('.ptabs').slideToggle();
			});

		}

		$('.pushow').click(function(){
			$('.pucontthx').remove();
			$('.pucontMain').show();
			var title = $(this).attr('data-title');
			var descr = $(this).attr('data-descr');
			var butts = $(this).attr('data-butts');
			var idcar = $(this).attr('data-id');
			$('.puw .title').text(title);
			$('.puw .descr').text(descr);
			$('.puw input[type="submit"]').val(butts);
			$('.puw input[name="data[Авто]"]').val(idcar);
			$('.puw input[name="renttype"]').val(rentTypeHref);
			$('.puw').addClass('show');
			$('.pucontMain').show();
		});

	}

	mdf();


	$('.mbutfilter').click(function(){
		$('.filter').slideToggle();
	});


	$.fn.setCursorPosition = function(pos) {
		if ($(this).get(0).setSelectionRange) {
			$(this).get(0).setSelectionRange(pos, pos);
		} else if ($(this).get(0).createTextRange) {
			var range = $(this).get(0).createTextRange();
			range.collapse(true);
			range.moveEnd('character', pos);
			range.moveStart('character', pos);
			range.select();
		}
	};
	$('input[name="data[Телефон]"]').click(function(){
		var tel = $(this).val();
		console.log(tel);
		if (tel == "+7 (___) ___-__-__") $(this).setCursorPosition(4);
	});


	$('input[name="data[Телефон]"]').mask('+7 (999) 999-99-99');


	$('.butMobTabs').click(function(){
		$(this).parent().find('>div').slideToggle();
	});


	$('select[name="data[Авто]"]').change(function(){
		var v = $(this).val();
		if (v != '') {
			$('.slider .jq-selectbox__select-text').addClass('selected');
		} else {
			$('.slider .jq-selectbox__select-text').removeClass('selected');
		}
	});


	$('.pucont form').submit(function(e){
		e.preventDefault();
		$('.pucontthx').remove();

		var _this = $(this);
		var thisFlag = _this.attr('data-flag');
		var flag = 1;

		var name = _this.find('input[name="data[Имя]"]');
		var tel = _this.find('input[name="data[Телефон]"]');
		if (name.val() == '') { flag = 0; name.parent().addClass('error'); } else { name.parent().removeClass('error'); }
		if (tel.val() == '') { flag = 0; tel.parent().addClass('error'); } else { tel.parent().removeClass('error'); }

		if (thisFlag == 1) flag = 0;

		if (flag){
			var m_method = _this.attr('method');
			var m_action = _this.attr('action');
			var m_data = _this.serialize();
			$.ajax({
				type: m_method,
				url: m_action,
				data: m_data,
				success: function(result){
					var car = _this.find('input[name="data[Авто]"]').val();
					var servi = _this.find('input[name="data[Услуга]"]').val();
					console.log(car);
					console.log(servi);
					var z = '';
					var href = window.location.href;
						href = href.split('/')[3];
					if (car == "") {
						z = 'звонок';
						if (href == 'arenda-s-vykupom') {
							ym(56603671, 'reachGoal', 'vikup_oformil', '', function(){ console.log('ym_vikup_oformil'); });
							gtag('event', 'oformil', { 'event_category' : 'vikup' });
						} else {
							ym(56603671, 'reachGoal', 'succes_callback', '', function(){ console.log('ym_succes_callback'); });
							gtag('event', 'succes_callback', { 'event_category' : 'promo' });
						}
					}
					else if (servi) {
						z = 'услугу';
						if (href == 'arenda-s-vykupom') {
							ym(56603671, 'reachGoal', 'vikup_oformil', '', function(){ console.log('ym_vikup_oformil'); });
							gtag('event', 'oformil', { 'event_category' : 'vikup' });
						} else {
							ym(56603671, 'reachGoal', 'succes_callback', '', function(){ console.log('ym_succes_callback'); });
							gtag('event', 'succes_callback', { 'event_category' : 'promo' });
						}
					}

					 else {
						z = 'бронирование';
						if (href == 'arenda-s-vykupom') {
							ym(56603671, 'reachGoal', 'vikup_oformil', '', function(){ console.log('ym_vikup_oformil'); });
							gtag('event', 'oformil', { 'event_category' : 'vikup' });
						} else {
							ym(56603671, 'reachGoal', 'tarifi_otpravil', '', function(){ console.log('ym_tarifi_otpravil'); });
							gtag('event', 'zyavka_succes', { 'event_category' : 'promo' });
						}
					}
					$('.pucontMain').hide();
					$('.pucontMain1').hide();
					$('.pucont').after('<div class="pucont pucontthx"><p class="thx">Спасибо, заявка на '+z+' #'+result+' принята! В ближайшее время с вами свяжется наш менеджер.</p><input class="puclose" type="submit" value="Закрыть форму" /></div>');
					$('.puclose').click(function(){ $('.puw').removeClass('show'); $('.pucontthx').remove(); });
					$('.puclose').click(function(){ $('.puw1').removeClass('show'); $('.pucontthx').remove(); });
					_this.attr('data-flag',0);
				}
			});
			_this.attr('data-flag',1);
		}
	});



	$('.addq form').submit(function(e){
		e.preventDefault();
		$('.pucontthx').remove();

		var _this = $(this);
		var flag = 1;

		var name = _this.find('input[name="data[Имя]"]');
		var tel = _this.find('input[name="data[Телефон]"]');
		var mail = _this.find('input[name="data[Почта]"]');
		var mes = _this.find('textarea[name="data[Сообщение]"]');
		if (name.val() == '') { flag = 0; name.addClass('error'); } else { name.removeClass('error'); }
		if (tel.val() == '') { flag = 0; tel.addClass('error'); } else { tel.removeClass('error'); }
		if (mail.val() == '') { flag = 0; mail.addClass('error'); } else { mail.removeClass('error'); }
		if (mes.val() == '') { flag = 0; mes.addClass('error'); } else { mes.removeClass('error'); }

		if (flag){
			var m_method = _this.attr('method');
			var m_action = _this.attr('action');
			var m_data = _this.serialize();
			$.ajax({
				type: m_method,
				url: m_action,
				data: m_data,
				success: function(result){

				}
			});
			ym(56603671, 'reachGoal', 'vopros_otpravil', '', function(){ console.log('ym_vopros_otpravil'); });
			gtag('event', 'vopros_otpravil', { 'event_category' : 'promo' });
			$(this).html('<p class="thx">Спасибо, заявка принята! В ближайшее время с вами свяжется наш менеджер.</p>');
		}
	});


	$('.slform').submit(function(e){
		e.preventDefault();
		$('.pucontthx').remove();

		var _this = $(this);
		var thisFlag = _this.attr('data-flag');
		var flag = 1;

		var name = _this.find('input[name="data[Имя]"]');
		var tel = _this.find('input[name="data[Телефон]"]');
		var car = _this.find('select[name="data[Авто]"]');

		if (name.val() == '') { flag = 0; name.addClass('error'); } else { name.removeClass('error'); }
		if (tel.val() == '') { flag = 0; tel.addClass('error'); } else { tel.removeClass('error'); }
		if (car.val() == '') { flag = 0; car.parent().addClass('error'); } else { car.parent().removeClass('error'); }

		if (thisFlag == 1) flag = 0;

		if (flag){
			var m_method = _this.attr('method');
			var m_action = _this.attr('action');
			var m_data = _this.serialize();
			$.ajax({
				type: m_method,
				url: m_action,
				data: m_data,
				success: function(result){

					ym(56603671, 'reachGoal', 'carusel_glavnaya', '', function(){ console.log('ym_carusel_glavnaya'); });
					gtag('event', 'carusel_glavnaya', { 'event_category' : 'promo' });

					//_this.html('<p class="thx">Спасибо, заявка на борнирование #'+result+' принята! В ближайшее время с вами свяжется наш менеджер.</p>');
					$('.puw').addClass('show');
					$('.pucontMain').hide();
					$('.pucont').after('<div class="pucont pucontthx"><p class="thx">Спасибо, заявка на борнирование #'+result+' принята! В ближайшее время с вами свяжется наш менеджер.</p><input class="puclose" type="submit" value="Закрыть форму" /></div>');
					$('.puclose').click(function(){ $('.puw').removeClass('show'); });
					_this.attr('data-flag',0);
				}
			});
			_this.attr('data-flag',1);
		}
	});


	$('select[name="mtd"]').change(function(){
		var mtd = $(this).val();
		$('.itemMobTP').hide();
		$('.itemMobTP[data-pr="'+mtd+'"]').show();
	});

	$('select[name="mtv"]').change(function(){
		var mtv = $(this).val();
		$('.mtb').hide();
		$('.mtb[data-pr="'+mtv+'"]').show();
	});


  $("#btnFile").on("click", function() {
    var file = $("#formFiles input").val();
	console.log(file);

    $.ajax({
      url: 'https://avto-prokat.spb.ru/os/uploads-files.php',
      type: 'POST',
      cache: false,
      data: {
        'name': file,
      },
      dataType: 'html',
      beforeSend: function() {
        $("#btnFile").prop("disable", true);
      },
      success: function(data) {
        $("#btnFile").prop("disable", false);
        $("#formFiles input").trigger("reset");
      }
    })
  });




});

window.onload = function(){

	$('.imgloader').each(function(){
		var src = $(this).attr('data-src');
		$(this).attr('src',src);
		$(this).removeClass('imgloader');
	});

	setTimeout(function(){
		var slider_length =  $('.page_podpiska .card-carousel .owl-carousel img').length;
		$('.page_podpiska .card-carousel .owl-carousel').owlCarousel({
			items: 1,
			loop: slider_length > 1 ? true : false,
			margin: 0,
			dots: true,
			nav: false,
			autoplay: false
		});
	},100);

	/*
	var catalog = $('.filters select[name="catalog"]').val(); if (catalog == "") catalog = '/katalog/';
	var sort = $('.sort select').val();
	var filter = $('.filter').serialize();
	var path = catalog+'?'+filter+'&sort='+sort;
	console.log(path);
	$.get(path, function (data) {
		var content =  $('.catalog', data).html();
		$('.catalog').html(content);

		$('.imgloader').each(function(){
			var src = $(this).attr('data-src');
			$(this).attr('src',src);
			$(this).removeClass('imgloader');
		});

		mdf();
	});
	*/

}
















