<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title('&raquo;', 'true', 'right'); ?></title>

	<script>
		// Set up site configuration
		window.config = window.config || {};
		// The base URL for the WordPress theme
		window.config.baseUrl = "<?php echo get_bloginfo('url'); ?>";
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>