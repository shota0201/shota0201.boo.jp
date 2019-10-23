  <?php get_header(); ?>

  <!-- slider -->
  <ul class="js-slider">
    <?php $header_images = get_uploaded_header_images(); ?>
    <?php foreach ($header_images as $key => $value): ?>
    <?php $img_id = custom_header_get_attachment_id_by_url($value['url']); ?>
    <?php $img_meta = get_post($img_id); ?>
    <li>
      <?php if($img_meta->post_content): ?>
        <a class="slider-link" href="<?php echo esc_html($img_meta->post_content); ?>">
          <?php endif; ?>
            <img src="<?php echo $value['url']; ?>" alt="<?php echo esc_html($img_meta->post_title); ?>">
          <?php if($img_meta->post_content): ?>
        </a>
      <?php endif; ?>
    </li>
    <?php endforeach; ?>
  </ul>

  <div class="wrapper-content">
    <!-- event -->
    <section class="event-wrap js-fadein">
      <div class="event-block event-block-sp" id="ABOUT">
        <h2 class="event-ttl">INTRODUCTION</h2>
        <div class="event-img"><a href="/category/introduction/"><img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top-magazine.jpg" alt=""></a></div>
        <div class="event-textBlock">
          <p class="event-textBlock-ttl">INTRODUCTION</p>
          <p class="event-textBlock-lead"><a class="link-gold" href="/category/introduction/">メインタイトル</a></p>
          <p class="event-textBlock-name">サブタイトル</p>
        </div>
      </div>
      <div class="event-block" id="collection">
        <h2 class="event-ttl">GOURMET</h2>
        <div class="event-img"><a href="/category/gourmet/"><img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top-collection.jpg" alt=""></a></div>
        <div class="event-textBlock">
          <p class="event-textBlock-ttl">GOURMET</p>
          <p class="event-textBlock-lead"><a class="link-gold" href="/category/gourmet/">メインタイトル</a></p>
          <p class="event-textBlock-name">サブタイトル</p>
        </div>
      </div>
    </section>
    <!-- news -->
    <section class="news-wrap js-fadein" id="news">
      <h2 class="news-ttl">NEWS<span class="news-ttl-sub">最新情報</span></h2>
      <ul class="news-area">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <li class="news-block news-block-sp">
            <div class="news-img">
              <a class="news-link" href="<?php echo get_permalink( $id ); ?>">
                <img class="logo-img" src="<?php the_post_thumbnail_url('full'); ?>">
              </a>
            </div>
            <div class="news-textBlock">
              <time class="event-textBlock-date" datetime="<?= get_the_date('Y-m-d') ?>"><?php the_time('Y.m.d'); ?></time>
              <p class="news-textBlock-ttl">
                <?php the_category(); ?><?php echo $cat_name; ?>
              </p>
              <p class="news-textBlock-lead">
                <a class="news-link link-gold" href="<?php echo get_permalink( $id ); ?>">
                  <?php the_title(); ?>
                </a>
              </p>
              <p class="news-textBlock-text">
                <?php echo get_field('news_subtitle'); ?>
              </p>
            </div>
          </li>
        <?php endwhile; endif; ?>
      </ul>
    </section>
    <!-- contact -->
    <section class="contact-wrap js-fadein" id="contact">
      <div role="form" class="wpcf7-home" id="wpcf7-f57-p59-o1" lang="ja" dir="ltr">
        <div class="screen-reader-response"></div>
        <form action="/contact/#wpcf7-f57-p59-o1" method="post" class="wpcf7-form" novalidate="novalidate">
          <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="57">
            <input type="hidden" name="_wpcf7_version" value="5.1.1">
            <input type="hidden" name="_wpcf7_locale" value="ja">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f57-p59-o1">
            <input type="hidden" name="_wpcf7_container_post" value="59">
            <input type="hidden" name="g-recaptcha-response" value="">
          </div>
          <div class="contact-body">
            <h2 class="contact-ttl">CONTACT<span class="news-ttl-sub">お問い合わせ</span></h2>
            <p>  <label>Name<span class="must">*必須</span><br>
            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></label></p>
            <p>  <label>Mail<span class="must">*必須</span><br>
            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span><br>
            </label></p>
            <p>  <label>Tell<br>
            <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span><br>
            </label></p>
            <p>  <label>Message<br>
            <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="お問い合わせ内容をご記入ください"></textarea></span><br>
            </label></p>
            <div class="c-btn-wrap contact-btn-wrap">
            <button type="submit" name="action" value="send" class="c-btn mod-radius contact-btn">送信する</button>
            </div>
            <div class="wpcf7-response-output wpcf7-display-none"></div>
          </div>
        </form>
      </div>
    </section>
  </div><!-- wrapper-content -->

<?php get_footer(); ?>