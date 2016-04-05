<?php
add_action('wp_footer', 'mt_custom_colors', 160);
function mt_custom_colors() { 
 
 $wr_options = get_option('wr_wp');
 
 ?>
 
 <style type="text/css" class="dresscode-custom-dynamic-css">

 <?php if(!empty($wr_options['effectcustomcss'])):?>
 <?php echo esc_attr(AfterSetupTheme::return_thme_option('effectcustomcss',''));?>
 <?php endif;?>
 </style>
 
<<<<<<< HEAD
 
=======
 /* 123 */
>>>>>>> 33e717b10ec03a896919932018203db7a02ccde6
 <?php 
	}
?>
