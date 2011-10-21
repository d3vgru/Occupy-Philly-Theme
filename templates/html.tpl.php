<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
	<head>
		<?php
			/**
			 * @see html5_boilerplate_html_head_alter()
			 */
		?>
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<meta name="description" content="Occupy Philly is a solidarity movement with Occupy Wall St. and Occupy Together. Currently occupying Dilworth Plaza at City Hall, the Occupation is a welcomed space for democracy, dialogue, and a higher standard of justice."/>
		<meta name="keywords" content="occupy, philly, philadelphia, dilworth plaza, solidarity, wall st."/>
	</head>
	<body class="<?php print $classes; ?>"<?php print $attributes;?>>
		<div id="container">
			<?php print $page_top; ?>
			<?php print $page; ?>
			<?php print $page_bottom; ?>
		</div>
	</body>
</html>
