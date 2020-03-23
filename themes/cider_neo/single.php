<?php get_header(); ?>
<div class="Single">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <header class="Single-Header">
        <?php the_title('<h1 class="Single-Title">', '</h1>'); ?>
        <h2 class="Single-Subtitle">
          <?php echo get_post_meta($post->ID, 'subtitle', true); ?>
        </h2>
        <div class="Single-Time">
          <?php if (get_the_date() != get_the_modified_date()) : ?>
            <span class="Single-Publish">公開：<?php echo esc_html(get_the_date()); ?></span>
            <time class="Single-Update">更新：<span datetime="<?php echo esc_attr(get_the_modified_date(DATE_ISO8601)); ?>"><?php echo esc_html(get_the_modified_date()); ?></span></time>
          <?php else : ?>
            <time class="Single-Publish">公開：<?php echo esc_html(get_the_date()); ?></time>
          <?php endif; ?>
        </div>
      </header>

      <aside class="header_ads">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6699082147104021" data-ad-slot="7387828569" data-ad-format="auto"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </aside>

      <div class="Layout-Single">
        <?php get_template_part('/components/editor'); ?>
        <article class="Article">
          <figure class="Article-Figure">
            <?php $post_title = get_the_title();
            the_post_thumbnail('full', array('class' => 'Image Article-Image', 'alt' => $post_title)); ?>
          </figure>
          <div class="Article-Content">
            <?php the_content(); ?>
          </div>
          <div class="Meta">
            <p class="Meta-Title">&#092; 同じタグの関連記事を探す &#047;</p>
            <div class="Meta-Tags">
              <?php the_category(' '); ?>
              <?php the_tags('', ''); ?>
            </div>
          </div>

          <aside class="Related" role="complementary">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-6699082147104021" data-ad-slot="4448209196"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </aside>

          <?php get_template_part('components/share'); ?>
          <?php comments_template(); ?>
        </article>
      </div>
  <?php endwhile;
  endif; ?>
</div>
<?php get_template_part('components/youtube'); ?>
<?php get_footer(); ?>