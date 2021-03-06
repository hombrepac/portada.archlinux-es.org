<?php include_once ('commun/functions.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <style type="text/css" media="screen">
		@import url(<?php echo get_stylesheet_uri(); ?>);
	</style>
        <?php print_arch_favicon(); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php print_arch_header(have_posts() && get_post()->ID == '108' ? 'download' : 'home'); ?>
        <div id="content">
            <div id="archdev-navbar"></div>
            <!-- end header -->
