<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme-tekup
 * 
 * Template name: Detail Page 
 */

$image1 = get_field('image1');
$image2 = get_field('image2');
$image3 = get_field('image3');
$picture1 = $image1['sizes']['large'];
$picture2 = $image2['sizes']['large'];
$picture3 = $image3['sizes']['large'];
$subtitle = get_field('subtitle');
$sub_inform = get_field('sub_inform');
$sub_time = get_field('sub_time');
$sub_technical = get_field('sub_technical');

get_header('secondary');
?>
<main>
	<section class="d-flex justify-content-center px-3">
		<div class="pro__details__main__content justify-content-between">
			<div class="pro__details__main__left">
				<div class="photos">
					<div class="item pro__details__img__1">
						<a href="<?php echo $picture1 ?>" data-lightbox="photos"><img class="img-fluid" src="<?php echo $picture1 ?>" />
						</a>
					</div>
					<div class="item pro__details__img__2">
						<a href="<?php echo $picture2 ?>" data-lightbox="photos"><img class="img-fluid" src="<?php echo $picture2 ?>" /></a>
					</div>
					<div class="item pro__details__img__3">
						<a href="<?php echo $picture3 ?>" data-lightbox="photos"><img class="img-fluid" src="<?php echo $picture3 ?>" /></a>
					</div>
				</div>
			</div>
			<div class="pro__details__main__right">
				<?php
				the_title('<div class="pro__details__main__title mb-3">', '</div>')
				?>
				<div class="pro__details__main__sub"><?php echo $subtitle ?></div>
				<div class="pro__details__main__title2 mb-2">Thông tin dự án</div>
				<div class="pro__details__main__sub2">
					<?php echo $sub_inform ?></div>
				<div class="pro__details__main__title2 mb-2">Thời gian thực hiện</div>
				<div class="pro__details__main__sub2"><?php echo $sub_time ?></div>
				<div class="pro__details__main__title2 mb-2">Công nghệ</div>
				<div class="pro__details__main__sub2"><?php echo $sub_technical ?></div>

				<a href="<?php echo site_url('/'); ?>">
					<div class="
                pro__details__main__btn
                d-flex
                justify-content-center
                align-items-center
              ">
						<div class="pro__details__main__btn__title">
							TRUY CẬP TRANG WEB
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="
        pro__details__carousel__container
        d-flex
        justify-content-center
        px-3
      ">
		<div class="pro__details__carousel__content">
			<div class="pro__details__carousel__title">Dự án khác</div>
			<div class="owl-carousel pro__details__carousel__main">
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item1.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						Boxgo Fulfilment
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item2.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						AI Plan Chedule
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item3.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						AI Plan Chedule
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item4.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						AI Plan Chedule
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item5.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						AI Plan Chedule
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item6.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						AI Plan Chedule
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item7.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						AI Plan Chedule
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
				<div class="pro__details__carousel__item">
					<img data-src="images/project_item8.png" class="owl-lazy" />
					<div class="pro__details__carousel__item__title mt-3">
						AI Plan Chedule
					</div>
					<div class="pro__details__carousel__item__sub mt-2">
						UI/UX Design
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>