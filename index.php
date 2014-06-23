<?php
	$dirRoot=str_replace("index.php","",str_replace($_SERVER["DOCUMENT_ROOT"],"",$_SERVER["SCRIPT_FILENAME"]));
	$path=(isset($_GET["path"])?$_GET["path"]:"");
	if($path)
	{
		header("Location: ".$dirRoot);
		die();
	}
	$bg_body=(0+@filesize("media/bg-body.jpg"));
	$benz_logo=(0+@filesize("media/benz-logo.png"));
	$maxim_logo=(0+@filesize("media/maxim-logo.png"));
	$fb_icn=(0+@filesize("media/fb-icn.png"));
	$yt_icn=(0+@filesize("media/yt-icn.png"));
	$btn_compl=(0+@filesize("media/btn-compl.png"));
	$btn_model=(0+@filesize("media/btn-model.png"));
	$btn_home=(0+@filesize("media/btn-home.png"));
	$td_play=(0+@filesize("media/3d-play.png"));
	$td_int=(0+@filesize("media/3d/int.jpg"));
	$street_bg_sm=(0+@filesize("media/street/bg-sm.jpg"));
	$street_vidsl=array("mp4"=>(0+@filesize("media/street/video-slide.mp4")),"ogg"=>(0+@filesize("media/street/video-slide.ogv")),"webm"=>(0+@filesize("media/street/video-slide.webm")));
	$street_vid=array("mp4"=>(0+@filesize("media/street/video.mp4")),"ogg"=>(0+@filesize("media/street/video.ogv")),"webm"=>(0+@filesize("media/street/video.webm")));
	$street_btnvid=(0+@filesize("media/street/btn-video.jpg"));
	$club_bg_sm=(0+@filesize("media/club/bg-sm.jpg"));
	$club_vidsl=array("mp4"=>(0+@filesize("media/club/video-slide.mp4")),"ogg"=>(0+@filesize("media/club/video-slide.ogv")),"webm"=>(0+@filesize("media/club/video-slide.webm")));
	$club_vid=array("mp4"=>(0+@filesize("media/club/video.mp4")),"ogg"=>(0+@filesize("media/club/video.ogv")),"webm"=>(0+@filesize("media/club/video.webm")));
	$club_btnvid=(0+@filesize("media/club/btn-video.jpg"));
	$vogue_bg_sm=(0+@filesize("media/vogue/bg-sm.jpg"));
	$vogue_vidsl=array("mp4"=>(0+@filesize("media/vogue/video-slide.mp4")),"ogg"=>(0+@filesize("media/vogue/video-slide.ogv")),"webm"=>(0+@filesize("media/vogue/video-slide.webm")));
	$vogue_vid=array("mp4"=>(0+@filesize("media/vogue/video.mp4")),"ogg"=>(0+@filesize("media/vogue/video.ogv")),"webm"=>(0+@filesize("media/vogue/video.webm")));
	$vogue_btnvid=(0+@filesize("media/vogue/btn-video.jpg"));
	$jazz_bg_sm=(0+@filesize("media/jazz-modern/bg-sm.jpg"));
	$jazz_vidsl=array("mp4"=>(0+@filesize("media/jazz-modern/video-slide.mp4")),"ogg"=>(0+@filesize("media/jazz-modern/video-slide.ogv")),"webm"=>(0+@filesize("media/jazz-modern/video-slide.webm")));
	$jazz_vid=array("mp4"=>(0+@filesize("media/jazz-modern/video.mp4")),"ogg"=>(0+@filesize("media/jazz-modern/video.ogv")),"webm"=>(0+@filesize("media/jazz-modern/video.webm")));
	$jazz_btnvid=(0+@filesize("media/jazz-modern/btn-video.jpg"));
	$hip_bg_sm=(0+@filesize("media/hip-hop/bg-sm.jpg"));
	$hiphop_vidsl=array("mp4"=>(0+@filesize("media/hip-hop/video-slide.mp4")),"ogg"=>(0+@filesize("media/hip-hop/video-slide.ogv")),"webm"=>(0+@filesize("media/hip-hop/video-slide.webm")));
	$hiphop_vid=array("mp4"=>(0+@filesize("media/hip-hop/video.mp4")),"ogg"=>(0+@filesize("media/hip-hop/video.ogv")),"webm"=>(0+@filesize("media/hip-hop/video.webm")));
	$hiphop_btnvid=(0+@filesize("media/hip-hop/btn-video.jpg"));
	$gla_bg=(0+@filesize("media/gla/bg.jpg"));
	$gla_bg_sm=(0+@filesize("media/gla/bg-sm.jpg"));
	$gla_vid=array("mp4"=>(0+@filesize("media/gla/video.mp4")),"ogg"=>(0+@filesize("media/gla/video.ogv")),"webm"=>(0+@filesize("media/gla/video.webm")));
	$gla_btnvid=(0+@filesize("media/gla/btn-video.jpg"));
	$resData="[".
	"{el:null,loaded:false,name:\"bg-body\",owner:\"\",size:".$bg_body.",type:\"img\",url:\"media/bg-body.jpg\"},".
	"{el:null,loaded:false,name:\"benz-logo\",owner:\"\",size:".$benz_logo.",type:\"img\",url:\"media/benz-logo.png\"},".
	"{el:null,loaded:false,name:\"maxim-logo\",owner:\"\",size:".$maxim_logo.",type:\"img\",url:\"media/maxim-logo.png\"},".
	"{el:null,loaded:false,name:\"btn-home\",owner:\"\",size:".$btn_home.",type:\"img\",url:\"media/btn-home.png\"},".
	"{el:null,loaded:false,name:\"fb-icn\",owner:\"\",size:".$fb_icn.",type:\"img\",url:\"media/fb-icn.png\"},".
	"{el:null,loaded:false,name:\"yt-icn\",owner:\"\",size:".$yt_icn.",type:\"img\",url:\"media/yt-icn.png\"},".
	"{el:null,loaded:false,name:\"btn-compl\",owner:\"\",size:".$btn_compl.",type:\"img\",url:\"media/btn-compl.png\"},".
	"{el:null,loaded:false,name:\"btn-model\",owner:\"\",size:".$btn_model.",type:\"img\",url:\"media/btn-model.png\"},".
	"{el:null,loaded:false,name:\"bg-sm\",owner:\"street\",size:".$street_bg_sm.",type:\"img\",url:\"media/street/bg-sm.jpg\"},".
	"{el:null,loaded:false,name:\"btn-video\",owner:\"street\",size:".$street_btnvid.",type:\"img\",url:\"media/street/btn-video.jpg\"},".
	"{el:null,loaded:false,name:\"bg-sm\",owner:\"club\",size:".$club_bg_sm.",type:\"img\",url:\"media/club/bg-sm.jpg\"},".
	"{el:null,loaded:false,name:\"btn-video\",owner:\"club\",size:".$club_btnvid.",type:\"img\",url:\"media/club/btn-video.jpg\"},".
	"{el:null,loaded:false,name:\"bg-sm\",owner:\"vogue\",size:".$vogue_bg_sm.",type:\"img\",url:\"media/vogue/bg-sm.jpg\"},".
	"{el:null,loaded:false,name:\"btn-video\",owner:\"vogue\",size:".$vogue_btnvid.",type:\"img\",url:\"media/vogue/btn-video.jpg\"},".
	"{el:null,loaded:false,name:\"bg-sm\",owner:\"jazz\",size:".$jazz_bg_sm.",type:\"img\",url:\"media/jazz-modern/bg-sm.jpg\"},".
	"{el:null,loaded:false,name:\"btn-video\",owner:\"jazz\",size:".$jazz_btnvid.",type:\"img\",url:\"media/jazz-modern/btn-video.jpg\"},".
	"{el:null,loaded:false,name:\"bg-sm\",owner:\"hiphop\",size:".$hip_bg_sm.",type:\"img\",url:\"media/hip-hop/bg-sm.jpg\"},".
	"{el:null,loaded:false,name:\"btn-video\",owner:\"hiphop\",size:".$hiphop_btnvid.",type:\"img\",url:\"media/hip-hop/btn-video.jpg\"},".
	"{el:null,loaded:false,name:\"bg\",owner:\"gla\",size:".$gla_bg.",type:\"img\",url:\"media/gla/bg.jpg\"},".
	"{el:null,loaded:false,name:\"bg-sm\",owner:\"gla\",size:".$gla_bg_sm.",type:\"img\",url:\"media/gla/bg-sm.jpg\"},".
	"{el:null,loaded:false,name:\"btn-video\",owner:\"gla\",size:".$gla_btnvid.",type:\"img\",url:\"media/gla/btn-video.jpg\"},".
	"{el:null,loaded:false,name:\"play\",owner:\"3d\",size:".$td_play.",type:\"img\",url:\"media/3d-play.png\"},".
	"{el:null,loaded:false,name:\"interior\",owner:\"3d\",size:".$td_int.",type:\"img\",url:\"media/3d/int.jpg\"}";
	for($c=0;$c<50;$c++)
	{
		$f="media/3d/".(strlen("".$c)==1?"000":"00")."{$c}.jpg";
		if(@file_exists($f))$resData=$resData.",{el:null,loaded:false,name:\"fr".$c."\",owner:\"3d\",size:".@filesize($f).",type:\"img\",url:\"".$f."\"}";
		else break;
	}
	$resData=$resData.
	",{el:null,loaded:false,name:\"video-slide\",owner:\"street\",size:0,vsizes:{mp4:".$street_vidsl["mp4"].",ogg:".$street_vidsl["ogg"].",webm:".$street_vidsl["webm"]."},type:\"video\",url:\"media/street/video-slide\"},".
	"{el:null,loaded:false,name:\"video\",owner:\"street\",size:0,vsizes:{mp4:".$street_vid["mp4"].",ogg:".$street_vid["ogg"].",webm:".$street_vid["webm"]."},type:\"video\",url:\"media/street/video\"},".
	"{el:null,loaded:false,name:\"video-slide\",owner:\"club\",size:0,vsizes:{mp4:".$club_vidsl["mp4"].",ogg:".$club_vidsl["ogg"].",webm:".$club_vidsl["webm"]."},type:\"video\",url:\"media/club/video-slide\"},".
	"{el:null,loaded:false,name:\"video\",owner:\"club\",size:0,vsizes:{mp4:".$club_vid["mp4"].",ogg:".$club_vid["ogg"].",webm:".$club_vid["webm"]."},type:\"video\",url:\"media/club/video\"},".
	"{el:null,loaded:false,name:\"video-slide\",owner:\"vogue\",size:0,vsizes:{mp4:".$vogue_vidsl["mp4"].",ogg:".$vogue_vidsl["ogg"].",webm:".$vogue_vidsl["webm"]."},type:\"video\",url:\"media/vogue/video-slide\"},".
	"{el:null,loaded:false,name:\"video\",owner:\"vogue\",size:0,vsizes:{mp4:".$vogue_vid["mp4"].",ogg:".$vogue_vid["ogg"].",webm:".$vogue_vid["webm"]."},type:\"video\",url:\"media/vogue/video\"},".
	"{el:null,loaded:false,name:\"video-slide\",owner:\"jazz\",size:0,vsizes:{mp4:".$jazz_vidsl["mp4"].",ogg:".$jazz_vidsl["ogg"].",webm:".$jazz_vidsl["webm"]."},type:\"video\",url:\"media/jazz-modern/video-slide\"},".
	"{el:null,loaded:false,name:\"video\",owner:\"jazz\",size:0,vsizes:{mp4:".$jazz_vid["mp4"].",ogg:".$jazz_vid["ogg"].",webm:".$jazz_vid["webm"]."},type:\"video\",url:\"media/jazz-modern/video\"},".
	"{el:null,loaded:false,name:\"video-slide\",owner:\"hiphop\",size:0,vsizes:{mp4:".$hiphop_vidsl["mp4"].",ogg:".$hiphop_vidsl["ogg"].",webm:".$hiphop_vidsl["webm"]."},type:\"video\",url:\"media/hip-hop/video-slide\"},".
	"{el:null,loaded:false,name:\"video\",owner:\"hiphop\",size:0,vsizes:{mp4:".$hiphop_vid["mp4"].",ogg:".$hiphop_vid["ogg"].",webm:".$hiphop_vid["webm"]."},type:\"video\",url:\"media/hip-hop/video\"},".
	"{el:null,loaded:false,name:\"video\",owner:\"gla\",size:0,vsizes:{mp4:".$gla_vid["mp4"].",ogg:".$gla_vid["ogg"].",webm:".$gla_vid["webm"]."},type:\"video\",url:\"media/gla/video\"}]";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>MERCEDES-BENZ SENSATIONS: GLA PROMOTION</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Bogdan Nazar (info@itechserv.ru)" />
	<meta name="description" content="ВАШИ ЭМОЦИИ — НАША КОМПЛЕКТАЦИЯ НОВОГО GLA ОТ «МЕРСЕДЕС-БЕНЦ»" />
	<meta name="keywords" content="MERCEDES-BENZ GLA" />
	<!-- social sharing metadata -->
	<!-- use this url to update meta-data manually: https://developers.facebook.com/tools/debug/ -->
	<meta property="og:url" content="http://mbsensations.maximonline.ru/" />
	<meta property="og:title" content="Mercedes-Benz Sensations" />
	<meta property="og:description" content="Ваши эмоции — наша комплектация нового GLA от «Mercedes-Benz»" />
	<meta property="og:image" content="http://mbsensations.maximonline.ru/media/3d/0012.jpg" />
	<meta property="og:type" content="website" />
	<link type="text/css" href="styles/promo_benz.css?ver=1.0.13" media="all" rel="stylesheet" />
	<script type="text/javascript" src="scripts/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-8838504-9']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>
	<script type="text/javascript">VK.init({apiId: 4167258, onlyWidgets: true});</script>
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/ru_RU/all.js#xfbml=1&appId=656221277758899";//&appId=741587475869491
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="promo_benz">
	<div class="main" id="promo_benz-main">
		<div class="res-loader"><a class="logo"></a><div class="progress"><div class="inner" title="1%"></div></div><div class="title">MERCEDES-BENZ<br />SENSATIONS</div></div>
		<div class="res-data" style="display:none;"><?php echo $resData?></div>
		<div class="sections" style="display:none;">
			<div class="header-bg"></div>
			<div class="header-cont"><div class="left"><div class="vsp"></div><div class="vline"></div></div><div class="right"><div class="vsp"></div><span class="sn">присоединяйся на </span><span class="sn">и смотри на</span><span class="sn last"></span></div></div>
			<div class="slide street"><div class="cover"></div><div class="btn"><div class="hover"></div><div class="title">Street dance</div></div><div class="shad"></div></div>
			<div class="slide club"><div class="cover"></div><div class="btn"><div class="hover"></div><div class="title">club dance</div></div><div class="shad"></div></div>
			<div class="slide vogue"><div class="cover"></div><div class="btn"><div class="hover"></div><div class="title">voGUe</div></div><div class="shad"></div></div>
			<div class="slide jazz"><div class="cover"></div><div class="btn"><div class="hover"></div><div class="title">Jazz modern</div></div><div class="shad"></div></div>
			<div class="slide hiphop"><div class="cover"></div><div class="btn"><div class="hover"></div><div class="title">hip-hop</div></div><div class="shad"></div></div>
			<div class="slide gla"><div class="cover"></div><img class="btn-video" /><div class="promo">
				<div class="title">MERCEDES-BENZ<br />SENSATIONS</div>
				<div class="prompt">Конкурс Mercedes-Benz Sensations выходит на финишную прямую! Десять лучших участников проекта продолжают танцевальный батл!
				<!--Запиши свое танцевальное видео в одном из танцевальных направлений и выложи в сети Instagram с хэштегом <span class="tag">#mbsensations</span>.--></div>
				<div class="prompt pt10">Покажи себя, и получи уникальные призы от Mercedes-Benz!</div>
			</div><div class="btn-video-title">Видео - Встречайте новый GLA</div><div class="btn"><div class="hover"></div><div class="title">конкурс и видео GLA</div></div><div class="shad"></div></div>
			<div class="section street"><div class="left"></div><div class="right"></div><div class="info">
				<div class="title">street dance</div><div class="subtitle">GLA 250 4MATIC + пакет Urban</div><div class="text">
					То, что создатели программы "Танцы со звездами" узнают о твоем существовании — лишь вопрос времени. Ты твердо стоишь на ногах, редко летаешь куда-то во сне и наяву и не равнодушен к полноприводным автомобилям — свободолюбивым и совершенным. <b>GLA 250 4MATIC от Mercedes – Benz в Urban пакете</b> разделяет дерзкие стремления. Динамичный, с какой стороны не смотри: облицовка радиатора с двумя серебристыми ламелями и хромированными вставками, легкосплавные колесные диски размером 18“ с 5 сдвоенными спицами и двухпоточная выхлопная система. Тебя не оставят равнодушным хромированные накладки на пороге багажника и боковых молдингах, а также защита днища на бамперах. Спортивные сиденья, мультифункциональный кожаный руль и комбинации приборов с красными стрелками и мотивом в виде финишных флажков так и заявляют: "Алонсо, тебя куда-нибудь подбросить?!"
				</div>
				<div class="btn-compl">3D&nbsp;модель<br />нового&nbsp;GLA</div><a class="btn-model" href="http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars/home/new_cars/models/gla-class/x156/fascination/highlights.flash.html#_int_passengercars:home:model-navi:highlights" target="_blank">подробнее<br />о&nbsp;новом&nbsp;GLA</a>
			</div></div>
			<div class="section club"><div class="left"></div><div class="right"></div><div class="info">
				<div class="title">club dance</div><div class="subtitle">GLA AMG line + Night пакет + Панорамная крыша</div><div class="text">
					"Танцующий в темноте" мог бы называться новый хит Ларса Фон Триера в твоем исполнении. Стоит подбросить режиссеру видео с записью твоих безудержных клубных танцев под грифом "позволить голове и бедрам жить собственной жизнью". Скорее всего, ты тот человек, которого свет еще не видывал! Ибо при свете дня тебя редко встретишь. Ты ведешь ночной образ жизни, без помощи навигатора доберешься до модного места-"полуночника", при этом предпочитаешь все самое эксклюзивное. Твой идеальный партнер "по танцам" — <b>Mercedes – Benz GLA AMG Line</b> в купе с <b>пакетом Night</b>. Динамичный стайлинг, легкосплавные колесные диски, мультифункциональный руль, экстерьер со спортивно-экспрессивным характером и панорамной крышей под грифом "одно загляденье". Men in black авто мира — это изысканные элементы дизайна черного цвета: от облицовки радиатора, наружных зеркал и дисков до темной тонировки. Ночное чудо света!
				</div>
				<div class="btn-compl">3D&nbsp;модель<br />нового&nbsp;GLA</div><a class="btn-model" href="http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars/home/new_cars/models/gla-class/x156/fascination/highlights.flash.html#_int_passengercars:home:model-navi:highlights" target="_blank">подробнее<br />о&nbsp;новом&nbsp;GLA</a>
			</div></div>
			<div class="section vogue"><div class="left"></div><div class="right"></div><div class="info">
				<div class="title">voGUe</div><div class="subtitle">GLA 200 + Style пакет + Becker® MAP PILOT</div><div class="text">
					Про тебя нередко говорят "рубаха-парень". А еще "модное-соломенное-пальто-парень", "лофер-парень", "парень-замшевый-котелок". Дресс-код для тебя — собственное воображение (ну и, возможно, герои сериала Mad Man). Стильному мужчине — стильный авто. Новый GLA от «Мерседес-бенц» с <b>пакетом Style</b> расставит индивидуальные акценты, придавая твоему автомобилю (как и положено главному мужскому аксессуару) самобытный характер с помощью таких элементов, как 17"-ые колесные диски с пятью сдвоенными спицами, алюминиевые рейлинги на крыше с черной глянцевой лакировкой, облицовка радиатора с двумя серебристыми ламелями и хромированными вставками, дизайнерский руль, кожаный салон, декоративные элементы из карбона и <b>навигационная система Becker® MAP PILOT</b> с лучшими вариантами маршрутов по трехмерным картам. Удовольствие в деталях!
 				</div>
				<div class="btn-compl">3D&nbsp;модель<br />нового&nbsp;GLA</div><a class="btn-model" href="http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars/home/new_cars/models/gla-class/x156/fascination/highlights.flash.html#_int_passengercars:home:model-navi:highlights" target="_blank">подробнее<br />о&nbsp;новом&nbsp;GLA</a>
			</div></div>
			<div class="section jazz"><div class="left"></div><div class="right"></div><div class="info">
				<div class="title">Jazz modern</div><div class="subtitle">GLA Edition I + пакет Exclusive</div><div class="text">
					Вместо слов здесь должна звучать музыка. Но не устаревшие мотивы с улиц Нового Орлеана, а отвязный jazz modern, в котором уживается столько трюков и эмоций, что хватит на компанию бесчувственных снобов. В истории танцев он такой один jazz modern, как и в истории автомобилей — серия <b>Edition 1</b> для нового GLA от «Мерседес-бенц» в <b>пакете Exclusive</b> с идеально согласованными элементами интерьера и экстерьера, подобранных по желанию владельца, что делает его еще эксклюзивнее и комфортабельнее. Уникальное лакокрасочные покрытия "не как у всех", интерьер DESERT DUST с комфортабельными кожаными сидениями для водителя и переднего пассажира с выразительной мокасиновой строчкой, панель приборов, обтянутая искусственной кожей, а так же пакет освещения и обзорности. Перечислять и смаковать "фишки" <b>Edition 1</b> можно до бесконечности. Как и джаз-модерн — лучше один раз попробовать, чтобы описывать словами.
				</div>
				<div class="btn-compl">3D&nbsp;модель<br />нового&nbsp;GLA</div><a class="btn-model" href="http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars/home/new_cars/models/gla-class/x156/fascination/highlights.flash.html#_int_passengercars:home:model-navi:highlights" target="_blank">подробнее<br />о&nbsp;новом&nbsp;GLA</a>
			</div></div>
			<div class="section hiphop"><div class="left"></div><div class="right"></div><div class="info">
				<div class="title">hip-hop</div><div class="subtitle">GLA 200 + Comand online</div><div class="text">
					Рэп-исполнители — это новые рок-звезды, а Hip Hop — танцевальная религия. Эти движения-импровизации под силу только человеку, который точно знает, когда давать выход тому или иному чувству. <b>Мультимедийная система COMAND Online</b> с ЖК-дисплеем в новеньком <b>Mercedes-Benz GLA 200</b> — именно то, что подойдет таким людям. Быстрая навигация по трехмерным картам, рекомендации по выбору полосы движения и самые удобные варианты маршрутов. Какие тут могут быть неожиданности на дорогах? А еще — <b>система голосового управления LINGUATRONIC</b> для аудиосистемы, потоковое аудио для передачи музыкальных файлов, радиоприемник с двойным тюнером, CD/DVD-плейер, интерфейс USВ, музыкальный регистр с памятью на 10 ГБ для сжатых аудиофайлов и еще тысяча и одна установка для тех, кого с машиной, ко всему прочему, связывают глубокие музыкальные отношения.
				</div>
				<div class="btn-compl">3D&nbsp;модель<br />нового&nbsp;GLA</div><a class="btn-model" href="http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars/home/new_cars/models/gla-class/x156/fascination/highlights.flash.html#_int_passengercars:home:model-navi:highlights" target="_blank">подробнее<br />о&nbsp;новом&nbsp;GLA</a>
			</div></div>
			<div class="section gla"><div class="info">
				<div class="title">MERCEDES-BENZ<br />SENSATIONS</div><div class="subtitle"></div><div class="text">
					Помоги нам определить победителя! Обладателем главного приза – полугодового тест-драйва нового GLA от «Мерседес-Бенц» - станет танцор, набравший самое большое количество голосов в официальной группе Mercedes-Benz в России на Facebook. Кто знает, возможно, именно твой голос — решающий!
					<!--Участвуй в конкурсе «MERCEDES-BENZ SENSATIONS» запиши свое танцевальное видео в одном из танцевальных направлений и выложи в сети Instagram. Для храбрости — вспомни последний корпоратив: там призов не давали, зато как эффектно вышло. В порыве танцевальной страсти не забудь использовать хэштег <span class="tag">#mbsensations</span>, чтобы все смогли по достоинству оценить твой танец своим «лайком». Собирай голоса в свою пользу и получи главный приз — тест-драйв автомобиля «Mercedes-Benz» GLA на полгода. А так же постановку танца профессиональным хореографом. Подарок судьбы, не иначе!-->
				</div>
				<a class="take-part" href="https://apps.facebook.com/mbsensations/" target="_blank">голосовать</a>
			</div><div class="info-sub"><div class="new-gla">НОВЫЙ GLA</div><div class="new-gla-sub">– компактный SUV от «Мерседес-Бенц»</div></div></div>
			<div class="player" id="player" style="display:none;"><div class="_3d"><div class="frames"></div><div class="info-sub"><div class="new-gla">НОВЫЙ GLA</div><div class="new-gla-sub">компактный SUV от «Мерседес-Бенц»</div></div><div class="btn-int">посмотреть&nbsp;интерьер</div><div class="ctrl"><div class="btn lt"></div><div class="prompt">потяните мышью в стороны<br />чтобы повернуть машину</div><div class="btn rt"></div></div></div><div class="interior" style="display:none;"><div class="btn-ext">вернуться к экстерьеру</div></div><div class="info"></div><div class="btn-video"><div class="title">Вернуться<br />обратно к видео</div></div><a class="btn-model" href="http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars/home/new_cars/models/gla-class/x156/fascination/highlights.flash.html#_int_passengercars:home:model-navi:highlights" target="_blank">подробнее<br />о&nbsp;новом&nbsp;GLA</a></div>
			<div class="menu-btn street"><div class="hover"></div><div class="title">Street dance</div></div>
			<div class="menu-btn club"><div class="hover"></div><div class="title">club dance</div></div>
			<div class="menu-btn vogue"><div class="hover"></div><div class="title">voGUe</div></div>
			<div class="menu-btn jazz"><div class="hover"></div><div class="title">Jazz modern</div></div>
			<div class="menu-btn hiphop"><div class="hover"></div><div class="title">hip-hop</div></div>
			<div class="menu-btn gla"><div class="hover"></div><div class="title">конкурс и видео GLA</div></div>
			<div class="what-dance"><div class="inner">Какой танец движет<br />твоими эмоциями?<div class="inner2">ВАШИ ЭМОЦИИ — НАША КОМПЛЕКТАЦИЯ<br />НОВОГО GLA ОТ «МЕРСЕДЕС-БЕНЦ»</div></div></div>
			<div class="footer"><!--
				--><div class="left">
					<div class="like-aligner"></div><div class="like-item"><div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div><div class="like-item vk"><div id="vk_like"></div><script type="text/javascript">VK.Widgets.Like("vk_like", {type: "button"});</script></div><div class="like-item tw"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="ru" data-hashtags="mbsensations">Твитнуть</a><script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
				</div><!--
				--><div class="right">
					<div class="top-copy"><span class="copy">&copy;</span> 2013 Мерседес-Бенц РУС, &copy; 2013 ООО &laquo;Хёрст Шкулёв Медиа&raquo;. Все права защищены.</div>
					<div class="bot-links">
						<a href="https://www.facebook.com/notes/mercedes-benz-%D0%B2-%D1%80%D0%BE%D1%81%D1%81%D0%B8%D0%B8/%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81-mercedes-benz-sensations-%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0-%D0%B8-%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F-%D1%83%D1%87%D0%B0%D1%81%D1%82%D0%B8%D1%8F/628543853861042">Правила участия</a> в конкурсе &laquo;MERCEDES-BENZ SENSATIONS&raquo; <a class="benz" href="http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars.flash.html" target="_blank">Mercedes-Benz Россия</a>, официальный сайт
					</div><!--
				--></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		(function(start) {
			var doSeed = false<?=(isset($_GET["seed"])?" || true":"")?>;
			var loader = $("#promo_benz-main .res-loader")[0];
			var progress = $("#promo_benz-main .res-loader .progress .inner")[0];
			var data = $("#promo_benz-main .res-data")[0];
			var sections = $("#promo_benz-main .sections")[0];
			var ress;
			var size_total = 0;
			var size_done = 0;
			try {
				ress = eval("(" + data.innerHTML + ")");
			} catch (e) {
				data.parentNode.removeChild(data);
				loader.innerHTML = "JSON parse Error";
				return;
			}
			data.parentNode.removeChild(data);
			var seed = function() {
				return "?" + (doSeed ? (Math.floor(Math.random() * (999999 - 100000 + 1)) + 100000) : "noseed");
			}
			var alldone = function(loadNext) {
				if (typeof loadNext != "boolean") loadNext = true;
				var loaded = true;
				for (var c in ress) {
					if (!ress.hasOwnProperty(c)) continue;
					if (!ress[c].loaded) {
						loaded = false;
						break;
					}
				}
				if (loaded) {
					if (police) window.clearInterval(police);
					window.setTimeout(delay_start.bind(delay_start), 500);
					return true;
				} else {
					if (loadNext) load();
					else return false;
				}
			};
			var delay_start = function() {
				loader.style.display = "none";
				loader.parentNode.removeChild(loader);
				start(ress, sections);
			};
			var updateProgress = function(size) {
				if (typeof size == "undefined") size = size_done;
				progress.style.width = "" + parseInt((size * 100 / size_total), 10) + "%";
				progress.title = "" + parseInt((size * 100 / size_total), 10) + "%";
			};
			var onload = function(r, e) {
				r.loaded = true;
				size_done += r.size;
				updateProgress();
				alldone(false);
			};
			var vidAddSrc = function (el, src, type) {
				var s = document.createElement("SOURCE");
				s.type = type;
				el.appendChild(s);
				s.src = src + seed();
			};
			var vidLoaded = function(res, e) {
				if (res.loaded) return;
				if (e.type == "loadmetadata") {
					res.el.load();
					return;
				}
				if(e.type == "canplay") {
					res.el.play();
				}
				/*
				var percent = null;
				if (res.el && res.el.buffered && (res.el.buffered.length > 0) && res.el.buffered.end && res.el.duration) {
					// FF4+, Chrome
					percent = res.el.buffered.end(0) / res.el.duration;
				} else {
					// Some browsers (e.g., FF3.6 and Safari 5) cannot calculate target.bufferered.end()
					// to be anything other than 0. If the byte count is available we use this instead.
					// Browsers that support the else if do not seem to have the bufferedBytes value and
					// should skip to there. Tested in Safari 5, Webkit head, FF3.6, Chrome 6, IE 7/8.
					if (res.el && (res.el.bytesTotal != undefined) && (res.el.bytesTotal > 0) && (res.el.bufferedBytes != "undefined"))
						percent = res.el.bufferedBytes / res.el.bytesTotal;
				}
				*/
				if ((!res.el.paused)/* && (percent !== null)*/) {
					res.el.pause();
					res.el.muted = false;
					res.loaded = true;
					size_done += res.vsizes[res.stype];
					updateProgress();
					if (!alldone(false)) window.setTimeout(load, 10);
					/*
					percent = Math.min(1, Math.max(0, percent));
					if (percent >= 0.10) {
						res.el.pause();
						res.el.muted = false;
						res.loaded = true;
						size_done += res.vsizes[res.stype];
						updateProgress();
						if (!alldone(false)) window.setTimeout(load, 10);
						res.el.currentTime = 0;
					} else {
						updateProgress(size_done + (percent * res.vsizes[res.stype]));
					}
					*/
				// ... do something with var percent here (e.g. update the progress bar)
				}
			};
			var load = function() {
				var c = "";
				for (c in ress) {
					if (!ress.hasOwnProperty(c)) continue;
					if (!ress[c].loaded) {
						c = parseInt(c, 10);
						switch (ress[c].type) {
							case "img":
								if (ress[c].el) continue;
								ress[c].el = document.createElement("IMG");
								ress[c].el.src = ress[c].url + seed();
								ress[c].el.onload = onload.bind(onload, ress[c]);
								break;
							case "video":
								if (police) {
									window.clearInterval(police);
									police = false;
								}
								if (ress[c].canPlay) {
									vidAddSrc(ress[c].el, ress[c].source, "video/" + ress[c].stype);
									if (ress[c].owner == "gla") ress[c].el.loop = false;
									else ress[c].el.loop = false;
									ress[c].el.preload = "auto";
									ress[c].el.controls = false;
									var f = vidLoaded.bind(ress[c], ress[c]);
									$(ress[c].el).on("progress", f);
									$(ress[c].el).on("loadedmetadata", f);
									$(ress[c].el).on("canplay", f);
								} else {
									ress[c].loaded = true;
									size_done += ress[c].vsizes[ress[c].stype];
									updateProgress();
									if (!alldone(false)) window.setTimeout(load, 10);
								}
								break;
						}
						break;
					}
				}
				if (typeof c == "string") return;
			}
			for (var c in ress) {
				if (!ress.hasOwnProperty(c)) continue;
				size_total += ress[c].size;
				switch (ress[c].type) {
					case "video":
						ress[c].el = document.createElement("VIDEO");
						ress[c].el.muted = true;
						document.body.appendChild(ress[c].el);
						var canPlay = !!ress[c].el.canPlayType && (ress[c].el.canPlayType("video/webm") != "");
						if (canPlay) {
							ress[c].source = ress[c].url + ".webm";
							ress[c].stype = "webm";
						} else {
							canPlay = !!ress[c].el.canPlayType && (ress[c].el.canPlayType("video/ogg") != "");
							if (canPlay) {
								ress[c].source = ress[c].url + ".ogv"
								ress[c].stype = "ogg";
							} else {
								canPlay = !!ress[c].el.canPlayType && (ress[c].el.canPlayType("video/mp4") != "");
								if (canPlay) {
									ress[c].source = ress[c].url + ".mp4";
									ress[c].stype = "mp4";
								}
								else break;
							}
						}
						if (canPlay) {
							ress[c].canPlay = true;
							size_total += ress[c].vsizes[ress[c].stype];
						}
						break;
				}
			}
			var police = window.setInterval(alldone, 100);
		})(function(ress, sections) {
			//инициализируем ресурсы
			var findRes = function(owner, name) {
				for (var c in ress) {
					if (!ress.hasOwnProperty(c)) continue;
					if ((ress[c].owner == owner) && (ress[c].name == name)) return ress[c];
				}
				return false;
			};
			var hh = 80;
			var fh = 45;
			var mh = 50;
			var bh = hh + fh;
			var th = bh + mh;
			var res = findRes("", "bg-body");
			if (res) document.body.style.backgroundImage = "url('" + res.url + "')";
			var section = null;
			var slides = [];
			var slideNames = ["street", "club", "vogue", "jazz", "hiphop", "gla"];
			var overslides = false;
			var lastslide = null;
			var header = {};
			header.main = $(".promo_benz .main .header-cont")[0];
			header.left = $(header.main).find(".left")[0];
			header.benzLogo = findRes("", "benz-logo");
			if (header.benzLogo) {
				var a = document.createElement("A");
				//a.href = "<?php echo $dirRoot?>";
				a.href = "http://www.mercedes-benz.ru/content/russia/mpc/mpc_russia_website/ru/home_mpc/passengercars.flash.html";
				a.target = "_blank";
				a.appendChild(header.benzLogo.el);
				header.benzLogo.el.className = "benz-logo";
				$(a).insertBefore($(header.left).find(".vline")[0]);
			}
			header.maximLogo = findRes("", "maxim-logo");
			header.maximLogo.el.className = "maxim-logo";
			header.left.appendChild(header.maximLogo.el);
			header.btnHome = findRes("", "btn-home");
			if (header.btnHome) {
				var el = document.createElement("DIV");
				el.className = "vsp";
				header.left.appendChild(el);
				header.btnHomeEl = document.createElement("DIV");
				header.btnHomeEl.className = "go-home";
				header.btnHomeEl.style.backgroundImage = "url(" + header.btnHome.el.src + ")";
				header.btnHomeEl.innerHTML = "назад на главную";
				header.btnHomeEl.style.display = "none";
				header.left.appendChild(header.btnHomeEl);
			}
			header.right = $(header.main).find(".right")[0];
			header.fbIcn = findRes("", "fb-icn");
			var a = document.createElement("A");
			a.href = "https://www.facebook.com/MercedesBenzRussia";
			a.className = "fb-icn";
			a.target = "_blank";
			a.appendChild(header.fbIcn.el);
			$(a).insertBefore($(header.right).find(".sn")[1])
			header.ytIcn = findRes("", "yt-icn");
			a = document.createElement("A");
			a.href = "http://www.youtube.com/mercedesbenzrussia";
			a.target = "_blank";
			a.className = "yt-icn";
			a.appendChild(header.ytIcn.el);
			$(a).insertBefore($(header.right).find(".sn")[2])
			var what_dance = $(".promo_benz .what-dance")[0];
			var footer = {};
			footer.main = $(".promo_benz .footer")[0];
			var elGla = null;
			var eClear = true;
			var eEasing = "easeOutExpo";
			var eJEnd = true;
			var eQueue = true;
			var pAniDur = 400;
			var pStopDur = 150;
			var flOver = false;
			var flSlide = null;
			var fStopMain = function(prem, jump) {
				if (this.videoRes && (this.main !== flSlide)) this.videoRes.el.style.opacity = "0";
				if (eClear && !eJEnd) $(prem.elem).animate(prem.props, {duration: pStopDur, easing: eEasing, queue: false});
			};
			var fStopGla = function(prem, jump) {
				if (eClear && !eJEnd) $(prem.elem).animate(prem.props, {duration: pStopDur, easing: eEasing, queue: false, complete: prem.opts.complete});
			};
			var fComplOver = function() {
				//if (this.videoRes && (this.main !== flSlide)) this.videoRes.el.style.opacity = "0";
			};
			var fComplOverGla = function() {
				this.style.display = "none";
			};
			var fComplOutGla = function() {
				this.style.display = "";
			};
			var fSectionChange = function() {
				if (!this.section) return;
				if (this === section) return;
				var ord = -1;
				$(this.section).stop(true, true);
				if (section && section.section) {
					$(section.section).stop(true, true);
					if (section.sectionState) fPlayerHide(true);
					else {
						if (section.videoBgRes) section.videoBgRes.el.pause();
					}
					ord = slideNames.indexOf(section.name);
				}
				var oLeft = -ww;//animate current to
				var nLeft = ww;//set next to before animate
				switch (this.name) {
					case "street":
						oLeft = ww;
						nLeft = -ww;
						break;
					case "club":
						if (ord > 1) {
							oLeft = ww;
							nLeft = -ww;
						}
						break;
					case "vogue":
						if (ord > 2) {
							oLeft = ww;
							nLeft = -ww;
						}
						break;
					case "jazz":
						if (ord > 3) {
							oLeft = ww;
							nLeft = -ww;
						}
						break;
					case "hiphop":
						if (ord > 4) {
							oLeft = ww;
							nLeft = -ww;
						}
						break;
					case "gla":
						if (ord > 5) {
							oLeft = ww;
							nLeft = -ww;
						}
						break;
				}
				$(this.section).css("left", "" + nLeft + "px");
				$(this.section).css("width", "" + ww + "px");
				$(this.section).css("display", "block");
				$(this.section).css("opacity", 1);
				this.menuBtn.className = this.menuBtn.className + " act";
				fSectionVideoUpdate(this, true);
				$(this.section).animate({left: 0}, pAniDur, (function(){
					if (this.videoBgRes) this.videoBgRes.el.play();
				}).bind(this));
				if (section && section.section) {
					section.menuBtn.className = section.menuBtn.className.replace(" act", "");
					$(section.menuHov).animate({opacity: 0}, {duration: pAniDur, easing: eEasing, queue: eQueue});
					$(section.section).animate({left: ("" + oLeft + "px")}, pAniDur, (function() {
						$(this.section).css("opacity", 0);
						$(this.section).css("display", "none");
					}).bind(section));
				}
				section = this;
				if (typeof _gaq != "undefined") _gaq.push(["_trackPageview", "/" + section.name]);
			};
			var fSectionClose = function() {
				if (!section) return;
				if (section.sectionState) fPlayerHide(true);
				else {
					if (section.videoBgRes) section.videoBgRes.el.pause();
				}
				var left = 0;
				var width = 20;
				switch (section.name) {
					case "street":
						break;
					case "club":
						left = 14;
						break;
					case "vogue":
						left = 28;
						break;
					case "jazz":
						left = 42;
						break;
					case "hiphop":
						left = 56;
						break;
					case "gla":
						left = 70;
						width = 30;
						break;
				}
				$(section.menuBtn).removeClass("act");
				$(".menu-btn .hover").css("opacity", 0);
				$(".menu-btn").css("opacity", 0);
				$(".menu-btn").css("display", "none");
				$(section.section).animate({"left": ("" + left + "px"), "width": ("" + width + "0%"), opacity: 0}, pAniDur, (function(){
					$(this.section).css("display", "none");
					$(this.section).css("opacity", "1");
				}).bind(section));
				$(".slide").animate({opacity: 1}, pAniDur);
				//fMenuOver.apply(this, [true]);
				section = false;
				if (typeof _gaq != "undefined") _gaq.push(["_trackPageview", "/"]);
				$(header.btnHomeEl).animate({opacity: 0, "margin-left": "100px"}, pAniDur);
			};
			var fSectionOpen = function() {
				if (!this.section) return;
				if (this === section) return;
				if (this.videoRes) this.videoRes.el.pause();
				var left = 0;
				var width = 20;
				switch (this.name) {
					case "street":
						break;
					case "club":
						left = 14;
						break;
					case "vogue":
						left = 28;
						break;
					case "jazz":
						left = 42;
						break;
					case "hiphop":
						left = 56;
						break;
					case "gla":
						left = 70;
						width = 30;
						break;
				}
				$(this.section).css("left", "" + parseInt(left * (ww / 100), 10) + "px");
				$(this.section).css("width", "" + parseInt(width * (ww / 100), 10) + "px");
				$(this.section).css("display", "block");
				$(this.section).css("opacity", 0);
				fMenuOver.apply(this, [true]);
				$(".menu-btn").css("opacity", 1);
				$(".menu-btn").css("display", "block");
				$(".slide").animate({opacity: 0}, pAniDur);
				fSectionVideoUpdate(this, true);
				$(this.section).animate({left: 0, width: "100%", opacity: 1}, pAniDur, (function(){
					if (this.videoBgRes) this.videoBgRes.el.play();
				}).bind(this));
				this.menuBtn.className = this.menuBtn.className + " act";
				section = this;
				if (typeof _gaq != "undefined") _gaq.push(["_trackPageview", "/" + section.name]);
				header.btnHomeEl.style.opacity = "0";
				header.btnHomeEl.style.display = "inline-block";
				header.btnHomeEl.style.marginLeft = "100px";
				$(header.btnHomeEl).animate({opacity: 1, "margin-left": 0}, pAniDur);
			};
			var fSectionVideoUpdate = function(s, add) {
				if (!s.videoBgRes) return;
				if (typeof add != "boolean") add = false;
				if (!add && (s.videoBgRes.el.parentNode === document.body)) return;
				var w, h;
				var vw = s.videoBgRes.el.videoWidth;
				var vh = s.videoBgRes.el.videoHeight;
				if (s.name != "gla") {
					if (add && (s.videoBgRes.el.parentNode === document.body)) $(s.videoBgRes.el).insertBefore($(s.section).find(".left")[0]);
					var l = "";
					var t = "-24px";
					w = Math.round(0.60 * ww);
					h = Math.round(vh / (vw / w));
					if ((h - 48) < (wh - th)) {
						h = (wh - th) + 48;
						w = Math.round((vw / vh) * h);
						l = "-" + Math.round((w - Math.round(ww * 0.60)) / 2) + "px";
					} else {
						t = "-" + Math.round((h - (wh - th) + 48) / 2) + "px";
					}
					s.videoBgRes.el.style.top = t;
					s.videoBgRes.el.style.left = l;
				} else {
					if (add && (s.videoBgRes.el.parentNode === document.body)) $(s.videoBgRes.el).insertBefore(s.info);
					var l = false;
					var t = "25px";
					var el = $(".promo_benz")[0];
					if ($(el).hasClass("flat1280")) pw = 0.65;
					else pw = 0.72;
					w = ww * pw + (pw == 0.72 ? 0 : 40);
					h = vh / (vw / w);
					if (h > (wh - th - 50)) {
						h = (wh - th - 50);
						var w1 = (vw / vh) * h;
						l = "" + Math.round((w - w1) / 2) + "px";
						w = w1;
					}
					if (l) s.videoBgRes.el.style.left = l;
					else s.videoBgRes.el.style.left = "";
					s.videoBgRes.el.style.top = t;
				}
				s.videoBgRes.el.width = w;
				s.videoBgRes.el.height = h;
			};
			var fSlideCoverUpdate = function(s) {
				if (s.cover.src == "undefined") return;
				var nwid = 20;
				if (s.name === "gla") {
					nwid = 30;
					s.btnVideo.style.width = "" + Math.round(ww * 0.30) + "px";
					//s.danceImg.el.style.left = "" + Math.round(ww * 0.30 - ((wh - th) * 0.80 * s.danceImg.el.naturalWidth / s.danceImg.el.naturalHeight) + 1) + "px";
				}
				var wpw = Math.round(nwid * (ww / 100));
				var wph = wh - bh;
				var vw = s.cover.naturalWidth;
				var vh = s.cover.naturalHeight;
				var wp = vw / wpw;
				var nvw = wpw;
				var nvh = Math.round(vh / wp);
				if (nvh < wph) {
					var r = false;
					var hp = vh / wph;
					var nvw = vw / hp;
					var nvh = wph;
					s.cover.style.right = "-" + Math.round((nvw - wpw)/ 2) + "px";
				} else s.cover.style.right = "0";
				s.cover.width = nvw;
				s.cover.height = nvh;
			};
			var fSlideVideoUpdate = function(s) {
				if (!s.videoRes) return;
				var nwid = 20;
				if (s.name === "gla") nwid = 30;
				var wpw = Math.round(nwid * (ww / 100));
				var wph = wh - bh;
				var vw = s.videoRes.el.videoWidth;
				var vh = s.videoRes.el.videoHeight;
				var wp = vw / wpw;
				var nvw = wpw;
				var nvh = Math.round(vh / wp);
				if (nvh < wph) {
					var r = false;
					var hp = vh / wph;
					var nvw = vw / hp;
					var nvh = wph;
					s.videoRes.el.style.right = "-" + Math.round((nvw - wpw)/ 2) + "px";
				} else s.videoRes.el.style.right = "0";
				s.videoRes.el.width = nvw;
				s.videoRes.el.height = nvh;
			};
			var fLayoutUpdate = function() {
				if (ww < 1305) {
					$(".promo_benz").addClass("fl1305");
					$(".promo_benz").removeClass("font83");
					$(".promo_benz").removeClass("font84");
				} else {
					$(".promo_benz").removeClass("fl1305");
					if ((ww >= 1550) && (wh >= 725)) {
						$(".promo_benz").removeClass("font83");
						$(".promo_benz").addClass("font84");
					} else {
						if (wh >= 690) {
							$(".promo_benz").addClass("font83");
							$(".promo_benz").removeClass("font84");
						} else {
							$(".promo_benz").removeClass("font83");
							$(".promo_benz").removeClass("font84");
						}
					}
				}
				if (((ww < 1280) && (wh <= 720)) || (((wh - bh) / ww) < (590 / 1280))) {
					$(".promo_benz").addClass("flat1280");
					if (((wh - bh) / ww) < (590 / 1280)) {
						//$(".promo_benz").removeClass("flat1280");
						$(".promo_benz").addClass("flat1200");
					} else {
						$(".promo_benz").removeClass("flat1200");
						//$(".promo_benz").addClass("flat1280");
					}
				} else {
					$(".promo_benz").removeClass("flat1280");
					$(".promo_benz").removeClass("flat1200");
				}
			};
			$(header.btnHomeEl).on("click", fSectionClose);
			var ww = $(window).width();
			var wh = $(window).height();
			fLayoutUpdate();
			var slide;
			for (var c in slideNames) {
				if (!slideNames.hasOwnProperty(c)) continue;
				slide = {};
				slide.name = slideNames[c];
				slide.main = $(".promo_benz .main .slide." + slide.name)[0];
				slide.tmStop = false;
				slide.fOverEnd = fComplOver.bind(slide);
				slide.fOverStop = fStopMain.bind(slide);
				slide.fSectChange = fSectionChange.bind(slide);
				slide.fSectOpen = fSectionOpen.bind(slide);
				slide.cover = $(slide.main).find(".cover")[0];
				slide.coverImg = findRes(slide.name, "bg-sm");
				if (slide.coverImg) {
					$(slide.coverImg.el).insertBefore(slide.cover);
					slide.cover.parentNode.removeChild(slide.cover);
					slide.cover = slide.coverImg.el;
					slide.cover.className = "cover";
				}
				slide.shad = $(".promo_benz .main .slide." + slide.name + " .shad");
				if (slide.shad.length) slide.shad = slide.shad[0];
				else slide.shad = false;
				if (slide.shad) $(slide.shad).on("click", slide.fSectOpen);
				slide.btn = $(".promo_benz .main .slide." + slide.name + " .btn")[0];
				slide.btnTit = $(".promo_benz .main .slide." + slide.name + " .btn .title")[0];
				slide.btnHov = $(".promo_benz .main .slide." + slide.name + " .btn .hover")[0];
				if (slide.btnTit) $(slide.btnTit).on("click", slide.fSectOpen);
				slide.menuBtn = $(".promo_benz .main .menu-btn." + slide.name)[0];
				slide.menuHov = $(".promo_benz .main .menu-btn." + slide.name + " .hover")[0];
				slide.menuTit = $(".promo_benz .main .menu-btn." + slide.name + " .title")[0];
				if (slide.menuTit) $(slide.menuTit).on("click", slide.fSectChange);
				slide.videoRes = findRes(slide.name, "video-slide");
				slide.section = $(".promo_benz .main .sections .section." + slide.name)[0];
				slide.sectionState = 0;
				//открытый слайд
				slide.left = $(slide.section).find(".left");
				if (slide.left.length) slide.left = slide.left[0];
				else slide.left = false;
				slide.right = $(slide.section).find(".right");
				if (slide.right.length) slide.right = slide.right[0];
				else slide.right = false;
				slide.info = $(slide.section).find(".info");
				if (slide.info.length) slide.info = slide.info[0];
				else slide.info = false;
				slide.title = $(slide.info).find(".title");
				if (slide.title.length) slide.title = slide.title[0];
				else slide.title = false;
				slide.subtitle = $(slide.info).find(".subtitle");
				if (slide.subtitle.length) slide.subtitle = slide.subtitle[0];
				else slide.subtitle = false;
				slide.text = $(slide.info).find(".text");
				if (slide.text.length) slide.text = slide.text[0];
				else slide.text = false;
				slide.sectionBtnCompl = $(".promo_benz .main .sections .section." + slide.name + " .btn-compl");
				if (slide.sectionBtnCompl && slide.sectionBtnCompl.length) slide.sectionBtnCompl = slide.sectionBtnCompl[0];
				else slide.sectionBtnCompl = false;
				if (slide.sectionBtnCompl) {
					res = findRes("", "btn-compl");
					if (res) slide.sectionBtnCompl.style.backgroundImage = "url('" + res.url + "')";
					else slide.sectionBtnCompl.parentNode.removeChild(slide.sectionBtnCompl);
				}
				slide.sectionBtnModel = $(".promo_benz .main .sections .section." + slide.name + " a.btn-model");
				if (slide.sectionBtnModel && slide.sectionBtnModel.length) slide.sectionBtnModel = slide.sectionBtnModel[0];
				else slide.sectionBtnModel = false;
				if (slide.sectionBtnModel) {
					res = findRes("", "btn-model");
					if (res) slide.sectionBtnModel.style.backgroundImage = "url('" + res.url + "')";
					else slide.sectionBtnModel.parentNode.removeChild(slide.sectionBtnModel);
				}
				slide.videoBgRes = findRes(slide.name, "video");
				if (slide.videoBgRes) {
					slide.videoBgRes.el.loop = true;
					slide.videoBgRes.el.volume = 0.1;
					if (slide.name == "gla") {
						$(slide.videoBgRes.el).on("mouseenter", function(){
							this.controls = true;
						})
						$(slide.videoBgRes.el).on("mouseleave", function(){
							this.controls = false;
						})
					} else {
						//temp
						$(slide.videoBgRes.el).on("mouseenter", function(){
							this.controls = true;
						})
						$(slide.videoBgRes.el).on("mouseleave", function(){
							this.controls = false;
						})
						//
						try{slide.videoBgRes.el.currentTime = 3;}catch(e){};
					}
				}
				slide.btnVideoImg = findRes(slide.name, "btn-video");
				// -end
				switch(slide.name) {
					case "street":
						break;
					case "club":
						break;
					case "vogue":
						break;
					case "jazz":
						break;
					case "hiphop":
						break;
					case "gla":
						elGla = slide.main;
						slide.bgRes = findRes(slide.name, "bg");
						if (slide.bgRes)
							slide.section.style.backgroundImage = "url('" + slide.bgRes.el.src + "')";
						slide.btnVideo = $(slide.main).find(".btn-video")[0];
						if (slide.btnVideoImg) {
							slide.btnVideo.src = slide.btnVideoImg.el.src;
							$(slide.btnVideo).on("click", slide.fSectOpen);
						}
						break;
				}
				slides.push(slide);
				fSlideCoverUpdate(slide)
			}
			var fOver = function() {
				if (flOver && (flSlide === this)) return;
				flOver = true;
				flSlide = this;
				var nleft = 0;
				var nwid = 0;
				var isgla, params, phover, fhover, op;
				if (eJEnd) {
					for (var c in slides) {
						if (!slides.hasOwnProperty(c)) continue;
						$(slides[c].main).stop(eClear, eJEnd);
						$(slides[c].shad).stop(eClear, eJEnd);
						$(slides[c].btnHov).stop(eClear, eJEnd);
						if (slides[c].videoRes) $(slides[c].videoRes.el).stop(eClear, eJEnd);
					}
				}
				for (var c in slides) {
					if (!slides.hasOwnProperty(c)) continue;
					params = {};
					isgla = (slides[c].main === elGla);
					if (!isgla) {
						if (this == slides[c].main) nwid = 20;
						else nwid = 14;
					} else {
						if (this == slides[c].main) nwid = 30;
						else nwid = 24;
					}
					var nval = "" + parseInt(nleft * (ww / 100), 10) + "px";
					if (slides[c].main.style.left != nval) params.left = nval;
					nval = "" + parseInt((100 - nwid - nleft) * (ww / 100), 10) + "px";
					if (slides[c].main.style.right != nval) params.right = nval;
					nleft += nwid;
					fhover = false;
					if (this == slides[c].main) {
						op = 1;
						phover = {opacity: 0.0};
						if (isgla) fhover = fComplOverGla;
					} else {
						op = 0;
						phover = {opacity: 0.5};
						if (isgla) {
							fhover = fComplOutGla;
							slides[c].shad.style.display = "";
						}
					}
					if ((typeof params.left != "undefined") || (typeof params.right != "undefined")) {
						$(slides[c].main).animate(params, {duration: pAniDur, easing: eEasing, queue: eQueue, complete: slides[c].fOverEnd, fail: slides[c].fOverStop});
					}
					$(slides[c].shad).animate(phover, {duration: pAniDur, easing: eEasing, queue: false, complete: fhover, fail: fStopGla});
					$(slides[c].btnHov).animate({opacity: op}, {duration: pAniDur, easing: eEasing, queue: eQueue, fail: fStopMain});
					if (!isgla) {
						if (slides[c].videoRes) {
							if (this == slides[c].main) {
								if (slides[c].videoRes.el.parentNode === document.body) {
									$(slides[c].videoRes.el).insertBefore(slides[c].btn);
									fSlideVideoUpdate(slides[c]);
								}
								slides[c].videoRes.el.style.opacity = "1";
								slides[c].videoRes.el.play();
								slides[c].tmStop = window.setTimeout((function(){
									this.tmStop = false;
									$(this.videoRes.el).animate({opacity: "0"}, 1000);
								}).bind(slides[c]), 2000);
							} else {
								if (slides[c].tmStop) window.clearTimeout(slides[c].tmStop);
								slides[c].videoRes.el.pause();
								try{slides[c].videoRes.el.currentTime = 0;}catch(e){};
								$(slides[c].videoRes.el).animate({opacity: "0"}, pAniDur);
							}
						}
					}
				}
			};
			var fOut = function() {
				if (!flOver) return;
				flOver = false;
				var nleft = 0;
				var nwid = 0;
				var props, isgla;
				if (eJEnd) {
					for (var c in slides) {
						if (!slides.hasOwnProperty(c)) continue;
						$(slides[c].main).stop(eClear, eJEnd);
						$(slides[c].shad).stop(eClear, eJEnd);
						$(slides[c].btnHov).stop(eClear, eJEnd);
					}
				}
				for (var c in slides) {
					if (!slides.hasOwnProperty(c)) continue;
					isgla = (slides[c].main === elGla);
					var opts = {duration: pAniDur, easing: eEasing, queue: eQueue, fail: fStopMain};
					if (isgla) nwid = 25;
					else nwid = 15;
					props = {left: ("" + parseInt(nleft * (ww / 100), 10) + "px"), right: ("" + parseInt((100 - nwid - nleft) * (ww / 100), 10) + "px")};
					nleft += nwid;
					$(slides[c].main).animate(props, opts);
					$(slides[c].shad).animate({opacity: 0}, opts);
					$(slides[c].btnHov).animate({opacity: 0}, opts);
					if (!isgla) {
						if (slides[c].videoRes) {
							slides[c].videoRes.el.pause();
							try{slides[c].videoRes.el.currentTime = 0;}catch(e){};
							slides[c].videoRes.el.style.opacity = "0";
						}
					}
				}
			};
			var menuOutTm = false;
			var fMenuOver = function() {
				if (menuOutTm) {
					window.clearTimeout(menuOutTm);
					menuOutTm = false;
				}
				if (!section || (this.section !== section.section))
					$(this.menuHov).animate({opacity: 1}, {duration: pAniDur, easing: eEasing, queue: eQueue});
				var nleft = 0;
				var nwid = 0;
				var isgla, params;
				for (var c in slides) {
					if (!slides.hasOwnProperty(c)) continue;
					$(slides[c].menuBtn).stop(eClear, eJEnd);
					$(slides[c].menuHov).stop(eClear, eJEnd);
				}
				for (var c in slides) {
					if (!slides.hasOwnProperty(c)) continue;
					params = {};
					isgla = (slides[c].main === elGla);
					if (!isgla) {
						if (this.main == slides[c].main) nwid = 20;
						else nwid = 14;
					} else {
						if (this.main == slides[c].main) nwid = 30;
						else nwid = 24;
					}
					var nval = "" + parseInt(nleft * (ww / 100), 10) + "px";
					if (slides[c].menuBtn.style.left != nval) params.left = nval;
					nval = "" + parseInt((100 - nwid - nleft) * (ww / 100), 10) + "px";
					if (slides[c].menuBtn.style.right != nval) params.right = nval;
					nleft += nwid;
					if ((typeof params.left != "undefined") || (typeof params.right != "undefined"))
						$(slides[c].menuBtn).animate(params, {duration: pAniDur, easing: eEasing, queue: eQueue});
				}
			};
			var fMenuOut = function(instant, ftm) {
				if (typeof instant != "boolean") instant = false;
				if (typeof ftm != "boolean") ftm = false; //from timeout
				if (!menuOutTm) {
					if (!section || ((this !== window) && (this.section !== section.section)))
						$(this.menuHov).animate({opacity: 0}, {duration: pAniDur, easing: eEasing, queue: eQueue});
					menuOutTm = window.setTimeout(fMenuOut.bind(this, false, true), 200);
					return;
				}
				if (!ftm) {
					if (!section || ((this !== window) && (this.section !== section.section)))
						$(this.menuHov).animate({opacity: 0}, {duration: pAniDur, easing: eEasing, queue: eQueue});
				}
				menuOutTm = false;
				var nleft = 0;
				var nwid = 0;
				var props;
				for (var c in slides) {
					if (!slides.hasOwnProperty(c)) continue;
					$(slides[c].menuBtn).stop(eClear, eJEnd);
					$(slides[c].menuHov).stop(eClear, eJEnd);
				}
				for (var c in slides) {
					if (!slides.hasOwnProperty(c)) continue;
					if (slides[c].main === elGla) nwid = 25;
					else nwid = 15;
					if (instant) {
						slides[c].menuBtn.style.left = "" + parseInt(nleft * (ww / 100), 10) + "px";
						slides[c].menuBtn.style.right = "" + parseInt((100 - nwid - nleft) * (ww / 100), 10) + "px";
					} else {
						props = {left: ("" + parseInt(nleft * (ww / 100), 10) + "px"), right: ("" + parseInt((100 - nwid - nleft) * (ww / 100), 10) + "px")};
						$(slides[c].menuBtn).animate(props, {duration: pAniDur, easing: eEasing, queue: eQueue});
					}
					nleft += nwid;
				}
			};
			var fRes = function() {
				ww = $(window).width();
				wh = $(window).height();
				fLayoutUpdate();
				flOver = true;
				fOut();
				fMenuOut(true);
				for (var c in slides) {
					if (!slides.hasOwnProperty(c)) continue;
					fSlideCoverUpdate(slides[c]);
					fSlideVideoUpdate(slides[c]);
					fSectionVideoUpdate(slides[c]);
				}
				if (section) {
					$(section.section).css("width", ("" + ww + "px"));
					f3dUpdate();
					fPlayExteriorShow();
					fIntUpdate();
				}
			};
			//sections.style.display = "block";
			$(window).on("resize", fRes);
			$(header.main).mouseenter(fOut);
			$(footer.main).mouseenter(fOut);
			for (var c in slides) {
				if (!slides.hasOwnProperty(c)) continue;
				$(slides[c].main).mouseenter(fOver);
				$(slides[c].menuBtn).mouseenter(fMenuOver.bind(slides[c]));
				$(slides[c].menuBtn).mouseleave(fMenuOut.bind(slides[c]));
			}
			header.main.parentNode.style.display = "";
			var hide_what = function() {
				$(what_dance).animate({opacity: 0}, 1000, function(){
					this.style.display = "none";
				});
			};
			window.setTimeout(hide_what, 6000);
			// 3D модель
			var f3dUpdate = function(onresize) {
				if (player.parentNode == sections) return;
				if (typeof onresize == "undefined") onresize = true;
				if (onresize) {
					play3dWd = $(play3d).width();
					play3dHt = $(play3d).height();
					play3dUnit = play3dWd / playFrames.length / 2;
				}
				var m = parseInt(((wh - th) - (ww / playFrames[0].el.naturalWidth) * playFrames[0].el.naturalHeight) / 2, 10);
				playImages.style.top = "" + (m < 0 ? "-" : "") + (m < 0 ? (m * -1) : m) + "px";
				if (playInteriorImg) {
					m = parseInt(((wh - th) - (ww / playInteriorImg.naturalWidth) * playInteriorImg.naturalHeight) / 2, 10);
					playInteriorImg.style.top = "" + (m < 0 ? "-" : "") + (m < 0 ? (m * -1) : m) + "px";
				}
			};
			var fIntUpdate = function() {
				var p = $(play3d).width()/playInteriorImg.naturalWidth;
				for (var c in playDots.interior) {
					if (!playDots.interior.hasOwnProperty(c)) continue;
					var dot = playDots.interior[c];
					var l = parseInt((dot.left * p), 10);
					var t = parseInt((dot.top * p), 10) + parseInt(playInteriorImg.style.top, 10);
					dot.el.style.left = "" + l + "px";
					dot.el.style.top = "" + t + "px";
				}
			};
			var playState = 0;
			var playFrame = 0;
			var playFrameBnd = 0;
			var playFrameRel = 0;
			var playFrameRelPrev = 0;
			var playFrames = [];
			var playInt = false;
			var playTot = 0;
			var play3dDir = 0;
			var play3dHt = 0;
			var play3dWd = 0;
			var play3dUnit = 0;
			var player = document.getElementById("player");
			var play3d = $(player).find("._3d")[0];
			var playImages = $(play3d).find(".frames")[0];
			res = findRes("3d", "play");
			var play3dCtrl = $(play3d).find(".ctrl")[0];
			var play3dCtrlBL = $(play3dCtrl).find(".btn.lt")[0];
			if (res) play3dCtrlBL.style.backgroundImage = "url('" + res.el.src + "')";
			var play3dCtrlPrompt = $(play3dCtrl).find(".prompt")[0];
			var play3dCtrlBR = $(play3dCtrl).find(".btn.rt")[0];
			if (res) play3dCtrlBR.style.backgroundImage = "url('" + res.el.src + "')";
			var playBtnInt = $(play3d).find(".btn-int")[0];
			var playBtnModel = $(player).find(".btn-model")[0];
			if (playBtnModel) {
				res = findRes("", "btn-model");
				if (res) playBtnModel.style.backgroundImage = "url('" + res.url + "')";
				else playBtnModel.parentNode.removeChild(playBtnModel);
			}
			var frame;
			for (var c = 0; c < 50; c++) {
				frame = findRes("3d", ("fr" + c));
				if (!frame) break;
				playFrames.push(frame);
				frame.el.unselectable = "on";
				if (!c) frame.el.style.opacity = "1";
				else frame.el.style.opacity = "0";
				playImages.appendChild(frame.el);
				playTot++;
			}
			var playInterior = $(player).find(".interior")[0];
			var playInteriorImg = false;
			var playInteriorBtnExt = $(playInterior).find(".btn-ext")[0];
			res = findRes("3d", "interior");
			if (res) {
				playInteriorImg = res.el;
				$(playInteriorImg).insertBefore(playInteriorBtnExt);
			}
			var playInfo = $(player).find(".info")[0];
			var playBtnRet = $(player).find(".btn-video")[0];
			var fPlay = function() {
				fPlay3dFrame((playState == 1) ? (playFrame - 1) : (playFrame + 1));
			};
			var fPlayDot = function() {
				if (!this.baloon) {
					fPlayDotBaloon(this);
					if (typeof this.bleft == "undefined") this.bleft = this.left;
					if (typeof this.btop == "undefined") this.btop = this.top - 110;
				}
				var p = $(play3d).width()/playInteriorImg.naturalWidth;
				if (typeof this.type == "undefined") {
					var l = parseInt((this.bleft * p), 10);
					var t = parseInt((this.btop * p), 10) + parseInt(playInteriorImg.style.top, 10);
				} else {
					var l = parseInt(((this.data[0].left - this.bleft) * p), 10);
					var t = parseInt(((this.data[0].top - this.btop) * p), 10);
				}
				this.baloon.style.left = "" + l + "px";
				this.baloon.style.top = "" + t + "px";
				this.baloon.style.display = "block";
			};
			var fPlayDotBaloon = function(dot) {
				dot.baloon = document.createElement("DIV");
				dot.baloon.className = "dot-baloon";
				var el = document.createElement("DIV");
				el.className = "btit";
				el.innerHTML = dot.title;
				dot.baloon.appendChild(el);
				el = document.createElement("DIV");
				el.className = "binfo";
				el.innerHTML = dot.info;
				dot.baloon.appendChild(el);
				dot.baloon.style.display = "none";
				if (typeof dot.type == "undefined")
					playInterior.appendChild(dot.baloon);
				else
					playImages.appendChild(dot.baloon)
			};
			var fPlayDotStop = function() {
				this.baloon.style.display = "none";
			};
			var fPlayerShow = function(s) {
				var firstShow = false;
				if (player.parentNode !== s.section) {
					$(player).insertBefore(s.section.childNodes[0]);
					firstShow = true;
				}
				if (this.videoBgRes) {
					this.videoBgRes.el.pause();
					this.videoBgRes.el.style.display = "none";
				}
				if (section.btnVideoImg) playBtnRet.style.backgroundImage = "url('" + section.btnVideoImg.el.src + "')";
				if (section.left) section.left.style.display = "none";
				if (section.right) section.right.style.display = "none";
				if (section.info) {
					$(section.info).animate({opacity: 0}, 300, (function(s){
						this.style.display = "none";
						this.style.opacity = "1";
						//if (s.title) playInfo.appendChild(s.title);
						//if (s.subtitle) playInfo.appendChild(s.subtitle);
						//play3dWd = $(play3d).width();
						//play3dHt = $(play3d).height();
						//play3dUnit = play3dWd / playFrames.length / 2;
					}).bind(section.info, section));
				}
				player.style.opacity = "0";
				player.style.display = "block";
				if (firstShow) {
					f3dUpdate();
					fPlayExteriorShow();
					fIntUpdate();
				}
				$(player).animate({opacity: 1}, 300);
				player.style.display = "block";
				section.sectionState = 1;
				if (typeof _gaq != "undefined") _gaq.push(["_trackPageview", "/3d"]);
			};
			var fPlayerHide = function(ontoggle) {
				if (typeof ontoggle != "boolean") ontoggle = false;
				$(player).animate({opacity: 0}, 300, function(){
					this.style.display = "none";
					this.style.opacity = "1";
				});
				if (section) {
					fPlayInteriorHide();
					if (section.left) section.left.style.display = "block";
					if (section.right) section.right.style.display = "block";
					if (section.info) {
						//if (section.title) $(section.title).insertBefore(section.text);
						//if (section.subtitle) $(section.subtitle).insertBefore(section.text);
						section.info.style.opacity = "0";
						section.info.style.display = "block";
						$(section.info).animate({opacity: 1}, 300);
					}
				 	if(section.videoBgRes) {
						section.videoBgRes.el.style.display = "block";
						if (!ontoggle) section.videoBgRes.el.play();
					}
				}
				section.sectionState = 0;
			};
			var fPlayExteriorHide = function() {
				$(play3d).find(".sys-baloon").css("display", "none");
				$(play3d).find(".btn-info").css("display", "none");
			};
			var fPlayExteriorShow = function() {
				for (var c in playDots.sys) {
					if (!playDots.sys.hasOwnProperty(c)) continue;
					c = parseInt(c, 10);
					if (isNaN(c)) continue;
					if ((playFrame >= playDots.sys[c].fr1) && (playFrame <= playDots.sys[c].fr2)) {
						if (!playDots.sys[c].baloon) {
							playDots.sys[c].baloon = document.createElement("DIV");
							playDots.sys[c].baloon.className = "sys-baloon";
							var el = document.createElement("DIV");
							el.className = "sys-tit";
							el.innerHTML = playDots.sys[c].title;
							playDots.sys[c].baloon.appendChild(el);
							el = document.createElement("DIV");
							el.className = "sys-info";
							el.innerHTML = playDots.sys[c].info;
							playDots.sys[c].baloon.appendChild(el);
							play3d.appendChild(playDots.sys[c].baloon);
						} else {
							playDots.sys[c].baloon.style.display = "block";
						}
						for (var c1 in playDots.exterior) {
							if (!playDots.exterior.hasOwnProperty(c1)) continue;
							var c1 = parseInt(c1, 10);
							if (isNaN(c1)) continue;
							if (playDots.exterior[c1].sys != c) continue;
							var f = playDots.exterior[c1].frame = playFrame - playDots.sys[c].fr1;
							var dot = playDots.exterior[c1];
							var p = $(play3d).width()/playImages.childNodes[0].naturalWidth;
							var l = parseInt((dot.data[f].left * p), 10);
							var t = parseInt((dot.data[f].top * p), 10) + parseInt(playImages.style.top, 10);
							dot.el.style.left = "" + l + "px";
							dot.el.style.top = "" + t + "px";
							dot.el.style.display = "block";
						}
					}
				}
			};
			var fPlayInteriorHide = function() {
				if (playState != 1) return;
				playInterior.style.opacity = "0";
				playInterior.style.display = "block";
				$(playInterior).animate({opacity: 0}, 300, function(){
					this.style.display = "none";
				});
				playState = 0;
				return false;
			};
			var fPlayInteriorShow = function() {
				if (playState == 1) return;
				playInterior.style.opacity = "0";
				playInterior.style.display = "block";
				$(playInterior).animate({opacity: 1}, 300);
				playState = 1;
				if (typeof _gaq != "undefined") _gaq.push(["_trackPageview", "/interior"]);
				return false;
			};
			var fPlay3dFrame = function(i) {
				if (isNaN(i)) return;
				i = i % playTot;
				if (i < 0) i = playTot + i;
				if (i > (playTot - 1)) i = i - (playTot - 1);
				playFrames[playFrame].el.style.opacity = "0";
				playFrames[i].el.style.opacity = "1";
				playFrame = i;
			};
			for (var c in slides) {
				if (!slides.hasOwnProperty(c)) continue;
				if (!slides[c].sectionBtnCompl) continue;
				slides[c].fPlayerShow = fPlayerShow.bind(slides[c], slides[c]);
				$(slides[c].sectionBtnCompl).on("click", slides[c].fPlayerShow);
			}
			$(play3d).on("mousedown", function(e){
				if ((playState == 1) || (playState == 2)) return;
				playState = 3;
				playFrameRel = parseInt(e.clientX / play3dUnit);
				playFrameBnd = playFrame;
				fPlayExteriorHide();
				return false;
			});
			$(play3d).on("mousemove", function(e){
				if (playState != 3) return;
				var frel = parseInt(e.clientX / play3dUnit);
				if (playFrameRelPrev == frel) return;
				playFrameRelPrev = frel;
				fPlay3dFrame((playFrameBnd - (playFrameRel - frel)));
			});
			$(play3d).on("mouseup", function(){
				if (playState != 3) return;
				playState = 0;
				fPlayExteriorShow();
			});
			$(play3d).on("mouseleave", function(){
				if (playState != 3) return;
				playState = 0;
				fPlayExteriorShow();
			});
			$(play3dCtrlBL).on("mousedown", function(e){
				if (playState) return;
				playState = 1;
				fPlayExteriorHide();
				fPlay();
				playInt = window.setInterval(fPlay, 100);
				return false;
			});
			$(play3dCtrlBL).on("mouseup", function(){
				if (playState != 1) return;
				playState = 0;
				if (playInt) window.clearInterval(playInt);
				playInt = false;
				fPlayExteriorShow();
			});
			$(play3dCtrlBL).on("mouseleave", function(){
				if (playState != 1) return;
				playState = 0;
				if (playInt) window.clearInterval(playInt);
				playInt = false;
				fPlayExteriorShow();
			});
			$(play3dCtrlBR).on("mousedown", function(e){
				if (playState) return;
				playState = 2;
				fPlayExteriorHide();
				fPlay();
				playInt = window.setInterval(fPlay, 100);
				return false;
			});
			$(play3dCtrlBR).on("mouseup", function(){
				if (playState != 2) return;
				playState = 0;
				if (playInt) window.clearInterval(playInt);
				playInt = false;
				fPlayExteriorShow();
			});
			$(play3dCtrlBR).on("mouseleave", function(){
				if (playState != 2) return;
				playState = 0;
				if (playInt) window.clearInterval(playInt);
				playInt = false;
				fPlayExteriorShow();
			});
			$(playBtnInt).on("click", fPlayInteriorShow);
			$(playInteriorBtnExt).on("click", fPlayInteriorHide);
			$(playBtnRet).on("click", fPlayerHide);
			//точки для интерьера
			var playDots = {};
			playDots.sys = [
				{fr1: 1, fr2: 5, baloon: false, title: "Система освещения", info: ""},
				{fr1: 7, fr2: 12, baloon: false, title: "Системы защиты", info: "Системы защиты «Мерседес-Бенц»<br />позволят насладиться всей мощью<br />автомобиля и быть в полной<br />уверенности,&nbsp;что&nbsp;вы&nbsp;в&nbsp;безопасности."},
				{fr1: 14, fr2: 18, baloon: false, title: "", info: ""}
			];
			playDots.exterior = [
				{baloon: false, bleft: 200, btop: 160, data: [
					{left: 377, top: 398},
					{left: 407, top: 411},
					{left: 455, top: 420},
					{left: 517, top: 425},
					{left: 591, top: 431}
				], el: false, frame: 0, sys: 0, title: "Intelligent Light System", type: 1, info: "Биксеноновые фары с динамической<br />регулировкой&nbsp;дальности&nbsp;светового&nbsp;потока,<br />вариабельным распределением света при<br /> движении по загородному шоссе и<br /> автостраде"},
				{baloon: false, bleft: 99, btop: 116, data: [
					{left: 666, top: 291},
					{left: 678, top: 292},
					{left: 689, top: 290},
					{left: 697, top: 290},
					{left: 711, top: 290},
					{left: 716, top: 290}
				], el: false, frame: 0, sys: 1, title: "Active Lane Keeping Assist", type: 1, info: "Система&nbsp;удержания&nbsp;полосы&nbsp;движения"},
				{baloon: false, bleft: -400, btop: 30, data: [
					{left: 720, top: 343},
					{left: 741, top: 344},
					{left: 754, top: 341},
					{left: 766, top: 340},
					{left: 770, top: 335},
					{left: 766, top: 335}
				], el: false, frame: 0, sys: 1, title: "Attention Assist", type: 1, info: "Система&nbsp;контроля&nbsp;усталости&nbsp;водителя"},
				{baloon: false, bleft: -560, btop: 20, data: [
					{left: 654, top: 512},
					{left: 742, top: 509},
					{left: 822, top: 506},
					{left: 887, top: 496},
					{left: 943, top: 487},
					{left: 984, top: 478}
				], el: false, frame: 0, sys: 1, title: "Collision Prevention<br />Assist Plus", type: 1, info: "Система&nbsp;предупреждения<br />столкновений"},
				{baloon: false, bleft: 270, btop: 190, data: [
					{left: 408, top: 443},
					{left: 427, top: 454},
					{left: 456, top: 461},
					{left: 497, top: 470},
					{left: 545, top: 475}
				], el: false, frame: 0, sys: 2, title: "Полный привод 4MATIC<br />нового поколения", type: 1, info: "Создает более динамичное<br />тяговое усилие."},
				{baloon: false, bleft: 310, btop: -60, data: [
					{left: 409, top: 482},
					{left: 428, top: 492},
					{left: 457, top: 502},
					{left: 500, top: 509},
					{left: 546, top: 515}
				], el: false, frame: 0, sys: 2, title: "Downhill Speed Regulation", type: 1, info: "Cистема контроля при спуске.<br />Поможет удерживать контроль<br />на крутых склонах с рыхлым грунтом."},
				{baloon: false, bleft: 110, btop: -140, data: [
					{left: 810, top: 472},
					{left: 846, top: 464},
					{left: 874, top: 459},
					{left: 894, top: 450},
					{left: 904, top: 441}
				], el: false, frame: 0, sys: 2, title: "Ассистент прохождения<br />поворотов ESP", type: 1, info: "Улучшит маневренность."},
				{baloon: false, bleft: -360, btop: 0, data: [
					{left: 879, top: 493},
					{left: 915, top: 485},
					{left: 941, top: 475},
					{left: 955, top: 464},
					{left: 959, top: 454}
				], el: false, frame: 0, sys: 2, title: "Режим Offroad<br />со встроенным компасом", type: 1, info: "Проинформирует об угле<br />подъема и крене кузова."},
				{baloon: false, bleft: -260, btop: 50, data: [
					{left: 893, top: 335},
					{left: 888, top: 327},
					{left: 885, top: 324},
					{left: 867, top: 320},
					{left: 846, top: 317}
				], el: false, frame: 0, sys: 2, title: "7-ступенчатая трансмиссия<br />с двойным сцеплением 7G-DCT", type: 1, info: "Обеспечивает одновременно<br />комфортную и спортивную езду."}
			];
			playDots.interior = [
				{baloon: false, left: 518, top: 425, bleft: 490, btop: 340},
				{baloon: false, left: 747, top: 406, bleft: 610, btop: 320},
				{baloon: false, left: 757, top: 605, bleft: 925, btop: 570},
				{baloon: false, left: 838, top: 642, bleft: 945, btop: 680},
				{baloon: false, left: 824, top: 785, bleft: 900, btop: 750},
				{baloon: false, left: 441, top: 857, bleft: 480, btop: 750}
			];
			for (var c in playDots.exterior) {
				var dot = playDots.exterior[c];
				dot.el = document.createElement("DIV");
				dot.el.className = "btn-info";
				dot.el.style.display = "none";
				play3d.appendChild(dot.el);
				dot.fPlay = fPlayDot.bind(dot);
				$(dot.el).on("mouseenter", dot.fPlay);
				dot.fStop = fPlayDotStop.bind(dot);
				$(dot.el).on("mouseleave", dot.fStop);
				$(dot.el).on("mousedown", function() {return false;});
			}
			for (var c = 0; c < 6; c++) {
				var dot = playDots.interior[c];
				dot.el = document.createElement("DIV");
				dot.el.className = "btn-info";
				playInterior.appendChild(dot.el);
				dot.fPlay = fPlayDot.bind(dot);
				$(dot.el).on("mouseenter", dot.fPlay);
				dot.fStop = fPlayDotStop.bind(dot);
				$(dot.el).on("mouseleave", dot.fStop);
				switch(c) {
					case 0:
						dot.title = "Путевой&nbsp;компьютер";
						dot.info = "";
						break;
					case 1:
						dot.title = "Телефон,&nbsp;Навигационная&nbsp;система";
						dot.info = "";
						break;
					case 2:
						dot.title = "Радио/CD-плеер";
						dot.info = "";
						break;
					case 3:
						dot.title = "Многочисленные&nbsp;элементы&nbsp;управления<br />на центральной консоли";
						dot.info = "";
						break;
					case 4:
						dot.title = "Вещевые&nbsp;отсеки";
						dot.info = "";
						break;
					case 5:
						dot.title = "Тщательный&nbsp;выбор<br />материалов отделки";
						dot.info = "";
						break;
				}
			}
		});
	</script>
</div>
<script type="text/javascript">
(function(){
	var tryCur = 0;
	var tryMax = 100;
	var tryTm = 500;
	var check = function() {
		if (tryCur >= tryMax) return;
		tryCur++;
		var fb = $(".footer .fb-like span iframe")[0];
		if (fb && $(fb.parentNode.parentNode).hasClass("fb_iframe_widget")) {
			if (fb.parentNode.style.width == "0px") {
				fb.parentNode.style.width = "185px";
				fb.parentNode.style.height = "20px";
				fb.style.width = "185px";
				fb.style.height = "20px";
			}
		} else window.setTimeout(check, tryTm);
	};
	window.setTimeout(check, tryTm);
})();
</script>
</body>
</html>
