<?
$page = $pages->find('web-engineering-ii');
$children = $page->children();?>
<? if ($page) : ?>
<nav role="navigation" class="wiki-nav hide">
<ul>
     
        <li><a<?= ($page->isActive()) ? ' class="active"' : '' ?> href="<?= $page->url() ?>"><?= $page->title() ?></a>
            <? if ($children): ?>
                <ul>
                    <? foreach($children AS $child): ?> 
                        <li class="depth-<?= $child->depth() ?>">
                        <a<?= ($child->isActive()) ? ' class="active"' : '' ?> href="<?= $child->url() ?>"><?= $child->title() ?></a>
                        </li>
                    <? endforeach ?>        
                </ul>
            <? endif ?>
            </li>
    
</ul>
</nav>
<? endif ?>