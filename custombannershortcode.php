<style>
	.shortcodeText {
		margin: 0 auto;
		font-size: 14px;
	}
</style>

<?php
/**
 * Plugin Name: Custom Banner Shortcode
 * Plugin URI: https://github.com/RuthIsRoot/AddTinyMCEButtons
 * Description: Plugin donde localmente se configura el archivo custombannershortcode.php el cuál genera un shortcode con nombre customizado para ser utilizado en diferentes páginas para utilziarlo como footer de banner de publicidad o para cualquier otro fin.
 * Version: 1.0
 * Author: Alex Castella Iniesta
 * Author URI: http://www.alexwordpress.com.mialias.net/
 * License: GPLv3
 */

defined('ABSPATH') or die("No puedes hacer esto !");

define('path',plugin_dir_path(__FILE__));

function bannerfootermsg() { 
	$message = '<hr>
		<div class="shortcodeBox">
			<p class="shortcodeText">Recuerda, Real Comics World es una web sin ánimo de lucro.</p>
			<p class="shortcodeText">Estos productos están siendo patrocinados por MARVEL AVENGERS !</p>
			<img style="margin-left: 20%; padding: 0 auto;" src="https://blogdesuperheroes.es/wp-content/plugins/BdSGallery/BdSGaleria/2513_big.jpg"/>
			<hr>
		</div>'; 

	return $message;
}

add_shortcode('bannerShortcode', 'bannerfootermsg'); 
?>
