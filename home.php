<?php 
$home_slider = select_data("home_slider");
// print_r($home_slider);
?>
<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
  <div class="swiper-wrapper text-left">
    <?php foreach ($home_slider['values'] as $value) {

    ?>
      <div class="swiper-slide context-dark" data-slide-bg="<?php echo $value['file_path'] ?>">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row justify-content-center justify-content-xxl-start">
              <div class="col-md-10 col-xxl-6">
                <div class="slider-modern-box">
                  <h1 class="slider-modern-title">
                    <span data-caption-animate="<?php echo $value['content_animation'] ?>" data-caption-delay="0">
                      <?php echo  $value['slider_content']; ?>
                    </span>
                  </h1>
                  <p data-caption-animate="fadeInRight" data-caption-delay="400"></p>
                  <!--<div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="400"></a></div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php   } ?>
    

  </div>
  <!-- Swiper Navigation-->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination swiper-pagination-style-2"></div>
</section>


<!-- Icons Ruby-->
<section class="section section-md bg-default section-top-image">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
        <article class="box-icon-ruby">
          <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
            <div class="unit-left">
              <div class="box-icon-ruby-icon linearicons-leaf"></div>
            </div>
            <div class="unit-body">
              <h4 class="box-icon-ruby-title"><a href="#">Eco-Friendly & Reusable</a></h4>
            </div>
          </div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
        <article class="box-icon-ruby">
          <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
            <div class="unit-left">
              <div class="box-icon-ruby-icon linearicons-shovel"></div>
            </div>
            <div class="unit-body">
              <h4 class="box-icon-ruby-title"><a href="#">Innovative Fabrics & Durable</a></h4>
            </div>
          </div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
        <article class="box-icon-ruby">
          <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
            <div class="unit-left">
              <div class="box-icon-ruby-icon linearicons-sun"></div>
            </div>
            <div class="unit-body">
              <h4 class="box-icon-ruby-title"><a href="#">Dedicated Team</a></h4>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- Trending products-->
<section class="section section-md bg-default">
  <div class="container">
    <div class="row row-40 justify-content-center">

      <?php
      $new_arrival_details = select_data("new_arrival", "", " 1 ", " is_primary DESc ");
      $count = 1;
      // print_r( $new_arrival_details);

      foreach ($new_arrival_details['values'] as $value) {
        if ($value['is_primary'] == 1) {
      ?>
          <div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft" data-wow-delay="0s">
            <h2 class="text-primary">New Arrival</h2>
            <div class="product-banner"><img src="<?php echo $value['file_path']; ?>" alt="" width="570" height="570" />
            </div>
          </div>
          <?php
        } else {
          if ($count == 1) {
            $count++;
            // $image = $value[''];
          ?>
            <div class="col-md-5 col-lg-6">
              <div class="row row-30 justify-content-center">
              <?php
            }
              ?>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="<?php echo $value['file_path']; ?>" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="#">Add to cart</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="#"><?php echo $value['arrival_name']; ?> </a></h6>
                        <a class="button button-sm button-secondary button-ujarak" href="#">View</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
          <?php
        }
      }
          ?>


              </div>
            </div>
    </div>
  </div>
</section>


<!-- Best Sellers-->
<section class="section section-md bg-default">
  <div class="container">
    <div class="oh">
      <h2 class="wow slideInUp" data-wow-delay="0s">Best Sellers</h2>
    </div>
    <div class="row row-30 justify-content-center">
      <?php
      $best_seller_details = select_data("best_seller", "", " 1 ");
      $count = 1;
      // print_r( $new_arrival_details);

      foreach ($best_seller_details['values'] as $value) {
        $delay = 0;
        if ($count % 2 != 2) {
          $delay = .1;
        }
      ?>
        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay="<?php echo $delay; ?>s">
          <!-- Team Classic-->
          <article class="team-classic"><a class="team-classic-figure" href="#"><img src="<?php echo $value['file_path']; ?>" alt="" width="370" height="406" /></a>
            <div class="team-classic-caption">
              <h5 class="team-classic-name"><a href="#"><?php echo $value['best_seller_name']; ?></a></h5>
              <p class="team-classic-status"></p>
            </div>
          </article>
        </div>
      <?php         }          ?>
    </div>

  </div>
</section>


<td>
ksn code is not done</td>
