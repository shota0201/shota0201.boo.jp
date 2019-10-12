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
  </div>

<?php get_footer(); ?>