<?php
$chapters = $page->children()->visible();
$langCurrent = c::get('lang.current');
$links = $page->children()->invisible();
?>
<?php snippet('header');?>


<div class="shell">
<section class="container">
	<h1><?php if(!$page->isHomePage()) {echo html($page->title());} ?></h1>
	<?php echo kirbytext($page->text()) ?>
</section>
<section class="container">
	<div class="panel-group" id="accordion">
		<?php $i = 1; ?>
		<?php foreach($chapters as $chapter): ?>
			<?php if(!$chapter->hasChildren()) :?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<a class="noajax" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>">
							<h2 class="panel-title" id="<?php echo $chapter->uid() ?>">
								<?php echo ($chapter->title()) ?>
							</h2>
							<h3 class="panel-subtitle"><?php echo ($chapter->subtitle()) ?></h3>
							<span class="glyphicon glyphicon-chevron-down panel-icon"></span>
							</a>
						</div>
						<div id="<?php echo $i; ?>" class="panel-collapse collapse">
							<div class="panel-body">
								<!-- Check if file contains text, if yes, show -->
								<?php if($chapter->text()) :?>
									<div class="textwrapper">
										<?php echo kirbytext($chapter->text()) ?>
									</div>
								<?php endif; ?>	
								<!-- Check if there are images in the folder-->	
								<?php if($chapter->hasImages()):?>
									<div id="carousel-example-<?php echo $chapter->uid();?>" class="carousel slide" data-interval="false">
										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<?php 
											$images = $chapter->images()->filterBy('title', '*=', $langCurrent . '_');
											$count = 1; 
											$step = (string)$count;
											$steps = yaml($chapter->steps());
											?>
											<!--Loop through images and add instructions from yaml-fields for each image-->
											<?php foreach($images as $image) :?>
												<div class="item <?php if ($count == 1): echo 'active'; endif;?>">
													<img class="screenshot" src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /> 
													<?php if($steps) :?>
														<div class="carousel-caption">
															<h4><span><?php $action = markdown($steps[$count]['Action']); echo $count . ".&nbsp;<span>" . $action ?></span></span></h4>
															<?php if($steps[$count]['Details'] != ""): ?>
																<div><?php echo markdown($steps[$count]['Details']) ?></div>
															<?php endif; ?>
														</div>
													<?php endif; ?>	
												</div>
												<?php $count++; $step = (string) $count;?>
											<?php endforeach; ?>
										</div>
										<!-- Controls -->
										<a class="left carousel-control noajax" href="#carousel-example-<?php echo $chapter->uid();?>" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control noajax" href="#carousel-example-<?php echo $chapter->uid();?>" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
									</div>
								<?php endif; ?>	
							</div>
						</div>
					</div>
				<?php endif; ?>

				<?php if($chapter->hasChildren()) :?>
					<div class="panel panel-default subchapter">
						<div class="panel-heading">
							<a href="<?php echo $chapter->url() ?>">
								<h2 class="panel-title" id="<?php echo $chapter->uid() ?>">


									<?php echo html($chapter->title()) ?>

								</h2>
								<h3 class="panel-subtitle"><?php echo html($chapter->subtitle()) ?></h3>
							</a>
							<span class="glyphicon glyphicon-chevron-down panel-icon"></span>
						</div>
					</div>
				<?php endif; ?>
		<?php $i++; endforeach; ?>
		<?php foreach($links as $link) : ?>
			<div class="panel panel-default ext-links">
				<div class="panel-heading">
					<a class="noajax" href="<?php echo $link->link() ?>">
						<h2 class="panel-title" id="<?php echo $link->uid() ?>">
							<?php echo html($link->title()) ?>
						</h2>
					</a>
					
				</div>
				<span class="glyphicon glyphicon-chevron-right panel-icon"></span>
			</div>
		<?php endforeach; ?>	
	</div>
</section>
</div>
<?php snippet('footer') ?>