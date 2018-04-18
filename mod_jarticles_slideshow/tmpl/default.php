<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jarticles_slideshow
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$las_url = JURI::root().'modules/mod_jarticles_slideshow/';
?>
<script type="text/javascript">//<![CDATA[
		document.write('<link href="<?php echo $las_url;?>css/slider.css" rel="stylesheet" type="text/css" media="screen" />');
	//]]></script>
	
<div class="jas_slider">
<ul>
<?php foreach ($list as $item) : ?>
	<?php $las_images  = json_decode($item->images); ?>
	<li itemscope itemtype="https://schema.org/Article" style="background:url('<?php echo $las_images->image_intro ?>');background-size: cover;background-repeat:no-repeat;background-position:50% 50%;">
		<a href="<?php echo $item->link; ?>" itemprop="url">
		<img src="<?php echo $las_url;?>images/transparent-placeholder.png" alt="transparent-placeholder">
			<span itemprop="name">
				<h4><?php echo $item->title; ?></h4>
			</span>
		</a>
	</li>
<?php endforeach; ?>
</ul>
</div>
