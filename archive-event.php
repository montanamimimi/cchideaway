<?php get_header(); ?>
<main class="main">
  <!-- Intro :: Start-->
  <section class="intro" data-aos="fade-in" data-aos-anchor=".intro">
    <div class="container-fluid">
      <picture class="intro__image">
        
        <img src="<?php echo get_theme_file_uri('/assets/images/img-intro-rooms.png'); ?>" alt="Ссы hideaway rooms" />
      </picture>
      <div class="intro__desc">
        <h1 class="intro__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".intro"> Our events</h1>
        <p class="intro__text" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".intro"> Elegant and stylish, every room is not only decorated in Modern
         
        </p>
      </div>
      <div class="intro__booking" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".intro">
        <div class="ui-booking">
          <form action="#">
            <div class="ui-booking__data">
              <div class="row">
                <div class="col-3">
                  <label class="ui-booking__label">From date</label>
                  <input class="ui-booking__input js-datepicker" type="text" value="01/06" readonly>
                </div>
                <div class="col-3">
                  <label class="ui-booking__label">To date</label>
                  <input class="ui-booking__input js-datepicker" type="text" value="14/06" readonly>
                </div>
                <div class="col-3">
                  <label class="ui-booking__label">Adults</label>
                  <div class="ui-booking__number">
                    <button class="ui-booking__decrease">-</button>
                    <input class="ui-booking__input" type="number" value="2">
                    <button class="ui-booking__increase">+</button>
                  </div>
                </div>
                <div class="col-3">
                  <label class="ui-booking__label">Children</label>
                  <div class="ui-booking__number">
                    <button class="ui-booking__decrease">-</button>
                    <input class="ui-booking__input" type="number" value="0">
                    <button class="ui-booking__increase">+</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="ui-booking__button">
              <a class="ui-btn ui-btn--booking" href="#">Book</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- Intro :: End-->


      <!-- Events :: Start-->
      <section class="events" data-aos="fade-in" data-aos-anchor=".events">
        <div class="container-fluid">
            <h2 class="events__title events" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".events">
                <svg width="50" height="63" viewBox="0 0 50 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M47.2 4.04004V2.04004H45.2H39.84H37.84V4.04004V37.4C37.84 39.2159 37.4924 40.9206 36.8017 42.5322C36.0983 44.1735 35.1461 45.5855 33.9458 46.7858C32.7454 47.9862 31.3334 48.9383 29.6922 49.6418L29.6824 49.6459L29.6727 49.6502C28.1327 50.3296 26.4369 50.68 24.56 50.68C22.7441 50.68 21.0394 50.3324 19.4278 49.6418C17.7929 48.9411 16.3854 47.9935 15.1881 46.7996C14.0374 45.5994 13.1058 44.1831 12.3983 42.5322C11.7076 40.9206 11.36 39.2159 11.36 37.4V4.04004V2.04004H9.36H4H2V4.04004V37.4C2 40.4855 2.58367 43.4195 3.75969 46.1832C4.92339 48.9179 6.53217 51.3206 8.58579 53.3743C10.632 55.4204 13.0236 57.0505 15.7441 58.2661L15.7604 58.2733L15.7769 58.2803C18.5405 59.4564 21.4746 60.04 24.56 60.04C27.6454 60.04 30.5795 59.4564 33.3431 58.2803L33.3596 58.2733L33.3759 58.2661C36.0964 57.0505 38.488 55.4204 40.5342 53.3743C42.5837 51.3248 44.1901 48.9275 45.3533 46.1996C46.5866 43.4333 47.2 40.4933 47.2 37.4V4.04004Z" fill="#F0F1EC" stroke="#879A77" stroke-width="4" />
                    <path d="M12.6001 0.0400391H36.6001V38.04C36.6001 44.6675 31.2275 50.04 24.6001 50.04C17.9727 50.04 12.6001 44.6675 12.6001 38.04V0.0400391Z" fill="#879A77" />
                </svg>pcoming events
            </h2>
            <ul class="events__list events" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".events">
                <li>
                    <div class="events__item">
                        <p class="events__item-caption">Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                    </div>
                </li>

                <?php

                $events = cchideaway_get_events_by_date();

                foreach ($events as $post) {
                    get_template_part('template-parts/event');
                }
                ?>

            </ul>
        </div>
    </section><!-- Events :: End-->
</main>


<?php get_footer(); ?>