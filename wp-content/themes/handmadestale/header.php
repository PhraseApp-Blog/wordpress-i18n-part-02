<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
            <?php wp_title(''); ?>

            <?php if (wp_title('', false)) {
                echo ' | ';
            } ?>

            <?php bloginfo('name'); ?>
        </title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

        <?php get_template_part('stylesheet-links'); ?>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
                <h1 class="site-heading">
                    <a
                        class="site-heading__link"
                        href="<?php echo pll_home_url(); ?>"
                    >
                        <img
                            class="site-heading__logo"
                            src="<?php echo get_bloginfo('template_url') ?>/img/logo.png"
                        />

                        <?php bloginfo('name'); ?>
                    </a>
                </h1>

                <!-- nav -->
                <nav class="nav pure-g" role="navigation">
                    <div class="pure-u-2-3">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container_class' => 'menu-main-menu-container pure-menu pure-menu-horizontal',
                            'items_wrap' => '<ul id="%1$s" class="pure-menu-list %2$s">%3$s</ul>',
                            'walker' => new HandmadesTale_Walker_Nav_Menu,
                        )); ?>
                    </div>

                    <div class="pure-u-1-3">
                        <!-- #language-switcher -->
                        <?php if (is_active_sidebar('trailing_main_nav')) : ?>
                            <div id="trailing_main_nav" class="widget-area">
                                <?php dynamic_sidebar('trailing_main_nav'); ?>
                            </div>
                        <?php endif; ?>
                        <!-- /#language-switcher -->
                    </div>
                </nav>
                <!-- /nav -->
			</header>
			<!-- /header -->
