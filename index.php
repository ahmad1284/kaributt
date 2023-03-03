
    <?php include("header.php"); ?>
    <!-- Main Content -->
    <main id="rlr-main" class="rlr-main--fixed-top">
      <!-- Hero Banner -->
      <aside class="rlr-hero--half-mast">
        <div class="container">
          <div id="rlr_banner_slider" class="splide rlr-banner-splide rlr-banner-splide--v3">
            <div class="splide__track rlr-banner-splide__track">
              <ul class="splide__list">
                <!-- Banner slide 1 -->
                <li class="splide__slide rlr-banner-splide__slide">
                  <div class="rlr-banner-splide__image-wrapper">
                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto" data-src="./assets/images/banner/banner-02.jpg" src="./assets/images/banner/banner-02.jpg" alt="#" />
                  </div>
                  <article class="rlr-banner-splide__content-wrapper">
                    <header class="rlr-banner-splide__header">
                      <h2 class="rlr-banner-splide__slogan">Next mountain to climb</h2>
                      <span class="rlr-banner-splide__sub-title">The Serengeti National Park</span>
                    </header>
                    <div class="rlr-banner-splide__content-desc">
                      <div class="rlr-banner-splide__temperature">
                        <div class="rlr-banner-splide__arrows">
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev" aria-label="prev button">
                            <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                          </button>
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next" aria-label="next button">
                            <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
                
                <!-- Banner slide 2 -->
                <li class="splide__slide rlr-banner-splide__slide">
                  <div class="rlr-banner-splide__image-wrapper">
                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto" data-src="./assets/images/banner/banner-02.jpg" src="./assets/images/banner/banner-02.jpg" alt="#" />
                  </div>
                  <article class="rlr-banner-splide__content-wrapper">
                    <header class="rlr-banner-splide__header">
                      <h2 class="rlr-banner-splide__slogan">Find your best tour</h2>
                      <span class="rlr-banner-splide__sub-title">The Serengeti National Park</span>
                    </header>
                    <div class="rlr-banner-splide__content-desc">
                      <div class="rlr-banner-splide__temperature">
                        <div class="rlr-banner-splide__arrows">
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev" aria-label="prev button">
                            <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                          </button>
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next" aria-label="next button">
                            <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>

                <!-- Banner slide 2 -->
                <li class="splide__slide rlr-banner-splide__slide">
                  <div class="rlr-banner-splide__image-wrapper">
                    <img class="rlr-banner-splide__banner-img lazyload" data-sizes="auto" data-src="./assets/images/banner/banner-03-2.jpg" src="./assets/images/banner/banner-03-2.jpg" alt="#" />
                  </div>
                  <article class="rlr-banner-splide__content-wrapper">
                    <header class="rlr-banner-splide__header">
                      <h2 class="rlr-banner-splide__slogan">Find your next adventure</h2>
                      <span class="rlr-banner-splide__sub-title">The Stone Town</span>
                    </header>
                    <div class="rlr-banner-splide__content-desc">
                      <div class="rlr-banner-splide__temperature">
                        <div class="rlr-banner-splide__arrows">
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--prev rlr-banner-js-arrow-prev" aria-label="prev button">
                            <span> <i class="rlr-icon-font flaticon-left"> </i> </span>
                          </button>
                          <button class="rlr-banner-splide__arrow rlr-banner-splide__arrow--next rlr-banner-js-arrow-next" aria-label="next button">
                            <span> <i class="rlr-icon-font flaticon-right"> </i> </span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
      <div class="container">
        <!-- Search banner -->
        <form class="rlr-banner-search rlr-banner-search--hero-half-mast">
          <div class="rlr-banner-search__input-wrapper">
            <!-- Destination -->
            <div class="rlr-banner-input-group rlr-banner-input-group rlr-banner-input-group--home-search rlr-js-autocomplete-demo rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
              <label class="rlr-banner-input-group__label" for="destination_input">
                <mark>Location</mark>
              </label>
              <div class="rlr-banner-input-group__input-wrapper">
                <input id="destination_input" name="location" type="text" autocomplete="off" class="rlr-banner-input-group__input destination_input" placeholder="Enter your destination" />
                <i class="rlr-icon-font flaticon-map-marker"> </i>
                <ul id="home_destination_results" class="rlr-banner-input-group--location-dropdown rlr-autocomplete"></ul>
              </div>
            </div>
            <!-- Activity -->
            <div class="rlr-banner-input-group rlr-js-autocomplete-activity-demo rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
              <label class="rlr-banner-input-group__label" for="rlr-banner-input-group-activity">
                <mark>Activity</mark>
              </label>
              <div class="rlr-banner-input-group__input-wrapper">
                <input id="rlr-banner-input-group-activity" name="activity" type="text" autocomplete="off" class="rlr-banner-input-group__input activity_autocomplete" placeholder="Bungee jump" />
                <i class="rlr-icon-font flaticon-outline-down"> </i>
                <ul id="autocomplete-results" class="rlr-banner-input-group--activity-dropdown rlr-autocomplete"></ul>
              </div>
            </div>
            <!-- Date -->
            <div class="rlr-banner-input-group rlr-banner-search__banner-input rlr-js-search-layout-wrapper">
              <label class="rlr-banner-input-group__label" for="rlr-banner-input-group-dates">
                <mark>Date</mark>
              </label>
              <div class="rlr-banner-input-group__input-wrapper">
                <input id="rlr-banner-input-group-dates" type="text" autocomplete="off" class="rlr-banner-input-group__input eee_home_search_flatpickr" placeholder="Set dates" />
                <i class="rlr-icon-font flaticon-calendar"> </i>
                <ul id="home_date_results" class="rlr-banner-input-group--date-dropdown rlr-autocomplete"></ul>
              </div>
            </div>
          </div>
          <button class="rlr-banner-search__submit-button" aria-label="banner submit">
            <i class="rlr-icon-font flaticon-search"> </i>
          </button>
        </form>
      </div>
      <!-- Product Carousel -->
      <section class="rlr-section rlr-section__mb">
        <div class="container">
          <!-- Swiper -->
          <div class="rlr-carousel__items">
            <div class="swiper rlr-js-product-card-swiper">
              <!-- Carousel header -->
              <div class="rlr-section-header">
                <!-- Section heading -->
                <div class="rlr-section__title">
                  <h2 class="rlr-section__title--main">Trending 2022</h2>
                  <span class="rlr-section__title--sub">Sost Brilliant reasons Emprise should be your one-stop-shop!</span>
                </div>
                <div class="button-row">
                  <button type="button" class="btn rlr-button button button--previous rlr-button--carousel" aria-label="Previous">
                    <i class="rlr-icon-font flaticon-left-chevron"> </i>
                  </button>
                  <div class="button-group button-group--cells">
                    <button class="button is-selected">1</button>
                    <button class="button">2</button>
                  </div>
                  <button type="button" class="btn rlr-button button button--next rlr-button--carousel" aria-label="Next">
                    <i class="rlr-icon-font flaticon-chevron"> </i>
                  </button>
                </div>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-red rlr-product-card__badge"> -20% Today </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html">
                        <div class="swiper rlr-js-product-multi-image-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/01.jpg" data-srcset="./assets/images/product-images/small/01.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/03.jpg" data-srcset="./assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                            </div>
                          </div>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                            <i class="rlr-icon-font flaticon-left-chevron"> </i>
                          </button>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                            <i class="rlr-icon-font flaticon-chevron"> </i>
                          </button>
                        </div>
                      </a>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a href="./product-detail-page.html" class="rlr-product-card__anchor-title">
                            <h2 class="rlr-product-card__title" itemprop="name">Full-Day Catamaran Cruise to Hvar &amp; Pakleni Islands</h2>
                          </a>
                          <div>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-cat">
                              <span class="rlr-product-card__sub-title">Beach Tours</span>
                            </a>
                            <span class="rlr-product-card__sub-title">|</span>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                              <span class="rlr-product-card__sub-title">Dubronik</span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from">from </span>
                          <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">895</mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                          <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                            <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                          </div>
                          <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (577)</span>
                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">
                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                        <ul class="rlr-product-card__icon-text-list">
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-blue rlr-product-card__badge"> Best Seller </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html">
                        <div class="swiper rlr-js-product-multi-image-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/03.jpg" data-srcset="./assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                            </div>
                          </div>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                            <i class="rlr-icon-font flaticon-left-chevron"> </i>
                          </button>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                            <i class="rlr-icon-font flaticon-chevron"> </i>
                          </button>
                        </div>
                      </a>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a href="./product-detail-page.html" class="rlr-product-card__anchor-title">
                            <h2 class="rlr-product-card__title" itemprop="name">Circle Line: Complete Manhattan Island Cruise</h2>
                          </a>
                          <div>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-cat">
                              <span class="rlr-product-card__sub-title">City Tour</span>
                            </a>
                            <span class="rlr-product-card__sub-title">|</span>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                              <span class="rlr-product-card__sub-title">New York</span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from">from </span>
                          <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">795</mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                          <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                            <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                          </div>
                          <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.3 (109)</span>
                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">
                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                        <ul class="rlr-product-card__icon-text-list">
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--brand rlr-product-card__badge"> Free Lunch </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html">
                        <div class="swiper rlr-js-product-multi-image-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/03.jpg" data-srcset="./assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/03.jpg" data-srcset="./assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                            </div>
                          </div>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                            <i class="rlr-icon-font flaticon-left-chevron"> </i>
                          </button>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                            <i class="rlr-icon-font flaticon-chevron"> </i>
                          </button>
                        </div>
                      </a>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a href="./product-detail-page.html" class="rlr-product-card__anchor-title">
                            <h2 class="rlr-product-card__title" itemprop="name">Blue Lagoon &amp; 3 Islands Half-day Trip from Split</h2>
                          </a>
                          <div>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-cat">
                              <span class="rlr-product-card__sub-title">Hiking Tour</span>
                            </a>
                            <span class="rlr-product-card__sub-title">|</span>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                              <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from">from </span>
                          <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">695</mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                          <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                            <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                          </div>
                          <span class="rlr-product-card__rating-text" itemprop="reviewCount">5.0 (208)</span>
                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">
                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                        <ul class="rlr-product-card__icon-text-list">
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-magenta rlr-product-card__badge"> All Access </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html">
                        <div class="swiper rlr-js-product-multi-image-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/04.jpg" data-srcset="./assets/images/product-images/small/04.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/03.jpg" data-srcset="./assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                            </div>
                          </div>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                            <i class="rlr-icon-font flaticon-left-chevron"> </i>
                          </button>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                            <i class="rlr-icon-font flaticon-chevron"> </i>
                          </button>
                        </div>
                      </a>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a href="./product-detail-page.html" class="rlr-product-card__anchor-title">
                            <h2 class="rlr-product-card__title" itemprop="name">Private Tour: Montenegro Day Trip from Dubrovnik</h2>
                          </a>
                          <div>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-cat">
                              <span class="rlr-product-card__sub-title">Hiking Tour</span>
                            </a>
                            <span class="rlr-product-card__sub-title">|</span>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                              <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from">from </span>
                          <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">995</mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                          <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                            <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                          </div>
                          <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.5 (6718)</span>
                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">
                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                        <ul class="rlr-product-card__icon-text-list">
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--brand rlr-product-card__badge"> 5 Seats Left </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html">
                        <div class="swiper rlr-js-product-multi-image-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/01.jpg" data-srcset="./assets/images/product-images/small/01.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/03.jpg" data-srcset="./assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                            </div>
                          </div>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                            <i class="rlr-icon-font flaticon-left-chevron"> </i>
                          </button>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                            <i class="rlr-icon-font flaticon-chevron"> </i>
                          </button>
                        </div>
                      </a>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a href="./product-detail-page.html" class="rlr-product-card__anchor-title">
                            <h2 class="rlr-product-card__title" itemprop="name">Old Town, Dubai Creek, Souks, and Street Food Tour</h2>
                          </a>
                          <div>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-cat">
                              <span class="rlr-product-card__sub-title">Hiking Tour</span>
                            </a>
                            <span class="rlr-product-card__sub-title">|</span>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                              <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from">from </span>
                          <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">395</mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                          <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                            <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                          </div>
                          <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.7 (310)</span>
                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">
                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                        <ul class="rlr-product-card__icon-text-list">
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="swiper-slide" data-aos="fade-up" data-aos-offset="100" data-aos-duration="600">
                  <!-- Product card item -->
                  <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                    <!-- Product card image -->
                    <figure class="rlr-product-card__image-wrapper">
                      <span class="rlr-badge rlr-badge-- rlr-badge--accent-blue rlr-product-card__badge"> Trending </span>
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html">
                        <div class="swiper rlr-js-product-multi-image-swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/02.jpg" data-srcset="./assets/images/product-images/small/02.jpg" class="lazyload" alt="product-image" />
                            </div>
                            <div class="swiper-slide">
                              <img itemprop="image" data-sizes="auto" data-src="./assets/images/product-images/small/03.jpg" data-srcset="./assets/images/product-images/small/03.jpg" class="lazyload" alt="product-image" />
                            </div>
                          </div>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                            <i class="rlr-icon-font flaticon-left-chevron"> </i>
                          </button>
                          <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                            <i class="rlr-icon-font flaticon-chevron"> </i>
                          </button>
                        </div>
                      </a>
                    </figure>
                    <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                      <!-- Product card header -->
                      <header class="rlr-product-card__header">
                        <div>
                          <a href="./product-detail-page.html" class="rlr-product-card__anchor-title">
                            <h2 class="rlr-product-card__title" itemprop="name">Hamilton Live! Walking Tour in lower Manhattan</h2>
                          </a>
                          <div>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-cat">
                              <span class="rlr-product-card__sub-title">Hiking Tour</span>
                            </a>
                            <span class="rlr-product-card__sub-title">|</span>
                            <a href="./product-detail-page.html" class="rlr-product-card__anchor-sub-cat">
                              <span class="rlr-product-card__sub-title">Stoke on Trent</span>
                            </a>
                          </div>
                        </div>
                      </header>
                      <!-- Product card body -->
                      <div class="rlr-product-card__details">
                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <span class="rlr-product-card__from">from </span>
                          <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">$</mark><mark itemprop="price">295</mark> </span>
                        </div>
                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                          <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                            <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>
                          </div>
                          <span class="rlr-product-card__rating-text" itemprop="reviewCount">4.3 (205)</span>
                        </div>
                      </div>
                      <!-- Product card footer -->
                      <div class="rlr-product-card__footer">
                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">7 Days </span></div>
                        <ul class="rlr-product-card__icon-text-list">
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>
                          <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Category Carousel -->
      <section class="rlr-section rlr-section__mb">
        <div class="container">
          <!-- Swiper -->
          <div class="rlr-carousel__items">
            <div class="swiper rlr-js-category-card-swiper">
              <!-- Carousel header -->
              <div class="rlr-section-header">
                <!-- Section heading -->
                <div class="rlr-section__title">
                  <h2 class="rlr-section__title--main">Select Category</h2>
                  <span class="rlr-section__title--sub">Sost Brilliant reasons Emprise should be your one-stop-shop!</span>
                </div>
                <div class="button-row">
                  <button type="button" class="btn rlr-button button button--previous rlr-button--carousel" aria-label="Previous">
                    <i class="rlr-icon-font flaticon-left-chevron"> </i>
                  </button>
                  <div class="button-group button-group--cells">
                    <button class="button is-selected">1</button>
                    <button class="button">2</button>
                  </div>
                  <button type="button" class="btn rlr-button button button--next rlr-button--carousel" aria-label="Next">
                    <i class="rlr-icon-font flaticon-chevron"> </i>
                  </button>
                </div>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                  <!-- Category card item -->
                  <article class="rlr-category-card">
                    <div class="rlr-category-card__badge">
                      <span class="rlr-badge rlr-badge--right rlr-badge--"> 4.9 </span>
                    </div>
                    <div class="rlr-category-card__icon">
                      <i class="rlr-icon-font flaticon-beach"> </i>
                    </div>
                    <header>
                      <a href="./product-detail-page.html" class="rlr-category-card__title">
                        <h4>Beach Activity</h4>
                      </a>
                      <a href="./product-detail-page.html" class="rlr-category-card__sub-title">
                        <span>196 Activities</span>
                      </a>
                    </header>
                  </article>
                </div>
                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                  <!-- Category card item -->
                  <article class="rlr-category-card">
                    <div class="rlr-category-card__badge">
                      <span class="rlr-badge rlr-badge--right rlr-badge--"> 5.0 </span>
                    </div>
                    <div class="rlr-category-card__icon">
                      <i class="rlr-icon-font flaticon-bungee"> </i>
                    </div>
                    <header>
                      <a href="./product-detail-page.html" class="rlr-category-card__title">
                        <h4>Bungee Jump</h4>
                      </a>
                      <a href="./product-detail-page.html" class="rlr-category-card__sub-title">
                        <span>217 Activities</span>
                      </a>
                    </header>
                  </article>
                </div>
                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                  <!-- Category card item -->
                  <article class="rlr-category-card">
                    <div class="rlr-category-card__badge">
                      <span class="rlr-badge rlr-badge--right rlr-badge--"> 3.7 </span>
                    </div>
                    <div class="rlr-category-card__icon">
                      <i class="rlr-icon-font flaticon-city-tours"> </i>
                    </div>
                    <header>
                      <a href="./product-detail-page.html" class="rlr-category-card__title">
                        <h4>City Tours</h4>
                      </a>
                      <a href="./product-detail-page.html" class="rlr-category-card__sub-title">
                        <span>412 Activities</span>
                      </a>
                    </header>
                  </article>
                </div>
                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                  <!-- Category card item -->
                  <article class="rlr-category-card">
                    <div class="rlr-category-card__badge">
                      <span class="rlr-badge rlr-badge--right rlr-badge--"> 4.8 </span>
                    </div>
                    <div class="rlr-category-card__icon">
                      <i class="rlr-icon-font flaticon-hiking"> </i>
                    </div>
                    <header>
                      <a href="./product-detail-page.html" class="rlr-category-card__title">
                        <h4>Hiking Trips</h4>
                      </a>
                      <a href="./product-detail-page.html" class="rlr-category-card__sub-title">
                        <span>371 Activities</span>
                      </a>
                    </header>
                  </article>
                </div>
                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                  <!-- Category card item -->
                  <article class="rlr-category-card">
                    <div class="rlr-category-card__badge">
                      <span class="rlr-badge rlr-badge--right rlr-badge--"> 4.2 </span>
                    </div>
                    <div class="rlr-category-card__icon">
                      <i class="rlr-icon-font flaticon-jungle"> </i>
                    </div>
                    <header>
                      <a href="./product-detail-page.html" class="rlr-category-card__title">
                        <h4>Jungle Safari</h4>
                      </a>
                      <a href="./product-detail-page.html" class="rlr-category-card__sub-title">
                        <span>712 Activities</span>
                      </a>
                    </header>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Destination Masonary Grid -->
      <section class="rlr-section rlr-section__mb">
        <div class="container">
          <!-- Section heading -->
          <div class="rlr-section__title">
            <h2 class="rlr-section__title--main">Top Destinations</h2>
            <span class="rlr-section__title--sub">Sost Brilliant reasons Emprise should be your one-stop-shop!</span>
          </div>
          <div class="rlr-masonary-grid__container">
            <div class="rlr-masonary-grid__one">
              <!-- Destination card -->
              <a class="rlr-destination-card" href="./search-results--left-sidebar.html">
                <img data-sizes="auto" data-src="./assets/images/dest/01.jpg" data-srcset="./assets/images/dest/01@2x.jpg 2x" class="rlr-destination-card__img lazyload" alt="..." />
                <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge--abs rlr-badge--abs-dest"> 200+ </span>
                <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                  <h2 class="rlr-destination-card__info--main">Berlin</h2>
                  <p class="rlr-destination-card__info--sub">366 KM away</p>
                </div>
              </a>
            </div>
            <div class="rlr-masonary-grid__two">
              <!-- Destination card -->
              <a class="rlr-destination-card" href="./search-results--left-sidebar.html">
                <img data-sizes="auto" data-src="./assets/images/dest/02.jpg" data-srcset="./assets/images/dest/02@2x.jpg 2x" class="rlr-destination-card__img lazyload" alt="..." />
                <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge--abs rlr-badge--abs-dest"> 320 Tours </span>
                <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                  <h2 class="rlr-destination-card__info--main">Zurich</h2>
                  <p class="rlr-destination-card__info--sub">577 KM away</p>
                </div>
              </a>
            </div>
            <div class="rlr-masonary-grid__three">
              <!-- Destination card -->
              <a class="rlr-destination-card" href="./search-results--left-sidebar.html">
                <img data-sizes="auto" data-src="./assets/images/dest/03.jpg" data-srcset="./assets/images/dest/03@2x.jpg 2x" class="rlr-destination-card__img lazyload" alt="..." />
                <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge--abs rlr-badge--abs-dest"> 58 Tours </span>
                <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                  <h2 class="rlr-destination-card__info--main">New York</h2>
                  <p class="rlr-destination-card__info--sub">327 KM away</p>
                </div>
              </a>
            </div>
            <div class="rlr-masonary-grid__four">
              <!-- Destination card -->
              <a class="rlr-destination-card" href="./search-results--left-sidebar.html">
                <img data-sizes="auto" data-src="./assets/images/dest/04.jpg" data-srcset="./assets/images/dest/04@2x.jpg 2x" class="rlr-destination-card__img lazyload" alt="..." />
                <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge--abs rlr-badge--abs-dest"> 406 Tours </span>
                <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                  <h2 class="rlr-destination-card__info--main">London</h2>
                  <p class="rlr-destination-card__info--sub">271 KM away</p>
                </div>
              </a>
            </div>
            <div class="rlr-masonary-grid__five">
              <!-- Destination card -->
              <a class="rlr-destination-card" href="./search-results--left-sidebar.html">
                <img data-sizes="auto" data-src="./assets/images/dest/05.jpg" data-srcset="./assets/images/dest/05@2x.jpg 2x" class="rlr-destination-card__img lazyload" alt="..." />
                <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge--abs rlr-badge--abs-dest"> 37 Tours </span>
                <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                  <h2 class="rlr-destination-card__info--main">Aagra</h2>
                  <p class="rlr-destination-card__info--sub">780 KM away</p>
                </div>
              </a>
            </div>
            <div class="rlr-masonary-grid__six">
              <!-- Destination card -->
              <a class="rlr-destination-card" href="./search-results--left-sidebar.html">
                <img data-sizes="auto" data-src="./assets/images/dest/06.jpg" data-srcset="./assets/images/dest/06@2x.jpg 2x" class="rlr-destination-card__img lazyload" alt="..." />
                <span class="rlr-badge rlr-badge--left rlr-badge-- rlr-badge--abs rlr-badge--abs-dest"> 74 Tours </span>
                <div class="rlr-destination-card__info rlr-destination-card__info--left rlr-destination-card__info--bottom">
                  <h2 class="rlr-destination-card__info--main">Paris</h2>
                  <p class="rlr-destination-card__info--sub">872 KM away</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Best Sellers -->
      <section class="rlr-section rlr-section__mb rlr-section__cards">
        <div class="container">
          <!-- Section heading -->
          <div class="rlr-section-header">
            <!-- Section heading -->
            <div class="rlr-section__title">
              <h2 class="rlr-section__title--main">Best Seller</h2>
              <span class="rlr-section__title--sub">Sost Brilliant reasons Emprise should be your one-stop-shop!</span>
            </div>
            <div class="button-row">
              <a href="./search-results--left-sidebar.html" class="btn rlr-button rlr-button--large rlr-button--rounded rlr-button--brand"> Check All </a>
            </div>
          </div>
          <div class="row rlr-featured__cards">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
              <!-- Featured prodcut card -->
              <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
                <!-- Image -->
                <figure class="rlr-product-card__image-wrapper">
                  <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-01.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-01.jpg" data-sizes="auto" class="lazyload" alt="" />
                </figure>
                <!-- Card body -->
                <div class="rlr-product-card--featured__inner">
                  <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                  <div class="rlr-product-card--featured__body card-img-overlay">
                    <div class="rlr-product-card--featured__duration">
                      <p class="body">10 Days | 09 Nights</p>
                      <h4 class="type-h4">$895.50</h4>
                    </div>
                    <div class="rlr-product-detail-header__actions">
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                    </div>
                  </div>
                </div>
                <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
              </article>
              <!-- Summary -->
              <div class="rlr-product-card--featured__summary">
                <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
                <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-duration="725">
              <!-- Featured prodcut card -->
              <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
                <!-- Image -->
                <figure class="rlr-product-card__image-wrapper">
                  <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-02.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-02.jpg" data-sizes="auto" class="lazyload" alt="" />
                </figure>
                <!-- Card body -->
                <div class="rlr-product-card--featured__inner">
                  <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                  <div class="rlr-product-card--featured__body card-img-overlay">
                    <div class="rlr-product-card--featured__duration">
                      <p class="body">10 Days | 09 Nights</p>
                      <h4 class="type-h4">$895.50</h4>
                    </div>
                    <div class="rlr-product-detail-header__actions">
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                    </div>
                  </div>
                </div>
                <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
              </article>
              <!-- Summary -->
              <div class="rlr-product-card--featured__summary">
                <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
                <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-offset="350" data-aos-duration="750">
              <!-- Featured prodcut card -->
              <article class="rlr-product-card rlr-product-card--featured" itemscope itemtype="https://schema.org/Product">
                <!-- Image -->
                <figure class="rlr-product-card__image-wrapper">
                  <img itemprop="image" data-src="./assets/images/product-images/small/featured-thumb-03.jpg" data-srcset="./assets/images/product-images/small/featured-thumb-03.jpg" data-sizes="auto" class="lazyload" alt="" />
                </figure>
                <!-- Card body -->
                <div class="rlr-product-card--featured__inner">
                  <span class="rlr-badge rlr-badge--right rlr-badge-- rlr-badge--abs rlr-badge--abs-right"> 4.9 </span>
                  <div class="rlr-product-card--featured__body card-img-overlay">
                    <div class="rlr-product-card--featured__duration">
                      <p class="body">10 Days | 09 Nights</p>
                      <h4 class="type-h4">$895.50</h4>
                    </div>
                    <div class="rlr-product-detail-header__actions">
                      <div class="rlr-product-detail-header__button-wrapper">
                        <button type="button" class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--no-bg rlr-wishlist-button rlr-js-action-wishlist" aria-label="Save to Wishlist">
                          <i class="rlr-icon-font flaticon-heart-1"> </i>
                        </button>
                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                      </div>
                      <a href="./product-detail-page.html" class="btn rlr-button product-card-buttonrlr-button--medium rlr-button--rounded rlr-button--brand"> Explore </a>
                    </div>
                  </div>
                </div>
                <a href="./product-detail-page.html" class="rlr-product-card__anchor rlr-product-card__anchor--featured"></a>
              </article>
              <!-- Summary -->
              <div class="rlr-product-card--featured__summary">
                <h4 class="type-h6-semi-bold">Train Tour Skyline</h4>
                <p class="type-body">Check Out Daily Deals and Promotion on Hotels. Easy &amp; Fast Booking</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Logo Carousel -->
      <section id="features" class="rlr-section rlr-section__mb landding__plugin">
        <div class="container">
          <div class="rlr-logos-slider">
            <div class="rlr-logos-slider__items">
              <div class="slide-track">
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/trivago.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tripadvisor.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/expedia.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tailormade.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/all-inclusive.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/radisson.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/disneyland.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/national-geographic.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/lonelyplanet.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/tailormade.png" width="187px" height="64px" alt="partner logo" />
                </div>
                <div class="slide">
                  <img data-sizes="auto" class="lazyload" data-src="./assets/images/logos/trivago.png" width="187px" height="64px" alt="partner logo" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Sales and Support -->
      <section class="rlr-section">
        <div class="container">
<hr>

        <?php include("footer.php");  ?>