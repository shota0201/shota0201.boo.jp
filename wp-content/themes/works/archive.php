<?php get_header(); ?>

  <div class="wrapper-sp wrapper-sp-category">
    <!-- news-->
    <div class="news-wrap js-fadein" id="news">
      <h2 class="news-ttl">
       <?php single_cat_title(); ?>
       <span class="news-ttl-sub">最新情報</span>
      </h2>
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
    </div>
  </div>

<?php get_footer(); ?>