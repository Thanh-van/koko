<?php

/**
 * This is file template content
 */

if (!function_exists('Course_item')) {
  function Course_item($item)
  {
    ob_start();
?>

    <div id="col-80859636" class="col course-content medium-4 small-12 large-4">
      <div class="col-inner">
        <div class="img has-hover course-img x md-x lg-x y md-y lg-y" id="image_699388082">
          <a class="" href="<?php
                    echo _e($item['post_url'], TEXT_DOMAIN);
                    ?>">
            <div class="img-inner dark">
              <img width="900" height="500" src="<?php echo _e( $item['post_img'], TEXT_DOMAIN ) ?>"/>
            </div>
          </a>
          <style>
            #image_699388082 {
              width: 100%;
            }
          </style>
        </div>

        <div class="row course-box" id="row-234964482">
          <div id="col-1247858169" class="col small-12 large-12">
            <div class="col-inner">
              <div id="text-1896743751" class="text title_article_link">
                <p><a href="#"></a></p>
                <a href="
                  <?php
                    echo _e($item['post_url'], TEXT_DOMAIN);
                    ?>">
                  <h4>
                    <?php
                    echo _e($item['post_title'], TEXT_DOMAIN);
                    ?>
                  </h4>
                </a>
                <p><a href="#"></a><br /></p>
              </div>

              <p class="content">
                <?php
                echo _e($item['excerpt'], TEXT_DOMAIN);
                ?>
              </p>
              <div class="row opening" id="row-1130214544">
                <div id="col-298638390" class="col row-left medium-7 small-12 large-7">
                  <div class="col-inner">
                    <div class="row" id="row-1281352174">
                      <div id="col-1752985728" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                          <p>
                            <svg style="
                              width: 15px;
                              margin-right: 5px;
                              margin-bottom: -2px;
                            " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-alt" class="svg-inline--fa fa-calendar-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                            </svg>
                          </p>
                        </div>
                      </div>

                      <div id="col-1808214407" class="col medium-10 small-12 large-10">
                        <div class="col-inner text-left">
                          <p>
                            <?php
                              echo _e('Lịch khai giảng: ' . $item['opening_date'], TEXT_DOMAIN);
                            ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="col-928967134" class="col medium-5 small-12 large-5">
                  <div class="col-inner">
                    <div class="row" id="row-1105935015">
                      <div id="col-504254444" class="col small-12 large-12">
                        <div class="col-inner">
                          <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_98417331">
                            <div class="img-inner dark">
                              <img width="91" height="14" src="https://koko.edu.vn/wp-content/uploads/2022/07/tim.png" data-src="https://koko.edu.vn/wp-content/uploads/2022/07/tim.png" class="attachment-large size-large lazy-load-active" alt="" loading="lazy" />
                            </div>

                            <style>
                              #image_98417331 {
                                width: 100%;
                              }
                            </style>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="text-889384164" class="text number">
                <hr />
              </div>

              <div class="row author" id="row-294083586">
                <div id="col-1410467817" class="col row-left medium-7 small-12 large-7">
                  <div class="col-inner">
                    <div class="row" id="row-122933893">
                      <div id="col-390172820" class="col medium-3 small-12 large-3">
                        <div class="col-inner text-left">
                          <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2144193166">
                            <a class="" href="#">
                              <div class="img-inner dark">
                                <img width="300" height="500" src="<?php echo _e($item['avatar_url'] , TEXT_DOMAIN) ?>" alt="" loading="lazy" />
                              </div>
                            </a>
                            <style>
                              #image_2144193166 {
                                width: 100%;
                              }
                            </style>
                          </div>
                        </div>
                      </div>

                      <div id="col-362026996" class="col medium-8 small-12 large-8">
                        <div class="col-inner">
                          <p>
                            <a href="#">
                              <span>
                                <?php
                                echo _e('Giảng viên :', TEXT_DOMAIN);
                                ?>

                              </span><br />
                              <span>
                                <?php
                                  echo _e( $item['teacher']['user_firstname'] . ' ' . $item['teacher']['user_lastname'], TEXT_DOMAIN);
                                ?>
                              </span>
                            </a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="col-1225688407" class="col medium-5 small-12 large-5">
                  <div class="col-inner">
                    <a class="button primary" href="#header-newsletter-signup"  style="border-radius: 99px">
                      <span>
                        <?php
                        echo _e('Đăng ký ngay', TEXT_DOMAIN);
                        ?>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div id="text-4069912644" class="text number">
                <p>
                  <?php
                  echo _e('Số lượng: ' . $item['number'], TEXT_DOMAIN);
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
    return ob_get_clean();
  }
}
