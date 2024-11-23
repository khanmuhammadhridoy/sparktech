<section class="team-area pt-110 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="section-top">
                    <h2 class="title_one">Meet Our <span>Team</span></h2>
                    <p class="mt-20">Get to know the talented individuals who make our company thrive. Our diverse team
                        brings together a wealth of expertise.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="section-top-btn">
                    <a href="team.html" class="secondary-btn">See More</a>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <?php
            $team_count = get_theme_mod('team_count', 6);
            for ($i = 0; $i < $team_count; $i++):
                $name = get_theme_mod("team_name_$i", "Team Member $i");
                $designation = get_theme_mod("team_designation_$i", 'Founder & CEO');
                $image = get_theme_mod("team_image_$i", get_template_directory_uri() . '/assets/images/team-member-01.png');
                $social_links = [
                    'twitter' => get_theme_mod("team_twitter_link_$i", '#'),
                    'linkedin' => get_theme_mod("team_linkedin_link_$i", '#'),
                    'website' => get_theme_mod("team_website_link_$i", '#'),
                    'instagram' => get_theme_mod("team_instagram_link_$i", '#'),
                    'facebook' => get_theme_mod("team_facebook_link_$i", '#'),
                ];
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-member">
                        <div class="team-image">
                            <a href="#"><img src="<?php echo esc_url($image); ?>" alt="team-member"></a>
                            <div class="hover-state">
                                <div class="team-content">
                                    <div class="team-bio">
                                        <h4><a href="#"><?php echo esc_html($name); ?></a></h4>
                                        <span><?php echo esc_html($designation); ?></span>
                                    </div>
                                </div>
                                <ul class="team-social">
                                    <?php foreach ($social_links as $key => $link): ?>
                                        <?php if ($link): ?>
                                            <li><a href="<?php echo esc_url($link); ?>" target="_blank">
                                                    <i class="fa-brands fa-<?php echo esc_attr($key); ?>"></i>
                                                </a></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>