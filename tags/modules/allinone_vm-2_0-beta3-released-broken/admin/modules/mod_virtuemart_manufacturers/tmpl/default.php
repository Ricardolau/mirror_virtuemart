<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$col= 1 ;
?>
<div class="vmgroup<?php echo $params->get( 'moduleclass_sfx' ) ?>">

<?php if ($headerText) : ?>
	<div class="vmheader"><?php echo $headerText ?></div>
<?php endif; 
if ($display_style =="div") { ?>
	<div class="vmmanufacturer<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php foreach ($manufacturers as $manufacturer) {
		$link = JROUTE::_('index.php?option=com_virtuemart&view=manufacturer&&manufacturer_id=' . $manufacturer->manufacturer_id);
		$manufacturerImage = VmImage::getImageByMf($manufacturer);
		?>
		<div style="float:left;">
			<a href="<?php echo $link; ?>">
		<?php
		if ($manufacturerImage && ($show == 'image' or $show == 'all' )) { ?>
			<?php echo $manufacturerImage->displayImage('','',1,1);?>
		<?php
		}
		if ($manufacturerImage && ($show == 'text' or $show == 'all' )) { ?>
		 <div><?php echo $manufacturer->mf_name; ?></div>
		<?php 
		} ?>
			</a>
		</div>
		<?php 
		if ($col == $manufacturers_per_row) {
			echo "</div><div style='clear:both;'>";
			$col= 1 ;
		} else { 
			$col++; 
		}
	} ?>
	</div>
	<br style='clear:both;' />

<?php 
} else {
?>

<ul class="vmmanufacturer<?php echo $params->get('moduleclass_sfx'); ?>">
<?php
foreach ($manufacturers as $manufacturer) { 
	$link = JROUTE::_('index.php?option=com_virtuemart&view=manufacturer&&manufacturer_id=' . $manufacturer->manufacturer_id);
	$manufacturerImage = VmImage::getImageByMf($manufacturer);
	?>
	<li><a href="<?php echo $link; ?>">
		<?php
		if ($manufacturerImage && ($show == 'image' or $show == 'all' )) { ?>
			<?php echo $manufacturerImage->displayImage('','',1,1);?>
		<?php
		}
		if ($manufacturerImage && ($show == 'text' or $show == 'all' )) { ?>
		 <div><?php echo $manufacturer->mf_name; ?></div>
		<?php 
		}
		?>
		</a>
	</li>
	<?php
	if ($col == $manufacturers_per_row) {
		echo "</ul><ul>";
		$col= 1 ;
	} else { 
		$col++; 
	}
} ?>
</ul>

<?php }
	if ($footerText) : ?>
	<div class="vmfooter<?php echo $params->get( 'moduleclass_sfx' ) ?>">
		 <?php echo $footerText ?>
	</div>
<?php endif; ?>
</div>
