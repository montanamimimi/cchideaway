<?php get_header(); ?>

<section class="system system--v2" data-aos="fade-in" data-aos-anchor=".system--v2">
    <div class="container-fluid">
        <picture class="system__image">
           
            <img src="<?php echo get_theme_file_uri('/assets/images/img-system-02.png'); ?>" alt="Page not found" />
        </picture>
        <mark class="system__number" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".system--v2">404</mark>
        <div class="system__desc" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".system--v2">
            <h1 class="system__desc-title">Oppss.... Page Not Found</h1>
            <div class="system__desc-button">
                <a class="ui-btn ui-btn--primary" href="<?php echo get_site_url(); ?>">back to home<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>