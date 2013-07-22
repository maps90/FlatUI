<?php
$foundjs = "/js/foundation/";
$vendorjs = "/js/vendor/";

echo $this->Html->script(array(
	$vendorjs . 'jquery',
	$vendorjs . 'custom.modernizr',
	$foundjs . 'foundation',
	$foundjs . 'foundation.cookie',
	$foundjs . 'foundation.alerts',
	$foundjs . 'foundation.topbar',
	$foundjs . 'foundation.clearing',
	$foundjs . 'foundation.orbit',
	$foundjs . 'foundation.placeholder',
	$foundjs . 'foundation.tooltips',
), array('subdir' => 'js/foundation')
);
