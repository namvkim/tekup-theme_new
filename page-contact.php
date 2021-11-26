<?php
/* Template Name: Template - Contact */

get_header(); ?>

<body id="contact">
    <section class="contact__container px-3">
        <div class="contact__content">
            <img src="./images/contact.png" alt="contact" class="contact__image" />
            <form method="post" id="contact-form" class="contact__form">
                <div class="contact__top">Chúng tôi luôn ở đây để giúp bạn</div>
                <div class="contact__mid">Liên hệ với chúng tôi</div>
                <div class="contact__title">
                    Tekup cam kết mang lại dịch vụ tốt nhất nhằm giúp doanh nghiệp của
                    bạn phát triển thần tốc
                </div>
                <div class="d-flex justify-content-between">
                    <div class="contact__input__group me-3 w-50">
                        <img src="<?php echo get_template_directory_uri() ?>/images/contact_icon_user.svg" />
                        <input class="contact__input__style" type="text" placeholder="Tên cá nhân" name="user" />
                    </div>
                    <div class="contact__input__group ms-3 w-50">
                        <img src="<?php echo get_template_directory_uri() ?>/images/contact_phone.svg" />
                        <input class="contact__input__style" type="email" placeholder="Email" name="email" />
                    </div>
                </div>
                <div class="contact__input__group w-100">
                    <img src="<?php echo get_template_directory_uri() ?>/images/contact_type.jpg" />
                    <select class="contact__input__style">
                        <option>Lĩnh vực quan tâm</option>
                        <option>Trí tuệ nhân tạo & Tầm nhìn máy tính</option>
                        <option>Phát triển ứng dụng di động và web</option>
                        <option>Tư vấn quản lý</option>
                    </select>
                </div>
                <div class="contact__input__group w-100">
                    <img src="<?php echo get_template_directory_uri() ?>/images/contact_note.jpg" />
                    <input class="contact__input__style" type="text" placeholder="Lời nhắn" name="note" />
                </div>
                <button class="contact__btn__warning" type="submit" id="submit">
                    Gửi tin nhắn
                </button>
            </form>
        </div>
    </section>
</body>

<?php get_footer(); ?>