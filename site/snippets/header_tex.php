<!DOCTYPE html>
<!--[if lt IE 7]>  <html id="doc" class="no-js ie ie6 lte9 lte8 lte7"> <![endif]-->

<!--[if IE 7]>     <html id="doc" class="no-js ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html id="doc" class="no-js ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html id="doc" class="no-js ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html id="doc" class"no-js"> <![endif]-->
<!--[if !IE]><!--> <html id="doc" class="no-js" xml:lang=<? echo c::get('lang.current')?> lang=<? echo c::get('lang.current')?>><!--<![endif]-->
<head>
<meta charset="utf-8">
<? foreach(c::get('lang.available')as $lang):?>            
<link rel=alternate hreflang=<?= $lang?> href=<? echo $site->url($lang)?> /> 
 <? endforeach?>
<title><?=($page->seotitle()=='')? $page->title() : $page->seotitle();?> - <?= $site->title()?></title>
<meta name=description content="<? echo $page->description() ?>" />
<meta name=keywords content="<?= $page->keywords()?>" />
<meta name=robots content="index, follow" />
<meta name=viewport content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
<meta name=apple-mobile-web-app-capable content=yes />
<link rel=alternate type=application/rss+xml title="RSS 2.0" href="<?= url('blog/feed') ?>" >
<link rel=alternate type=application/rss+xml title="RSS 2.0" href="<?= url('texniq-u/feed') ?>" >
<link rel=icon href="<?= url('assets/images/favicon.png') ?>" />
<link rel=apple-touch-icon href="assets/images/apple-touch-icon-precomposed.png" /> 
<!--[if lte IE 7]> <script src="http://www.texniq.de/assets/js/lte-ie7.js"></script> <![endif]-->
<!--[if lt IE 9]> <script src="http://www.texniq.de/assets/js/html5shiv.js"></script> 
<script src="http://www.texniq.de/assets/js/selectivizr-min.js"></script> <![endif]--> 
<?php echo css('assets/css/texniq.css') ?>
<script type="text/javascript" src="//use.typekit.net/vdt1bav.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="cf">
<header class="header" role="banner"> 
        
<a class="logo fadeIn" href="https://arsnova.eu/manual/index.php/de/web-engineering-ii">
    <img id=logo src=<?= url('assets/images/logo.png')?> width=185 height=105 alt=<?= $site->title()?> title="texniq-Logo"/>
</a>
    </header>
