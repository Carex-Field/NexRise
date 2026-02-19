<?php include(get_template_directory().'/includes/meta.php');
$pageid = "case"; ?>

<?php get_header(); ?>
<main>
  <!-- FV -->
  <section class="c-fv1">
    <div class="inner">
      <h2 class="c-fv1__ttl">導入事例</h2>
    </div>
  </section>
  <!-- 一覧 -->
  <section class="p-case__list">
    <div class="inner">
      <!-- フィルター -->
      <?php
        $terms = get_terms([
          'taxonomy' => 'case_category',
          'hide_empty' => true,
        ]);
      ?>
      <div class="p-case__filter">
        <button class="p-case__filter__btn is-active" data-filter="all">すべて</button>
        <?php foreach ($terms as $term) : ?>
        <button
          class="p-case__filter__btn"
          data-filter="<?php echo esc_attr($term->slug); ?>">
          <?php echo esc_html($term->name); ?>
        </button>
        <?php endforeach; ?>
      </div>
      <div class="p-case__grid">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post();
            $term_slugs = wp_get_post_terms(get_the_ID(), 'case_category', ['fields' => 'slugs']);
           ?>
            <article class="p-case__card c-card2" data-category="<?php echo esc_attr(implode(' ', $term_slugs)); ?>">
              <a href="<?php the_permalink(); ?>" class="c-card2__link">
                <div class="c-card2__img">
                  <img src="/wp-content/themes/wp/assets/images/case/card_img.png" alt="<?php the_title(); ?>">
                </div>
                <div class="c-card2__body">
                  <div class="c-card2__category">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'case_category');
                    if ($terms && !is_wp_error($terms)) :
                      foreach ($terms as $term) :
                        echo '<span>' . esc_html($term->name) . '</span>';
                      endforeach;
                    endif;
                    ?>
                  </div>
                  <h3 class="c-card2__ttl">
                    <?php the_title(); ?>
                  </h3>
                    <?php $result_number = get_field('result_number'); ?>
                    <div class="c-card2__result">
                      <?php if($result_txt = get_field('result_txt')) :
                        echo $result_txt;
                      endif; ?>
                      <span class="c-card2__result__number" data-number="<?php echo esc_attr($result_number); ?>">
                        0
                      </span>
                      <?php echo get_field('result_unit'); ?>
                    </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- CTA -->
  <section class="c-cta1">
    <div class="inner">
      <p class="c-cta1__txt">
        まずはお気軽にご相談ください
      </p>
      <a href="<?php echo home_url('/contact/'); ?>" class="c-cta1__btn">
        お問い合わせはこちら
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>