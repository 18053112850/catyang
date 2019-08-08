<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */
get_header();
?>
   
   <?php if ( akina_option('head_notice') != '0'){ 
   		$text = akina_option('notice_title');
   	?>
	<div class="notice" style="margin-top:60px">
	   <i class="iconfont icon-notification"></i>
	  <?php if(strlen($text) > 142 && !wp_is_mobile()){ ?> 
	  	<marquee align="middle" behavior="scroll" loop="-1" scrollamount="6" style="margin: 0 8px 0 20px; display: block;" onMouseOut="this.start()" onMouseOver="this.stop()">
			<div class="notice-content"><?php echo $text; ?></div>
		</marquee>
		<?php }else{ ?>
			<div class="notice-content"><?php echo $text; ?></div>
		<?php } ?>
	</div>
	<?php } ?>
	
	<?php 
		if(akina_option('top_feature')=='1'){
                if(akina_option('top_feature_style') == 'left_and_right'){
                    get_template_part('layouts/feature_v2');
                }else{
                    get_template_part('layouts/feature');
                }
		}
	?>
	
	
<?php
get_footer();
