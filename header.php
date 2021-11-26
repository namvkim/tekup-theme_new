<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-tekup
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php bloginfo('pingback_url'); ?>" />

	<title>Tekup__homepage</title>

	<?php wp_head(); ?>

	<section class="menu__container w-100 position-fixed" id="menu__container">
		<div class="d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<div>
					<img src="<?php echo get_template_directory_uri() ?>/images/menu_poiter.svg" alt="" />
					<img class="ms-2" src="<?php echo get_template_directory_uri() ?>/images/menu_tekup.svg" alt="" />
				</div>
				<div class="menu__language__title">NGÔN NGỮ</div>
				<div class="menu__language">
					<input id="menu__language__toggle" type="checkbox" class="d-none" />
					<label for="menu__language__toggle" class="menu__language__animate d-flex align-items-center">
						<img src="<?php echo get_template_directory_uri() ?>/images/menu_flag_vietnam.png" alt="" />
						<i class="fa fa-chevron-down ms-2" aria-hidden="true"></i>
					</label>
					<div class="menu__language__animate dropdown">
						<div class="menu__language__animate">
							<img src="<?php echo get_template_directory_uri() ?>/images/menu_flag_english.png" alt="" />
						</div>
					</div>
				</div>
			</div>
			<label for="menu__checkbox" class="menu__right d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() ?>/images/menu_bars.svg" alt="" />
			</label>
			<input type="checkbox" id="menu__checkbox" class="d-none" />
			<div class="menu__main d-flex flex-column justify-content-between">
				<label for="menu__checkbox" class="w-100 text-end">
					<img src="<?php echo get_template_directory_uri() ?>/images/menu_close.svg" alt="" />
				</label>
				<div class="menu__main__list text-center">
					<div class="p-2 p-lg-4">
						<a href="<?php echo site_url('/'); ?>" class="position-relative text-decoration-none">
							<span class="position-relative">Trang chủ</span>
							<hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_homepage" />
						</a>
					</div>
					<div class="p-2 p-lg-4">
						<a href="<?php echo site_url('/about'); ?>" class="position-relative text-decoration-none">
							<span class="position-relative">Về chúng tôi</span>
							<hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_about" />
						</a>
					</div>
					<div class="p-2 p-lg-4">
						<a href="<?php echo site_url('/project'); ?>" class="position-relative text-decoration-none">
							<span class="position-relative">Dự án</span>
							<hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_project" />
						</a>
					</div>
					<div class="p-2 p-lg-4">
						<a href="<?php echo site_url('/service'); ?>" class="position-relative text-decoration-none">
							<span class="position-relative">Dịch vụ</span>
							<hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_service" />
						</a>
					</div>
					<div class="p-2 p-lg-4">
						<a href="<?php echo site_url('/contact'); ?>" class="position-relative text-decoration-none">
							<span class="position-relative">Liên hệ</span>
							<hr class="
                    m-0
                    position-absolute
                    bottom-0
                    start-50
                    translate-middle-x
                  " id="menu_contact" />
						</a>
					</div>
				</div>
				<div class="p-4"></div>
			</div>
			<div class="menu__overlay"></div>
		</div>
	</section>
</head>