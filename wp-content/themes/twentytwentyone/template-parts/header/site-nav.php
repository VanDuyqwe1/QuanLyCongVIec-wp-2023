<?php

/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<div class="collapse navbar-collapse d-desktop" id="collapseExample">
	<div class="nav-wrap d-flex">

		<ul class="nav navbar-nav">
			<li class="active"><a class="nav-link active" aria-current="page" href="<?php echo get_home_url(); ?>">Home</a></li>
		</ul>

		<form class="navbar-form navbar-left d-flex">
			<?php
			if (is_active_sidebar('sidebar-form-search')) : ?>
				<div class="form-search">
					<?php dynamic_sidebar('sidebar-form-search'); ?>
				</div>
			<?php
			endif; ?>
		</form>

		<ul class="nav navbar-nav navbar-right">


			<?php if (has_nav_menu('primary')) : ?>
				<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e('Primary menu', 'twentytwentyone'); ?>">
					<div class="menu-button-container">
						<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
							<span class="dropdown-icon open"><?php esc_html_e('Menu', 'twentytwentyone'); ?>
								<?php echo twenty_twenty_one_get_icon_svg('ui', 'menu'); // phpcs:ignore WordPress.Security.EscapeOutput 
								?>
							</span>
							<span class="dropdown-icon close"><?php esc_html_e('Close', 'twentytwentyone'); ?>
								<?php echo twenty_twenty_one_get_icon_svg('ui', 'close'); // phpcs:ignore WordPress.Security.EscapeOutput 
								?>
							</span>
						</button><!-- #primary-mobile-menu -->
					</div><!-- .menu-button-container -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'menu-wrapper',
							'container_class' => 'primary-menu-container m-0',
							'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb'     => false,
						)
					);
					?>
				</nav><!-- #site-navigation -->
			<?php
			endif; ?>
			<ul class="nav nav-icon">
				<li>
					<a href="#" class="d-column ellipsis">
						<i class="fa fa-ellipsis-h text-center" aria-hidden="true"></i>Menu
					</a>
				</li>
				<li>
					<a href="#" class="d-column search">
						<i class="fa fa-search text-center" aria-hidden="true"></i>Search
					</a>
				</li>
				<li class="dropdown d-column">
					<a class="btn dropdown-toggle user-circle pt-0 pb-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-user-circle-o text-center" aria-hidden="true"></i>
						Account

					</a>
					<span class="caret"></span>
					<ul class="dropdown-menu menu-show">
						<li><a class="dropdown-item h-100" href="#">Thông tin</a></li>
						<li><a class="dropdown-item h-100" href="#">Cài đặt</a></li>
						<li>
							<?php
							if (is_active_sidebar('sidebar-login-out')) :
								dynamic_sidebar('sidebar-login-out');
							endif;
							?>
							<a class="dropdown-item h-100" href="#">
							</a>
						</li>
					</ul>
				</li>
			</ul>


		</ul>
	</div>
</div>
<!-- /.navbar-collapse -->