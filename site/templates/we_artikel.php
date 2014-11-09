<? snippet('header_tex');?> 
<? $we1= $pages->find('web-engineering-ii'); ?>
<div class="wikiwrapper">
     <a class="nav_trigger" href="#"><span data-icon="&#x22;" aria-hidden="true"></span><b class="vh">Mobile Navigation</b></a>
    <? if($page->isChildOf($we1) or $page == $we1):?>
        <? snippet('we-nav');?>
    <? else: ?>
        <? snippet('we2-nav');?>
    <? endif; ?>
    
    <main class="main kirby cf">    
        <article class="single-article cf content">
            <h1><?= html($page->title())?></h1>
            <h2><?= html($page->subtitle())?></h2> 
            <? 
            //snippet('date');
            echo kirbytext($page->text());
            snippet('tags')?>
             <? if($page->faq()) :?>
            <?= kirbytext($page->faq()) ?>
        <? endif; ?>
        </article> 
              
    </main>
</div>
<?snippet('footer_tex')?>