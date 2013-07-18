<?php
/**
* New Responsive Croogo 1.6 Template
* Using Zurb-Foundation
*
* @author Qwien <lorentz@xintesa.com>
* @link http://www.xintesa.com
*
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="js no-touch svg inlinesvg svgclippaths no-iecompact" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title_for_layout; ?>&raquo;<?php echo Configure::read('Site.title'); ?></title>
<!--[if IE]>
<?php echo $this->Html->script(array(
	'jquery/html5'
)); ?>
<![endif]-->
<?php
	echo $this->Html->meta('icon');
	echo $this->Layout->meta();
	echo $this->Layout->js();
	echo $this->element('corecss');
	echo $this->Blocks->get('css');
	echo $this->Blocks->get('script');

?>
</head>
<body>

<div id="body-wrap">
	<!-- Header and Nav -->
	<nav class="top-bar">
		<ul class="title-area">
			<!-- Title Area -->
			<li class="name">
				<h1>
				<a href="/">Croogo16 Templates</a>
				</h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
			<!-- Nav Section -->
			<?php echo $this->Layout->menu('main', array('dropdown' => true)); ?>
		</section>
	</nav>


	<!-- SLIDER -->
	<div class='slider-wrap'>
		<div class="row">
			<!-- Sample slider element -->
			<?php echo $this->element('ex-slider'); ?>
		</div>
	</div>

	<!-- 3 BLOCK -->
	<div class="row">
		<hr>
		<?php echo $this->Layout->sessionFlash(); ?>
		<!-- 3 Block Section -->
		<div class="small-12 large-4 columns">
			<?php echo $this->Layout->blocks("block1"); ?>
		</div>
		<div class="small-12 large-4 columns">
			<?php echo $this->Layout->blocks("block2"); ?>
		</div>
		<div class="small-12 large-4 columns">
			<?php echo $this->Layout->blocks("block3"); ?>
		</div>
		<!-- End 3 Block Section -->
	</div>

	<!-- MAIN CONTENT -->
	<div class="row" id="main-content">
		<hr>
		<div class="large-12 columns">
			<?php echo $content_for_layout; ?>
		</div>
	</div>
	<div class="space20"></div>
	<div id="push"></div>
</div>

<!-- FOOTER CONTENT -->
<footer>
	<div class="row">
		<div class="large-12 columns">
			<?php echo $this->element('ex-footer'); ?>
		</div>
	</div>
</footer>

<?php
	echo $this->element('load-foundation');
	echo $this->element('common-js');
	echo $this->Blocks->get('scriptBottom');
	echo $this->Js->writeBuffer();
?>
</body>
</html>