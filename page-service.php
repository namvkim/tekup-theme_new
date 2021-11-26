<?php
/* Template Name: Template - Service */

get_header(); ?>

<body id="service">
    <section class="
        service__banner__container
        d-flex
        flex-column
        align-items-center
        position-relative
        px-3
      ">
        <img src="<?php echo get_template_directory_uri() ?>/images/home_background_dot3d.gif" class="service__banner__img" alt="" />
        <div class="
          service__text__top
          d-flex
          justify-content-center
          align-items-center
        ">
            Dịch vụ
        </div>
        <div class="service__text__title">
            “TekUp là đối tác tin cậy của bạn trên con đường thay đổi - cho dù bạn
            là ai, bạn thuộc ngành nào. Chúng tôi cống hiến để cung cấp các giải
            pháp mới tiên phong với trải nghiệm hàng đầu tạo ra kết quả kinh doanh
            thực sự và cá nhân hóa - chỉ dành cho bạn”
        </div>
    </section>
    <section class="service__types__container px-3">
        <div class="service__Types__content">
            <div class="service__Types">
                <img src="./images/service.png" alt="" class="service__Types__img" />
                <div class="service__Types__text">
                    <div class="service__Types__top">
                        Trí tuệ nhân tạo & Tầm nhìn máy tính
                    </div>
                    <div class="service__Types__title">
                        Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công
                        nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều
                        đoạn văn bản với nhau để tạo thành một bản mẫu văn bản.
                    </div>
                </div>
            </div>
            <div class="service__Types service__Types__reverse">
                <div class="service__Types__text">
                    <div class="service__Types__top">
                        Phát triển ứng dụng di động và web
                    </div>
                    <div class="service__Types__title">
                        Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công
                        nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều
                        đoạn văn bản với nhau để tạo thành một bản mẫu văn bản.
                    </div>
                </div>
                <img src="./images/service.png" alt="" class="service__Types__img" />
            </div>
            <div class="service__Types">
                <img src="./images/service.png" alt="" class="service__Types__img" />
                <div class="service__Types__text">
                    <div class="service__Types__top">Tư vấn quản lý</div>
                    <div class="service__Types__title">
                        Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công
                        nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều
                        đoạn văn bản với nhau để tạo thành một bản mẫu văn bản.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service__contact__container px-3">
        <form class="contact__form">
            <div class="contact__top">Chúng tôi luôn ở đây để giúp bạn</div>
            <div class="contact__mid">Liên hệ với chúng tôi</div>
            <div class="contact__title">
                Tekup cam kết mang lại dịch vụ tốt nhất nhằm giúp doanh nghiệp của bạn
                phát triển thần tốc
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
            <button class="contact__btn__warning" type="submit">
                Gửi tin nhắn
            </button>
        </form>
    </section>
</body>

<?php get_footer(); ?>