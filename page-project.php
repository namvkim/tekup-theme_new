<?php
/* Template Name: Template - Project */

get_header(); ?>

<body id="project">
    <section class="d-flex justify-content-center px-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/home_background_dot3d.gif" alt="" class="project__background" />
        <div class="project__content">
            <div class="
            project__header
            d-flex
            justify-content-center
            align-items-center
          ">
                Dự án nổi bật
            </div>
            <div class="d-flex justify-content-between flex-wrap">
                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'category_name' => 'project',
                    'orderby' => 'date',
                    'order' => 'desc',
                );

                $loop = new wp_Query($args);

                while ($loop->have_posts()) : $loop->the_post();
                    echo ' <div class="project__body__item">';
                    echo '<div class="project__body__item__img">';
                    echo '<a href="' . get_permalink() . '">';
                    echo get_the_post_thumbnail($post->ID, 'category-thumb');
                    echo '</a>';
                    echo '</div>';
                    the_title('<div class="project__body__item__title">', '</div>');
                    echo '<div class="project__body__item__subtitle">' . the_excerpt() . '</div>';
                    echo '</div>';
                endwhile;
                wp_reset_query(); ?>
            </div>
            <div class="d-flex justify-content-center">
                <div class="project__footer__button">TẢI THÊM</div>
            </div>
        </div>
    </section>
</body>


<?php get_footer(); ?>