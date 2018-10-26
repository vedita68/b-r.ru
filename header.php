<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset="<?= LANG_CHARSET ?>">

    <?

        global $USER;
        $APPLICATION->ShowMeta("robots", false, true);
        $APPLICATION->ShowMeta("keywords", false, true);
        $APPLICATION->ShowMeta("description", false, true);

        $this_page = $APPLICATION->GetCurPage();
		$og_title = $APPLICATION->GetProperty('og_title');
		$og_description = $APPLICATION->GetProperty('og_description');
		$og_image = $APPLICATION->GetProperty('og_image');

        if(strpos($_SERVER['REQUEST_URI'], '/hbvg2017')===0){
            $og_image = SITE_PROTOCOL.'://b-r.ru/hbvg2017/VG.png';
        }
    ?>

    <?if ($this_page == '/') :?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?endif;?>

	<link rel="apple-touch-icon" href="/favicon.png">
	<link rel="icon" sizes="32x32" href="/favicon.png">
	<!--[if IE]><link rel="shortcut icon" href="/local/images/favicon.ico"><![endif]-->
	<meta property="og:url" content="http://b-r.ru" />
	<meta property="og:type" content="website">
	<?if($_SERVER['REQUEST_URI'] == '/'):?>
		<meta property="og:title" content='Тренинги для развития бизнеса и профессиональные семинары в Москве, пройти персональное обучение'>
	<?elseif($_SERVER['REQUEST_URI'] == "/corporate-trainings/"):?>
	    <meta property="og:title" content='Корпоративный тренинг на сплочение коллектива для сотрудников для командообразования персонала компании – проведение бизнес семинара в Москве
'>
	<?else:?>
		<?/*<meta property="og:title" content='<? $APPLICATION->ShowProperty("og_title" , ""  );?>'>*/?>
		<meta property="og:title" content='<? $APPLICATION->ShowTitle() ?>'>
	<?endif;?>
	<meta property="og:image" content='<? $APPLICATION->ShowProperty("og_image" , SITE_PROTOCOL.'://'.$_SERVER['SERVER_NAME'].'/images/icons/logo.png');?>'>
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
	<?if($_SERVER['REQUEST_URI'] == '/'):?>
		<meta property="og:description" content='Мы регулярно проводим тренинги и семинары для всех видов бизнеса, записаться к нам можно на персональные и групповые курсы. Обучение бизнесу проводят опытные тренеры, программа тренингов подходит человеку с любым уровнем знаний.
'>
	<?else:?>
		<?/*<meta property="og:description" content='<? $APPLICATION->ShowProperty("og_description" , $APPLICATION->GetProperty("description") );?>'>*/?>
		<meta property="og:description" content='<?$APPLICATION->ShowProperty('description');?>'>
	<?endif;?>
	<meta name="cmsmagazine" content="4c547883b1fca0f4fb69c5ffab088159" />

    <?
    if(strpos($_SERVER['REQUEST_URI'], '/hbvg2017')===0)
        echo '<meta name="format-detection" content="telephone=no">';
    ?>
    <!-- META END -->

    <!-- TITLE -->
    <?if($_SERVER['REQUEST_URI'] == "/corporate-trainings/"):?>
        <title>Корпоративный тренинг на сплочение коллектива для сотрудников для командообразования персонала компании – проведение бизнес семинара в Москве
</title>
    <?else:?>
        <title><? $APPLICATION->ShowTitle() ?></title>
    <?endif;?>
    <!-- TITLE END -->
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-123401-eWkgg';</script>
    <!-- HEAD STRINGS -->
    <?
        //$APPLICATION->ShowCSS(true, true);
        $APPLICATION->ShowHeadStrings();
    ?>
    <!-- HEAD STRINGS END -->

    <!-- HEAD SCRIPTS -->
    <?
        $APPLICATION->ShowHeadScripts();

		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-1.11.1.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/modernizr.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.pack.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-migrate-1.2.1.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.jcarousel.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.validate.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.file.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.inputmask.js');

		//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.mask.min.js');

		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/additional-methods.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.form-n-validate.js');
		//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/masked-input.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/masked-input.js');


    if(strpos($_SERVER['REQUEST_URI'], '/corporate-trainings/test/biznes-kontekst-test')===0)
    {
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/bootstrap/js/bootstrap.min.js');
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/bootstrap/css/bootstrap.min.css');
    }
    else 
    {
        $APPLICATION->AddHeadScript('/blog/js/bootstrap.min.js');
    }
    
    $APPLICATION->AddHeadScript('/blog/js/jquery.matchHeight.js');
		
	# блок рассрочка
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/installment.js');

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');
		
    $APPLICATION->ShowCSS();
    ?>

    <?
        // Styles

        if(strpos($_SERVER['REQUEST_URI'], '/life-trainings/navykovye-treningi/tseli-na-god')===0){
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/clients_service.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');
        }elseif(strpos($_SERVER['REQUEST_URI'], '/life-trainings/navykovye-treningi/finansovaya-gramotnost/')===0){
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/clients_service.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');
        //}elseif(strpos($_SERVER['REQUEST_URI'], '/life-trainings/navykovye-treningi/iskusstvo-kkonsultativnykh-prodazh/')===0){
        }elseif(strpos($_SERVER['REQUEST_URI'], '/life-trainings/navykovye-treningi/tekhnologiya-zaklyucheniya-krupnykh-sdelok/')===0){
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/clients_service.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');
        }

        if ($this_page != '/') {
            # блок рассрочка
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/installment.css?v=123');

            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/normalize.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/main.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/libs.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/page.css');
        }


		if(strpos($_SERVER['REQUEST_URI'], '/life-trainings/navykovye-treningi/idealnyy-klientskiy-servis-life/')===0
		|| strpos($_SERVER['REQUEST_URI'], '/corporate-trainings/navikovie/idealnyy-klientskiy-servis/')===0 || strpos($_SERVER['REQUEST_URI'], '/life-trainings/navykovye-treningi/effektivnoe-upravlenie-soboy-v-situatsii-stressa/')===0
        )
		{
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/clients_service.css');
		}
		elseif(strpos($_SERVER['REQUEST_URI'], '/life-trainings/treningi-po-rabote-s-otnosheniyami/proshchenie-life/')===0 || strpos($_SERVER['REQUEST_URI'], '/life-trainings/navykovye-treningi/publichnye-vystupleniya-life/')===0)
		{
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');
		}
		elseif(strpos($_SERVER['REQUEST_URI'], '/life-trainings/treningi-po-rabote-s-otnosheniyami/kak-razobratsya-s-problemami/')===0)
		{
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');
		}elseif(strpos($_SERVER['REQUEST_URI'], '/life-trainings/navikovie/biznes-marafon/')===0){
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/clients_service.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');

        }elseif(strpos($_SERVER['REQUEST_URI'], '/life-trainings/kontekst-promo')===0){
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/clients_service.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');

        }elseif(strpos($_SERVER['REQUEST_URI'], '/corporate-trainings/navikovie/upravlenie-personalom')===0){
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/style1.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/styles.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/kontekst_new/css/corp_style.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/clients_service.css');
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/corp_proshenie.css');           
        }

    if ($APPLICATION->GetCurDir() == '/life-trainings/treningi-po-rabote-s-otnosheniyami/sila-nastoyashchego/'){ ?>
        <link rel="stylesheet" type="text/css" href="/local/templates/br/css/page2.css">
    <? } ?>

    <?
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/new-menu.css');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/css/new-menu.js');
    ?>

    <!-- last-modified Заголовки-->
    <?php
    // устанавливаем заголовки у нужныъ разделов
    if(
    	strpos($_SERVER["REQUEST_URI"], '/life-trainings/') !== false ||
    	strpos($_SERVER["REQUEST_URI"], '/corporate-trainings/') !== false ||
    	strpos($_SERVER["REQUEST_URI"], '/otzyvy/') !== false
    ){
        // получаем путь до файла
        $filename = $_SERVER['SCRIPT_FILENAME']; 
        $LastModified_unix = filemtime($filename); // время последнего изменения страницы 
        $LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
        $IfModifiedSince = false;
        if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))
            $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));  
        if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
            $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
        if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
            exit;
        }
        header('Last-Modified: '. $LastModified);
    }
?>
    <!-- (конец)last-modified Заголовки -->

<?/*
<script>
var VVC_SETTINGS = {
  shop_id : 24200,
  user_id : 0,
  order_id : "O<?=date("YmdHis")?>",
  name: "",
  phone:"",
  css : "red"
}
</script>
<script type="text/javascript" src="http://vsevcredit.ru/js/widget.js"></script>*/?>
<script>
(function(w, d, u, i, o, s, p) {
if (d.getElementById(i)) { return; } w['MangoObject'] = o;
w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) }; w[o].u = u; w[o].t = 1 * new Date();
s = d.createElement('script'); s.async = 1; s.id = i; s.src = u;
p = d.getElementsByTagName('script')[0]; p.parentNode.insertBefore(s, p);
}(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
mgo({calltracking: {id: 1280, elements: [{selector: '.mgo-number-1280'}]}});
</script>



    <!-- <script type="text/javascript">
	var __cs = __cs || [];
	__cs.push(["setCsAccount", "l8UV3kTs9YzDGr8rKyonYzK1U9HCwAfR"]);
	__cs.push(["setCsHost", "//server.comagic.ru/comagic"]);
	</script>
	<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script> -->
	<meta name="yandex-verification" content="3d8028487babdc2f" />
	<meta name="google-site-verification" content="h1b_w_R8Tm0HR9gITMvZL2lkDBHikVHBr43XmyWHK5I" />
     <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter29716710 = new Ya.Metrika({
                    id:29716710,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/29716710" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2346495918709605');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2346495918709605&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->         
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-210931-a7zV3';</script>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/eb31f4d08daf39ce39eb1489e/7d40499a54dcff1f7bd46a244.js");</script>
</head>
<?
global $USER;
if($USER->IsAdmin()):
?>
<body <?if(strpos($_SERVER['REQUEST_URI'],'/schedule/')!==false):?>class="small-page"<?endif;?>>
<?else:?>
<body <?if(strpos($_SERVER['REQUEST_URI'],'/schedule/')!==false):?>class="small-page"<?endif;?> oncopy="return false;">
<?endif;?>
<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', 'af616eea31806c5f64b5e54d36a67ef8');
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-61930115-1', 'auto');

  ga(function(tracker) {
    function guid() {
      function s4() {
        return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
      }

      result = '';

      for(i=0; i<8; i++)
        result += s4();

      return result;
    }

    ga('set', 'dimension1', tracker.get('clientId'));
    ga('set', 'dimension2', guid());

    ga('send', 'pageview');
  });


</script>


    <?$APPLICATION->IncludeFile(
        $APPLICATION->GetTemplatePath("/include/svg.php"),
        Array(),
        Array("MODE"=>"php")
    );?>



<? $APPLICATION->ShowPanel(); ?>

<script type="text/javascript">
$(document).ready(function() {
$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".menus").toggle();
	});
});
	</script>


<script type="text/javascript">
$(document).ready(function() {
$(".toggleMenu2").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".menus_main").toggle();
	});
});
	</script>




<style>
    @supports (-ms-ime-align:auto) {
        a.head-callback.show-recall {
            right: 131px !important;
        }

        .top-nav {
            left: 100px !important;
        }
    }

    @-moz-document url-prefix() {
        a.head-callback.show-recall {
            right: 138px !important;
            top: 11px !important;
        }
        .top-nav {
            left: 100px !important;
        }
    }

    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        a.head-callback.show-recall {
            right: 131px !important;
            top: 11px !important;
        }

        .top-nav {
            left: 100px !important;
        }
    }
</style>

<style>
    .content-block {
        padding-top: 100px;
        padding-left: 0;
        padding-right: 0;
        width: auto;
        max-width: none;
        min-width: auto;
    }
    @media (max-width: 767px) {
        .content-block {
            padding-top: 70px;
        }
    }
    @media (min-width: 768px) {
        .navbar-toggle {
            display: none;
        }
    }
    /*admin*/
    div#bx-panel ~ .content-block {
        padding-top: 0;
    }
    /*admin*/
</style>



<div class="container content-block">
    <?
    // баннер-врезка. Управляется в админке в инфблоке "управление баннерами"
    if (CModule::IncludeModule("iblock")) {
        $dbData = CIBlockElement::GetList(
            Array(),
            Array("IBLOCK_ID" => 37, "ID" => '67923', "ACTIVE" => "Y", "ACTIVE_DATE" => "Y"),
            false,
            Array("nTopCount" => 1),
            Array("ID", "IBLOCK_ID", "PREVIEW_TEXT", "DATE_ACTIVE_FROM", "DATE_ACTIVE_TO", "ACTIVE", "DETAIL_PICTURE")
        );
        if ($bannerData = $dbData->Fetch()) {
            // echo "<pre style='display:none'>".print_r($bannerData,true)."</pre>";

            ?>

            <?$banerimg = CFile::GetPath($bannerData["DETAIL_PICTURE"]);?>
            <?/*<div class="action_line" style="background-image: url('/podarok2018/bg-bn.jpg'); <?=(($USER->IsAuthorized()) ? 'position: relative; z-index: 990' : '')?>"  >*/?>
	<div class="action_line c-top-banner" style="display: none; background-image: url('<?=$banerimg?>'); <?=(($USER->IsAuthorized()) ? 'position: relative; z-index: 990' : '')?>"  >
            <div class="action_container">
                <?= $bannerData["PREVIEW_TEXT"]; ?>
            </div>
            </div>
	<script>
		$(document).ready(function() {
			const link = $('.c-top-banner').find('a');
			if (link[0]) {
				const href = link.attr('href');
				const local = window.location.href;
				if (local === href) {
					$('.c-top-banner').remove();
				} else if (href + '/' === local) {
					$('.c-top-banner').remove();
				} else {
					$('.c-top-banner').css('display', 'block');
				}
			}
		});
	</script>
            <style>
                .content-block {
                    padding-top: 200px;
                }
                .action_line {
                    height: 100px;
                    position: fixed;
                    left: 0;
                    top: 0;
                    right: 0;
                    z-index: 1000;
                    background-position: center bottom;
                    background-repeat: no-repeat;
                }

                .action_container {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding-right: 15px;
                    padding-left: 15px;
                    margin-right: auto;
                    margin-left: auto;
                    max-width: 1070px;
                    height: 100px;
                }

                .action_container:before, .action_container:after {
                    display: table;
                    content: " ";
                }

                .action_container:after {
                    clear: both;
                }

                .action_line p {
                    font-size: 29px;
                    color: #fff;
                    font-weight: 400;
                    margin: 0 30px 0 0;
                }
                .action_line p span {
                    font-weight: 700;
                    white-space: nowrap;
                }
                .action_line a {
                    margin-top: 5px;
                    background: #fff;
                    border: 1px solid #fff;
                    border-radius: 0px;
                    transition: .3s;
                    font-size: 30px;
                    font-weight: 500;
                    color: #000;
                    text-decoration: none;
                    /*padding: 4px 33px;*/
                    padding: 4px 15px;
                    /*font-size: 17px;*/
                    font-size: 16px;
                    text-transform: uppercase;
                    white-space: nowrap;
                }

                .action_line a:hover {
                    background: transparent;
                    /*background: #fff;*/
                    color: #fff;
                }

                .site-header {
                    top: 100px;
                }
                .content-block{
                    padding-top: 199px;
                }

                /*body > .container {
                    padding-top: 197px;
                }*/

                /*.blog {
                    padding-top: 197px !important;
                }*/

                @media (max-width: 1200px) {
                    .action_line {
                        background-position-x: calc(50% + 65px);
                    }
                }
                @media (max-width: 767px) {
                    .action_line {
                        height: 70px;
                    }

                    .action_container {
                        height: 100%;
                    }

                    .action_line p {
                        font-size: 15px;
                        line-height: 14px;
                        margin: 0 10px 0 0;
                    }

                    .action_line a {
                        font-size: 13px;
                        padding: 4px 11px;
                        margin: 0;
                    }
                    .site-header {
                        top: 70px;
                    }
                    .content-block {
                        padding-top: 140px;
                    }
                    /*.blog {
                        padding-top: 140px !important;
                    }*/
                }

                @media (max-width: 900px) and (min-width: 768px) {
                    .action_line p {
                        font-size: 25px;
                        line-height: 23px;
                    }
                }
            </style><?

        }
    }


    ?>


    <?if(strpos($_SERVER['REQUEST_URI'], '/corporate-trainings/test/biznes-kontekst-test')===0):?>
    <?else:?>
        <link href="/blog/blog.css" rel="stylesheet">
    <?endif;?>




	<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "menu",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "N",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("XML_ID", ""),
        "FILE_404" => "",
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "56",
        "IBLOCK_TYPE" => "auxiliary",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("URL", "LINKS", "MAIN_PROGRAM", "MAIN_PROGRAM_LINK", "SUPPORT_PROGRAMS", "SUPPORT_PROGRAMS_LINKS", "ADDITIONAL_PROGRAMS", "ADDITIONAL_PROGRAMS_LINKS", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>

    <?/*<header class="site-header header-test" style="<?=(($USER->IsAuthorized()) ? 'position:relative;z-index:990;top:0;' : '')?>" >
        <div class="row no-row no-row-all">
            <div class="menu-container" style="padding-top: 0;">
                <a <?if($APPLICATION->GetCurDir()!=='/'):?>href="/" <?endif;?> title="Business Relations" class="logo-main" style="background: none;">
                    <svg width="29" height="51">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg_logo"></use>
                    </svg>
                </a>
                <div class="mobile-phone">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/header.phone.php",
                            "EDIT_TEMPLATE" => ""
                        )
                    );?>
                </div>
            </div>

            <button type="button" data-target=".mobile_slide_toggle" data-toggle="collapse" class="navbar-toggle pull-right mobile-menu-btn">
                <!--svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24">
                    <path class="cls-1" fill="#fff" d="M293.594,46.894H266.406a1.979,1.979,0,0,1,0-3.789h27.188A1.979,1.979,0,0,1,293.594,46.894Zm0-10.1H266.406A1.706,1.706,0,0,1,265,34.894,1.705,1.705,0,0,1,266.406,33h27.188A1.706,1.706,0,0,1,295,34.894,1.707,1.707,0,0,1,293.594,36.789ZM266.406,53.21h27.188a1.98,1.98,0,0,1,0,3.79H266.406A1.98,1.98,0,0,1,266.406,53.21Z" transform="translate(-265 -33)"/>
                </svg-->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" width="30" height="24">
                    <path d="M2,13.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,13.5,2,13.5z" fill="#FFFFFF"/>
                    <path d="M2,28.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,28.5,2,28.5z" fill="#FFFFFF"/>
                    <path d="M2,43.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,43.5,2,43.5z" fill="#FFFFFF"/>
                </svg>
            </button>
        </div>
        <div class="mobile_slide_toggle collapse navbar-collapse">
            <div class="top-menu">
                <div class="row no-row ">
                    <div class="menu-container">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                            "ROOT_MENU_TYPE" => "secondary_top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ), false);?>

                        <!--div class="header_information"-->
                        <span class="adress" style="top: 12px; font-weight: 600; font-size: 14px;">ПН-ПТ<br><span id="schedule">10:00-18:00</span></span>

                        <div class="desktop-phone">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/header.phone.php",
                                    "EDIT_TEMPLATE" => ""
                                )
                            );?>
                        </div>

                        <a href="#" title="" class="head-callback show-recall" style="top: 10px; right: 136px; font-size: 14px; line-height: 20px">ОБРАТНЫЙ<br>ЗВОНОК</a>
                        <!--/div-->
                    </div>
                </div>
            </div>
            <div class="bot-menu">
                <div class="row no-row">
                    <div class="menu-container">
                        <div class="menus">
                            <a href="javascript:void(0);" data-target=".mobile_slide_toggle" data-toggle="collapse" class="mobile-menu_close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <path fill="#fff" d="M259.48,35L260,35.52,238.52,57,238,56.48Zm-20.96,0L260,56.48,259.48,57,238,35.52Z" transform="translate(-238 -35)"/>
                                </svg>
                            </a>
                            <div>
                                <?$APPLICATION->IncludeComponent("bitrix:menu", "primary_top_new", Array(
                                    "ROOT_MENU_TYPE" => "primary_top",	// Тип меню для первого уровня
                                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                    "MAX_LEVEL" => "2",	// Уровень вложенности меню
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                ),
                                    false
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?
        $endDate = '8.11.2017 00:00:00';
        $page = $APPLICATION->GetCurPage(false);
        if (
            $page != "/" &&
            $page != "/hbvg2017/" &&
            $page != "/pay/" &&
            $page != "/pay2/" &&
            (strtotime(date('d.m.Y H:i:s')) < strtotime($endDate))
        ):
            ?>

            <div class="action_line">
                <div class="limiter">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/line-man.png" alt="">
                    <p class="action_line_title">В честь дня рождения Владимира Герасичева</p>
                    <p class="action_line_sale">СКИДКа 50%<span>*</span></p>
                    <p class="action_line_description">Только один день</p>
                    <a href="/hbvg2017/">Подробнее</a>
                </div>
            </div>
        <?
        endif;
        ?>

    </header>*/?>
    <? if (
        $page != "/" &&
        $page != "/hbvg2017/" &&
        $page != "/pay/" &&
        $page != "/pay2/" &&
        (strtotime(date('d.m.Y H:i:s')) < strtotime($endDate))
    ):
        ?>
        <style>
            /*body > .container {
                padding-top: 197px;
            }*/

            .action_line {
                background-size: auto;
                height: 100px;
                width: 100%;
                position: fixed;
                z-index: 995;
                font-family: KievitPro-Bold;

            }

            .action_line .limiter {
                display: flex;
                flex-flow: wrap;
                justify-content: space-between;
                align-items: center;
                width: 1040px;
            }

            .action_line p {
                margin: 0;
                font-size: 33px;
                color: #000;
                font-family: 'main-KievitPro';
                font-weight: 500;
            }

            .action_line p span {
                font-weight: 700;
            }

            .action_line img {
                height: 100px;
            }

            .action_line_title {
                font-size: 20px;
                color: #fff;
                text-transform: uppercase;
                width: 250px;
            }

            .action_line_sale {
                font-size: 55px;
                color: #c7d744;;
                text-transform: uppercase;
                width: 380px;
            }

            .action_line_description {
                color: #fff;
                text-transform: uppercase;
                font-size: 20px;
                width: 120px;
            }

            .action_line a {
                max-width: 125px;
                font-size: 15px;
                text-transform: uppercase;
                width: 100%;
                background: #b8c740;
                text-align: center;
                color: #010101;
                display: block;
                text-decoration: none;
                padding: 12px 6px 7px;
                border: 2px solid #b8c740;
                border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                transition: .3s linear;
                -webkit-transition: .3s linear;
                -o-transition: .3s linear;
                -moz-transition: .3s linear;
            }

            .action_line a:hover {
                background: none;
                color: #fff;
            }

            @media (max-width: 1200px) {

                .action_line .limiter {
                    width: 970px;
                }

                .action_line_title {
                    font-size: 18px;
                    width: 240px;
                }

                .action_line_description {
                    width: 110px;
                    font-size: 18px;
                }

                .action_line_sale {
                    font-size: 53px;
                    width: 360px;
                }
            }
        </style>
    <? endif; ?>