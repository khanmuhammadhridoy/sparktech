<section class="testimonial-home-3 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="section-top-3">
                    <h2 class="title_one">What <span>Client Say</span> About Us!</h2>
                </div>
            </div>
            <div class="col-lg-5 offset-xl-3 offset-lg-2 align-self-end">
                <p>Step into Our World of Creativity and Innovation: Unveiling Our Portfolio, a Tapestry of Past
                    Projects Reflecting Our Commitment to Excellence and Client Success</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-60">
        <!-- First Slider -->
        <div class="testimonial-slider-home-3">
            <?php
            $testimonial_count = get_theme_mod('testimonial_count', 5);
            for ($i = 0; $i < $testimonial_count; $i++):
                $quote = get_theme_mod("testimonial_quote_$i", '');
                $image = get_theme_mod("testimonial_image_$i", '');
                $name = get_theme_mod("testimonial_name_$i", '');
                $designation = get_theme_mod("testimonial_designation_$i", '');
                if ($quote && $image && $name):
                    ?>
                    <div class="testimonial-slide-home-3">
                        <span class="testimonial-quote-icon"><i class="fa-solid fa-quote-left"></i></span>
                        <span class="quote-text"><?php echo esc_html($quote); ?></span>
                        <div class="testimonial-content">
                            <div class="author-img">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
                            </div>
                            <div class="author-text">
                                <h4><?php echo esc_html($name); ?></h4>
                                <p><?php echo esc_html($designation); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endif;
            endfor;
            ?>
        </div>

        <!-- Second Slider -->
        <div class="testimonial-slider-2-home-3 mt-30">
            <?php
            for ($i = 0; $i < $testimonial_count; $i++):
                $quote = get_theme_mod("testimonial_quote_$i", '');
                $image = get_theme_mod("testimonial_image_$i", '');
                $name = get_theme_mod("testimonial_name_$i", '');
                $designation = get_theme_mod("testimonial_designation_$i", '');
                if ($quote && $image && $name):
                    ?>
                    <div class="testimonial-slide-home-3">
                        <span class="testimonial-quote-icon"><i class="fa-solid fa-quote-left"></i></span>
                        <span class="quote-text"><?php echo esc_html($quote); ?></span>
                        <div class="testimonial-content">
                            <div class="author-img">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
                            </div>
                            <div class="author-text">
                                <h4><?php echo esc_html($name); ?></h4>
                                <p><?php echo esc_html($designation); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endif;
            endfor;
            ?>
        </div>
    </div>
</section>